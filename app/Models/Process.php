<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Process extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'process';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
      'mobil_id',
      'qs_id',
      // 'qstime_start',
      // 'qstime_finish',
      // 'pm_id',
      // 'pmtime_start',
      // 'pmtime_finish',
      // 'gr_id',
      // 'grtime_start',
      // 'grtime_finish',
      // 'part_id',
      // 'parttime_start',
      // 'parttime_finish',
      // 'pekerjaan_id',
      // 'pekerjaantime_start',
      // 'pekerjaantime_finish',
      // 'sbalance_id',
      // 'sbalancetime_start',
      // 'sbalancetime_finish',
      // 'inspection_id',
      // 'inspectiontime_start',
      // 'inspectiontime_finish',
      // 'cuci_id',
      // 'cucitime_start',
      // 'cucitime_finish',
      // 'delivery_id',
      // 'deliverytime_start',
      // 'deliverytime_finish',
    ];
    // protected $hidden = [];
    // protected $dates = [];

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

    public function saprocess()
    {
        return $this->hasMany('App\Models\SAProcess', 'saprocess_id', 'id');
    }
    public function qs()
    {
        return $this->hasMany('App\Models\QS', 'qs_id', 'id');
    }

    public function pm()
    {
        return $this->hasMany('App\Models\PM', 'pm_id', 'id');
    }

    public function gr()
    {
        return $this->hasMany('App\Models\GR', 'gr_id', 'id');
    }

    public function part()
    {
        return $this->hasMany('App\Models\Part', 'part_id', 'id');
    }

    public function tambahan()
    {
        return $this->hasMany('App\Models\Tambahan', 'pekerjaan_id', 'id');
    }

    public function inspect()
    {
        return $this->hasMany('App\Models\Inspect', 'inspection_id', 'id');
    }

    public function cuci()
    {
        return $this->hasMany('App\Models\Cuci', 'cuci_id', 'id');
    }

    public function sbalance()
    {
        return $this->hasMany('App\Models\SBalance', 'sbalance_id', 'id');
    }

    public function mobil()
    {
        return $this->belongsTo('App\Models\Mobil', 'mobil_id', 'id');
    }

    public function delivery()
    {
        return $this->hasMany('App\Models\Delivery', 'delivery_id', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

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
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
