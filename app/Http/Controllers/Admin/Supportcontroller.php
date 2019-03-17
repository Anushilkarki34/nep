<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\C_support;
use DB;
class Supportcontroller extends Controller
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
        
        $data=DB::table('c_supports')->select(['C_id','C_title','C_detail','file'])->get();
        return view('admin.support.view',['data'=>$data]);
    }
public function add($C_id)
    { 
      return view('admin.support.add');
    }
public function save(Request $request,$C_id)
   {
    $supp=new C_support();
    $titlee=$request->input('C_title');
   $detail=$request->input('C_detail'); 
   $supp->B_title=$titlee;
   $supp->B_detail=$detail;
   if($request->hasfile('file'))
    {
     $filename=$request->file->getClientOriginalName();
    $request->file('file')->storeAs('public/upload',$filename);
    $supp->file=$filename;
  
    $supp->save();
    }
return redirect()->route('adminsupport');
  }
 
      public function del($C_id)
        {
            DB::delete('delete from blogs where B_id = ? ',[$B_id]);
            return redirect()->route('adminsupport');
        }
   
}
