@extends('layout.app')

@section('content')

  <section class="ae-container-fluid ae-container-fluid--inner rk-blog">
        <div class="rk-blog__items">
        @foreach($posts as $blog)

          <div class="rk-blog__item">
               {{--  <div class="post-img post-1 rk-landscape-alt rk-tosquare">
               <div class="item-meta">
                <p><a href="/blog/{{$blog->id}}" class="arrow-button">Read More<span class="arrow-cont">
                      <svg>
                         <use xlink:href="/assets/img/symbols.svg#arrow"></use> 
                      </svg></span></a></p>
              </div> 
            </div>     --}}
            <div class="blog-info">
              <h2 class="blog-info__title"> <a href="/blog/{{$blog->id}}">{{ $blog->title }}</a></h2>
              <h5 class="blog-info__author">By <a href="#" class="ae-u-bolder">{{$blog->author}}</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$blog->created_at->toFormattedDateString()}}</h5>
               <div class="post-img post-1 rk-landscape-alt rk-tosquare" style="background-image: url(storage/{{ $blog->image_url }}); width: 100%; height: 40%;">
               <div class="item-meta">
                <p>
                {{--  <a href="/blog/{{$blog->id}}" class="arrow-button">Read More<span class="arrow-cont">
                      <svg>
                         <use xlink:href="/assets/img/symbols.svg#arrow"></use> 
                      </svg></span>
                      </a>  --}}
                      </p>
              </div> 
            </div>   
               {{--  <span class="ae-kappa ae-u-bold blog-meta__date">{{$blog->created_at->toFormattedDateString()}}</span>  --}}
              <p class="blog-info__excerpt">{!! $blog->description !!}</p>
            </div>
             <div class="blog-meta">
              <a href="#" class="ae-u-bolder blog-meta__comments"></a> 
            <a href="/blog/{{$blog->id}}" class="arrow-button blog-meta__read-more">Read More<span class="arrow-cont"> 
                  <svg>
                    <use xlink:href="assets/img/symbols.svg#arrow"></use>
                  </svg></span></a>
                  </div>
          </div>

          @endforeach

  
              @include('pagination.default', ['paginator' => $posts])    
              {{--  {{ $posts->links() }}      --}}

        </div>
      </section>

@endsection