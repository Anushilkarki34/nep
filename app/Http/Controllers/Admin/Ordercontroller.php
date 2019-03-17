<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use DB;
class Ordercontroller extends Controller
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
        
        $data=DB::table('orders')->select(['Or_id','Or_qty','Or_name'])->get();
        return view('admin.order.view',['data'=>$data]);
    }


      public function del($Or_id)
        {
            DB::delete('delete from orders where Or_id = ? ',[$Or_id]);
            return redirect()->route('adminorder');
        }
   
}
