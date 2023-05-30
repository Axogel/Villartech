@extends('layouts.app')

<title>Villartechnologies Emails</title>

@section('content')

@include('sweetalert::alert')
    <div class="container-fluid mt--12">
        <div class="row">
           
            <div class="col-xl-12 mb-5 mb-xl-0">
 
                <div class="table-responsive pt-5" style="width: 100%;">
                    <table class="table align-items-center table-light" id="myTable">
                        <thead  class = "text-light" style="background-color: #045A97;">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Number</th>
                                <th scope="col">Interest</th>
                                <th scope="col">Budget</th>
                                <th scope="col">Message</th>
                                
                                <th scope="col"></th>
    
                            </tr>
                        </thead>
                        @foreach ($contacts as $contact)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $contact->name }}</span>
                                            </div>
                                        </div>
                                    </th>
    
                                 
                                    <td>
                                        {{ $contact->email  }}
                                    </td>

                                    <td>
                                        {{ $contact->number  }}
                                    </td>


                                    <td>
                                        {{ $contact->interest  }}
                                    </td>

                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            {{ $contact->budget }}
                                        </span>
                                    </td>


                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            {{ $contact->message }}
                                        </span>
                                    </td>
    
    
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v" style="color: #045A97;"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                               
                                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')" class="dropdown-item">Delete</button>
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
                        {{ $contacts->links('pagination::bootstrap-4') }}
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