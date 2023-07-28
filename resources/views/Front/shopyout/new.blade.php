<h5 class="section-title style-1 mb-30">New products</h5>
                        

                        @php
                            $p=1;
                        @endphp
                        @if (count($products)>0)
                        @foreach ($products as $product)
                            @if ($product->productStatus==1)
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="{{ asset('images/products/' . $product->productImage) }}" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h5><a href="{{Route('Front.shop')}}">{{$product->productName }}</a></h5>
                                            <p class="price mb-0 mt-5">{{$product->productPrice }}</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                        </div>
                                </div>

                                
                            @endif   
                            @php
                                if ($p == 3) {
                                    break;
                                }
                                $p++;
                            @endphp                         
                        @endforeach
                            
                        @endif