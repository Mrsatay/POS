<?php

namespace App\Http\Controllers;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
    public function create(){
        return view('kategori.create');
    }
    public function createprocess(Request $request){
        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);return redirect('/kategori');
    }
    public function updateprocess(Request $request)
    {
        $kategori_kode = $request->kategori_kode;
        
        $kategori = KategoriModel::where('kategori_kode', $kategori_kode)->first();

        if ($kategori) {
            $kategori->update([
                'kategori_nama' => $request->kategori_nama,
            ]);
            return redirect('/kategori')->with('success', 'Kategori berhasil diperbarui.');
        } else {
            return redirect('/kategori')->with('error', 'Kategori tidak ditemukan.');
        }
    }

    public function deleteprocess(Request $request)
    {
        $kategori_kode = $request->kategori_kode;

        $kategori = KategoriModel::where('kategori_kode', $kategori_kode)->first();

        if ($kategori) {
            $kategori->delete();
            return redirect('/kategori')->with('success', 'Kategori berhasil dihapus.');
        } else {
            return redirect('/kategori')->with('error', 'Kategori tidak ditemukan.');
        }


    
    }

}
