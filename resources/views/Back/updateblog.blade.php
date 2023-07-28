@extends('Back.master')

@section('main-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Blog Information</li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <form action="{{route('updateblogsave',$blogs->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="blogtitle" class="form-control" placeholder="Enter Blog Title"
                            value="{{ $blogs->blogtitle }}">
                        @error('blogtitle')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="blogauthor" class="form-control" placeholder="Enter Blog Author"
                            value="{{ $blogs->blogauthor }}">
                        @error('blogauthor')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="blogdes" class="form-control" rows="3" placeholder="Enter Blog Description">{{ $blogs->blogdes }}</textarea>
                        @error('blogdes')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="blogcata" class="form-control" placeholder="Enter Blog Category"
                            value="{{ $blogs->blogcata }}">
                        @error('blogcata')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-8">
                        <div class="form-group mb-3">
                            <input type="file" name="blogImg" placeholder="Blog Image" class="form-control">
                            @error('blogImg')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($blogs->blogImg)
                            <div class="mb-3">
                                <img src="{{ asset('images/blogimgs/' . $blogs->blogImg) }}"
                                    alt="Blog Image" style="max-height: 200px;">
                            </div>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="blogsum" class="form-control" rows="3" placeholder="Enter Blog Summary">{{ $blogs->blogsum }}</textarea>
                        @error('blogsum')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group b-3">
                        <label for="" class="form-label">Status</label>
                        <select class="form-select form-select-lg w-100 form-control" name="blogstatus">
                            <option value="1" @if ($blogs->blogstatus == 1) selected @endif>Published</option>
                            <option value="0" @if ($blogs->blogstatus == 0) selected @endif>Unpublished</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary w-50">Update Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
