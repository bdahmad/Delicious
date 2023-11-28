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
        <form method="post" action="{{route('basic.update')}}" enctype="multipart/form-data">
          @csrf
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
                      <input type="text" class="form-control form_control" id="" name="basic_company_name" value="{{$all->basic_company_name}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Title:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="basic_title" value="{{$all->basic_title}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Logo:</label>
                    <div class="col-sm-4">
                      <!-- onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])" -->
                      <input type="file" class="form-control form_control"  name="basic_logo">
                    </div>
                    <div class="col-sm-3">
                      @if($all->basic_logo)
                        <img src="{{url('uploads/no_image.jpg') }}"  alt="logo" style=" width: 100px; height: 100px;" id="logo">
                      @else
                        <img src="{{asset('uploads/no_image.png') }}"  alt="logo" style=" width: 100px; height: 100px;" id="logo">
                      @endif
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Footer Logo:</label>
                    <div class="col-sm-4">
                      <!-- onchange="document.getElementById('footer').src = window.URL.createObjectURL(this.files[0])" -->
                      <input type="file" class="form-control form_control"  name="basic_footer_logo">
                   
                    </div>
                    <div class="col-sm-3">
                      @if($all->basic_footer_logo)
                        <img src="{{url('uploads/no_image.jpg') }}" alt="footer" style=" width: 100px; height: 100px;" id="footer">
                      @else
                        <img src="{{asset('uploads/no_image.png') }}"  alt="footer" style=" width: 100px; height: 100px;" id="footer">
                      @endif
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Favicon:</label>
                    <div class="col-sm-4">
                       <!-- onchange="document.getElementById('fav').src = window.URL.createObjectURL(this.files[0])" -->
                      <input type="file" class="form-control form_control" name="basic_favicon">
                    </div>
                    <div class="col-sm-3">
                      @if($all->basic_favicon)
                        <img src="{{url('uploads/no_image.jpg') }}"  alt="footer" style=" width: 100px; height: 100px;" id="fav">
                      @else
                        <img src="{{asset('uploads/no_image.png') }}"  alt="footer" style=" width: 100px; height: 100px;" id="fav">
                      @endif
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Select Bar:</label>
                    <div class="col-sm-2">
                      <select class="form-select" name="bar_start">
                        <option selected>From</option>
                        <option value="SUN">SUN</option>
                        <option value="MON">MON</option>
                        <option value="TUE">TUE</option>
                        <option value="WED">WED</option>
                        <option value="THU">THU</option>
                        <option value="FRI">FRI</option>
                        <option value="SAT">SAT</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-select" name="bar_end">
                        <option selected>To</option>
                        <option value="SUN">SUN</option>
                        <option value="MON">MON</option>
                        <option value="TUE">TUE</option>
                        <option value="WED">WED</option>
                        <option value="THU">THU</option>
                        <option value="FRI">FRI</option>
                        <option value="SAT">SAT</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Select Hours:</label>
                    <div class="col-sm-2">
                      <input type="time" class="form-select" name="time_start">
                    </div>
                    <div class="col-sm-2">
                      <input type="time" class="form-select" name="time_end">
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