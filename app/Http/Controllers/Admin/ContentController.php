<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Content;
use App\Http\Requests\ContentRequest;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $data=Content::filter()->paginate($limit);
        $cat=Category::where('type',1)->where('status',1)->get();
        return view('admin.content.index',compact('data','cat'));
    }
    public function indexAjax(){
        $data=Content::filter()->get();
        return view('admin.content.indexAjax',compact('data'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=Category::where('type',1)->get();
        return view('admin.content.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request)
    {
        $request->merge(['status'=>$request->status=='on'?1:0]);
        if($request->has('my_file')){
            $request -> merge(['images'=> substr($request->my_file,strpos($request->my_file,'public/uploads'))]);
        }
        
        if(Content::create($request->only(['cat_id','tittle','images','summary','description','index','status','meta_keyword','meta_description','slug']))){
            return  redirect()->back()->with('yes','Success');
        }
        return  redirect()->back()->with('no','Fail');
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
        $cat=Category::where('type',1)->where('status',1)->get();
        $data=Content::find($id);
        if($data){
            return view('admin.content.update',compact('data','cat'));
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
    public function update(ContentRequest $request, $id)
    {
        $content=Content::find($id);
        $request->merge(['status'=>$request->status=='on'?1:0]);
        if($request->has('my_file')){
            $request -> merge(['images'=> substr($request->my_file,strpos($request->my_file,'public/uploads'))]);
        }
        
        if($content->update($request->only(['cat_id','tittle','images','summary','description','index','status','meta_keyword','meta_description','slug']))){
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
        $content=Content::find($id);
        if($content->delete()){
            return  response()->json(['message'=>'Success','status'=>200]);
        }
        return  response()->json(['message'=>'Fail','status'=>404]);
    }
}
