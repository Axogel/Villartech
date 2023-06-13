@extends('layouts.app')

<title>Villartechnologies Blogs</title>

@section('content')

@include('sweetalert::alert')
    <div class="container-fluid mt--12">
        <div class="row">
           
            <div class="col-xl-12 mb-5 mb-xl-0">

                <p class="pt-5" style="font-size:25px; color:#045A97; font-weight:900;">Blogs <span> <a href="{{ route('blogs.create') }}" class="btn btn-success" style="float:right;">Create
                    blog</a></span></p>
               
                <div class="table-responsive" style="width: 100%;">
                    <table class="table align-items-center table-light" id="myTable">
                        <thead  class = "text-light" style="background-color: #045A97;">
                            <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Author</th>
                            <th scope="col">Category ID</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Image</th>
                            <th></th>
                            </tr>
                        </thead>
                        @foreach ($blogs as $blog)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $blog->title }}</span>
                                            </div>
                                        </div>
                                    </th>
    
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $blog->description }}</span>
                                            </div>
                                        </div>
                                    </th>
    
    
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $blog->author }}</span>
                                            </div>
                                        </div>
                                    </th>
    
    
    
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $blog->category_id }}</span>
                                            </div>
                                        </div>
                                    </th>
    
    
    
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                @foreach ($blog->tags()->get() as $tag)
                                                    <span class="mb-0 text-sm">{{ $tag->name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </th>
                                                                
    
    
    
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $blog->slug }}</span>
                                            </div>
                                        </div>
                                    </th>
    
    
    
                                    <th>
    
                                        <img src="{{ asset('storage') . '/' . $blog->image }}" alt=""
                                            style="width: 50px;height: 50px;">
    
                                    </th>
    
    
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v" style="color: #045A97;"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                    href="{{ route('blogs.edit', ['blog' => $blog->id]) }}">Edit</a>
    
                                                  
                                                    <a href="{{ route('blogs.destroy', $blog->id) }}" class="dropdown-item" data-confirm-delete="true">Delete</a>

        
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
                        {{ $blogs->links('pagination::bootstrap-4') }}
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