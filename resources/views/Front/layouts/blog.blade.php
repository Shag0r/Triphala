<div class="loop-grid loop-list pr-30 mb-50">
                         
                          
                            @if (count($blogs)>0) 
                                @foreach ($blogs as $blog )
                                    <article class="wow fadeIn animated hover-up mb-30 animated">
                                        <div class="post-thumb" style="background-image: url({{asset('images/blogimgs/'.$blog->blogImg)}})"></div>
                                        <div class="entry-content-2 pl-50">
                                            <h3 class="post-title mb-20">
                                                <a href="#">{{$blog->blogtitle}}</a>
                                            </h3>
                                            <p class="post-exerpt mb-40">{{$blog->blogsum}}</p>
                                            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                                <div>
                                                    <span class="post-on">{{$blog->blogcata}}</span>
                                                    <span class="hit-count has-dot">{{$blog->created_at}}</span>
                                                </div>
                                                <a href="#" class="text-brand font-heading font-weight-bold">{{$blog->blogauthor}}<i class="fi-rs-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                    
                                @endforeach
                                
                            @endif
                       
                           
                           
                          
                           
</div>