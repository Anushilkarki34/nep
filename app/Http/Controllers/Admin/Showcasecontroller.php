<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Showcase;
use DB;
class Showcasecontroller extends Controller
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
        
        $data=DB::table('showcases')->select(['S_id','S_name','S_link','S_image'])->get();
        return view('admin.showcase.view',['data'=>$data]);
    }
public function add()
    { 
      return view('admin.showcase.add');
    }
public function save(Request $request)
   {
    $this->validate($request,[
        'S_name' => 'required',
        'S_link' => 'required',
        'S_image' => 'image|nullable|max:1999'
       ]);
    $blog=new Showcase();
    $name=$request->input('S_name');
   $link=$request->input('S_link'); 
   $blog->S_name=$name;
   $blog->S_link=$link;

   if($request->hasfile('S_image'))
    {
     $filenamewithext=$request->file('S_image')->getClientOriginalName();
    $filename=pathinfo($filenamewithext,PATHINFO_FILENAME);
    $extension=$request->file('S_image')->getClientOriginalExtension();
    $filenametostore=$filename.'_'.time().'.'.$extension;
   $path=$request->file('S_image')->storeAs('public/showcase',$filenametostore);
    }
    else{
        $filenametostore = 'an.jpg';
    }
  $blog->S_image=$filenametostore;
  
    $blog->save();
    
return redirect()->route('adminshowcase');
  }
  public function edit($S_id)
   {
       $data=DB::table('showcases')->select(['S_id','S_name','S_link','S_image'])->where('S_id','=',$S_id)->get();
       return view('admin.showcase.edit',['data'=>$data]);
   }
   public function update()
      {
          //
      }
      public function del($S_id)
        {
            DB::delete('delete from showcases where S_id = ? ',[$S_id]);
            return redirect()->route('adminshowcase');
        }
   
}
