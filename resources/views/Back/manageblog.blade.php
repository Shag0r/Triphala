@extends('Back.master')


 @section('main-content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blog  Information</li>
                        </ol>
                        <div class="container-fluid px-4">
                        <h1 class="mt-4">Blog Table Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blog Table Info</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                              <a href="{{Route('blog')}}" class="btn btn-primary btn-lg"><i class="fas fa-users me-1"></i> Add Blog</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            
                                            <th>Blog Title</th>
                                            <th>Blog Author</th>
                                            <th>Blog Description</th>
                                            <th>Blog Catagory</th>
                                            <th>Blog Image</th>
                                            <th>Blog Summary</th>
                                            <th>Blog Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Serial No.</th>
                                            
                                            <th>Blog Title</th>
                                            <th>Blog Author</th>
                                            <th>Blog Description</th>
                                            <th>Blog Catagory</th>
                                            <th>Blog Image</th>
                                            <th>Blog Summary</th>
                                            <th>Blog Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                        $b=1;
                                           
                                        @endphp
                                        @if (count($blogs)>0)
                                            @foreach ( $blogs as $blog )
                                            <tr>
                                                <td>{{$b++}}</td>
                                                <th>{{$blog->blogtitle}}</th>
                                                <th>{{$blog->blogauthor}}</th>
                                                <th>{{$blog->blogdes}}</th>
                                                <th>{{$blog->blogcata}}</th>
                                                
                                                <th><img src="{{ asset('images/blogimgs/' . $blog->blogImg) }}" width="150px" height="100px" alt=""></th>

                                                <th>{{$blog->blogsum}}</th>
                                                <th>
                                                <td>@if( $blog->blogstatus==1)
                                                        <a href="{{Route('inactiveblog',$blog->id)}}" class="btn btn-success  btn-sm">
                                                            <i class="fas fa-check"></i>Active
                                                        </a>
                                                    @else
                                                    <a href="{{Route('activeblog',$blog->id)}}" class="btn btn-danger  btn-sm">
                                                        <i class="fas fa-times"></i>
                                                        Draft
                                                    </a>
                                                    @endif
                                                </td>
                                                </th>
                                                <td>
                                                <a href="{{Route('updateblog',$blog->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i> </a>
                                                <a href="{{Route('deleteblog', $blog->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i> </a>
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