@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12 breadcumb_part">
      <div class="bread">
          <ul>
              <li><a href=""><i class="fas fa-home"></i>Home</a></li>
              <li><a href=""><i class="fas fa-angle-double-right"></i>Manage</a></li>                             
              <li><a href=""><i class="fas fa-angle-double-right"></i>Contact</a></li>                             
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
                      <i class="fab fa-gg-circle"></i>Contact Information
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <!-- <a href="all-user.html" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a> -->
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Phone No-1: </label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="" value="{{$all->contact_phone1}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Phone No-2:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="" value="{{$all->contact_phone2}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Phone No-3:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="" value="{{$all->contact_phone3}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Phone No-4:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="" value="{{$all->contact_phone4}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Email Address-1:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control form_control" id="" name="" value="{{$all->contact_email1}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Email Address-2:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control form_control" id="" name="" value="{{$all->contact_email2}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Email Address-3:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control form_control" id="" name="" value="{{$all->contact_email3}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Email Address-4:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control form_control" id="" name="" value="{{$all->contact_email4}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Address-1:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="" value="{{$all->contact_address1}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Address-2:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="" value="{{$all->contact_address2}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Address-3:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="" value="{{$all->contact_address3}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Address-4:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="" value="{{$all->contact_address4}}">
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