<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    //
    //
    public function index()
    {
    	// mengambil data dari table user
    	$list_data = DB::table('report')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin.report.index',['list_data' => $list_data]);
 
    }
}
 