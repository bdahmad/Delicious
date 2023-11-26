@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 breadcumb_part">
            <div class="bread">
                <ul>
                    <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                    <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>                             
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>All User Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <a href="{{route('user.add')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add User</a>
                    </div>  
                </div>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped table-hover custom_table">
                  <thead class="table-dark">
                    <tr>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Action</th>
                      <th>Photo</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($all as $data)
                    <tr>
                      <td>{{$data->name}}</td>
                      <td>{{$data->phone}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->username}}</td>
                      <td>{{$data->role}}</td>
                      <td class="text-success">{{$data->status}}</td>
                      @php 
                        $status = App\Models\User::firstOrFail();
                        
                      @endphp
                      @if($data->status === "active")
                      <td><a href="{{route('user.status',$data->id)}}"  class="btn btn-danger btn-sm" >Inactive</a> 
                      </td>
                      @else
                      <td><a href="{{route('user.status',$data->id)}}"  class="btn btn-success btn-sm" >Active</a> </td>
                      @endif
                      <td>
                        @if($data->photo)
                          <img height="30px" src="{{asset('uploads/'.$data->photo)}}" alt="">
                          @else
                          <img height="30px" src="{{asset('admin')}}/images/avatar.png" alt="avatar" />
                        @endif
                      </td>
                      <td>
                          <div class="btn-group btn_group_manage" role="group">
                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('user.view',$data->id)}}">View</a></li>
                              <li><a class="dropdown-item" href="edit-user.html">Edit</a></li>
                              <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <div class="btn-group" role="group" aria-label="Button group">
                  <button type="button" class="btn btn-sm btn-dark">Print</button>
                  <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                  <button type="button" class="btn btn-sm btn-dark">Excel</button>
                </div>
              </div>  
            </div>
        </div>
    </div>
</div>

@endsection