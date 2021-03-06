@extends('layouts.app')

@section('title')
    {{ $user->name }} Profile
@endsection

@section('content')
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Timeline</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('home') }}">
                                    <i class="feather icon-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">User Profile</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    <div class="content social-timeline">
                                        <div class="">
                                            <!-- Row Starts -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- Social wallpaper start -->
                                                    <div class="social-wallpaper">
                                                        <img src="{{ asset('assets/images/social/img1.jpg') }}" class="img-fluid width-100" alt="" />
                                                        <div class="profile-hvr">
                                                            <i class="icofont icofont-ui-edit p-r-10"></i>
                                                            <i class="icofont icofont-ui-delete"></i>
                                                        </div>
                                                    </div>
                                                    <!-- Social wallpaper end -->
                                                    <!-- Timeline button start -->
                                                    <div class="timeline-btn">
                                                        <a href="#" class="btn btn-primary waves-effect waves-light m-r-10">follows</a>
                                                        <a href="#" class="btn btn-primary waves-effect waves-light">Send Message</a>
                                                    </div>
                                                    <!-- Timeline button end -->
                                                </div>
                                            </div>
                                            <!-- Row end -->
                                            <!-- Row Starts -->
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-xs-12">
                                                    <!-- Social timeline left start -->
                                                    <div class="social-timeline-left">
                                                        <!-- social-profile card start -->
                                                        <div class="card">
                                                            <div class="social-profile">
                                                                <img class="img-fluid width-100" src="{{ asset('assets/images/social/profile.jpg') }}" alt="">
                                                                <div class="profile-hvr m-t-15">
                                                                    <i class="icofont icofont-ui-edit p-r-10"></i>
                                                                    <i class="icofont icofont-ui-delete"></i>
                                                                </div>
                                                            </div>
                                                            <div class="card-block social-follower">
                                                                <h4>Josephin Villa</h4>
                                                                <h5>Softwear Engineer</h5>
                                                                <div class="row follower-counter">
                                                                    <div class="col-4">
                                                                        <button class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="top" title="485"><i class="icofont icofont-user-alt-3"></i></button>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <button class="btn btn-danger btn-icon" data-toggle="tooltip" data-placement="top" title="2k"><i class="icofont icofont-like"></i></button>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <button class="btn btn-success btn-icon" data-toggle="tooltip" data-placement="top" title="90"><i class="icofont icofont-eye-alt"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-outline-primary waves-effect btn-block"><i class="icofont icofont-ui-user m-r-10"></i> Add as Friend</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- social-profile card end -->
                                                        <!-- Who to follow card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Who To Follow</h5>
                                                            </div>
                                                            <div class="card-block user-box">
                                                                <div class="media m-b-10">
                                                                    <a class="media-left" href="#!">
                                                                                            <img class="media-object img-radius" src="{{ asset('assets/images/avatar-1.jpg') }}" alt="Generic placeholder image" data-toggle="tooltip" data-placement="top" title="user image">
                                                                                            <div class="live-status bg-danger"></div>
                                                                                        </a>
                                                                    <div class="media-body">
                                                                        <div class="chat-header">Josephin Doe</div>
                                                                        <div class="text-muted social-designation">Softwear Engineer</div>
                                                                    </div>
                                                                </div>
                                                                <div class="media m-b-10">
                                                                    <a class="media-left" href="#!">
                                                                                            <img class="media-object img-radius" src="{{ asset('assets/images/avatar-2.jpg') }}" alt="Generic placeholder image" data-toggle="tooltip" data-placement="top" title="user image">
                                                                                            <div class="live-status bg-success"></div>
                                                                                        </a>
                                                                    <div class="media-body">
                                                                        <div class="chat-header">Josephin Doe</div>
                                                                        <div class="text-muted social-designation">Softwear Engineer</div>
                                                                    </div>
                                                                </div>
                                                                <div class="media m-b-10">
                                                                    <a class="media-left" href="#!">
                                                                                            <img class="media-object img-radius" src="{{ asset('assets/images/avatar-3.jpg') }}" alt="Generic placeholder image" data-toggle="tooltip" data-placement="top" title="user image">
                                                                                            <div class="live-status bg-danger"></div>
                                                                                        </a>
                                                                    <div class="media-body">
                                                                        <div class="chat-header">Josephin Doe</div>
                                                                        <div class="text-muted social-designation">Softwear Engineer</div>
                                                                    </div>
                                                                </div>
                                                                <div class="media m-b-10">
                                                                    <a class="media-left" href="#!">
                                                                                            <img class="media-object img-radius" src="{{ asset('assets/images/avatar-2.jpg') }}" alt="Generic placeholder image" data-toggle="tooltip" data-placement="top" title="user image">
                                                                                            <div class="live-status bg-success"></div>
                                                                                        </a>
                                                                    <div class="media-body">
                                                                        <div class="chat-header">Josephin Doe</div>
                                                                        <div class="text-muted social-designation">Softwear Engineer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Who to follow card end -->
                                                        <!-- Friends card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text d-inline-block">Friends</h5>
                                                                <!-- <span class="friend-more float-right">see 12 more</span> -->
                                                                <span class="label label-primary float-right"> See 12 More </span>
                                                            </div>
                                                            <div class="card-block friend-box">
                                                                <img class="media-object img-radius" src="assets/images/avatar-1.jpg" alt="" data-toggle="tooltip" data-placement="top"
                                                                    title="user image">
                                                                <img class="media-object img-radius" src="assets/images/avatar-2.jpg" alt="" data-toggle="tooltip" data-placement="top"
                                                                    title="user image">
                                                                <img class="media-object img-radius" src="assets/images/avatar-3.jpg" alt="" data-toggle="tooltip" data-placement="top"
                                                                    title="user image">
                                                                <img class="media-object img-radius" src="assets/images/avatar-4.jpg" alt="" data-toggle="tooltip" data-placement="top"
                                                                    title="user image">
                                                                <img class="media-object img-radius" src="assets/images/avatar-1.jpg" alt="" data-toggle="tooltip" data-placement="top"
                                                                    title="user image">
                                                                <img class="media-object img-radius" src="assets/images/avatar-4.jpg" alt="" data-toggle="tooltip" data-placement="top"
                                                                    title="user image">
                                                                <img class="media-object img-radius" src="assets/images/avatar-3.jpg" alt="" data-toggle="tooltip" data-placement="top"
                                                                    title="user image">
                                                                <img class="media-object img-radius" src="assets/images/avatar-2.jpg" alt="" data-toggle="tooltip" data-placement="top"
                                                                    title="user image">
                                                            </div>
                                                        </div>
                                                        <!-- Friends card end -->
                                                    </div>
                                                    <!-- Social timeline left end -->
                                                </div>
                                                <div class="col-xl-9 col-lg-8 col-md-8 col-xs-12 ">
                                                    <!-- Nav tabs -->
                                                    <div class="card social-tabs">
                                                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Timeline</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#about" role="tab">About</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#photos" role="tab">Photos</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#friends" role="tab">Friends</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <!-- Timeline tab start -->
                                                        <div class="tab-pane active" id="timeline">
                                                            <div class="row">
                                                                <div class="col-md-12 timeline-dot">
                                                                    <div class="social-timelines p-relative">
                                                                        <div class="row timeline-right p-t-35">
                                                                            <div class="col-2 col-sm-2 col-xl-1">
                                                                                <div class="social-timelines-left">
                                                                                    <img class="img-radius timeline-icon" src="../files/assets/images/avatar-2.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10 col-sm-10 col-xl-11 p-l-5 p-b-35">
                                                                                <div class="card">

                                                                                    <div class="card-block post-timelines">
                                                                                        <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                            role="tooltip"></span>
                                                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                            <a class="dropdown-item" href="#">Remove tag</a>
                                                                                            <a class="dropdown-item" href="#">Report Photo</a>
                                                                                            <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                            <a class="dropdown-item" href="#">Blog User</a>
                                                                                        </div>
                                                                                        <div class="chat-header f-w-600">Josephin Doe posted on your timeline</div>

                                                                                        <div class="social-time text-muted">50 minutes ago</div>


                                                                                    </div>
                                                                                    <img src="../files/assets/images/timeline/img1.jpg" class="img-fluid width-100" alt="">
                                                                                    <div class="card-block">

                                                                                        <div class="timeline-details">
                                                                                            <div class="chat-header">Josephin Doe posted on your timeline</div>
                                                                                            <p class="text-muted">lorem ipsum dolor sit amet, consectetur
                                                                                                adipisicing elit, sed do eiusmod
                                                                                                tempor incididunt ut labore et
                                                                                                dolore magna aliqua. Ut enim
                                                                                                ad minim veniam, quis nostrud
                                                                                                exercitation ullamco laboris
                                                                                                nisi ut aliquip ex ea </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-block b-b-theme b-t-theme social-msg">
                                                                                        <a href="#"> <i class="icofont icofont-heart-alt text-muted"></i><span class="b-r-muted">Like (20)</span> </a>
                                                                                        <a href="#"> <i class="icofont icofont-comment text-muted"></i> <span class="b-r-muted">Comments (25)</span></a>
                                                                                        <a href="#"> <i class="icofont icofont-share text-muted"></i> <span>Share (10)</span></a>
                                                                                    </div>
                                                                                    <div class="card-block user-box">
                                                                                        <div class="p-b-30"> <span class="f-14"><a href="#">Comments (110)</a></span>
                                                                                            <span class="float-right">see all comments</span>
                                                                                        </div>
                                                                                        <div class="media m-b-20">
                                                                                            <a class="media-left" href="#">
                                                                                                                        <img class="media-object img-radius m-r-20" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                                                                                                    </a>
                                                                                            <div class="media-body b-b-muted social-client-description">
                                                                                                <div class="chat-header">About Marta Williams<span class="text-muted">Jane 10, 2015</span></div>
                                                                                                <p class="text-muted">lorem ipsum dolor sit amet, consectetur
                                                                                                    adipisicing elit, sed do
                                                                                                    eiusmod tempor incididunt
                                                                                                    ut labore et dolore magna
                                                                                                    aliqua.Lorem ipsum dolor
                                                                                                    sit amet, consectetur adipisicing
                                                                                                    elit, sed do eiusmod tempor
                                                                                                    incididunt ut labore et dolore
                                                                                                    magna aliqua.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media m-b-20">
                                                                                            <a class="media-left" href="#">
                                                                                                                            <img class="media-object img-radius m-r-20" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                                                                                        </a>
                                                                                            <div class="media-body b-b-muted social-client-description">
                                                                                                <div class="chat-header">About Marta Williams<span class="text-muted">Jane 11, 2015</span></div>
                                                                                                <p class="text-muted">lorem ipsum dolor sit amet, consectetur
                                                                                                    adipisicing elit, sed do
                                                                                                    eiusmod tempor incididunt
                                                                                                    ut labore et dolore magna
                                                                                                    aliqua.Lorem ipsum dolor
                                                                                                    sit amet, consectetur adipisicing
                                                                                                    elit, sed do eiusmod tempor
                                                                                                    incididunt ut labore et dolore
                                                                                                    magna aliqua.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media">
                                                                                            <a class="media-left" href="#">
                                                                                                                                <img class="media-object img-radius m-r-20" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                                                                                            </a>
                                                                                            <div class="media-body">
                                                                                                <form class="form-material right-icon-control">
                                                                                                    <div class="form-group form-default">
                                                                                                        <textarea class="form-control" required=""></textarea>
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label class="float-label">Write something.....</label>
                                                                                                    </div>
                                                                                                    <div class="form-icon ">
                                                                                                        <button class="btn btn-success btn-icon  waves-effect waves-light">
                                                                                                                                            <i class="fa fa-paper-plane "></i>
                                                                                                                                        </button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="social-timelines p-relative">
                                                                        <div class="row timeline-right p-t-35">
                                                                            <div class="col-2 col-sm-2 col-xl-1">
                                                                                <div class="social-timelines-left">
                                                                                    <img class="img-radius timeline-icon" src="../files/assets/images/avatar-2.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10 col-sm-10 col-xl-11 p-l-5 p-b-35">
                                                                                <div class="card">
                                                                                    <div class="card-block post-timelines">
                                                                                        <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                            role="tooltip"></span>
                                                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                            <a class="dropdown-item" href="#">Remove tag</a>
                                                                                            <a class="dropdown-item" href="#">Report Photo</a>
                                                                                            <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                            <a class="dropdown-item" href="#">Blog User</a>
                                                                                        </div>
                                                                                        <div class="chat-header f-w-600">Josephin Doe posted on your timeline</div>

                                                                                        <div class="social-time text-muted">50 minutes ago</div>


                                                                                    </div>

                                                                                    <img src="../files/assets/images/timeline/img1.jpg" class="img-fluid width-100" alt="">
                                                                                    <div class="card-block">
                                                                                        <div class="timeline-details">
                                                                                            <div class="chat-header">Josephin Doe posted on your timeline</div>
                                                                                            <p class="text-muted">lorem ipsum dolor sit amet, consectetur
                                                                                                adipisicing elit, sed do eiusmod
                                                                                                tempor incididunt ut labore et
                                                                                                dolore magna aliqua. Ut enim
                                                                                                ad minim veniam, quis nostrud
                                                                                                exercitation ullamco laboris
                                                                                                nisi ut aliquip ex ea </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-block b-b-theme b-t-theme social-msg">
                                                                                        <a href="#"> <i class="icofont icofont-heart-alt text-muted"></i><span class="b-r-muted">Like (20)</span></a>
                                                                                        <a href="#"> <i class="icofont icofont-comment text-muted"></i><span class="b-r-muted">Comments (25)</span> </a>
                                                                                        <a href="#"> <i class="icofont icofont-share text-muted"></i><span>Share (10)</span> </a>
                                                                                    </div>
                                                                                    <div class="card-block user-box">
                                                                                        <div class="p-b-30"> <span class="f-14"><a href="#">Comments (110)</a></span>
                                                                                            <span class="float-right">see all comments</span>
                                                                                        </div>
                                                                                        <div class="media m-b-20">
                                                                                            <a class="media-left" href="#">
                                                                                                                                    <img class="media-object img-radius m-r-20" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                                                                                                                </a>
                                                                                            <div class="media-body b-b-muted social-client-description">
                                                                                                <div class="chat-header">About Marta Williams<span class="text-muted">Jane 10, 2015</span></div>
                                                                                                <p class="text-muted">lorem ipsum dolor sit amet, consectetur
                                                                                                    adipisicing elit, sed do
                                                                                                    eiusmod tempor incididunt
                                                                                                    ut labore et dolore magna
                                                                                                    aliqua.Lorem ipsum dolor
                                                                                                    sit amet, consectetur adipisicing
                                                                                                    elit, sed do eiusmod tempor
                                                                                                    incididunt ut labore et dolore
                                                                                                    magna aliqua.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media">
                                                                                            <a class="media-left" href="#">
                                                                                                                                        <img class="media-object img-radius m-r-20" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                                                                                                    </a>
                                                                                            <div class="media-body">
                                                                                                <form class="form-material right-icon-control">
                                                                                                    <div class="form-group form-default">
                                                                                                        <textarea class="form-control" required=""></textarea>
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label class="float-label">Write something.....</label>
                                                                                                    </div>
                                                                                                    <div class="form-icon ">
                                                                                                        <button class="btn btn-success btn-icon  waves-effect waves-light">
                                                                                                                                                    <i class="fa fa-paper-plane "></i>
                                                                                                                                                </button>
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
                                                            </div>
                                                            <div class="f-30 text-muted text-center">2014</div>
                                                            <div class="row">
                                                                <div class="col-md-12 timeline-dot">
                                                                    <div class="social-timelines p-relative">
                                                                        <div class="row timeline-right p-t-35">
                                                                            <div class="col-2 col-sm-2 col-xl-1">
                                                                                <div class="social-timelines-left">
                                                                                    <img class="img-radius timeline-icon" src="../files/assets/images/avatar-2.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-10 col-sm-10 col-xl-11 p-l-5 p-b-35">
                                                                                <div class="card">
                                                                                    <div class="card-block post-timelines">
                                                                                        <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                            role="tooltip"></span>
                                                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                            <a class="dropdown-item" href="#">Remove tag</a>
                                                                                            <a class="dropdown-item" href="#">Report Photo</a>
                                                                                            <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                            <a class="dropdown-item" href="#">Blog User</a>
                                                                                        </div>
                                                                                        <div class="chat-header f-w-600">Josephin Doe posted on your timeline</div>

                                                                                        <div class="social-time text-muted">50 minutes ago</div>


                                                                                    </div>

                                                                                    <img src="../files/assets/images/timeline/img1.jpg" class="img-fluid width-100" alt="">
                                                                                    <div class="card-block">
                                                                                        <div class="timeline-details">
                                                                                            <div class="chat-header">Josephin Doe posted on your timeline</div>
                                                                                            <p class="text-muted">lorem ipsum dolor sit amet, consectetur
                                                                                                adipisicing elit, sed do eiusmod
                                                                                                tempor incididunt ut labore et
                                                                                                dolore magna aliqua. Ut enim
                                                                                                ad minim veniam, quis nostrud
                                                                                                exercitation ullamco laboris
                                                                                                nisi ut aliquip ex ea </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-block b-b-theme b-t-theme social-msg">
                                                                                        <a href="#"> <i class="icofont icofont-heart-alt text-muted"></i><span class="b-r-muted">Like (20)</span> </a>
                                                                                        <a href="#"> <i class="icofont icofont-comment text-muted"></i> <span class="b-r-muted">Comments (25)</span></a>
                                                                                        <a href="#"> <i class="icofont icofont-share text-muted"></i> <span>Share (10)</span></a>
                                                                                    </div>
                                                                                    <div class="card-block user-box">
                                                                                        <div class="p-b-30"> <span class="f-14"><a href="#">Comments (110)</a></span>
                                                                                            <span class="float-right">see all comments</span>
                                                                                        </div>
                                                                                        <div class="media">
                                                                                            <a class="media-left" href="#">
                                                                                                                                            <img class="media-object img-radius m-r-20" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                                                                                                        </a>
                                                                                            <div class="media-body">
                                                                                                <form class="form-material right-icon-control">
                                                                                                    <div class="form-group form-default">
                                                                                                        <textarea class="form-control" required=""></textarea>
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label class="float-label">Write something.....</label>
                                                                                                    </div>
                                                                                                    <div class="form-icon ">
                                                                                                        <button class="btn btn-success btn-icon  waves-effect waves-light">
                                                                                                                                                        <i class="fa fa-paper-plane "></i>
                                                                                                                                                    </button>
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
                                                            </div>
                                                        </div>
                                                        <!-- Timeline tab end -->
                                                        <!-- About tab start -->
                                                        <div class="tab-pane" id="about">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-header-text">Basic Information</h5>
                                                                            <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light float-right">
                                                                                                                            <i class="icofont icofont-edit"></i>
                                                                                                                        </button>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <div id="view-info" class="row">
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <form>
                                                                                        <table class="table table-responsive m-b-0">
                                                                                            <tr>
                                                                                                <th class="social-label b-none p-t-0">Full Name
                                                                                                </th>
                                                                                                <td class="social-user-name b-none p-t-0 text-muted">Josephine Villa</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th class="social-label b-none">Gender</th>
                                                                                                <td class="social-user-name b-none text-muted">Female</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th class="social-label b-none">Birth Date</th>
                                                                                                <td class="social-user-name b-none text-muted">October 25th, 1990</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th class="social-label b-none">Marital Status</th>
                                                                                                <td class="social-user-name b-none text-muted">Single</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th class="social-label b-none p-b-0">Location</th>
                                                                                                <td class="social-user-name b-none p-b-0 text-muted">New York, USA</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div id="edit-info" class="row">
                                                                                <div class="col-lg-12 col-md-12">
                                                                                    <form class="form-material">
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="txt" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Full Name</label>
                                                                                        </div>
                                                                                        <div class="input-group">
                                                                                            <div class="form-radio">
                                                                                                <div class="form-radio">
                                                                                                    <label class="md-check p-0">Gender</label>
                                                                                                    <div class="radio radio-inline">
                                                                                                        <label>
                                                                                                                                                        <input type="radio" name="radio" checked="checked">
                                                                                                                                                        <i class="helper"></i>Male
                                                                                                                                                    </label>
                                                                                                    </div>
                                                                                                    <div class="radio radio-inline">
                                                                                                        <label>
                                                                                                                                                        <input type="radio" name="radio">
                                                                                                                                                        <i class="helper"></i>Female
                                                                                                                                                    </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" id="dropper-default" name="txt" class="form-control" placeholder="Birth Date" required="">
                                                                                            <span class="form-bar"></span>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <select id="hello-single" class="form-control">
                                                                                                                                            <option value="">---- Marital Status ----</option>
                                                                                                                                            <option value="married">Married</option>
                                                                                                                                            <option value="unmarried">Unmarried</option>
                                                                                                                                        </select>
                                                                                            <span class="form-bar"></span>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <textarea class="form-control" required=""></textarea>
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Address...</label>
                                                                                        </div>
                                                                                        <div class="md-group-add-on">

                                                                                        </div>
                                                                                        <div class="text-center m-t-20">
                                                                                            <a href="javascript:;" id="edit-save" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                                            <a href="javascript:;" id="edit-cancel" class="btn btn-default waves-effect waves-light">Cancel</a>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-header-text">Contact Information</h5>
                                                                            <button id="edit-Contact" type="button" class="btn btn-primary waves-effect waves-light float-right">
                                                                                                                            <i class="icofont icofont-edit"></i>
                                                                                                                        </button>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <div id="contact-info" class="row">
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <table class="table table-responsive m-b-0">
                                                                                        <tr>
                                                                                            <th class="social-label b-none p-t-0">Mobile Number</th>
                                                                                            <td class="social-user-name b-none p-t-0 text-muted">eg. (0123) - 4567891</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none">Email Address</th>
                                                                                            <td class="social-user-name b-none text-muted">test@gmail.com</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none">Twitter</th>
                                                                                            <td class="social-user-name b-none text-muted">@phonixcoded</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none p-b-0">Skype</th>
                                                                                            <td class="social-user-name b-none p-b-0 text-muted">@phonixcoded demo</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div id="edit-contact-info" class="row">
                                                                                <div class="col-lg-12 col-md-12">
                                                                                    <form class="form-material">
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="txt" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Mobile number</label>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="txt" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Email address</label>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="txt" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Twitter id</label>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="txt" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Skype id</label>
                                                                                        </div>
                                                                                        <div class="text-center m-t-20">
                                                                                            <a href="javascript:;" id="contact-save" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                                            <a href="javascript:;" id="contact-cancel" class="btn btn-default waves-effect waves-light">Cancel</a>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5 class="card-header-text">Work</h5>
                                                                            <button id="edit-work" type="button" class="btn btn-primary waves-effect waves-light float-right">
                                                                                                                            <i class="icofont icofont-edit"></i>
                                                                                                                        </button>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <div id="work-info" class="row">
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <table class="table table-responsive m-b-0">
                                                                                        <tr>
                                                                                            <th class="social-label b-none p-t-0">Occupation &nbsp; &nbsp; &nbsp;
                                                                                            </th>
                                                                                            <td class="social-user-name b-none p-t-0 text-muted">Developer</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none">Skills</th>
                                                                                            <td class="social-user-name b-none text-muted">C#, Javascript, Anguler</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th class="social-label b-none">Jobs</th>
                                                                                            <td class="social-user-name b-none p-b-0 text-muted">#</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div id="edit-contact-work" class="row">
                                                                                <div class="col-lg-12 col-md-12">
                                                                                    <form class="form-material">
                                                                                        <div class="form-group form-primary">
                                                                                            <select id="occupation" class="form-control">
                                                                                                                                            <option value=""> Select occupation </option>
                                                                                                                                            <option value="married">Developer</option>
                                                                                                                                            <option value="unmarried">Web Design</option>
                                                                                                                                        </select>
                                                                                            <span class="form-bar"></span>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <select id="skill" class="form-control">
                                                                                                                                            <option value=""> Select Skills </option>
                                                                                                                                            <option value="married">C# &amp; .net</option>
                                                                                                                                            <option value="unmarried">Angular</option>
                                                                                                                                        </select>
                                                                                            <span class="form-bar"></span>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <select id="job" class="form-control">
                                                                                                                                            <option value=""> Select Job </option>
                                                                                                                                            <option value="married">#</option>
                                                                                                                                            <option value="unmarried">Other</option>
                                                                                                                                        </select>
                                                                                            <span class="form-bar"></span>
                                                                                        </div>
                                                                                        <div class="text-center m-t-20">
                                                                                            <a href="javascript:;" id="work-save" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                                            <a href="javascript:;" id="work-cancel" class="btn btn-default waves-effect waves-light">Cancel</a>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- About tab end -->
                                                        <!-- Photos tab start -->
                                                        <div class="tab-pane" id="photos">
                                                            <div class="card">
                                                                <!-- Row start -->

                                                                <!-- Gallery start -->
                                                                <div class="card-block">
                                                                    <div class="demo-gallery">
                                                                        <ul id="profile-lightgallery" class="row">
                                                                            <li class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
                                                                                <a href="../files/assets/images/light-box/l1.jpg" data-toggle="lightbox" data-title="A random title" data-footer="A custom footer text">
                                                                                                                                <img src="../files/assets/images/light-box/sl1.jpg" class="img-fluid" alt="">
                                                                                                                            </a>
                                                                            </li>
                                                                            <li class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
                                                                                <a href="../files/assets/images/light-box/l1.jpg" data-toggle="lightbox" data-title="A random title" data-footer="A custom footer text">
                                                                                                                                <img src="../files/assets/images/light-box/sl1.jpg" class="img-fluid" alt="">
                                                                                                                            </a>
                                                                            </li>
                                                                            <li class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
                                                                                <a href="../files/assets/images/light-box/l1.jpg" data-toggle="lightbox" data-title="A random title" data-footer="A custom footer text">
                                                                                                                                <img src="../files/assets/images/light-box/sl1.jpg" class="img-fluid" alt="">
                                                                                                                            </a>
                                                                            </li>
                                                                            <li class="col-md-4 col-lg-2 col-sm-6 col-xs-12">
                                                                                <a href="../files/assets/images/light-box/l1.jpg" data-toggle="lightbox" data-title="A random title" data-footer="A custom footer text">
                                                                                                                                <img src="../files/assets/images/light-box/sl1.jpg" class="img-fluid" alt="">
                                                                                                                            </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <!-- Gallery end -->
                                                            </div>
                                                        </div>
                                                        <!-- Photos tab end -->
                                                        <!-- Friends tab start -->
                                                        <div class="tab-pane" id="friends">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="card">
                                                                        <div class="card-block post-timelines">
                                                                            <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                role="tooltip"></span>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                                                <a class="dropdown-item" href="#">Blog User</a>
                                                                            </div>
                                                                            <div class="media bg-white d-flex">
                                                                                <div class="media-left media-middle">
                                                                                    <a href="#">
                                                                                                                                    <img class="media-object" src="../files/assets/images/timeline/img2.png" alt="">
                                                                                                                                </a>
                                                                                </div>
                                                                                <div class="media-body friend-elipsis">
                                                                                    <div class="f-15 f-bold m-b-5">Josephin Doe</div>
                                                                                    <div class="text-muted social-designation">Software Engineer</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Friends tab end -->
                                                    </div>
                                                    <!-- Row end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
    </div>
@endsection
