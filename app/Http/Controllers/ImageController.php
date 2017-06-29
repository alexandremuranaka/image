<?php

namespace App\Http\Controllers;
use View;
use App\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Html;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Images::first()->get();
        return view('admin.images.index',['images' => $images]);
    }

    public function jindex()
    {
      $images = Images::first()->get();
      return response()->json($images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*
      $this->validate($request, [
        'alt' => 'required',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      */
      $image = $request->img;
      $image_ext = $image->getClientOriginalExtension();
      $image_src = time(). '.' . $image_ext;
      if($request->alt != null || $request->alt != ''){
        $image_alt = $request->alt;
      }else {
        $image_alt = $image->getClientOriginalName();
        $image_alt = str_replace('.' . $image_ext, '', $image_alt);
      }

      $image_path = public_path('assets/images/full/' . $image_src);
      $image_thumb_path = public_path('assets/images/thumb/' . $image_src);

      Image::make($image->getRealPath())->save($image_path);
      Image::make($image->getRealPath())->resize(300, 200)->save($image_thumb_path);

      $img = new Images;
      $img->alt = ''.$image_alt.'';
      $img->src = ''.$image_src.'';
      $img->save();
      return redirect()->action('ImageController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $img = Images::where('id','=',$id)->first();

        $img->delete();
        return redirect()->action('ImageController@index');
    }
}
