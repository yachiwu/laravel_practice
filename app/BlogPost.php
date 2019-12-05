<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    // protected $table='blogposts';
    //
    // 設定只有這兩個欄位的資料可以被修改
    protected $fillable = ['title','content'];
   
}
