<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;
use DB;
class Reviewcontroller extends Controller
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
        
        $data=DB::table('reviews')->select(['R_id','Review'])->get();
        return view('admin.review.view',['data'=>$data]);
    }


      public function del($R_id)
        {
            DB::delete('delete from reviews where R_id = ? ',[$R_id]);
            return redirect()->route('adminreview');
        }
   
}
