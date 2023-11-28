@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12 breadcumb_part">
        <div class="bread">
            <ul>
                <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>                             
                <li><a href=""><i class="fas fa-angle-double-right"></i>social</a></li>                             
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 ">
        <form method="post" action="{{route('social.update')}}">
          @csrf
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Social media Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <!-- <a href="all-user.html" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a> -->
                    </div>  
                </div>
              </div>
              <div class="card-body">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Facebook:</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="social_facebook" value="{{$all->social_facebook}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">LinkedIn:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_linkedin" value="{{$all->social_linkedin}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Instagram:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_instagram" value="{{$all->social_instagram}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Twitter:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_twitter" value="{{$all->social_twitter}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">WeChat:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_wechat" value="{{$all->social_wechat}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">What's App:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_whatsapp" value="{{$all->social_whatsapp}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Discord:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_discord" value="{{$all->social_discord}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Telegram:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_telegram" value="{{$all->social_telegram}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Github:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_github" value="{{$all->social_github}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Reddit:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="social_reddit" value="{{$all->social_reddit}}">
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