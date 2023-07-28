@extends('Back.master')


 @section('main-content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Video Table Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Video Table Info</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                              <a href="{{Route('video')}}" class="btn btn-primary btn-lg"><i class="fas fa-users me-1"></i> Add Video</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>Title</th>
                                            <th>Catagory</th>
                                            <th>Source</th>
                                            <th>Summary</th>
                                            <th>video</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>Title</th>
                                            <th>Catagory</th>
                                            <th>Source</th>
                                            <th>Summary</th>
                                            <th>video</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- @php
                                        $v=1;
                                        

                                            

                                        @endphp -->
                                        @if (count($videos)>0)
                                            @foreach ($videos as $video )
                                                <!-- @php
                                                    $v=1;
                                            

                                                

                                                @endphp -->
                                                <tr>
                                                    <td>{{ $loop->iteration}}</td>
                                                    <td>{{$video->vtitle}}</td>
                                                    <td>{{$video->vcata}}</td>
                                                    <td>{{$video->vsource}}</td>
                                                    <td>{{$video->vsumm}}</td>
                                                    <td>
                                                        <video width="150" height="150" controls>
                                                        <!-- <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/mp4">
                                                    -->
                                                            <source src="{{ Storage::url($video->video) }}" type="video/mp4">


                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </td>
                                                    
                                                    <td>@if( $video->vstatus==1)
                                                            <a href="{{Route('inactive',$video->id)}}" class="btn btn-success  btn-sm">
                                                                <i class="fas fa-check"></i>Active
                                                            </a>
                                                        @else
                                                        <a href="{{Route('active',$video->id)}}" class="btn btn-danger  btn-sm">
                                                            <i class="fas fa-times"></i>
                                                            Draft
                                                        </a>
                                                        @endif
                                                    </td>
                                                    
                                                    <td>
                                                    <a href="{{Route('updatevideo',$video->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i> </a>
                                                    <a href="{{Route('deletevideo', $video->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i> </a>
                                                    </td>
                                                
                                                </tr>
                                                
                                            @endforeach

                                            
                                        @endif
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                       
                        
                    </div>
                    @endsection