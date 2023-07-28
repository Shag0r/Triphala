@extends('Back.master')


 @section('main-content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blog information Information</li>
                        </ol>
                        
                        <div class="row">
        <div class="col-lg-12">
            <form action="{{Route('addblog')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- error massage  -->
                <!-- /resources/views/post/create.blade.php -->

                <!-- <h1>Create Post</h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif -->

                <!-- Create Post Form -->
                <!-- error massage ends  -->

                <div class="form-group mb-3">

                    <input type="text" name="blogtitle" id="" class="form-control" placeholder="Enter Blog Title">
                    @error('blogtitle')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <input type="text" name="blogcata" id="" placeholder="Blog Catagory"
                                class="form-control">

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <input type="text" name="blogauthor" id="" placeholder="Blog Author"
                                class="form-control">
                            @error('blogauthor')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="col-8">
                        <div class="form-group mb-3">
                            <input type="file" name="blogImg" id="" placeholder="Blog Image"
                                class="form-control">
                            @error('blogImg')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                </div>
                    <div class="form-group mb-3">

                    <textarea class="form-control" placeholder="Enter Blog description" name="blogdes"
                        id="" col=" 30" rows="3"></textarea>
                    @error('blogdes')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">

                    <textarea class="form-control" placeholder="Enter Blog summary" name="blogsum"
                        id="" col=" 30" rows="3"></textarea>
                    @error('blogsum')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group b-3">

                    <label for="" class="form-label">Status</label>
                    <select class="form-select form-select-lg w-100 form-control" name="blogstatus" id="">
                        <option selected>-----Select one----</option>

                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary w-50">
                        ADD Blog
                    </button>
                </div>

        </div>

        </form>
    </div>
                        
                    </div>
                    @endsection