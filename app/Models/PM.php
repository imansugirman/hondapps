<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class PM extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'pm';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['mobil_id', 'status', 'start_at', 'finish_at'];
    // protected $hidden = [];
    protected $dates = ['start_at', 'finish_at'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    // public function mobil()
    // {
    //     return $this->hasMany('App\Models\Mobil', 'id');
    // }

    public function mobil()
    {
        return $this->belongsTo('App\Models\Mobil', 'mobil_id', 'id');
    }

    // public function qs()
    // {
    //     return $this->belongsTo('App\Models\QS');
    // }

    public function saprocess()
    {
        return $this->belongsTo('App\Models\SAProcess');
    }

    public function getStartAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['start_at'])->format('H:i');
    }

    public function getFinishAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['finish_at'])->format('H:i');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
