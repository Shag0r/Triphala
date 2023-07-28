@if (count($videos) > 0)
    @php $counter = 0; @endphp
    @foreach ($videos as $video)
        @if ($video->vstatus == 1 && $counter < 2)
            <article class="wow fadeIn animated hover-up mb-30 animated">
                <div class="embed-responsive embed-responsive-16by9" style="height: 300px; width: 300px;">
                    <video class="embed-responsive-item" controls>
                        <source src="{{ Storage::url($video->video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="entry-content-2 pl-50">
                    <h3 class="post-title mb-20" style="font-family: 'YourCustomFont', sans-serif; font-size: 24px; font-weight: bold;">
                        <a href="blog-post-right.html">{{ $video->vtitle }}</a>
                    </h3>
                </div>
            </article>
            @php $counter++; @endphp 
        @endif
        @if ($counter == 5)
            @break
        @endif
    @endforeach
@endif
