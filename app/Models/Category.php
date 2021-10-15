<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
   
    protected $fillable=['id','name','images','type','index','status','meta_keyword','meta_description','action_name','menu_top','key_name','slug'];
    public function get_content(){
        return $this->hasMany(Content::class,'cat_id','id')->orderby('index','asc');
    }
    public function get_img(){
        return $this->hasMany(Image::class,'cat_id','id');
    }
    public function scopeFilter($query){
        $limit = 10;
        $page=request()->page?request()->page:1;
        $start=$limit*($page-1);
        if(request()->type==1||request()->type==2){
        $query=$query->where('type',request()->type);
        }
        if(request()->status==1||request()->status==2){
            $query=$query->where('status',request()->status-1);
            }
        if(request()->search_key){
            $query=$query->where('name','like','%'.request()->search_key.'%');
        }
        $query=$query->orderby('index','asc')->skip($start)->take($limit);
        return $query;
    }
    public function scopeQuery($query){
        $query=$query->where('status',1)->orderby('index','asc');
        return $query;
    }
}
