@extends('layouts.app')

<title>Villartechnologies FAQS</title>

@section('content')

@include('sweetalert::alert')
    <div class="container-fluid mt--12">
        <div class="row">
           
            <div class="col-xl-12 mb-5 mb-xl-0">

                <p class="pt-5" style="font-size:25px; color:#045A97; font-weight:900;">Faqs <span> <a href="{{ route('faqs.create') }}" class="btn btn-success" style="float:right;">Create
                    FAQ</a></span></p>
               
                <div class="table-responsive" style="width: 100%;">
                    <table class="table align-items-center table-light" id="myTable">
                        <thead  class = "text-light" style="background-color: #045A97;">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Answer</th>
                                <th scope="col"></th>
    
                            </tr>
                        </thead>
                        @foreach ($faqs as $faq)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $faq->title }}</span>
                                            </div>
                                        </div>
                                    </th>

                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $faq->answer }}</span>
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
                                                    href="{{ route('faqs.edit', ['faq' => $faq->id]) }}">Edit</a>
    
                                                  
                                                <a href="{{ route('faqs.destroy', $faq->id) }}" class="dropdown-item" data-confirm-delete="true">Delete</a>

        
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
                        {{ $faqs->links('pagination::bootstrap-4') }}
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