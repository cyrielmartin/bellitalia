<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bellitalia extends Model 
{

    protected $table = 'bellitalias';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('number', 'publication');
    protected $visible = array('number', 'publication');

    public function interests()
    {
        return $this->hasMany('App\Interest', 'bellitalia_id');
    }

}