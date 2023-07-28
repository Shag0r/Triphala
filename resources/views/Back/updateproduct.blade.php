@extends('Back.master')

@section('main-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Product Information</li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('updatesaveproduct', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="productName" class="form-control" placeholder="Enter Product Name"
                            value="{{ $product->productName }}">
                        @error('productName')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="productCatagory" placeholder="Product Category"
                                    class="form-control" value="{{ $product->productCatagory }}">
                                @error('productCatagory')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="productPrice" placeholder="Product Price" class="form-control"
                                    value="{{ $product->productPrice }}">
                                @error('productPrice')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group mb-3">
                            <input type="file" name="productImage" placeholder="Product Image" class="form-control">
                            @error('productImage')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($product->productImage)
                            <div class="mb-3">
                                <img src="{{ asset('images/products/' . $product->productImage) }}"
                                    alt="Product Image" style="max-height: 200px;">
                            </div>
                        @endif
                    </div>
                    <div class="form-group b-3">
                        <label for="" class="form-label">Status</label>
                        <select class="form-select form-select-lg w-100 form-control" name="productStatus">
                            <option value="1" @if ($product->productStatus == 1) selected @endif>Published</option>
                            <option value="0" @if ($product->productStatus == 0) selected @endif>Unpublished</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary w-50">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
