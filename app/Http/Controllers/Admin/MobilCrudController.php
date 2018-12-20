<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\MobilRequest as StoreRequest;
use App\Http\Requests\MobilRequest as UpdateRequest;
use App\Models\CarStatus;

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
                'name'  => 'name',
                'label' => 'Nama',
                'type'  => 'text',
            ],
            [
                'name'  => 'tipe',
                'label' => 'Tipe',
                'type' => 'text'
            ],
            [
                'name'  => 'no_polisi',
                'label' => 'No Polisi',
                'type' => 'text'
            ],

            [
                'name'  => 'carstatus_id',
                'label' => 'Status',
                'type' => 'select2',
                'entity' => 'carstatus', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => CarStatus::class, // foreign key model

            ],

        ]);

        
        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => 'Nama',
                'type'  => 'text',
            ],
            [
                'name'  => 'tipe',
                'label' => 'Tipe',
                'type' => 'text'
            ],
            [
                'name'  => 'no_polisi',
                'label' => 'No Polisi',
                'type' => 'text'
            ],

            [
                'name'  => 'carstatus_id',
                'label' => 'Status',
                'type' => 'select2',
                'entity' => 'carstatus', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => CarStatus::class, // foreign key model
               
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
