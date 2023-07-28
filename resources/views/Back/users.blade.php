@extends('Back.master')


 @section('main-content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Users Table Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Users Table Info</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                              <a href="" class="btn btn-primary btn-lg"><i class="fas fa-users me-1"></i> Add User</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                        $p=1;
                                           
                                        @endphp
                                        @if (count($users)>0)
                                            @foreach ( $users as $user )
                                            <tr>
                                                <td>{{$p++}}</td>
                                                <td>{{$user->id}}</td>
                                                <td>{{ucwords($user->name)}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i> </a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i> </a>
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