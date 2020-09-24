<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostController extends Controller
{
    // 
    //
    public function index()
    {
    	// mengambil data dari table Host
    	$list_data = DB::table('host')->get();
 
    	// mengirim data Host ke view index
    	return view('admin.host.index',['list_data' => $list_data]);
 
    }
    public function tambah()
    {
    	return view('admin.host.add');
 
    }

    public function store(Request $request)
    {
        // insert data ke table users
        DB::table('host')->insert([
            'Hostname' => $request->Hostname,
            'ip_address' => $request->ip_address,
            'port' => $request->port,
            'prm_cpu' => $request->cpu,
            'prm_ram' => $request->ram,
            'prm_disk' => $request->disk,
            
        ]);
        // alihkan halaman ke halaman 
        return redirect('/admin/host');
    
    }
    public function edit($id_host)
    {
        $host = DB::table('host')->where('id_host',$id_host)->get();
        return view('admin.host.edit',['host' => $host]);
    
    }
    public function detail($id_host)
    {
        $host = DB::table('host')->where('id_host',$id_host)->get();
        return view('admin.host.detail',['host' => $host]);
    
    }
    public function update(Request $request)
    {
        // update data host
        DB::table('host')->where('id_host',$request->id_host)->update([
            'Hostname' => $request->Hostname,
            'ip_address' => $request->ip_address,
            'port' => $request->port,
            'prm_cpu' => $request->cpu,
            'prm_ram' => $request->ram,
            'prm_disk' => $request->disk,
        ]);
        
        return redirect('/admin/host');
    }

    public function hapus($id_host)
    {
        // Hapus Data Host by id
        DB::table('host')->where('id_host',$id_host)->delete();
        return redirect('/admin/host');
    }
}
