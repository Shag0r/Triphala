@extends('Front.master')

@section('main-content')
    @include('Front.layouts.pageheader')
        <div class="page-content mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter mb-50 pr-30">
                            <div class="totall-product">
                                <h3>
                                    <img class="w-36px mr-10" src="{{asset('Front')}}/assets/imgs/theme/icons/category-1.svg" alt="" />
                                     Articles
                                </h3>
                            </div>
                            
                        </div>
                       @include('Front.layouts.blog')
                        @include('Front.layouts.paginationarea')
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            
                            @include('Front.layouts.catagory')
                            <!-- Product sidebar Widget -->
                           @include('Front.layouts.trending')
                         
                            <!--Tags-->
                     
                            @include('Front.layouts.offerbanner')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
