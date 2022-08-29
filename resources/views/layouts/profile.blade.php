@extends('layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 box-col-12 " >
        <div class="email-right-aside bookmark-tabcontent contacts-tabs">
            <div class="card email-body radius-left">
                <div class="ps-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-personal" role="tabpanel"
                            aria-labelledby="pills-personal-tab">
                            <div class="card mb-0">
                                <div class="card-header d-flex">
                                    <h5>Profile</h5>
                                    <span class="f-14 pull-right mt-0">Guru</span>
                                </div>
                                <div class="card-body p-5">
                                    <div class="row list-persons" id="addcon">
                                        <div class="col-xl-12 xl-100 col-md-12 box-col-12">
                                            <div class="tab-content" id="v-pills-tabContent">

                                                <div class="profile-mail">
                                                    <div class="media align-items-center">
                                                        <img class="img-100 img-fluid m-r-20 rounded-circle update_img_0"
                                                            src="https://laravel.pixelstrap.com/viho/assets/images/user/2.png"
                                                            alt="" />
                                                        <input class="updateimg" type="file" name="img"
                                                            onchange="readURL(this,0)" />
                                                        <div class="media-body mt-0">
                                                            <h5><span class="first_name_0">Muhammad Yasin </span></h5>
                                                            <p class="email_add_0">MuhammadYasin@gmail.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="email-general">
                                                        <h6 class="mb-3">Profile</h6>
                                                        <ul>
                                                            <li>Name <span class="font-primary first_name_0">Bucky</span>
                                                            </li>
                                                            <li>Gender <span class="font-primary">Male</span></li>
                                                            <li>
                                                                Birthday<span class="font-primary"> <span
                                                                        class="birth_day_0">18</span><span
                                                                        class="birth_month_0 ms-1">May</span><span
                                                                        class="birth_year_0 ms-1">1994</span></span>
                                                            </li>
                                                            <li>Personality<span
                                                                    class="font-primary personality_0">Cool</span></li>
                                                            <li>City<span class="font-primary city_0">moline acres</span>
                                                            </li>
                                                            <li>Mobile No<span class="font-primary mobile_num_0">+0 1800
                                                                    76855</span></li>
                                                            <li>Email Address <span
                                                                    class="font-primary email_add_0">MuhammadYasin@gmail.com
                                                                </span></li>
                                                            <li>Website<span
                                                                    class="font-primary url_add_0">www.test.com</span></li>
                                                            <li>Interest<span
                                                                    class="font-primary interest_0">photography</span></li>
                                                        </ul>
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
            </div>
        @endsection
