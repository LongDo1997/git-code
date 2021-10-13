<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table='images';
    protected $fillable=['id','cat_id','images','caption','status'];
    public function get_cat(){
        return $this->hasOne(Category::class,'id','cat_id');
    }
    public function scopeFilter($query){
        $limit = 10;
        $page=request()->page?request()->page:1;
        $start=$limit*($page-1);
        if(request()->cat_id){
        $query=$query->where('cat_id',request()->cat_id);
        }
        if(request()->status==1||request()->status==2){
            $query=$query->where('status',request()->status-1);
            }
        if(request()->search_key){
            $query=$query->where('caption','like','%'.request()->search_key.'%');
        }
        $query=$query->orderby('id','asc')->skip($start)->take($limit);
        return $query;
    }
    public function scopeQuery($query){
        $query=$query->where('status',1)->orderby('id','asc');
        return $query;
    }
  
}
