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
                        <tr>
                            @foreach ($mobil as $mobil)
                                <td>{{ $mobil->no_polisi }}</td>
                            @endforeach
                            @foreach ($qs as $qs)
                              <td>{{ $qs->start_at }}</td>
                              <td>{{ $qs->finish_at }}</td>
                            @endforeach
                            @foreach ($pm as $pm)
                                <td>{{ $pm->start_at }}</td>
                                <td>{{ $pm->finish_at }}</td>
                            @endforeach
                            @foreach ($gr as $gr)
                                <td>{{ $gr->start_at }}</td>
                                <td>{{ $gr->finish_at }}</td>
                            @endforeach
                            @foreach ($part as $part)
                                <td>{{ $part->start_at }}</td>
                                <td>{{ $part->finish_at }}</td>
                            @endforeach
                            @foreach ($tambahan as $tambahan)
                                <td>{{ $tambahan->start_at }}</td>
                                <td>{{ $tambahan->finish_at }}</td>
                            @endforeach

                            @forelse ($sbalance as $sbalance)
                                <td>{{ $sbalance->start_at }}</td>
                                <td>{{ $sbalance->finish_at }}</td>
                            @empty
                                <td>None</td>
                                <td>None</td>
                            @endforelse

                            {{-- @foreach ($inspect as $inspect)
                                <td>{{ $inspect->start_at }}</td>
                                <td>{{ $inspect->finish_at }}</td>
                            @endforeach --}}

                            @forelse ($inspect as $inspect)
                                <td>{{ $inspect->start_at }}</td>
                                <td>{{ $inspect->finish_at }}</td>
                            @empty
                                <td>None</td>
                                <td>None</td>
                            @endforelse

                            @forelse ($cuci as $cuci)
                                <td>{{ $cuci->start_at }}</td>
                                <td>{{ $cuci->finish_at }}</td>
                            @empty
                                <td>None</td>
                                <td>None</td>
                            @endforelse
                        </tr>

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
