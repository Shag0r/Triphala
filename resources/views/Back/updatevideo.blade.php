@extends('Back.master')

@section('main-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Video</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Video Information</li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <form action="{{Route('updatevideosave',$video->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="text" name="vtitle" class="form-control" placeholder="Enter Video Title" value="{{ $video->vtitle }}">
                        @error('vtitle')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="vcata" placeholder="Video Category" class="form-control" value="{{ $video->vcata }}">
                                @error('vcata')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="vsource" placeholder="Video Source" class="form-control" value="{{ $video->vsource }}">
                                @error('vsource')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <textarea class="form-control" placeholder="Enter Video Summary" name="vsumm" rows="3">{{ $video->vsumm }}</textarea>
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
                    <video width="450" height="450" controls>
                                                        <!-- <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/mp4">
                                                    -->
                        <source src="{{ Storage::url($video->video) }}" type="video/mp4">


                        Your browser does not support the video tag.
                    </video>

                    <div class="form-group b-3">
                        <label for="" class="form-label">Status</label>
                        <select class="form-select form-select-lg w-100 form-control" name="vstatus">
                            <option value="1" {{ $video->vstatus == 1 ? 'selected' : '' }}>Published</option>
                            <option value="0" {{ $video->vstatus == 0 ? 'selected' : '' }}>Unpublished</option>
                        </select>
                        @error('vstatus')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary w-50">
                            Update Video
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
