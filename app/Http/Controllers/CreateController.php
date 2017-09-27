<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artical;
use DB;

class CreateController extends Controller
{
	public function home()
	{
		$articales=Artical::get();
		return view('home',['articales'=>$articales]);
	}
	public function add(Request $req)
	{
      $var1=$req->input('title');
      $var2=$req->input('description');
        
      $data=array('title'=>$var1,'description'=>$var2);
      DB::table('articals')->insert($data);
      echo 'successfull inserted the data'; 
      return redirect('/');
    }  
    public function update()
    {
       
     return view('update');  
    } 
     public function edit($id)
     {
     	$this->validate($request,[
        'title' => 'required',
         'description' => 'required',        
         ]);
     	Artical::where('id'.$id)-update();
     	$articales= new Artical;
     	$articales->title=$request->input('title');
     	$articales->description=$request->input('description');
     	$articales->save();
         return redirect('/');
     }
   
    public function read($id)
    {
      $articales=Artical::find($id);
		return view('read',['articales'=>$articales]);
    } 
    public function delete($id)
    {
      Artical::where('id',$id)->delete();
      return redirect('/');
    } 
  
}
