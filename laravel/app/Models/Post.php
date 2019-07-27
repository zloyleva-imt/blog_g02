<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopePublished($q){
        if(in_array('published', config('custom.enum.published_status'))){
            $q->where('published_status', 'published');
        }
        return $q;
    }
}
