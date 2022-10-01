@extends('layouts.admin')
@section('page_title')
    Home
@endsection
@section('content')
<div class="l-main">
    <div class="content-wrapper">
        <form>
            <div class="row">
                <div class="col-xl-6 mb-3 mb-lg-0">
                    <div class="card card-body head_card mb-3">
                        <div class="d-flex align-items-center">
                            <h5 class="m-0 h5head">Dashboard</h5>
                            <div class="dropdown ms-auto">
                                <button type="button" class="btn btn-social" data-bs-toggle="dropdown" aria-expanded="false"><span><span class="icon"><i class="fab fa-facebook-f"></i></span> Facebook</span> <img class="img-fluid" src="{{asset('assets/images/arrow-down.svg')}}" alt="icon"/></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:;"><span class="icon"><i class="fab fa-facebook-f"></i></span> Facebook</a></li>
                                    <li><a class="dropdown-item" href="javascript:;"><span class="icon"><i class="fab fa-twitter"></i></span> Twitter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="card head_card h-100">
                        <div class="card-body">
                            <div class="input-group mb-0 dashboard_chat">
                                <span class="input-group-text" id="basic-addon1"><img class="img-fluid" src="{{asset('assets/images/searchicon.svg')}}" alt="icon"/></span>
                                <input type="text" class="form-control" placeholder="What’s happening?" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="d-flex align-items-center my-4">
                                <div class="btn-group d-flex align-items-center">
                                    <button type="button" class="btn fontweightmeduim fontsize14 paragraph_text"><img class="img-fluid me-2" src="{{asset('assets/images/Video-cameraa.svg')}}" alt="icon"/>Live Video</button>
                                    <button type="button" class="btn fontweightmeduim fontsize14 paragraph_text"><img class="img-fluid me-2" src="{{asset('assets/images/pictureicon.svg')}}" alt="icon"/> Photo/Video</button>
                                </div>
                                <button class="btn btn-custom ms-auto fontweightbold px-4 text-white" type="button">Schudule Post</button>
                            </div>
                            <h5 class="m-0 h5head fontsize20">Your Timeline</h5>
                            <!--  -->
                            <ul class="list-unstyled post_list mt-4 px-lg-4">
                                <li class="d-flex align-items-center mb-4">
                                    <div class="profile d-flex align-items-center">
                                        <div class="pic"><img class="img-fluid" src="{{asset('assets/images/avatarpic.jpg')}}" alt="icon"></div>
                                        <div class="content">
                                            <h6>Sepural Gallery</h6>
                                            <p>15h. Public</p>
                                        </div>
                                    </div>
                                    <div class="ms-auto dropdown">
                                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid" src="{{asset('assets/images/3-dots-verticle.svg')}}" alt="icon"></button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <div class="profile d-flex align-items-center">
                                        <div class="pic"><img class="img-fluid" src="{{asset('assets/images/avatarpic.jpg')}}" alt="icon"></div>
                                        <div class="content">
                                            <h6>Sepural Gallery</h6>
                                            <p>15h. Public</p>
                                        </div>
                                    </div>
                                    <div class="ms-auto dropdown">
                                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid" src="{{asset('assets/images/3-dots-verticle.svg')}}" alt="icon"></button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer border_0">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="chat_proile d-flex align-items-center">
                                    <a href="javascript:;" class=""><img class="img-fluid" src="{{asset('assets/images/avatarpic.jpg')}}" alt="icon" /></a>
                                    <a href="javascript:;" class=""><img class="img-fluid" src="{{asset('assets/images/avatarpic.jpg')}}" alt="icon" /></a>
                                    <a href="javascript:;" class="fontsize12 paragraph_bg text-white fontweightmeduim">+9</a>
                                </div>
                                <div class="btn-group ms-auto">
                                    <a href="javascript:;" class="fontsize14 me-3 paragraph_text">3 Comments</a>
                                    <a href="javascript:;" class="fontsize14 paragraph_text">17 Share</a>
                                </div>
                            </div>
                            <hr class="mb-2" />
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:;" class="fontsize12 paragraph_text"><img class="img-fluid me-2" src="{{asset('assets/images/hearticon.svg')}}" alt="icon" /> Like</a>
                                <a href="javascript:;" class="fontsize12 paragraph_text"><img class="img-fluid me-2" src="{{asset('assets/images/commenticon.svg')}}" alt="icon" /> Comments</a>
                                <a href="javascript:;" class="fontsize12 paragraph_text"><img class="img-fluid me-2" src="{{asset('assets/images/shareicon.svg')}}" alt="icon" /> Share</a>
                            </div>
                            <hr class="mt-2" />
                            <!--  -->
                            <div class="d-flex align-items-center">
                                <div class="input-group mb-0 paragraph2_bg dashboard_chat">
                                    <span class="input-group-text" id="basic-addon1"><img class="img-fluid" src="{{asset('assets/images/searchicon.svg')}}" alt="icon"/></span>
                                    <input type="text" class="form-control" placeholder="What’s happening?" aria-label="Username" aria-describedby="basic-addon1">
                                    <button type="button" class="input-group-text transparent_bg" id="basic-addon1"><img class="img-fluid" src="{{asset('assets/images/gificon.svg')}}" alt="icon"/></button>
                                    <button type="button" class="input-group-text transparent_bg" id="basic-addon1"><img class="img-fluid" src="{{asset('assets/images/pictureicin.svg')}}" alt="icon"/></button>
                                    <button type="button" class="input-group-text transparent_bg" id="basic-addon1"><img class="img-fluid" src="{{asset('assets/images/smileicon.svg')}}" alt="icon"/></button>
                                </div>
                                <button type="button" class="btn btn_send"><img class="img-fluid" src="{{asset('assets/images/sendicon.svg')}}" alt="icon"/></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-xl-6 mb-3 mb-lg-0">
                    <div class="card card-body head_card mb-3">
                        <h5 class="m-0 mb-4 h5head">Media and Documents</h5>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="card card-body filebox">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="fileicon file_color1_bg"><img class="img-fluid" src="{{asset('assets/images/document.svg')}}" alt="icon" /></div>
                                        <div class="ms-auto dropdown">
                                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid" src="{{asset('assets/images/3-dots.svg')}}" alt="icon"/></button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5 class="h5head fontsize16">Documents</h5>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bluelight_bg" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="m-0 fontsize12 paragraph_text d-flex align-items-center justify-content-between">1,328 Files<span class="">1.3GB</span></p>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-lg-6 mb-3">
                                <div class="card card-body filebox">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="fileicon file_color2_bg"><img class="img-fluid" src="{{asset('assets/images/document-yellow.svg')}}" alt="icon" /></div>
                                        <div class="ms-auto dropdown">
                                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid" src="{{asset('assets/images/3-dots.svg')}}" alt="icon"/></button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript;:">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5 class="h5head fontsize16">Google Drive</h5>
                                    <div class="progress mb-2">
                                        <div class="progress-bar yellow_bg" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="m-0 fontsize12 paragraph_text d-flex align-items-center justify-content-between">1,328 Files<span class="">1.3GB</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="card card-body head_card">
                        <h5 class="m-0 mb-4 h5head">Your Invoices</h5>
                        <ul class="list-unstyled invoice_column">
                            <li class="mb-3">
                                <h5 class="d-flex align-items-center fontweightbold m-0 fontsize14">Polydigit subscription 01<span class="ms-auto fontweightmeduim d-inline-block fontsize12">24.09.2022</span></h5>
                                <p class="m-0 fontsize14 fontweightmeduim">CloudLogistics Inc</p>
                                <small class="fontweightmeduim fontsize12">$2,920.50 </small>
                            </li>
                            <li class="mb-3">
                                <h5 class="d-flex align-items-center fontweightbold m-0 fontsize14">Polydigit subscription 01<span class="ms-auto fontweightmeduim d-inline-block fontsize12">24.09.2022</span></h5>
                                <p class="m-0 fontsize14 fontweightmeduim">CloudLogistics Inc</p>
                                <small class="fontweightmeduim fontsize12">$2,920.50 </small>
                            </li>
                            <li class="">
                                <h5 class="d-flex align-items-center fontweightbold m-0 fontsize14">Polydigit subscription 01<span class="ms-auto fontweightmeduim d-inline-block fontsize12">24.09.2022</span></h5>
                                <p class="m-0 fontsize14 fontweightmeduim">CloudLogistics Inc</p>
                                <small class="fontweightmeduim fontsize12">$2,920.50 </small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
