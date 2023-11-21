<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset('admin')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
</head>

<body>
    <div class="login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="mb-3">Register Now</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="{{ route('register') }}" class="row g-4" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <label>Name<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"></div>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{old('name')}}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"></div>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Phone<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"></div>
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" value="{{old('phone')}}">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"></div>
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Confirm Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"></div>
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter Confirm Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Photo<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"></div>
                                                <input type="file" id="photo" name="photo" class="form-control">
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6"><a href="{{route('login')}}" class="btn btn-primary px-4 mt-4">Login</a></div>
                                                <div class="col-md-6"> <button type="submit" class="btn btn-primary px-4 float-end mt-4">Register</button></div>
                                            </div>




                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('admin')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin')}}/js/custom.js"></script>
</body>

</html>