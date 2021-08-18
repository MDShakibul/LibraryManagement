<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class HomeController extends Controller
{
    public function index(){
        return view('add_books');
    }

    public function search_book(){
        return view('search_book');
    }

    public function add_book(Request $request){
        $data=array();
        $data['library']=$request->library;
        $data['depertment']=$request->depertment;
        $data['language']=$request->language;
        $data['book_type']=$request->book_type;
        $data['book_title']=$request->book_title;
        $data['isbn']=$request->isbn;
        $data['authors']=$request->authors;
        $data['publisher']=$request->publisher;
        $data['publish_date']=$request->publish_date;
        $data['version']=$request->version;
        $data['no_of_page']=$request->no_of_page;
        $data['category']=$request->category;
        $data['quantity']=$request->quantity;
        $data['price']=$request->price;
        $data['condition']=$request->condition;
        $data['location']=$request->location;
        $data['supplier']=$request->supplier;
        $data['date_recived']=$request->date_recived;
        $data['description']=$request->description;
        
        
        
        $image=$request->file('image');
        if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image-> getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            if($success){
                $data['image']=$image_url;
                DB::table('book')->insert($data);
                Session::put('message','Book added Successfully');
                return Redirect::to('/add_book');
            }
       }

       $e_book=$request->file('image2');
        if($$e_book){
            $image_name2=hexdec(uniqid());
            $ext=strtolower($image2-> getClientOriginalExtension());
            $image_full_name2=$image_name2.'.'.$ext;
            $upload_path2='image2/';
            $image_url2=$upload_path2.$image_full_name2;
            $success=$image2->move($upload_path,$image_full_name2);

            if($success){
                $data['image2']=$image_url2;
                DB::table('book')->insert($data);
                Session::put('message','Book added Successfully');
                return Redirect::to('/add_book');
            }
       }


       $data['image']='';
       DB::table('book')->insert($data);
       Session::put('message','book added Successfully without image');
       return Redirect::to('/');
    }

    public function book_list(){
        $book_list = DB::table('book')->get();
        return view('book_list')->with('book_list',$book_list);
    }

    public function issue_book(Request $request){
        $data=array();
        $data['book']=$request->book;
        $data['user_id']=$request->user_id;
        $data['name']=$request->name;
        $data['issuedate']=$request->issuedate;
        $data['duedate']=$request->duedate;

        DB::table('issue')->insert($data);
       Session::put('message','book added Successfully without image');
       return Redirect::to('/');
    }
}
