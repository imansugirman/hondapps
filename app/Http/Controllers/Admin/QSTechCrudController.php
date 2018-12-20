<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\QSRequest as StoreRequest;
use App\Http\Requests\QSRequest as UpdateRequest;

/**
 * Class QSTechCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class QSTechCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\QS');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/qstech');
        $this->crud->setEntityNameStrings('QS', 'QS Technic');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->setColumns([
            [
                'label'     => 'Mobil / No Polisi',
                'type'      => 'select',
                'name'      => 'mobil_id',
                'entity'    => 'mobil',
                'attribute' => 'no_polisi',
                'model'     => "App\Models\Mobil",

            ],
            [
                'label'     => 'QS',
                'type'      => 'checkbox',
                'name'      => 'qs'

            ],

        ]);

        $this->crud->addFields([
            [
                'name'      => 'mobil_id',
                'label'     => 'Mobil / No Polisi',
                'type'      => 'select2',
                'entity'    => 'mobil',
                'attribute' => 'no_polisi',
                'model'     => "App\Models\Mobil",
            ],

            [
                'label'     => 'QS Status',
                'type'      => 'radio',
                'name'      => 'qs',
                'type'      => 'radio',
                'options'   => [ // the key will be stored in the db, the value will be shown as label; 
                                    1 => "Masuk",
                                    2 => "Mulai",
                                    3 => "Selesai"
                                ],
            ],

            // [
            //     'name'      => 'name',
            //     'label'     => 'QS Status',
            //     'type'      => 'checkbox',
                
            // ],
            // 

            // // QS
            // [
            //
            //
            // ],

        ]);



        // add asterisk for fields that are required in QSTechRequest
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
