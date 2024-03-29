<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    // protected $tabla = 'post';
    // protected $primaryKey = 'post_id';
    protected $date =['deleted_at'];
    use SoftDeletes;
    protected $table = 'post';
    protected $fillable =[
        'titulo',
        'body'
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function photos(){
        return $this->morphMany('App\Models\Photo','imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }

    
}
