<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use DB;
class Blogcontroller extends Controller
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
        
        $data=DB::table('blogs')->select(['B_id','B_title','B_detail','B_image'])->get();
        return view('admin.blog.view',['data'=>$data]);
    }
public function add()
    { 
      return view('admin.blog.add');
    }
public function save(Request $request)
   {
       
       $this->validate($request,[
        'B_title' => 'required',
        'B_detail' => 'required',
        'B_image' => 'image|nullable|max:1999'
       ]);
    $blog=new Blog();
    $titlee=$request->input('B_title');
   $detail=$request->input('B_detail'); 
   if($request->hasfile('B_image'))
    {
     $filenamewithext=$request->file('B_image')->getClientOriginalName();
     $filename=pathinfo($filenamewithext,PATHINFO_FILENAME);
     $extension=$request->file('B_image')->getClientOriginalExtension();
     $filenametostore=$filename.'_'.time().'.'.$extension;
    $path=$request->file('B_image')->storeAs('public/upload',$filenametostore);
     }
     else
     {
         $filenametostore='an.jpg';
     }
    $blog->B_image=$filenametostore;
    $blog->B_title=$titlee;
    $blog->B_detail=$detail;
    $blog->save();
return redirect()->route('adminblog');
  }
  public function edit($B_id)
   {
       $data=DB::table('blogs')->select(['B_id','B_title','B_image','B_detail'])->where('B_id','=',$B_id)->get();
       return view('admin.blog.edit',['data'=>$data]);
   }
   public function update()
      {
          //
          
      }
      public function del($B_id)
        {
            DB::delete('delete from blogs where B_id = ? ',[$B_id]);
            return redirect()->route('adminblog');
        }
   
}
