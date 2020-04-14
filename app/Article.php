<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    protected $guarded = [];
    public function showpath()
    {
        return route('article.show',$this);
    }
    public function editpath()
    {
        return route('article.edit',$this);
    }
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
