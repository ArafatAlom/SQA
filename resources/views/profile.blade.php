<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set, compatibility, and viewport settings -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- Title of the HTML page -->
    <title>Profile</title>
    <!-- Link to external stylesheets for styling -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/feathericon.min.css') }}">
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.css') }}">
    {{-- message toastr --}}
    <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
    <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
</head>

<body>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page header with breadcrumb -->
            <div class="page-header mt-5">
                <div class="row">
                    <div class="col">
                        <!-- Heading and breadcrumb for the page -->
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Profile Information Section Start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <!-- User profile image -->
                                <a href="#"> <img class="rounded-circle" alt="User Image" src="image/avatar.jpg"> </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <!-- User name, type, institution, and address -->
                                <h4 class="user-name mb-3">{{ Auth::user()->name }}</h4>
                                <h6 class="text-muted mt-1">{{ Auth::user()->user_type }}</h6>
                                <div class="user-Location mt-1"><i class="fas fa-map-marker-alt"></i> {{ Auth::user()->Institution }}</div>
                                <div class="about-text">{{ Auth::user()->address }}</div>
                            </div>
                            <div class="col-auto profile-btn">
                                <!-- Buttons for actions like messaging and editing -->
                                <a href="{{url('/index')}}" class="btn btn-primary">Message</a>
                                <a href="#" class="btn btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Menu Tabs -->
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="{{ route('password.request') }}">Password</a> </li>
                        </ul>
                    </div>

                    <!-- Profile Information Tabs Content -->
                    <div class="tab-content profile-tab-cont">
                        <!-- Personal Details Tab -->
                        <div class="tab-pane fade show active" id="per_details_tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Personal Details</span>
                                                <!-- Edit button for personal details -->
                                                <a class="edit-link" data-toggle="modal" href="#edit_personal_details">
                                                    <i class="fa fa-edit mr-1"></i>Edit
                                                </a>
                                            </h5>
                                            <!-- User details such as name, user ID, email, gender, mobile, and address -->
                                            <div class="row mt-5">
                                                <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
                                                <p class="col-sm-9">{{ Auth::user()->name }}</p>
                                            </div>
                                            <!-- Other user details go here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Change Password Tab -->
                        <div id="password_tab" class="tab-pane fade">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Change Password</h5>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6">
                                            <!-- Form for changing the password -->
                                            <form>
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <!-- Other password change fields go here -->
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile Information Section End -->

        </div>
    </div>

 </body>
</html>




