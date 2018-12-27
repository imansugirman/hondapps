<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ProcessRequest as StoreRequest;
use App\Http\Requests\ProcessRequest as UpdateRequest;

use App\Models\QS;
use App\Models\PM;
use App\Models\GR;
use App\Models\Part;
use App\Models\Mobil;
use App\Models\Tambahan;
use App\Models\SBalance;
use App\Models\SAProcess;
use App\Models\Inspect;
use App\Models\Delivery;
use App\Models\Cuci;


class ProcessCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Process');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/process');
        $this->crud->setEntityNameStrings('process', 'Proses');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

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
            'label' => 'QS',
            'type'  => 'select',
            'name' => 'qs_id', // the db column for the foreign key
            'entity' => 'qs', // the method that defines the relationship in your Model
            'attribute' => 'status', // foreign key attribute that is shown to user
            'model' => "App\Models\QS", // foreign key model
          ],
          //
          // [
          //     'label'     => 'QS Start',
          //     'type'      => 'datetime_picker',
          //     'name'      => 'qstime_start',
          // ],
          //
          // [
          //     'label'     => 'QS Finish',
          //     'type'      => 'datetime_picker',
          //     'name'      => 'qstime_finish',
          // ],

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
                'label'     => 'QS',
                'type'      => 'select2',
                'name'      => 'qs_id',
                'entity'    => 'qs',
                'attribute' => 'status',
                'model'     => "App\Models\QS",
            ],

            // [
            //     'label'     => 'QS Start',
            //     'type'      => 'datetime_picker',
            //     'name'      => 'qstime_start',
            // ],
            //
            // [
            //     'label'     => 'QS Finish',
            //     'type'      => 'datetime_picker',
            //     'name'      => 'qstime_finish',
            // ],

        ]);

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
