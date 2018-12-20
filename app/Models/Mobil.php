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
    public function qs()
    {
        return $this->belongsTo('App\Models\QS', 'qs_id', 'id');
    }

    public function pm()
    {
        return $this->belongsTo('App\Models\PM', 'pm_id', 'id');
    }

    public function gr()
    {
        return $this->belongsTo('App\Models\GR', 'gr_id', 'id');
    }

    public function part()
    {
        return $this->belongsTo('App\Models\Part', 'part_id', 'id');
    }

    public function tambahan()
    {
        return $this->belongsTo('App\Models\Tambahan', 'tambahan_id', 'id');
    }

    public function sbalance()
    {
        return $this->belongsTo('App\Models\SBalance', 'sbalance_id', 'id');
    }

    public function inspect()
    {
        return $this->belongsTo('App\Models\Inspect', 'inspect_id', 'id');
    }

    public function cuci()
    {
        return $this->belongsTo('App\Models\Cuci', 'cuci_id', 'id');
    }

    public function delivery()
    {
        return $this->belongsTo('App\Models\Delivery', 'delivery_id', 'id');
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
