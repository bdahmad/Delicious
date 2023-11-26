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
                        <i class="fab fa-gg-circle"></i>Contact Information
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
                      <th>Phone 1</th>
                      <th>Phone 2</th>
                      <th>Phone 3</th>
                      <th>Phone 4</th>
                      <th>Email 1</th>
                      <th>Email 2</th>
                      <th>Email 3</th>
                      <th>Email 4</th>
                      <th>Address 1</th>
                      <th>Address 2</th>
                      <th>Address 3</th>
                      <th>Address 4</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($all as $data)
                    <tr>
                      <td>{{$data->phone1}}</td>
                      <td>{{$data->phone2}}</td>
                      <td>{{$data->phone3}}</td>
                      <td>{{$data->phone4}}</td>
                      <td>{{$data->email1}}</td>
                      <td>{{$data->email2}}</td>
                      <td>{{$data->email3}}</td>
                      <td>{{$data->email4}}</td>
                      <td>{{$data->address1}}</td>
                      <td>{{$data->address2}}</td>
                      <td>{{$data->address3}}</td>
                      <td>{{$data->address4}}</td>
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