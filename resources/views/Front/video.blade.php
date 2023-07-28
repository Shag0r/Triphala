@extends('Front.master')

@section('main-content')
<div class="loop-grid loop-list pr-30 mb-50">



<!-- @if (count($videos)>0)
    @foreach ($videos as $video )
                <article class="wow fadeIn animated hover-up mb-30 animated">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="{{ Storage::url($video->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="entry-content-2 pl-50">
                        <h3 class="post-title mb-20">
                            <a href="blog-post-right.html">{{$video->vtitle }}</a>
                        </h3>
                        <p class="post-excerpt mb-40">  {{$video->vsumm}}</p>
                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                            <div>
                                <span class="post-on"> {{$video->vcata}}</span>
                                <span class="hit-count has-dot"> {{$video->updated_at}}</span>
                            </div>
                            <a href="#" class="text-brand font-heading font-weight-bold"> {{$video->vsource}} <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </article>


        
    @endforeach

    
@endif -->
@if (count($videos) > 0)
    @foreach ($videos as $video)
        @if ($video->vstatus == 1)
            <article class="wow fadeIn animated hover-up mb-30 animated">
                <div class="embed-responsive embed-responsive-16by9" style="height: 300px; width: 300px;">
                    <video class="embed-responsive-item" controls>
                        <source src="{{ Storage::url($video->video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="entry-content-2 pl-50">
                    <h3 class="post-title mb-20">
                        <a href="blog-post-right.html">{{ $video->vtitle }}</a>
                    </h3>
                    <p class="post-excerpt mb-40">{{ $video->vsumm }}</p>
                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                        <div>
                            <span class="post-on">{{ $video->vcata }}</span>
                            <span class="hit-count has-dot">{{ $video->updated_at }}</span>
                        </div>
                        <a href="#" class="text-brand font-heading font-weight-bold">{{ $video->vsource }} <i
                                class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </article>
        @endif
    @endforeach
@endif





@endsection