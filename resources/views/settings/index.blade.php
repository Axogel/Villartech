@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">

            </div>
        </div>

    </div>
    <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0" style="margin-left: 25px; margin-top:150px;">
            <div class="table-responsive" style="width: 146%">
                <table class="table align-items-center table-dark">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    @foreach ($settings as $setting)
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="mb-0 text-sm">{{ $setting->address }}</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    {{ $setting->email }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        {{ $setting->instagram }}
                                    </span>
                                </td>
                                <td>

                                    <span class="badge badge-dot mr-4">
                                        {{ $setting->facebook }}
                                    </span>

                                </td>
                                <td>

                                    <span class="badge badge-dot mr-4">
                                        {{ $setting->phone }}
                                    </span>

                                </td>


                                <td>

                                    <span class="badge badge-dot mr-4">
                                        {{ $setting->date }}
                                    </span>

                                </td>

                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item"
                                                href="{{ route('settings.edit', $setting->id) }}">Edit</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>

            </div>
            </td>
            </tr>
            </tbody>
            
            </table>


        </div>
        <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-info"
            style="margin-left: 500px; margin-top:13%;">Edit Settings</a>
    </div>
    </div>

    </div>
    @endforeach

    </div>


    <br>
    <br>
    <br>
    <br>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
