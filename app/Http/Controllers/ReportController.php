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
    	$list_data = DB::table('data_host_monitoring')->orderBy('time_mtr', 'DESC')->get(); 
    	return view('admin.report.index',['list_data' => $list_data]);
 
    }
    public function index_pegawai()
    {
    	$list_data = DB::table('report')->get(); 
    	return view('pegawai.report.index',['list_data' => $list_data]);
 
    }
}
 