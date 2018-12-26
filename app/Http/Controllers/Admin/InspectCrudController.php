<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\InspectRequest as StoreRequest;
use App\Http\Requests\InspectRequest as UpdateRequest;

/**
 * Class InspectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class InspectCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Inspect');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/inspect');
        $this->crud->setEntityNameStrings('inspect', 'Final Inspection');

        $this->crud->setColumns([
          [
            'label' => 'No Polisi',
            'type'  => 'select',
            'name' => 'mobil_id', // the db column for the foreign key
            'entity' => 'mobil', // the method that defines the relationship in your Model
            'attribute' => 'no_polisi', // foreign key attribute that is shown to user
            'model' => "App\Models\Mobil", // foreign key model
          ],

          [
            'name' => 'status', // The db column name
            'label' => "Status", // Table column heading
            'type' => 'select_from_array',
            'options' => ['0' => 'Arsip', '1' => 'Masuk', '2' => 'Mulai', '3' => 'Selesai'],
          ],
          [   // DateTime
                'name' => 'start_at',
                'label' => 'Start',
                'type' => 'datetime',
                // optional:
                // 'format' => 'DD/MM/YYYY HH:mm',
                // 'default' => '2017-05-12 11:59:59',
            ],

            [   // DateTime
                'name' => 'finish_at',
                'label' => 'Finish',
                'type' => 'datetime',
                // 'format' => 'DD/MM/YYYY HH:mm',

                // 'default' => '2017-05-12 11:59:59',
            ],
        ]);

        $this->crud->addFields([
            [
                'label' => 'No Polisi',
                'type'  => 'select2',
                'name' => 'mobil_id', // the db column for the foreign key
                'entity' => 'mobil', // the method that defines the relationship in your Model
                'attribute' => 'no_polisi', // foreign key attribute that is shown to user
                'model' => "App\Models\Mobil", // foreign key model
            ],

            [
                'name' => 'status',
                'label' => "Status",
                'type' => 'select2_from_array',
                'options' => ['0' => 'Arsip', '1' => 'Masuk', '2' => 'Mulai', '3' => 'Selesai',],
                'allows_null' => false,
                'default' => 'one',
            ],

            [   // DateTime
                'name' => 'start_at',
                'label' => 'Start',
                'type' => 'datetime_picker',
                // optional:
                'datetime_picker_options' => [
                    'format' => 'DD/MM/YYYY HH:mm',
                    'language' => 'id'
                ],
                'allows_null' => true,
                // 'default' => '2017-05-12 11:59:59',
            ],

            [   // DateTime
                'name' => 'finish_at',
                'label' => 'Finish',
                'type' => 'datetime_picker',
                // optional:
                'datetime_picker_options' => [
                    'format' => 'DD/MM/YYYY HH:mm',
                    'language' => 'id'
                ],
                'allows_null' => true,
                // 'default' => '2017-05-12 11:59:59',
            ],
        ]);

        // add asterisk for fields that are required in InspectRequest
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
