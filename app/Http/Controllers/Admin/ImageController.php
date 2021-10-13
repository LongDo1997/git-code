<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;

use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $data=Image::filter()->paginate($limit);
        $cat=Category::where('type',2)->where('status',1)->get();
        return view('admin.image.index',compact('data','cat'));
    }
    public function indexAjax(){
        $data=Image::filter()->get();
        return view('admin.image.indexAjax',compact('data'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=Category::where('type',2)->get();
        return view('admin.image.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $request->merge(['status'=>$request->status=='on'?1:0]);
        if($request->has('my_file')){
            $request -> merge(['images'=> substr($request->my_file,strpos($request->my_file,'public/uploads'))]);
        }
        if(Image::create($request->only(['cat_id','images','caption','status']))){
            return  redirect()->back()->with('yes','Success');
        }
        return  view('admin.404');
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
        $cat=Category::where('type',2)->where('status',1)->get();
        $data=Image::find($id);
        if($data){
            return view('admin.image.update',compact('data','cat'));
        }
        return  view('admin.404');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, $id)
    {
        $img=Image::find($id);
        $request->merge(['status'=>$request->status=='on'?1:0]);
        if($request->has('my_file')){
            $request -> merge(['images'=> substr($request->my_file,strpos($request->my_file,'public/uploads'))]);
        }
        
        if($img->update($request->only(['cat_id','images','caption','status','status']))){
            return  redirect()->back()->with('yes','Success');
        }
        return  redirect()->back()->with('no','Fail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content=Image::find($id);
        if($content->delete()){
            return  response()->json(['message'=>'Success','status'=>200]);
        }
        return  response()->json(['message'=>'Fail','status'=>404]);
    }
}
