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
                      @php
                $locale = session('locale');
                $targetLocale = ($locale == 'es') ? 'en' : 'es'; 
            @endphp

    <div class="card mb-3" style="max-width: 1047px; max-height:800px; padding:40px 20px 30px 20px;">
      <div class="row g-0">
        <div class="col-md-6">

          <img src="{{ asset('/storage/' . $blog['image']) }}" class="img-fluid rounded-start" alt="...">
        </div>

        <div class="col-md-6">
         <div class="card-body ">
         <h5 style="overflow: hidden;">
         @php 

          if($locale == 'es'){

            $blogTitle = $blog['titleEs'];
            $blogDescription =  $blog['descriptionEs'] ;
          }
          else {
            $blogTitle =$blog['title'];
            $blogDescription =  $blog['description'] ;

          }
        
         @endphp
        <span class="title-blog" style="float: left;">{{ $blogTitle }}</span>

        <span class="text-muted font-family: 'Lato', sans-serif;" style="float: right;">{{$blog['author']}} | {{$blog['date']}}</span>
        </h5>
         <hr>
          <p class="card-text">{{ $blogDescription }}</p>

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
  <p class="text-right padding-dinamic-show " id="ShowResults"><b class="" style="padding-right: 50rem;"> showing {{ $countSearch }} results of {{$totalItemsBlogs}}</b></p>
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
                    @foreach ($blogs1 as $item)
                    
                    <div class="col-5 mt-5">

                        <a href="https://staging.villartechnologies.com.ve/blog/{{ $item['slug'] }}">

                            <img src="{{ asset('/storage/' . $item['image']) }}" alt="" class="blog-image">
                        </a>
                        
                    </div>

                    <div class="col-7 mt-5 text-left">
                        <p class="card-title">
                            {{ $item->categoryBlog->name }}

                        </p>
                        <p class="card-subtitle">
                            {{ $item->title }}
                        </p>

                        
                    </div>
                    
                    <hr class="mt-4" style="opacity: 1;">
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @foreach ($blogs2 as $item)

                    <div class="col-5 mt-5">

                        <a href="https://staging.villartechnologies.com.ve/blog/{{ $item['slug'] }}">
                        <img src="{{ asset('/storage/' . $item['image']) }}" alt="" class="blog-image">
                        </a>
                    </div>

                    <div class="col-7 mt-5 text-left">
                        <p class="card-title">
                          {{ $item->categoryBlog->name }}
                        </p>
                        <p class="card-subtitle">
                            {{ $item['title'] }}

                        </p>
                    </div>
                    
                    <hr class="mt-4" style="opacity: 1;">
                    @endforeach

                </div>

            </div>
        </div>
    </div>

</div>

  </div>
</div>

<style>
   .blog-image {
                width: 100%; /* Establece un ancho fijo para las imágenes */
                height: 113px; /* Permite que la altura se ajuste proporcionalmente */
                }
</style>

<script>
    let BlogData = {!! json_encode($blogs) !!};
    let allBlog = {{$totalItemsBlogs}};
    let localSession = "{{ $locale }}";



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
                let blogTitle;
            let blogDescription;
                if(localSession == "es"){
                   blogTitle = blog.titleEs;
                   blogDescription =  blog.descriptionEs ;
                  }
                  else {
                  blogTitle =blog.title;
                   blogDescription =  blog.description ;
                }

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
                                        <span class="title-blog" style="float: left;">${blogTitle}</span>
                                        <span class="text-muted" style="float: right;">${blog.author} | ${blog.date}</span>
                                    </h5>
                                    <hr>
                                    <p class="card-text">${blogDescription}</p>
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
