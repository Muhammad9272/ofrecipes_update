@extends('front.layouts.app')
@section('title', 'Blogs — ')
@section('page_content')
    <div class="ps-breadcrumb">
      <div class="container def-pad">
        <ul class="breadcrumb">
          <li><a class="" href="{{route('front.index')}}">Home</a></li>
          <li class="text-white">Blog</li>
           
        </ul>
      </div>
    </div>


    <div class="ps-page--blog">
      <div class="container def-pad">
        <div class="ps-page__header">
          <h1 class="text-center " >Our Press</h1>
        </div>
        <div class="ps-blog__header">
            <ul class="ps-list--blog-links">
              <li class="{{$bslg=="All"?'active':''}}"><a href="{{route('front.recipe',$blogpgSlug->slug)}}">All</a></li>
              @foreach($b_cats as $b_cat)
                <li class="{{$b_cat->slug==$bslg?'active':''}}"><a href="{{route('front.blog.cat',['slug'=>$blogpgSlug->slug,'slug1'=>$b_cat->slug])}}">{{$b_cat->name}}</a></li>
              @endforeach
              
            </ul>
          </div>
        <div class="ps-blog--sidebar">

          <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mt-100">                        
              <div class="row blog-pg-tag">
                    @if(count($datas)>0)
                       @foreach($datas as $datarow)
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="ps-post">
                              <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{route('front.blog.detail',$datarow->slug)}}"></a><img src="{{asset($datarow->photo)}}" alt="">
                                
                              </div>
                              <div class="ps-post__content">
                                <div class="ps-post__meta">
                                   
                                   <div class="blog-li-span">
                                    @if($datarow->publish_check==1 && $datarow->publish_date)
                                    <span class="sp-txt"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{ Carbon\Carbon::parse($datarow->publish_date)->format('M d, Y') }}</span>
                                    @endif
                                    
                                    <span class="sp-txt">{{$datarow->category->name}}</span>
                                   </div>
                                </div>
                                <a class="ps-post__title" href="{{route('front.blog.detail',$datarow->slug)}}">{{$datarow->title}}</a>
                                <p class="sp-txt">{{ Illuminate\Support\Str::limit($datarow->small_desc, 130) }}</p>
                                <a href="{{route('front.blog.detail',$datarow->slug)}}" class="ps-post__title_read">Read more</a>
                              </div>
                            </div>
                          </div> 
                       @endforeach 
                    @else
                    <h2>No Data Found</h2>
                    @endif
                   
                        
              </div>
              <div class="ps-pagination">
                <ul class="pagination">
                  <li>
                   {{$datas->Oneachside(2)->links('includes.pagination.default')}} 
                  </li>
                </ul>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
  
                @include('front.layouts.sidebar')

          </div>
        </div>
      </div>
    </div>


  <div class="row">
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "></div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "></div>
  </div>


@endsection


