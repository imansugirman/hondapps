@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header bg-transparent">
                      <h5 class="mb-0 text-center">QS</h5>
                  </div>
                  <div class="card-body">
                    @foreach($qs as $qs)
                        <td><strong>{{ $qs->start_at }}</strong></td>
                    @endforeach
                  </div>
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
                              @foreach($mobil as $key => $qs)

                                <tr>
                                @foreach($qs as $start_at => $value)
                                    <th><strong>{{ $start_at }}</strong></th>
                                @endforeach
                                </tr>

                                <tr>
                                @foreach($qs as $finish_at => $value)
                                    <td>{{ $finish_at }}</td>
                                @endforeach
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
