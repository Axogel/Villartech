@extends('layouts.app')

<title>Villartechnologies Portfolios</title>

@section('content')

    @include('sweetalert::alert')
    <div class="container-fluid mt--12">
        <div class="row">

            <div class="col-xl-12 mb-5 mb-xl-0">

                <p class="pt-5" style="font-size:25px; color:#045A97; font-weight:900;">Portfolios <span> <a
                            href="{{ route('portfolios.create') }}" class="btn btn-success" style="float:right;">Create
                            portfolio</a></span></p>

                <div class="table-responsive" style="width: 100%;">
                    <table class="table align-items-center table-light" id="myTable">
                        <thead class="text-light" style="background-color: #045A97;">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Url</th>
                                <th scope="col">Skills</th>

                                <th scope="col"></th>

                            </tr>
                        </thead>
                        @foreach ($portfolios as $portfolio)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $portfolio->name }}</span>
                                            </div>
                                        </div>
                                    </th>


                                    <td>

                                        <img src="{{ asset('storage') . '/' . $portfolio->image }}" alt=""
                                            style="width: 50px;height: 50px;">

                                    </td>

                                    <td>
                                        {{ $portfolio->url }}
                                    </td>


                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            @foreach ($portfolio->skills()->get() as $skill)
                                                <span class="mb-0 text-sm">{{ $skill->name }}</span>
                                            @endforeach

                                        </span>
                                    </td>




                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v" style="color: #045A97;"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                <a class="dropdown-item"
                                                    href="{{ route('portfolios.edit', ['portfolio' => $portfolio->id]) }}">Edit</a>

                                                <a class="dropdown-item"
                                                    href="{{ route('portfolios.show', ['portfolio' => $portfolio->id]) }}">Show</a>


                                                <a href="{{ route('portfolios.destroy', $portfolio->id) }}"
                                                    class="dropdown-item" data-confirm-delete="true">Delete</a>

                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <nav aria-label="Page navigation example">
                        {{ $portfolios->links('pagination::bootstrap-4') }}
                    </nav>
                </div>
            </div>

        </div>


    </div>
    </div>

    </div>




@endsection


@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
@section('scripts')

@stop
