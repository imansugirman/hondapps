<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Inspect extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'inspection';
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
    public function mobil()
    {
        return $this->belongsTo('App\Models\Mobil', 'mobil_id', 'id');
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
