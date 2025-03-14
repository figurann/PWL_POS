<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // Example of insert operation
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack / Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert Data Baru Berhasil!';

        // Example of update operation
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update Data Berhasil! Jumlah Data yang diupdate: ' . $row . ' Baris.';

        // Example of delete operation
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete Data Berhasil! Jumlah Data yang dihapus: ' . $row . ' Baris.';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
