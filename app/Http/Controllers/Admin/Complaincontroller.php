<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Complain;
use DB;
class Complaincontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=DB::table('complains')->select(['Co_id','Co_title','Co_detail','Co_by'])->get();
        return view('admin.complain.view',['data'=>$data]);
    }


      public function del($Co_id)
        {
            DB::delete('delete from complains where Co_id = ? ',[$Co_id]);
            return redirect()->route('admincomplain');
        }
   
}
