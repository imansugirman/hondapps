@extends('layouts.app')

@section('title', 'Honda Services Status')

@section('content')
  <div class="row-fluid justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header bg-transparent">
                  <h5 class="mb-0 text-center">Status Service Honda Imora Sentul</h5>
              </div>
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <td>No Polisi</td>
                              <td>QS</td>
                              <td>PM</td>
                              <td>GR</td>
                              <td>Konfirmasi Part</td>
                              <td>Pekerjaan Tambahan</td>
                              <td>Spooring + Balancing</td>
                              <td>Final Inspection</td>
                              <td>Cuci</td>
                              <td>Delivery</td>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($mobil as $mobil)
                          <tr>
                              <td class="table-success"> {{ $mobil->no_polisi }} </td>
                              <td class="table-success"> {{ $mobil->qs->name }} </td>
                              <td class="table-success"> {{ $mobil->pm->name }} </td>
                              <td class="table-success"> {{ $mobil->gr->name }} </td>
                              <td class="table-success"> {{ $mobil->part->name }} </td>
                              <td class="table-success"> {{ $mobil->tambahan->name }} </td>
                              <td class="table-success"> {{ $mobil->sbalance->name }} </td>
                              <td class="table-success"> {{ $mobil->inspect->name }} </td>
                              <td class="table-success"> {{ $mobil->cuci->name }} </td>
                              <td class="table-success"> {{ $mobil->delivery->name }} </td>
                          </tr>
                        @endforeach

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
@endsection
