@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 breadcumb_part">
            <div class="bread">
                <ul>
                    <li><a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i>Profile</a></li>                             
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <form method="post" action="{{route('profile.update.admin')}}" enctype="multipart/form-data">
              @csrf
                <div class="card mb-3">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_title_part">
                            <i class="fab fa-gg-circle"></i>Update Profile
                        </div>  
                        <div class="col-md-4 card_button_part">
                            <!-- <a href="all-user.html" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a> -->
                        </div>  
                    </div>
                  </div>
                  <div class="card-body">
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" id="" name="name" value="{{Auth::user()->name}}">
                        </div>
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" id="" name="phone" value="{{Auth::user()->phone}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control form_control" id="" name="email" value="{{Auth::user()->email}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Username<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" id="" name=""  value="{{Auth::user()->username}}" disabled>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                        <div class="col-sm-4">
                          <input type="file" class="form-control form_control" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" name="photo" >
                        </div>
                        <div class="col-sm-3">
                          @if(Auth::user()->photo != '')
                            <!-- $img = Auth::user()->photo; -->
                             <img src="{{asset('uploads/user/'.Auth::user()->photo)}}" alt="" id="img"  height=200px />
                          @else
                            <img src="{{asset('admin/images/avatar.jpg')}}" alt="" id="img"  height=200px />
                          @endif
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