@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 breadcumb_part">
            <div class="bread">
                <ul>
                    <li><a href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href=""><i class="fas fa-angle-double-right"></i>Gallery</a></li>                             
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <form method="post" action="{{route('gallery.insert')}}" enctype="multipart/form-data">
              @csrf
                <div class="card mb-3">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_title_part">
                            <i class="fab fa-gg-circle"></i>Add Gallery
                        </div>  
                        <div class="col-md-4 card_button_part">
                          <a href="{{route('gallery')}}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Gallery</a>
                          </div>  
                    </div>
                  </div>
                  <div class="card-body">
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                        <div class="col-sm-7">
                          <input type="file" class="form-control form_control" id="" name="gallery_image">
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