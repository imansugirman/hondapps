<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\SAProcessRequest as StoreRequest;
use App\Http\Requests\SAProcessRequest as UpdateRequest;
use App\Models\QS;

/**
 * Class SAProcessCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SAProcessCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\SAProcess');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/saprocess');
        $this->crud->setEntityNameStrings('saprocess', 'SA Process');

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

        ]);



        // add asterisk for fields that are required in SAProcessRequest
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
