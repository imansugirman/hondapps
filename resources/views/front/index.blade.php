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
                    <thread>
                      <tr>
                        <th colspan="1" class="text-center">No Polisi</th>
                        <th colspan="2" class="text-center">QS</th>
                        <th colspan="2" class="text-center">PM</th>
                        <th colspan="2" class="text-center">GR</th>
                        <th colspan="2" class="text-center">Konfirmasi Part</th>
                        <th colspan="2" class="text-center">Pekerjaan Tambahan</th>
                        <th colspan="2" class="text-center">Spooring + Balancing</th>
                        <th colspan="2" class="text-center">Final Inspection</th>
                        <th colspan="2" class="text-center">Cuci</th>
                        <th colspan="2" class="text-center">Delivery</th>
                      </tr>
                      <tr>
                        <th>Masuk</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Finish</th>
                      </tr>

                    </thread>
                      <tbody>
                        @foreach ($mobil as $mobil)
                          <tr>
                           <td>{{ $mobil->no_polisi }}</td> 
                          </tr>
                        @endforeach
                        

                        {{-- @foreach ($query as $key => $value)
                            <td>{{ $mobil->no_polisi }}</td>
                            <td>{{ $qs->start_at }}</td>
                            <td>{{ $qs->finish_at }}</td>
                            <td>{{ $pm->start_at }}</td>
                            <td>{{ $pm->finish_at }}</td>
                        @endforeach --}}
                        {{-- @foreach ($mobil as $mobil)
                            <td>{{ $mobil->no_polisi }}</td>
                            <td>{{ $qs->start_at }}</td>
                            <td>{{ $qs->finish_at }}</td>
                            <td>{{ $pm->start_at }}</td>
                            <td>{{ $pm->finish_at }}</td>
                        @endforeach --}}
                        {{-- @foreach ($pm as $pm)
                            <td>{{ $pm->start_at }}</td>
                            <td>{{ $pm->finish_at }}</td>
                        @endforeach --}}
                      </tbody>

                  </table>
                  <div class="col-md-4">Data Count : {{ $mobil->count() }}</div>
                  {{-- <div class="col-md-4">{{ $mobil->currentPage() }}</div> --}}
                  <div class="container">
                      <ul class="pagination">
                          {{-- <li>{{ $mobil->links() }}</li> --}}
                      </ul>
                  </div>

              </div>
          </div>
      </div>
  </div>
@endsection
