@extends('layouts.admin')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">

        <div class="col-xl-4">
            <div class="card">
                <grammarly-extension data-grammarly-shadow-root="true"
                    style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT">
                </grammarly-extension>

                <div class="card-header">
                    <h4 class="card-title mb-0">My Profile</h4>
                    <div class="card-options"><a class="card-options-collapse" href="javascript:;"
                            data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i
                                class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="javascript:;"
                            data-bs-toggle="card-remove" data-bs-original-title="" title=""><i
                                class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div>
                        <div class="profile-title">
                            <div class="media ad-profile2-img">
                                <img alt="" src="{{ asset(Auth()->user()->image ?? 'dash-assets/images/user2.png') }}">
                                <div class="media-body">
                                    <h5 class="mb-1">{{ Auth()->user()->first_name }}
                                        {{ Auth()->user()->last_name }}</h5>
                                    <p>{{ Auth()->user()->profession }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <b>Bio</b>
                            <p spellcheck="false">{{ Auth()->user()->bio ?? 'No Bio' }}</p>
                        </div>
                        <div class="mb-3">
                            <b>Email-Address</b>
                            <p>{{ Auth()->user()->email }}</p>
                        </div>
                        <div class="mb-3">
                            <b>Address</b>
                            <p>{{ Auth()->user()->address ?? 'No Address' }}</p>
                        </div>
                        <div class="mb-3">
                            <b>City</b>
                            <p>{{ Auth()->user()->city ?? 'No City' }}</p>
                        </div>
                        <div class="mb-3">
                            <b>Country</b>
                            <p>{{ Auth()->user()->country_name->name ?? 'No Country' }}</p>
                        </div>
                        <div class="mb-3">
                            <b>Website</b>
                            <p>{{ Auth()->user()->website ?? 'No Website' }}</p>
                        </div>
                        {{-- <div class="form-footer">
                            <button class="btn btn-primary squer-btn" data-bs-original-title="" title="">Save</button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <form class="card" method="POST" action="{{ route('admin.profile.update', Auth()->user()->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4 class="card-title mb-0">Edit Profile</h4>
                    <div class="card-options"><a class="card-options-collapse" href="javascript:;"
                            data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i
                                class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="javascript:;"
                            data-bs-toggle="card-remove" data-bs-original-title="" title=""><i
                                class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">Company</label>
                                <input class="form-control" type="text" placeholder="Company" data-bs-original-title=""
                                    title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="Username" data-bs-original-title=""
                                    title="">
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-6 col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input class="form-control" type="email" placeholder="Email" data-bs-original-title=""
                                    title="">
                            </div>
                        </div> --}}
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input class="form-control" type="text" name="first_name"
                                    value="{{ Auth()->user()->first_name ?? '' }}" placeholder="First Name"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('first_name', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="last_name"
                                    value="{{ Auth()->user()->last_name ?? '' }}" placeholder="Last Name"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('last_name', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" disabled
                                    value="{{ Auth()->user()->email ?? '' }}" placeholder="E-Mail"
                                    data-bs-original-title="" title="">

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Profession</label>
                                <input class="form-control" type="text" name="profession"
                                    value="{{ Auth()->user()->profession ?? '' }}" placeholder="Profession"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('profession', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Website <small>(optional)</small></label>
                                <input class="form-control" type="url" value="{{ Auth()->user()->website ?? '' }}"
                                    placeholder="Website" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Image <small>(optional)</small></label>
                                <input class="form-control" name="image" type="file" data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text" name="address"
                                    value="{{ Auth()->user()->address ?? '' }}" placeholder="Home Address"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('address', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input class="form-control" type="text" name="city"
                                    value="{{ Auth()->user()->city ?? '' }}" placeholder="City" data-bs-original-title=""
                                    title="">
                                {!! $errors->first('city', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Postal Code</label>
                                <input class="form-control" type="number" name="postcode"
                                    value="{{ Auth()->user()->postcode ?? '' }}" placeholder="ZIP Code"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('postcode', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-control btn-square" name="country">
                                    <option disabled selected>--Select Country--</option>
                                    @foreach ($country as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == Auth()->user()->country_id) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('country', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Level</label>
                                <select name="level" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                {!! $errors->first('level', "<span class='text-danger'>:message</span>") !!}
                                
                                
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Active Flag <small>(optional)</small></label>
                                <select name="active_flag" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                {!! $errors->first('active_flag', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">id_ERP_customer_1</label>
                                <input class="form-control" type="number" name="id_ERP_customer_1"
                                    value="{{ Auth()->user()->id_ERP_customer_1 ?? '' }}" placeholder="id_ERP_customer_1" data-bs-original-title=""
                                    title="">
                                {!! $errors->first('id_ERP_customer_1', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label">id_ERP_customer_2</label>
                                <input class="form-control" type="number" name="id_ERP_customer_2"
                                    value="{{ Auth()->user()->id_ERP_customer_2 ?? '' }}" placeholder="id_ERP_customer_2"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('id_ERP_customer_2', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">id_ERP_customer_3</label>
                                <input class="form-control" type="number" name="id_ERP_customer_3"
                                    value="{{ Auth()->user()->id_ERP_customer_3 ?? '' }}" placeholder="id_ERP_customer_3"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('id_ERP_customer_3', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="col-sm-6 col-md-4">
                            <div class="mb-3">
                                <label class="form-label">RFC</label>
                                <input class="form-control" type="text" name="RFC"
                                    value="{{ Auth()->user()->RFC ?? '' }}" placeholder="RFC" data-bs-original-title=""
                                    title="">
                                {!! $errors->first('RFC', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Business Name</label>
                                <input class="form-control" type="text" name="business_name"
                                    value="{{ Auth()->user()->business_name ?? '' }}" placeholder="business_name"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('business_name', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">UserIp</label>
                                <input class="form-control" type="number" name="user_ip"
                                    value="{{ Auth()->user()->user_ip ?? '' }}" placeholder="user_ip"
                                    data-bs-original-title="" title="">
                                {!! $errors->first('user_ip', "<span class='text-danger'>:message</span>") !!}
                            </div>
                        </div>

                        <!--  -->
                        <div class="col-md-12 mb-3">
                            <div>
                                <label class="form-label">About Me</label>
                                <textarea class="form-control" name="bio"
                                    placeholder="Enter Your Bio">{{ Auth()->user()->bio ?? '' }}</textarea>
                            </div>
                            {!! $errors->first('bio', "<span class='text-danger'>:message</span>") !!}
                        </div>
                    </div>
                    <button class="btn btn-primary squer-btn" type="submit" data-bs-original-title="" title="">Update
                        Profile</button>
                </div>
            </form>
        </div>

    </div>
@endsection
