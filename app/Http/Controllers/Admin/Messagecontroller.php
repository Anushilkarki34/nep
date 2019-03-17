<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use DB;
class Messagecontroller extends Controller
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
        
        $data=DB::table('messages')->select(['M_id','M_to','M_from','Message'])->get();
        return view('admin.message.view',['data'=>$data]);
    }
public function add()
    { 
      return view('admin.message.add');
    }
public function save(Request $request)
   {
    $msg=new Message();
    $to=$request->input('M_to');
   $from=$request->input('M_from');
   $cont=$request->input('Message'); 
   $msg->M_to=$to;
   $msg->M_from=$from;
   $msg->Message=$cont;
    $msg->save(); 
return redirect()->route('adminmsg');
  }
  public function edit($M_id)
   {
       $data=DB::table('messages')->select(['M_id','M_to','M_from','Message'])->where('M_id','=',$M_id)->get();
       return view('admin.message.edit',['data'=>$data]);
   }
   public function update(Request $request,$M_id)
      {
    
    $to=$request->input('M_to');
   $from=$request->input('M_from');
   $cont=$request->input('Message'); 
 DB::update('update messages set M_to = ? , M_from = ? , Message = ? where M_id = ?',[$to,$from,$cont,$M_id]);
return redirect()->route('adminmsg');   
      }
      public function del($M_id)
        {
            DB::delete('delete from messages where M_id = ? ',[$M_id]);
            return redirect()->route('adminmsg');
        }
   
}
