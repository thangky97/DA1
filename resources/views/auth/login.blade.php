<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Houzing - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">

    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}">

    <title>@yield('title')</title>

    <link href="{{ asset('client/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('client/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
</head>

<body>
    {{-- @if (Auth::user())
        <script>
            window.location.href = '/admin';
        </script>
    @endif --}}
    <div class="wrapper">
        <!-- Inner Page Breadcrumb -->
        <section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="breadcrumb_content">
                            <h2 class="breadcrumb_title">My Account</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('route_FrontEnd_home') }}">Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our SigIn -->
        <section class="our-log bgc-alice-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="login_form inner_page bgc-white mb30">
                            <form action="{{ url('/login') }}" method="post">
                                <h4 class="title">Đăng nhập</h4>
                                <div class="mb-2 mr-sm-2">
                                    <label for="formGroupExampleInput" class="form-label mb0">Email</label>
                                    <input type="text" name="email" class="form-control" id="formGroupExampleInput"
                                        placeholder="name@gmail.com">
                                </div>
                                <div class="form-group mb5">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <?php //Hiển thị thông báo thành công
                        ?>
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        <?php //Hiển thị thông báo lỗi
                        ?>
                        {{-- Hiển thị 1 lỗi --}}
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        {{-- Hiển thị nhiều lỗi --}}
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                                <button type="submit" class="btn btn-log btn-block btn-thm mt20">Đăng nhập</button>
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            </form>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="sign_up_form inner_page bgc-white">
                            <h4 class="title">Đăng ký</h4>
                            <form action="#">
                                <div class="form-group input-group">
                                    <input type="text" name="name" class="form-control" placeholder="Tên">
                                </div>
                                <div class="form-group input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group input-group">
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" name="address" class="form-control" placeholder="Địa chỉ">
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="Số điện thoại">
                                </div>
                                <div class="form-group input-group">
                                    <select class="selectpicker form-control" data-width="100%">
                                        <option data-tokens="banking">User role</option>
                                        <option data-tokens="digital&creative">User role 2</option>
                                    </select>
                                </div>
                                <div class="form-group input-group mb20">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-signup btn-block btn-dark mb0">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="{{ asset('client/js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('client/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('client/js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('client/js/isotop.js') }}"></script>
    <script src="{{ asset('client/js/snackbar.min.js') }}"></script>
    <script src="{{ asset('client/js/simplebar.js') }}"></script>
    <script src="{{ asset('client/js/parallax.js') }}"></script>
    <script src="{{ asset('client/js/scrollto.js') }}"></script>
    <script src="{{ asset('client/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('client/js/wow.min.js') }}"></script>
    <script src="{{ asset('client/js/progressbar.js') }}"></script>
    <script src="{{ asset('client/js/slider.js') }}"></script>
    <script src="{{ asset('client/js/pricing-slider.js') }}"></script>
    <script src="{{ asset('client/js/timepicker.js') }}"></script>
    <script src="{{ asset('client/js/wow.min.js') }}"></script>
    <!-- Custom script for all pages -->
    <script src="{{ asset('client/js/script.js') }}"></script>
</body>

</html>
