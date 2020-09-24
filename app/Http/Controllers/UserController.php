<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table user
    	$list_user = DB::table('users')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin.user.index',['list_user' => $list_user]);
 
    }
    public function tambah()
    {
    	return view('admin.user.add');
 
    }

    public function store(Request $request)
    {
        // insert data ke table users
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password) ,
            'state' => $request->state,
            'role' => $request->role,
            
        ]);
        // alihkan halaman ke halaman 
        return redirect('/admin/user');
    
    }
    public function edit($id)
    {
        $user = DB::table('users')->where('id',$id)->get();
        return view('admin.user.edit',['user' => $user]);
    
    }
    public function update(Request $request)
    {
        // update data users
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'state' => $request->state,
            'role' => $request->role,
        ]);
        
        return redirect('/admin/user');
    }

    public function hapus($id)
    {
        // Hapus Data User by id
        DB::table('users')->where('id',$id)->delete();
        return redirect('/admin/user');
    }
}
