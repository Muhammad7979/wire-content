<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use WireComments\Traits\Commentable;

class Article extends Model
{
    //
    use Commentable;
     protected $fillable = ['title', 'slug', 'content', 'media_id'];


     public function user(){
            return $this->belongsTo(config('auth.providers.users.model'));
     }

     public function image(): BelongsTo
     {

       return $this->belongsTo(Media::class,'media_id');

     }



}
