<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

//    protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];
        protected $guarded=[];

    use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }

    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug($value,"-");

    }
}
