<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Pagecontroller extends Controller
{
 public function blog()
    {
        $data=DB::table('blogs')->select(['B_id','B_title','B_detail','B_image'])->get();
        return view('blog',['data' => $data]);
    }   
    public function frontpage()
       {
           return view('welcome1');
       }
       public function showcase()
        {
            $data=DB::table('showcases')->select(['S_id','S_name','S_link','S_image'])->get();
            return view('clients',['data' => $data]);
        }
        public function resouce()
          {
              $data=DB::table('trainings')->select(['T_file','T_id'])->get();
              return view('resource',['data' => $data]);
          }
          public function blogview($B_id)
            {
                $data=DB::table('blogs')->select(['B_id','B_title','B_detail','B_image'])->where('B_id','=',$B_id)->get();
                $dat=DB::table('blogs')->select(['B_id','B_title','B_detail','B_image'])->get();
                return view('blogview',['data' => $data,'dat' => $dat]);
            }
}
