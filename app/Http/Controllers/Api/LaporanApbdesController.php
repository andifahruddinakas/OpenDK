<?php

namespace App\Http\Controllers\Api;


use Exception;
use ZipArchive;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Imports\ImporLaporanApbdes;
use App\Http\Controllers\Controller;

class LaporanApbdesController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Tambah dan Ubah Data Laporan APBDes Sesuai OpenSID
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function storedata(Request $request)
    {
        $this->validate($request, [
            'file' => 'file|mimes:zip|max:51200',
        ]);

        try {
            // Upload file zip temporary.
            $file = $request->file('file');
            $file->storeAs('temp', $name = $file->getClientOriginalName());

            // Temporary path file
            $path = storage_path("app/temp/{$name}");
            $extract = storage_path('app/temp/apbdes/');

            // Ekstrak file
            $zip = new ZipArchive;
            $zip->open($path);
            $zip->extractTo($extract);
            $zip->close();

            // Proses impor excell
            (new ImporLaporanApbdes())
                ->queue($extract . Str::replaceLast('zip', 'xlsx', $name));
            
            return response()->json([
                'status'    => 'success',
                'message'   => 'Proses sync data Laporan APBDes OpenSID sedang berjalan',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e->getMessage(),
            ]);
        }
    }
}
