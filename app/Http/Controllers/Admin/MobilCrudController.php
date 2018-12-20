<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\MobilRequest as StoreRequest;
use App\Http\Requests\MobilRequest as UpdateRequest;
use App\Models\QS;

/**
 * Class MobilCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MobilCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Mobil');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/mobil');
        $this->crud->setEntityNameStrings('mobil', 'Mobil');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
       
        $this->crud->setColumns([
            [
                'name'  => 'no_polisi',
                'label' => 'No Polisi',
                'type' => 'text'
            ],
            [
                'label'     => 'QS',
                'type'      => 'select',
                'name'      => 'qs_id',
                'entity'    => 'qs',
                'attribute' => 'name',
                'model'     => "App\Models\QS",
                 
            ],
            // PM 
            [
                'label'     => 'PM',
                'type'      => 'select',
                'name'      => 'pm_id',
                'entity'    => 'pm',
                'attribute' => 'name',
                'model'     => "App\Models\PM",
                 
            ],

            // GR
            [
                'label'     => 'GR',
                'type'      => 'select',
                'name'      => 'gr_id',
                'entity'    => 'gr',
                'attribute' => 'name',
                'model'     => "App\Models\GR",
                 
            ],

            // Part
            [
                'label'     => 'Konfirmasi Part',
                'type'      => 'select',
                'name'      => 'part_id',
                'entity'    => 'part',
                'attribute' => 'name',
                'model'     => "App\Models\Part",
                 
            ],

            // Part
            [
                'label'     => 'Pekerjaan Tambahan',
                'type'      => 'select',
                'name'      => 'tambahan_id',
                'entity'    => 'tambahan',
                'attribute' => 'name',
                'model'     => "App\Models\Tambahan",
                 
            ],
            // Part
            [
                'label'     => 'Spooring & Balancing',
                'type'      => 'select',
                'name'      => 'sbalance_id',
                'entity'    => 'sbalance',
                'attribute' => 'name',
                'model'     => "App\Models\SBalance",
                 
            ],

            // Inspect
            [
                'label'     => 'Final Inspection',
                'type'      => 'select',
                'name'      => 'inspect_id',
                'entity'    => 'inspect',
                'attribute' => 'name',
                'model'     => "App\Models\Inspect",
                 
            ],

            // Inspect
            [
                'label'     => 'Cuci',
                'type'      => 'select',
                'name'      => 'cuci_id',
                'entity'    => 'cuci',
                'attribute' => 'name',
                'model'     => "App\Models\Cuci",
                 
            ],

            // Inspect
            [
                'label'     => 'Delivery',
                'type'      => 'select',
                'name'      => 'delivery_id',
                'entity'    => 'delivery',
                'attribute' => 'name',
                'model'     => "App\Models\Delivery",
                 
            ],

        ]);

        
        $this->crud->addFields([
            [
                'name'  => 'no_polisi',
                'label' => 'No Polisi',
                'type' => 'text'
            ],

            // QS 
            [
                'label'     => 'QS',
                'type'      => 'select2',
                'name'      => 'qs_id',
                'entity'    => 'qs',
                'attribute' => 'name',
                'model'     => "App\Models\QS",
                
                 
            ],
            // PM 
            [
                'label'     => 'PM',
                'type'      => 'select2',
                'name'      => 'pm_id',
                'entity'    => 'pm',
                'attribute' => 'name',
                'model'     => "App\Models\PM",
                
                 
            ],

            // GR
            [
                'label'     => 'GR',
                'type'      => 'select2',
                'name'      => 'gr_id',
                'entity'    => 'gr',
                'attribute' => 'name',
                'model'     => "App\Models\GR",
                
                 
            ],

            // Part
            [
                'label'     => 'Konfirmasi Part',
                'type'      => 'select2',
                'name'      => 'part_id',
                'entity'    => 'part',
                'attribute' => 'name',
                'model'     => "App\Models\Part",
                
                 
            ],

            // Part
            [
                'label'     => 'Pekerjaan Tambahan',
                'type'      => 'select2',
                'name'      => 'tambahan_id',
                'entity'    => 'tambahan',
                'attribute' => 'name',
                'model'     => "App\Models\Tambahan",
                
                 
            ],
            // Part
            [
                'label'     => 'Spooring & Balancing',
                'type'      => 'select2',
                'name'      => 'sbalance_id',
                'entity'    => 'sbalance',
                'attribute' => 'name',
                'model'     => "App\Models\SBalance",
                
                 
            ],

            // Inspect
            [
                'label'     => 'Final Inspection',
                'type'      => 'select2',
                'name'      => 'inspect_id',
                'entity'    => 'inspect',
                'attribute' => 'name',
                'model'     => "App\Models\Inspect",
                
                 
            ],

            // Inspect
            [
                'label'     => 'Cuci',
                'type'      => 'select2',
                'name'      => 'cuci_id',
                'entity'    => 'cuci',
                'attribute' => 'name',
                'model'     => "App\Models\Cuci",
                
                 
            ],

            // Inspect
            [
                'label'     => 'Delivery',
                'type'      => 'select2',
                'name'      => 'delivery_id',
                'entity'    => 'delivery',
                'attribute' => 'name',
                'model'     => "App\Models\Delivery",
                
                 
            ],
            
        ]);

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        // add asterisk for fields that are required in MobilRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
