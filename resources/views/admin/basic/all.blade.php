@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 breadcumb_part">
            <div class="bread">
                <ul>
                    <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                    <li><a href=""><i class="fas fa-angle-double-right"></i>Manage</a></li>                             
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
                        <i class="fab fa-gg-circle"></i>Basic Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <!-- <a href="#" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add User</a> -->
                    </div>  
                </div>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped table-hover custom_table">
                  <thead class="table-dark">
                    <tr>
                      <th>Conpany Name</th>
                      <th>Title</th>
                      <th>Logo</th>
                      <th>Footer Logo</th>
                      <th>Favicon</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($all as $data)
                    <tr>
                      <td>{{$data->basic_company_name}}</td>
                      <td>{{$data->basic_title}}</td>
                      <td>
                        @if($data->basic_logo)
                          <img height="30px" src="{{asset('uploads/manage/'.$data->basic_logo)}}" alt="">
                          @else
                          <img height="30px" src="{{asset('admin')}}/images/avatar.png" alt="avatar" />
                        @endif
                      </td>
                      <td>
                        @if($data->basic_footer_logo)
                          <img height="30px" src="{{asset('uploads/manage/'.$data->basic_footer_logo)}}" alt="">
                          @else
                          <img height="30px" src="{{asset('admin')}}/images/avatar.png" alt="avatar" />
                        @endif
                      </td>
                      <td>
                        @if($data->basic_favicon)
                          <img height="30px" src="{{asset('uploads/manage/'.$data->basic_favicon)}}" alt="">
                          @else
                          <img height="30px" src="{{asset('admin')}}/images/avatar.png" alt="avatar" />
                        @endif
                      </td>
                      <td>
                          <div class="btn-group btn_group_manage" role="group">
                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">View</a></li>
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