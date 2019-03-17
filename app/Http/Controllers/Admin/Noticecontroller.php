<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notice;
use DB;
class Noticecontroller extends Controller
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
        
        $data=DB::table('notices')->select(['N_id','N_title','Notice'])->get();
        return view('admin.notice.view',['data'=>$data]);
    }
public function add()
    { 
      return view('admin.notice.add');
    }
public function save(Request $request)
   {
    $not=new Notice();
    $titlee=$request->input('N_title');
   $detail=$request->input('Notice'); 
   $not->N_title=$titlee;
   $not->Notice=$detail;
  $not->save();  
return redirect()->route('adminnotice');
  }
  public function edit($N_id)
   {
       $data=DB::table('notices')->select(['N_id','N_title','Notice'])->where('N_id','=',$N_id)->get();
       return view('admin.notice.edit',['data'=>$data]);
   }
   public function update(Request $request,$N_id)
      {
        $titlee=$request->input('N_title');
        $detail=$request->input('Notice'); 
      DB::update('update notices set N_title = ? , Notice = ? where N_id = ?',[$titlee,$detail,$N_id]);
     return redirect()->route('adminnotice');   
      }
      public function del($N_id)
        {
            DB::delete('delete from notices where N_id = ? ',[$N_id]);
            return redirect()->route('adminnotice');
        }
   
}
