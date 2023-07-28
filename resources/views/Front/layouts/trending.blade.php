<div class="sidebar-widget product-sidebar mb-50 p-30 bg-grey border-radius-10">
                                <h5 class="section-title style-1 mb-30">Trending Now</h5>
                                

@if (count($products)>0) 
    @foreach ($products as $product)
     
        <div class="single-post clearfix">
                                        <div class="image">
                                        <img src="{{ asset('images/products/' . $product->productImage) }}" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h5><a href="shop-product-detail.html">{{$product->productName }}</a></h5>
                                            <p class="price mb-0 mt-5">{{$product->productPrice }}</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>

        
    @endforeach
    
@endif
                                
                                



