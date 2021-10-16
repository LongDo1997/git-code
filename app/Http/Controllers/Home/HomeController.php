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
            if($cat->type==1&&$cat->status==1){
                $data[$cat->key_name] = Content::query()->where('cat_id',$cat->id)->get();
                if($cat->key_name=='staff'){
                    $data[$cat->key_name] = Content::query()->where('cat_id',$cat->id)->paginate(4);
                }
                if($cat->key_name=='blog'){
                    $data[$cat->key_name] = Content::query()->where('cat_id',$cat->id)->orderby('created_at','desc')->paginate(3);
                }
                if($cat->key_name=='about'){
                    $data[$cat->key_name] = Content::query()->where('cat_id',$cat->id)->paginate(6);
                }
            }
            if($cat->type==2&&$cat->status==1){
                $data[$cat->key_name] = Image::query()->where('cat_id',$cat->id)->get();
            }
            $data['cat_'.$cat->key_name]=Category::query()->where('id',$cat->id)->first();
        }
        if(!empty($data)){
            $title="AFD- Trung tâm công nghệ thông tin chuyên nghiệp";
            $keywords="Giải pháp phần mềm, Phần mềm quản lý, gia công phần mềm";
            $description="Giải pháp phần mềm, Phần mềm quản lý, gia công phần mềm";
            return view('home.index',compact('data','keywords','description','title'));
        }
        return view('home.404');
    }

    public function about()
    {
        if(Category::query()->where('key_name','=','about')->first()->status==1){
        $data=[
            'cat_about'=>Category::query()->where('key_name','=','about')->first(),
            'about'=>Category::query()->where('key_name','=','about')->first()->get_content()->get(),
            'cat_achive'=>Category::query()->where('key_name','=','achive')->first(),
            'brand'=>Category::query()->where('key_name','=','brand')->first()->get_img()->get(),
            'cat_client'=>Category::query()->where('key_name','=','client')->first(),
            'client'=>Category::query()->where('key_name','=','client')->first()->get_content()->get(),
        ];
        }
        if(!empty($data)){
            return view('home.about',compact('data'));
        }
        return view('home.404');

    }

    public function service()
    {
        if(Category::query()->where('key_name','=','service')->first()->status==1){
        $data=[
            'service'=>Category::query()->where('key_name','=','service')->first()->get_content()->paginate(6),
            'cat_service'=>Category::query()->where('key_name','=','service')->first(),
            'about'=>Category::query()->where('key_name','=','about')->first()->get_content()->get(),
            'brand'=>Category::query()->where('key_name','=','brand')->first()->get_img()->get(),
        ];
        }
        if(!empty($data)){
            return view('home.service',compact('data'));
        }
        return view('home.404');
    }
    public function serviceDetail($slug)
    {   
        if(Category::query()->where('key_name','=','service')->first()->status==1){
        $data=Category::query()->where('key_name','=','service')->first()->get_content()->where('slug',$slug)->first();
        }
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
        if(Category::query()->where('key_name','=','contact')->first()->status==1){
            $data=[
                'contact'=>Category::query()->where('key_name','=','contact')->first()->get_content()->paginate(8),
                'cat_contact'=>Category::query()->where('key_name','=','contact')->first(),
            ];
        }
        if(!empty($data)){
            return view('home.contact',compact('data'));
        }
        return view('home.404');

    }
    public function staff()
    {   
        if(Category::query()->where('key_name','=','staff')->first()->status==1){
            $data=[
                'staff'=>Category::query()->where('key_name','=','staff')->first()->get_content()->paginate(8),
                'cat_staff'=>Category::query()->where('key_name','=','staff')->first(),
            ];
        }
        if(!empty($data)){
            return view('home.team',compact('data'));
        }
        return view('home.404');
    }
    public function product()
    {
        if(Category::query()->where('key_name','=','product')->first()->status==1){
        $data=[
            'product'=>Category::query()->where('key_name','=','product')->first()->get_content()->paginate(6),
            'cat_product'=>Category::query()->where('key_name','=','product')->first(),
        ];
        }
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
        if(Category::query()->where('key_name','=','product')->first()->status==1){
        $data=Category::query()->where('key_name','=','product')->first()->get_content()->where('slug',$slug)->first();
        }
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
        if(Category::query()->where('key_name','=','blog')->first()->status==1){
        $data=[
            'blog'=>Category::query()->where('key_name','=','blog')->first()->get_content()->orderby('created_at','desc')->paginate(6),
            'cat_blog'=>Category::query()->where('key_name','=','blog')->first(),
        ];
        }
        if(!empty($data)){
            return view('home.blog',compact('data'));
        }
        return view('home.404');
    }
    public function blogDetail($slug)
    {
        if(Category::query()->where('key_name','=','blog')->first()->status==1){
        $data=Category::query()->where('key_name','=','blog')->first()->get_content()->where('slug',$slug)->first();
        }
        if(empty($data)){
            return view('home.404');
        }
        $recentData=Content::where('cat_id',$data->get_cat->id)->orderby('created_at','desc')->paginate(4);
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
