<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Spatie\ModelStatus\HasStatuses;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mobil extends Model
{
    use CrudTrait;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'mobil';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'no_polisi',
        'qs_id',
        'pm_id',
        'gr_id',
        'part_id',
        'tambahan_id',
        'sbalance_id',
        'inspect_id',
        'cuci_id',
        'delivery_id',
    ];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
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
   /**
     * Get the comments for the blog post.
     */
    // public function qs()
    // {
    //     return $this->belongsTo('App\Models\QS', 'qs_id', 'id');
    // }

    // public function pmd()
    // {
    //     return $this->hasMany('App\Models\PM', 'id');
    // }

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
    //
    public function part()
    {
        return $this->hasMany('App\Models\Part', 'part_id', 'id');
    }
    //
    public function tambahan()
    {
        return $this->hasMany('App\Models\Tambahan', 'pekerjaan_id', 'id');
    }

    public function process()
    {
        return $this->hasMany('App\Models\Process', 'process_id', 'id');
    }
    //
    // public function sbalance()
    // {
    //     return $this->belongsTo('App\Models\SBalance', 'sbalance_id', 'id');
    // }
    //
    // public function inspect()
    // {
    //     return $this->belongsTo('App\Models\Inspect', 'inspect_id', 'id');
    // }
    //
    // public function cuci()
    // {
    //     return $this->belongsTo('App\Models\Cuci', 'cuci_id', 'id');
    // }
    //
    // public function delivery()
    // {
    //     return $this->belongsTo('App\Models\Delivery', 'delivery_id', 'id');
    // }
    //
    //
    //
    // public function qs()
    // {
    //     return $this->hasMany('App\Models\QS', 'id');
    // }


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
