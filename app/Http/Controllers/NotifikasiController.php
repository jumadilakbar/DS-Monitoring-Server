<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotifikasiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table notifikasi
    	$list_data = DB::table('notifikasi')->get();
 
    	// mengirim data notifikasi ke view index
    	return view('admin.notifikasi.index',['list_data' => $list_data]);
 
    }
    public function index_pegawai()
    {
    	// mengambil data dari table notifikasi
    	$list_data = DB::table('notifikasi')->get();
 
    	// mengirim data notifikasi ke view index
    	return view('pegawai.notifikasi.index',['list_data' => $list_data]);
 
    }
    public function tambah()
    {
    	return view('admin.notifikasi.add');
 
    }

    public function store(Request $request)
    {
        // insert data ke table users
        DB::table('notifikasi')->insert([
            'email' => $request->email,
            'smtp' => $request->smtp,
            'port' => $request->port,
            'penerima_sms' => $request->penerima_sms,
            'alarm' => $request->alarm,
            
        ]);
        // alihkan halaman ke halaman 
        return redirect('/admin/notifikasi');
    
    }
    public function edit($id_notifkasi)
    {
        $notifikasi = DB::table('notifikasi')->where('id_notifkasi',$id_notifkasi)->get();
        return view('admin.notifikasi.edit',['notifikasi' => $notifikasi]);
    
    }
    public function detail($id_notifkasi)
    {
        $notifikasi = DB::table('notifikasi')->where('id_notifkasi',$id_notifkasi)->get();
        return view('admin.notifikasi.detail',['notifikasi' => $notifikasi]);
    
    }
    public function update(Request $request)
    {
        // update data notifikasi
        DB::table('notifikasi')->where('id_notifkasi',$request->id_notifkasi)->update([
            'email' => $request->email,
            'smtp' => $request->smtp,
            'port' => $request->port,
            'penerima_sms' => $request->penerima_sms,
            'alarm' => $request->alarm,
        ]);
        
        return redirect('/admin/notifikasi');
    }

    public function hapus($id_notifkasi)
    {
        // Hapus Data notifikasi by id
        DB::table('notifikasi')->where('id_notifkasi',$id_notifkasi)->delete();
        return redirect('/admin/notifikasi');
    }
}
