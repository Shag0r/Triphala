
@extends('Front.master')

@section('main-content')
@include('Front.homeout.frontbanner')
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
                       @include('Front.homeout.homarticle')
                        @include('Front.layouts.paginationarea')
                        <div class="row flex-row-reverse">
                            <div class="col-lg-4-5">
                                <h3>
                                    <img class="w-36px mr-10" src="{{asset('Front')}}/assets/imgs/theme/icons/category-1.svg" alt="" />
                                     Products
                                </h3>

                   
                    <div class="row product-grid">
                      @include('Front.homeout.homeproduct')
                        <!--end product card-->
                        
                        <!--end product card-->
                    </div>
                    <!--product grid-->
                                <h3>
                                    <img class="w-36px mr-10" src="{{asset('Front')}}/assets/imgs/theme/icons/category-1.svg" alt="" />
                                     Traning
                                </h3>
                    @include('Front.homeout.homevideo')
                    <br>
                   
                    
                    <!--End Deals-->

                    
                </div>
               
            </div>
                       
                    </div>
                   
                </div>
            </div>
        </div>
    
@endsection
