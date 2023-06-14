<!-- notices cards -->

<div class="blog" style="margin-top:4rem; margin-bottom:14rem;">
  <div class="container d-flex justify-content-center">
    <div id="container-blog" class="cards-notices mx-auto">
                      @php 
                            $totalItemsBlogs = count($blogs);
                                      
                            
                            $firstThreeBlogs = array_slice($blogs, 0, 3);
                      @endphp
                    @foreach ($firstThreeBlogs as $blog)
                        @php
                          $countSearch = count($firstThreeBlogs);
                      @endphp
          

    <div class="card mb-3" style="max-width: 1047px; max-height:800px; padding:40px 20px 30px 20px;">
      <div class="row g-0">
        <div class="col-md-6">

          <img src="{{ asset('/storage/' . $blog['image']) }}" class="img-fluid rounded-start" alt="...">
        </div>

        <div class="col-md-6">
         <div class="card-body ">
         <h5 style="overflow: hidden;">
        <span class="title-blog" style="float: left;">{{ $blog['title'] }}</span>
        <span class="text-muted font-family: 'Lato', sans-serif;" style="float: right;">{{$blog['author']}} | {{$blog['date']}}</span>
        </h5>
         <hr>
          <p class="card-text">{{ $blog['description'] }}</p>
            <div class="py-2 text-left">
              <a type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px;" href="{{ route('blogArticle', $blog['slug']) }}">READ MORE
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
                            
    
    

    
    </div>
  </div>
  <p class="text-right padding-dinamic-show " id="ShowResults"><b class="" style="padding-right: 50rem;"> showing {{$countSearch}} results of {{$totalItemsBlogs}}</b></p>
</div>


<!-- show more button -->

<div class="col-12 text-center">
  <button id="loadMoreButtonBlog" type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px; margin-top:-10rem;">SHOW MORE</button>
</div>

<!-- container black -->

<div class="black" style="margin-bottom:5rem; padding-bottom:44rem; padding-top: rem; z-index: 0;">
  <div class="container ">
    <p class="title-notices">Important Notices</p>
    <div class="row row-cols-1 row-cols-md-3 justify-content-center" style="margin-top: 4rem;">

      <div class="col-10 col-sm-6 col-md-4">
        <img src="{{asset('assets/img/mockup-devices-modern-responsive-website.png')}}" class="img-fluid rounded-start" alt="...">
      </div>

      <div class="imgs-blog col-10 col-sm-6 col-md-4">
        <img src="{{asset('assets/img/1-z1.png')}}" class="img-fluid rounded-start" alt="...">
      </div>

      <div class="imgs-blog col-10 col-sm-6 col-md-4">
        <img src="{{asset('assets/img/zoom-backgrounds-oficina-llena.png')}}" class="img-fluid rounded-start" alt="...">
      </div>

      <div class="container-fluid justify-content-center">
              <div class="circle" id="hola-como-vas"><svg id="Layer_1" enable-background="new 0 0 24 24" height="130" viewBox="0 0 24 24" width="130" xmlns="http://www.w3.org/2000/svg"><path d="m3 18c0 .5527344.4472656 1 1 1h3 1c0 2.2060547 1.7939453 4 4 4s4-1.7939453 4-4h1 3c.5527344 0 1-.4472656 1-1s-.4472656-1-1-1h-.1842651c.1120605-.3143311.1842651-.647644.1842651-1v-5c0-3.7194824-2.5552979-6.8450928-6-7.7366943v-.2633057c0-1.1025391-.8974609-2-2-2s-2 .8974609-2 2v.2633057c-3.4447021.8916015-6 4.0172119-6 7.7366943v5c0 .352356.0722656.6856689.1843262 1h-.1843262c-.5527344 0-1 .4472656-1 1zm9 3c-1.1025391 0-2-.8974609-2-2h4c0 1.1025391-.8974609 2-2 2zm-6-5v-5c0-3.3085938 2.6914063-6 6-6s6 2.6914063 6 6v5c0 .5517578-.4482422 1-1 1h-2-6-2c-.5517578 0-1-.4482422-1-1z"/></svg></div>
      
            </div>


    </div>
  </div>
</div>
</div>

<!--Section imgs-->

<div class="col-10 mx-auto pt-5 container-cards">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 mt-5">
                                        <img src="{{ asset('assets/img/business.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-7 mt-5 text-left">
                                        <p class="card-title">
                                            NEWS
                                        </p>
                                        <p class="card-subtitle">
                                            ¿Por qué mi programacion es mejor que el tuyo?
                                        </p>
                                    </div>

                                    <hr class="mt-4">
                                </div>

                                <div class="row">
                                    <div class="col-5 mt-5">
                                        <img src="{{ asset('assets/img/business.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-7 mt-5 text-left">
                                        <p class="card-title">
                                            NEWS
                                        </p>
                                        <p class="card-subtitle">
                                            ¿Por qué mi programacion es mejor que el tuyo?
                                        </p>
                                    </div>

                                    <hr class="mt-4">
                                </div>

                                <div class="row">
                                    <div class="col-5 mt-5">
                                        <img src="{{ asset('assets/img/business.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-7 mt-5 text-left">
                                        <p class="card-title">
                                            NEWS
                                        </p>
                                        <p class="card-subtitle">
                                            ¿Por qué mi programacion es mejor que el tuyo?
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 mt-5">
                                        <img src="{{ asset('assets/img/business.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-7 mt-5 text-left">
                                        <p class="card-title">
                                            NEWS
                                        </p>
                                        <p class="card-subtitle">
                                            ¿Por qué mi programacion es mejor que el tuyo?
                                        </p>
                                    </div>

                                    <hr class="mt-4">
                                </div>

                                <div class="row">
                                    <div class="col-5 mt-5">
                                        <img src="{{ asset('assets/img/business.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-7 mt-5 text-left">
                                        <p class="card-title">
                                            NEWS
                                        </p>
                                        <p class="card-subtitle">
                                            ¿Por qué mi programacion es mejor que el tuyo?
                                        </p>
                                    </div>

                                    <hr class="mt-4">
                                </div>


                                <div class="row">
                                    <div class="col-5 mt-5">
                                        <img src="{{ asset('assets/img/business.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-7 mt-5 text-left">
                                        <p class="card-title">
                                            NEWS
                                        </p>
                                        <p class="card-subtitle">
                                            ¿Por qué mi programacion es mejor que el tuyo?
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>



  </div>
</div>
<script>
    let BlogData = {!! json_encode($blogs) !!};
    let allBlog = {{$totalItemsBlogs}};

    let routeBlog = "{{ route('PageHome')}}";
    let CountBlog = {{ $countSearch }};

    let url = `{{ url('/') }}`;
    let currentIndex = 0;
    let batchSize = 3;

    function addBlogItems(startIndex, endIndex) {
        let blogContainer = document.getElementById('container-blog');

        for (let i = startIndex; i < endIndex; i++) {
            if (BlogData[i + 3] && CountBlog <= allBlog) {
                let blog = BlogData[i + 3];
                CountBlog++;
                let blogItem = document.createElement('div');

                blogItem.className = 'cards-notices mx-auto';
                blogItem.innerHTML = `
                    <div class="card mb-3" style="max-width: 1047px; max-height:800px; padding:40px 20px 30px 20px;">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="${url+'/'+'storage/'+blog.image}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 style="overflow: hidden;">
                                        <span class="title-blog" style="float: left;">${blog.title}</span>
                                        <span class="text-muted" style="float: right;">${blog.author} | ${blog.date}</span>
                                    </h5>
                                    <hr>
                                    <p class="card-text">${blog.description}</p>
                                    <div class="py-2 text-left">
                                        <a type="submit" class="btn btn-primary solid blank" style="padding:5px 8px 10px 8px; width:170px; height:45px; font-size:20px;" href="${routeBlog + '/blog/' + blog.slug}">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                  

                blogContainer.appendChild(blogItem);
                       
            }
        }
        document.getElementById("ShowResults").textContent = 'Showing ' + CountBlog + ' results of ' + allBlog;
        
    }

    // Load more
    function loadMoreItems() {
        let nextIndex = currentIndex + batchSize;
        addBlogItems(currentIndex, nextIndex);
   
        currentIndex = nextIndex;
        
       
        if (currentIndex >= BlogData.length) {
            document.getElementById('loadMoreButtonBlog').style.display = 'none';
        }
    }

    document.getElementById('loadMoreButtonBlog').addEventListener('click', loadMoreItems);

    addBlogItems(0, currentIndex);

</script>
