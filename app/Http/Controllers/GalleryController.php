<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use DB;

class GalleryController extends Controller
{
    public function index(){

        $gallery = DB::table('gallery')->get();

        return view('gallery.index', compact('gallery'));
    }

    public function create(){

        return view('gallery.create');
    }

    public function store(Request $request){
        $data = array();
        $data['name'] = $request->photo_name ;
        $data['description'] = $request->photo_description;
        $image = $request->file('photo_gallery');

        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name .'.' . $ext;
            $upload_path = 'media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $data['photo'] = $image_url;
            $gallery = DB::table('gallery')->insert($data);
            return redirect()->route('gallery.index')->with('success', 'Photo Saved');
        }
    }

    public function edit($id){
        $galleries = DB::table('gallery')->where('id', $id)->first();
        return view('gallery.edit', compact('galleries'));
    }

    public function update(Request $request, $id){

        $old_photo = $request->photo_gallery_old;

        $data = array();
        $data['name'] = $request->photo_name ;
        $data['description'] = $request->photo_description;
        $image = $request->file('photo_gallery');

        if($image){
            unlink($old_photo);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name .'.' . $ext;
            $upload_path = 'media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            $data['photo'] = $image_url;
            $gallery = DB::table('gallery')->where('id', $id)->update($data);
            return redirect()->route('gallery.index')->with('success', 'Photo Updated');
        }
    }
}
