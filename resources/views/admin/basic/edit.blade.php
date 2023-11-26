@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12 breadcumb_part">
        <div class="bread">
            <ul>
                <li><a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i>Home</a></li>
                <li><a href=""><i class="fas fa-angle-double-right"></i>Manage</a></li>                             
                <li><a href=""><i class="fas fa-angle-double-right"></i>Basic</a></li>                             
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 ">
        <form method="" action="">
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Basic Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <!-- <a href="all-user.html" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a> -->
                    </div>  
                </div>
              </div>
              <div class="card-body">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Company Name:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="" value="{{$all->basic_company_name}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Title:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="" value="{{$all->basic_title}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Logo:</label>
                    <div class="col-sm-4">
                      <input type="file" class="form-control form_control" id="" name="">
                    </div>
                    <div class="col-sm-3">
                      <img src="{{url('uploads/no_image.jpg') }}" class="rounded-circle p-1 bg-primary" alt="Admin" style=" width: 100px; height: 100px;" id="showImg">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Footer Logo:</label>
                    <div class="col-sm-4">
                      <input type="file" class="form-control form_control" id="" name="">
                    </div>
                    <div class="col-sm-3">
                      <img src="{{url('uploads/no_image.jpg') }}" class="rounded-circle p-1 bg-primary" alt="Admin" style=" width: 100px; height: 100px;" id="showImg">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Favicon:</label>
                    <div class="col-sm-4">
                      <input type="file" class="form-control form_control" id="" name="">
                    </div>
                    <div class="col-sm-3">
                      <img src="{{url('uploads/no_image.jpg') }}" class="rounded-circle p-1 bg-primary" alt="Admin" style=" width: 100px; height: 100px;" id="showImg">
                    </div>
                  </div>
                </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
              </div>  
            </div>
        </form>
    </div>
</div>
@endsection