<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $limit = 10;
        $data=Category::filter()->paginate($limit);
        return view('admin.category.index',compact('data'));
    }
    public function indexAjax(){
        $data=Category::filter()->get();
        return view('admin.category.indexAjax',compact('data'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $request->merge(['status'=>$request->status=='on'?1:0]);
        $request->merge(['menu_top'=>$request->menu_top=='on'?1:0]);
        if(empty($request->action_name)){
            $request->merge(['menu_top'=>0]);
        }
        if($request->has('my_file')){
            
            $request -> merge(['images'=> substr($request->my_file,strpos($request->my_file,'public/uploads'))]);
        }
        
        if(Category::create($request->only(['name','images','type','index','status','meta_keyword','meta_description','action_name','menu_top','key_name','slug']))){
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
    {   $data=Category::find($id);
        if($data){
            return view('admin.category.update',compact('data'));

        }
        return view('admin.404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $cat=Category::find($id);
        $request->merge(['status'=>$request->status=='on'?1:0]);
        $request->merge(['menu_top'=>$request->menu_top=='on'?1:0]);
        if(empty($request->action_name)){
            $request->merge(['menu_top'=>0]);
        }
        if($request->has('my_file')){
            $request -> merge(['images'=> substr($request->my_file,strpos($request->my_file,'public/uploads'))]);
        }
        
        if($cat->update($request->only(['name','images','type','index','status','meta_keyword','meta_description','action_name','menu_top','key_name','slug']))){
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
        $cat=Category::find($id);
        
        if($cat->get_content->count()>0||$cat->get_img->count()>0){
            return  response()->json(['message'=>'Vui lòng xóa toàn bộ sản phẩm của danh mục này','status'=>404]);
        }
        if($cat->delete()){
            return  response()->json(['message'=>'Success','status'=>200]);
        }
        return  response()->json(['message'=>'Fail','status'=>404]);
    }
}
