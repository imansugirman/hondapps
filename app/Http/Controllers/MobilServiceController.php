<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\QS;
use App\Models\PM;
use App\Models\GR;
use App\Models\Part;
use App\Models\Tambahan;
use App\Models\SBalance;
use App\Models\Inspect;

use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\DB;

class MobilServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $qs = QS::orderBy('id', 'created_at')->paginate(5);

        // $data = Mobil::orderBy('id', 'created_at')->paginate(10);
        //
        $qs = QS::orderBy('id', 'created_at')->paginate(10);
        //
        $pm = PM::orderBy('id', 'created_at')->paginate(10);

        $gr = GR::orderBy('id', 'created_at')->paginate(10);

        $part = Part::orderBy('id', 'created_at')->paginate(10);

        $tambahan = Tambahan::orderBy('id', 'created_at')->paginate(10);

        $sbalance = SBalance::orderBy('id', 'created_at')->paginate(10);

        $inspect = Inspect::orderBy('id', 'created_at')->paginate(10);

        $cuci = Inspect::orderBy('id', 'created_at')->paginate(10);
        //
        $mobil = Mobil::orderBy('id', 'created_at')->paginate(10);

        // $mobil = QueryBuilder::for(Mobil::class)->qs()->pm()->paginate(15);
        //
        //
        // return view('front.index', compact('mobil', 'qs', 'pm'));

        // $mobil = QueryBuilder::for(Mobil::class)
        // ->allowedIncludes('mobil', 'qs', 'pm')
        // ->get();

        // $collection = collect(Mobil::class, QS::class, PM::class);
        //
        // $matrix = $collection->crossJoin('mobil', 'qs', 'pm');
        //
        // $matrix->all();


        return view('front.index', compact('mobil', 'qs', 'pm', 'gr', 'part', 'tambahan', 'sbalance', 'inspect', 'cuci'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
