@extends('Back.master')


 @section('main-content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product Information</li>
                        </ol>
                        <div class="container-fluid px-4">
                        <h1 class="mt-4">Users Table Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Users Table Info</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                              <a href="{{Route('product')}}" class="btn btn-primary btn-lg"><i class="fas fa-users me-1"></i> Add product</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            
                                            <th>Product Name</th>
                                            <th>Product Catagory</th>
                                            <th>Product Image</th>
                                            <th>Product Price</th>
                                            <th>Product Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Serial No.</th>
                                            
                                            <th>Product Name</th>
                                            <th>Product Catagory</th>
                                            <th>Product Image</th>
                                            <th>Product Price</th>
                                            <th>Product Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                        $p=1;
                                           
                                        @endphp
                                        @if (count($products)>0)
                                            @foreach ( $products as $product )
                                            <tr>
                                                <td>{{$p++}}</td>
                                                <th>{{ $product->productName}}</th>
                                                <th>{{$product->productCatagory}}</th>
                                                <th><img src="{{ asset('images/products/' . $product->productImage) }}" width="150px" height="100px" alt=""></th>

                                                <th>{{$product->productPrice}}</th>
                                                <th>
                                                <td>@if($product->productStatus==1)
                                                        <a href="{{Route('inactiveproduct', $product->id)}}" class="btn btn-success  btn-sm">
                                                            <i class="fas fa-check"></i>Active
                                                        </a>
                                                    @else
                                                    <a href="{{Route('activeproduct', $product->id)}}" class="btn btn-danger  btn-sm">
                                                        <i class="fas fa-times"></i>
                                                        Draft
                                                    </a>
                                                    @endif
                                                </td>
                                                </th>
                                                <td>
                                                <a href="{{Route('updateproduct', $product->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i> </a>
                                                <a href="{{Route('deleteproduct',$product->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i> </a>
                                                </td>
                                            
                                            </tr>

                                                
                                            @endforeach
                                        
                                            
                                        @endif
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                        
                    </div>
                        
                       
                        
                    </div>
                    @endsection