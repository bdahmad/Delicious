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
        <div class="col-md-12">
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>All Event Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <a href="{{route('event.add')}}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Event</a>
                    </div>  
                </div>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped table-hover custom_table">
                  <thead class="table-dark">
                    <tr>
                      <th>Title</th>
                      <th>Price</th>
                      <th>Description 1</th>
                      <th>Offer 1</th>
                      <th>Offer 2</th>
                      <th>Offer 3</th>
                      <th>Description 2</th>
                      <th>Photo</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($all as $data)
                    <tr>
                      <td>{{$data->event_title}}</td>
                      <td>{{$data->event_price}}</td>
                      <td>{{$data->event_description1}}</td>
                      <td>{{$data->event_offer1}}</td>
                      <td>{{$data->event_offer2}}</td>
                      <td>{{$data->event_offer3}}</td>
                      <td>{{$data->event_description2}}</td>
                      <td>
                        @if($data->event_image)
                          <img height="30px" src="{{asset('uploads/event/'.$data->event_image)}}" alt="">
                          @else
                          <img height="30px" src="{{asset('admin')}}/images/avatar.png" alt="avatar" />
                        @endif
                      </td>
                      <td>
                          <div class="btn-group btn_group_manage" role="group">
                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('user.view',$data->event_id)}}">View</a></li>
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