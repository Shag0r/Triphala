@extends('Back.master')


 @section('main-content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">video</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Video Information</li>
                        </ol>
                        
                        <div class="row">
        <div class="col-lg-12">
                <form action="{{route('addvideo')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="text" name="vtitle" class="form-control" placeholder="Enter Video Title">
                        @error('vtitle')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="vcata" placeholder="Video Category" class="form-control">
                                @error('vcata')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="vsource" placeholder="Video Source" class="form-control">
                                @error('vsource')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <textarea class="form-control" placeholder="Enter Video Summary" name="vsumm" rows="3"></textarea>
                        @error('vsumm')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="file" name="video" id="" placeholder="Upload Video" class="form-control">
                        @error('video')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group b-3">
                        <label for="" class="form-label">Status</label>
                        <select class="form-select form-select-lg w-100 form-control" name="vstatus">
                            <option selected>-----Select one----</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                        @error('vstatus')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary w-50">
                            Add Video
                        </button>
                    </div>
                </form>

            
        </div>
                        
                    </div>
                    @endsection





                    <!-- 

                    
                     -->