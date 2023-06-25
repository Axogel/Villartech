@extends('layouts.app')

<title>Villartechnologies Testimonials</title>

@section('content')

@include('sweetalert::alert')
    <div class="container-fluid mt--12">
        <div class="row">
           
            <div class="col-xl-12 mb-5 mb-xl-0">

                <p class="pt-5" style="font-size:25px; color:#045A97; font-weight:900;">Testimonials <span> <a href="{{ route('testimonies.create') }}" class="btn btn-success" style="float:right;">Create
                    testimony</a></span></p>
               
                <div class="table-responsive" style="width: 100%;">
                    <table class="table align-items-center table-light" id="myTable">
                        <thead  class = "text-light" style="background-color: #045A97;">
                            <tr>
                            <th scope="col">Author</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th></th>
                            </tr>
                        </thead>
                        @foreach ($testimonies as $testimony)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $testimony->author }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        
                                        <img src="{{ asset('storage') . '/' . $testimony->image }}" alt=""
                                            style="width: 50px;height: 50px;">

                                    </td>
    
    
    
    
    
    
    
                                                                
    
    
    
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $testimony->description }}</span>
                                            </div>
                                        </div>
                                    </th>
    
    
    
    
    
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v" style="color: #045A97;"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                <a class="dropdown-item"
                                                    href="{{ route('testimonies.edit', ['testimony' => $testimony->id]) }}">Edit</a>

                                                    <a class="dropdown-item"
                                                    href="{{ route('testimonies.show', ['testimony' => $testimony->id]) }}">Show</a>
    
                                                  
                                                    <a href="{{ route('testimonies.destroy', $testimony->id) }}" class="dropdown-item" data-confirm-delete="true">Delete</a>

        
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
                        {{ $testimonies->links('pagination::bootstrap-4') }}
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