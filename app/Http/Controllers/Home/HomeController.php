<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        
        foreach(Category::get() as $cat){
            if($cat->type==1){
                $data[$cat->key_name] = Content::query()->where('cat_id',$cat->id)->get();
                if($cat->key_name=='service'){
                    $data[$cat->key_name] = Content::query()->where('cat_id',$cat->id)->paginate(4);
                }
            }
            if($cat->type==2){
                $data[$cat->key_name] = Image::query()->where('cat_id',$cat->id)->get();
            }
            $data['cat_'.$cat->key_name]=Category::query()->where('id',$cat->id)->first();
        }
        if(!empty($data)){
            $title="Lasadu- Giải Pháp phần mềm chuyên nghiệp";
            $keywords="Giải pháp phần mềm, Phần mềm quản lý, gia công phần mềm";
            $description="Giải pháp phần mềm, Phần mềm quản lý, gia công phần mềm";
            return view('home.index',compact('data','keywords','description','title'));
        }
        return view('home.404');
    }

    public function about()
    {
        $data=[
            'cat_about'=>Category::query()->where('key_name','=','about')->first(),
            'cat_achive'=>Category::query()->where('key_name','=','achive')->first(),
            'brand'=>Category::query()->where('key_name','=','brand')->first()->get_img()->get(),
            'achive'=>Category::query()->where('key_name','=','achive')->first()->get_img()->get(),

        ];
        if(!empty($data)){
            return view('home.about',compact('data'));
        }
        return view('home.404');

    }

    public function service()
    {
        $data=[
            'service'=>Category::query()->where('key_name','=','service')->first()->get_content()->paginate(6),
            'cat_service'=>Category::query()->where('key_name','=','service')->first(),
            'brand'=>Category::query()->where('key_name','=','brand')->first()->get_img()->get(),
        ];
        if(!empty($data)){
            return view('home.service',compact('data'));
        }
        return view('home.404');
    }
    public function serviceDetail($slug)
    {   
        $data=Category::query()->where('key_name','=','service')->first()->get_content()->where('slug',$slug)->first();
        if(empty($data)){
            return view('home.404');
        }
        $recentData=Content::where('cat_id',$data->get_cat->id)->paginate(6);
        $tag=[];
        foreach(Content::where('cat_id',$data->get_cat->id)->get() as $dt){
            $tag[]=$dt->meta_keyword;
        }
        $tag=array_unique($tag);
        if($data){
            return view('home.servicetDetail',compact('data','recentData','tag'));
        }
    }   
    public function contact()
    {
        return view('home.contact');
    }
    public function product()
    {
        $data=[
            'product'=>Category::query()->where('key_name','=','product')->first()->get_content()->paginate(6),
            'cat_product'=>Category::query()->where('key_name','=','product')->first(),
        ];
        if(!empty($data)){
            $title="Lasadu- Giải Pháp phần mềm chuyên nghiệp";
            $keywords="Giải pháp phần mềm, Phần mềm quản lý, gia công phần mềm";
            $description="Giải pháp phần mềm, Phần mềm quản lý, gia công phần mềm";
            return view('home.product',compact('data'));
        }
        return view('home.404');
    }
    public function productDetail($slug)
    {   
        $data=Category::query()->where('key_name','=','product')->first()->get_content()->where('slug',$slug)->first();
        if(empty($data)){
            return view('home.404');
        }
        $recentData=Content::where('cat_id',$data->get_cat->id)->paginate(6);
        $tag=[];
        foreach(Content::where('cat_id',$data->get_cat->id)->get() as $dt){
            $tag[]=$dt->meta_keyword;
        }
        $tag=array_unique($tag);
        if($data){
            return view('home.productDetail',compact('data','recentData','tag'));
        }
    }   
    public function blog()
    {
        $data=[
            'blog'=>Category::query()->where('key_name','=','blog')->first()->get_content()->paginate(6),
            'cat_blog'=>Category::query()->where('key_name','=','blog')->first(),
        ];
        if(!empty($data)){
            return view('home.blog',compact('data'));
        }
        return view('home.404');
    }
    public function blogDetail($slug)
    {
        $data=Category::query()->where('key_name','=','blog')->first()->get_content()->where('slug',$slug)->first();
        if(empty($data)){
            return view('home.404');
        }
        $recentData=Content::where('cat_id',$data->get_cat->id)->paginate(6);
        $tag=[];
        foreach(Content::where('cat_id',$data->get_cat->id)->get() as $dt){
            $tag[]=$dt->meta_keyword;
        }
        $tag=array_unique($tag);
        if($data){
            return view('home.blogDetail',compact('data','recentData','tag'));

        }
    }

    public function postContact(ContactRequest $request)
    {
        if(Contact::create($request->all())){
            return redirect()->route('home.contact')->with('yes', 'Cảm ơn bạn đã liên hệ, chúng tôi sẽ phản hồi sớm cho bạn. Xin cảm ơn!');
        }
        return redirect()->back()->with('no', 'Thông báo lỗi');
    }

}
