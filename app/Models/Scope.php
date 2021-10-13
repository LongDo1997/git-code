<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scope extends Model
{
    use HasFactory;


    public function scopeData($query, $data)
    {
        $totalPage = [];
        for($i = 0; $i < $data->lastPage() ; $i++){
            $totalPage[$i] = $i;
        };
        return $totalPage;
    }
}
