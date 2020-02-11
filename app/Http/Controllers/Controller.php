<?php

namespace App\Http\Controllers;

//use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function Add(){
    	return view('add');
    }
    public function Store(Request $request){
        $validator = $request->validate([
            'mobile' => 'required|unique:students|max:11',
            'email' => 'unique:students|required',
            'check'=> 'required',
            'image' => 'mimes:jpeg,jpg,png,PNG'
        ]);
        $data=array();
        $data['fname']=$request->fname;
        $data['lname']=$request->lname;
        $data['bday']=$request->bday;
        $data['gender']=$request->gender;
        $data['mobile']=$request->mobile;
        $data['email']=$request->email;
        $data['city']=$request->city;
        $image=$request->file('image');
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/frontend/image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;

        $check=$request->check;
        if (isset($check)){
            $post = DB::table('students')->insert($data);
            if ($post) {
                return redirect()->route('list');
            }
        }
        else{
            $post=DB::table('students')->insert($data);
            if ($post){
                return redirect()->route('list');
            }
        }
    }


    public function List(){
        $post=DB::table('students')->get();
        return view('list',compact('post'));
    }
    public function Details($id){
        $post=DB::table('students')->select('students.*')->where('id',$id)->first();
        return view('details')->with('pt',$post);
    }
    public function Edit($id){
        $post=DB::table('students')->select('students.*')->where('id',$id)->first();
        return view('edit')->with('ed',$post);
    }
    public function Update(Request $req,$id){
        $validator = $req->validate([
            'mobile' => 'required|max:11',
            'email' => 'required',
            'check'=> 'required'
        ]);
        $data=array();
        $data['fname']=$req->fname;
        $data['lname']=$req->lname;
        $data['bday']=$req->bday;
        $data['gender']=$req->gender;
        $data['mobile']=$req->mobile;
        $data['email']=$req->email;
        $data['city']=$req->city;
        $check=$req->check;
        if (isset($check)){
            $post = DB::table('students')->where('id',$id)->update($data);
            if ($post) {
                return redirect()->route('details');
            }
        }
        else{
            $post=DB::table('students')->where('id',$id)->update($data);
            if ($post){
                return redirect()->route('details');
            }
        }
    }
    public function Delete($id){
        $post=DB::table('students')->where('id',$id)->first();
        $image=$post->image;
        $delete=DB::table('students')->where('id',$id)->delete();
        if ($delete) {
            unlink($image);
            return Redirect()->back();
        }
    }

    public function Contact(){
        $post=DB::table('students')->get();
        return view('contact',compact('post'));
    }

}
