<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use \Makeable\EloquentStatus\HasStatus;
use Carbon\Carbon;


class QS extends Model
{
    use CrudTrait;
    use HasStatus;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'qs';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['mobil_id', 'status', 'start_at', 'finish_at'];
    // protected $hidden = ['mobil_id'];
    protected $dates = ['start_at', 'finish_at'];

    // protected $casts = [
    //     'start_at' => 'datetime:H:i:s',
    //     'finish_at' => 'datetime:H:i:s',
    // ];

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

    public function pm()
    {
        return $this->hasMany('App\Models\PM');
    }

    public function saprocess()
    {
        return $this->hasMany('App\Models\SAProcess', 'saprocess_id', 'id');
    }






    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

   public function scopeMulai($query)
    {
        return $query->whereIn('status', ['start_at', 'finish_at']);
    }


    public function setDatetimeAttribute($value) {
        $this->attributes['datetime'] = \Date::parse($value);
    }

    // public function openGoogle($crud = false)
    // {
    //     $timer = Time::make('startimer');
    //
    //     return $timer;
    // }

    public function getStartAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['start_at'])->format('H:i');
    }

    public function getFinishAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['finish_at'])->format('H:i');
    }

    // public function getStartAtAttribute($date)
    // {
    //   return Carbon::createFromFormat('H:i:s', $date)->format('H:i:s');
    // }

    // public function getCreatedAtAttribute($date) {
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y');
    // }


    // public function setStatus($query)
    // {
    //     return $query
    //         ->where('status', 'masuk')
    //         ->whereNotNull('start_at');
    // }

    // public function setStatusActive($value) {
    //     $this->$model->setStatus('mulai');
    // }

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
