<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Album;

class GalleryController extends Controller
{
    //List galleries
    public function index(){
        $albums = Album::with('Photos')->get();
        return view('albums.index')->with('albums',$albums);
    }
    //create form
    public function create(){
        return view ('albums.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'cover_image'=>'image|max:1999'
        ]);

        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        


        //create new filename
         $filenameToStore= $filename.'_'.time().'.'.$extension;
         
         $path=$request->file('cover_image')->storeAs('public/album_covers',$filenameToStore);
        
         
         $album=new Album;
         $album->name = $request->input('name');
         $album->description = $request->input('description');
         $album->cover_image = $filenameToStore;
 
         $album->save();
         return redirect('/')->with('success','Albumn created');
         
        }
        public function show($id){
            $album=Album :: with('Photos')->find($id);
            $album = DB::table('albums')->select('cover_image')->get();
            return view('albums.show')->with('album',$album);

        }

    
}
