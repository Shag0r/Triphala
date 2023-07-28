@extends('Front.master')

@section('main-content')

<main class="main">
 @include('Front.shopyout.headbanner')
        <div class="container mb-30">
            <div class="row flex-row-reverse">
                <div class="col-lg-4-5">
                   
                    <div class="row product-grid">
                      @include('Front.shopyout.product')
                        <!--end product card-->
                        
                        <!--end product card-->
                    </div>
                    <!--product grid-->
                    <div class="pagination-area mt-20 mb-20">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                
                                    
                            </ul>
                        </nav>
                    </div>
                    
                    <!--End Deals-->

                    
                </div>
                <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                   @include('Front.layouts.catagory')
                    <!-- Fillter By Price -->
                    
                    <!-- Product sidebar Widget -->
                    <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                        @include('Front.shopyout.new')
                        
                    </div>
                    <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                        <img src="{{asset('Front')}}/assets/imgs/banner/banner-11.png" alt="" />
                        <div class="banner-text">
                            <span>Acqua </span>
                            <h4>
                                Save 17% <br />
                                on <span class="text-brand">Acqu</span><br />
                                Product
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>




@endsection