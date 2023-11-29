@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 breadcumb_part">
            <div class="bread">
                <ul>
                    <li><a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href=""><i class="fas fa-angle-double-right"></i>Event</a></li>                             
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <form method="post" action="{{route('event.insert')}}" enctype="multipart/form-data">
              @csrf
                <div class="card mb-3">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_title_part">
                            <i class="fab fa-gg-circle"></i>Add Events Information
                        </div>  
                        <div class="col-md-4 card_button_part">
                          <a href="{{route('event')}}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Event</a>
                          </div>  
                    </div>
                  </div>
                  <div class="card-body">
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Title<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" id="" name="event_title">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Price:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" id="" name="event_price">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Description<span class="req_star">*</span>: 1</label>
                        <div class="col-sm-7">
                          <textarea class="form-control form_control" name="event_description1" cols="3" rows="2"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Item<span class="req_star">*</span>: 1</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" id="" name="event_offer1">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Item<span class="req_star">*</span>: 2</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" id="" name="event_offer2">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Item<span class="req_star">*</span>: 3</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" id="" name="event_offer3">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Description<span class="req_star">*</span>: 2</label>
                        <div class="col-sm-7">
                          <textarea class="form-control form_control" name="event_description2" cols="3" rows="2"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                        <div class="col-sm-7">
                          <input type="file" class="form-control form_control" id="" name="event_image">
                        </div>
                      </div>
                  </div>
                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-sm btn-dark">SUBMIT</button>
                  </div>  
                </div>
            </form>
        </div>
    </div>
</div>
@endsection