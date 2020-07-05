<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    /**
     * Display of listing of the resource
     * 
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
        $pertanyaan=Pertanyaan::all();
           return view('index',compact('pertanyaan'));
       }
   
       public function back(){
        return redirect ('/');
       }
       
       public function create(){
        return view('create');
       }
   
       public function insert(Request $request){
           $pertanyaan=new Pertanyaan();
           $pertanyaan->id=$request->get('id');
           $pertanyaan->judul=$request->get('judul');
           $pertanyaan->isi=$request->get('isi');
           $pertanyaan->save();
        return redirect ('/');
       }
   
       public function read($id){
        $pertanyaan=Pertanyaan::find($id);
        return view('read',compact('pertanyaan'));
       }
}
