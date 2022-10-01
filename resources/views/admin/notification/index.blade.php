@extends('layouts.admin')
@section('content')
<div class="l-main">
    <div class="content-wrapper">
        <div class="card card-body head_card mb-4">
            <h5 class="m-0 h5head mb-0">Notifications</h5>
            <form action="{{route('admin.sendAll')}}" method="POST">
                @csrf
                <input type="text" name="notification" class="form-control">
                <button type="submit">Send</button>
            </form>
        </div>
        <!--  -->
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="card card-body">
                    <small class="mb-4">All recent notification</small>
                    @if($notifications->count()>0)
                    @foreach($notifications as $item)
                    <label class="form-check-label ms-0 d-flex align-items-center mb-4" for="flexCheckDefault2">
                        <div class="pic_avatar secondary_text">P</div>
                        <div class="ms-2">
                            <h6 class="title m-0 ">{{$item->data['name']??''}} is new user registered!</h6>
                            <small class="m-0 fontsize12 paragraph_text fontweightregular">{{$item->created_at->diffForHumans()??''}} </small>
                            
                        </div>
                    </label>
                    @endforeach
                    @else
                    
                    <label class="form-check-label ms-0 d-flex align-items-center mb-4" for="flexCheckDefault2">
                        
                        <div class="ms-2">
                            <h6 class="title m-0 ">There are no new notifications</h6>
                        </div>
                    </label>
                    @endif
                    {{-- <label class="form-check-label ms-0 d-flex align-items-center mb-4" for="flexCheckDefault2">
                        <div class="pic_avatar secondary_text">P</div>
                        <div class="ms-2">
                            <h6 class="title m-0 ">A Notification Tittle will goes here </h6>
                            <small class="m-0 fontsize12 paragraph_text fontweightregular">4 minutes ago </small>
                        </div>
                    </label>
                    <label class="form-check-label ms-0 d-flex align-items-center mb-4" for="flexCheckDefault2">
                        <div class="pic_avatar secondary_text">P</div>
                        <div class="ms-2">
                            <h6 class="title m-0 ">A Notification Tittle will goes here </h6>
                            <small class="m-0 fontsize12 paragraph_text fontweightregular">4 minutes ago </small>
                        </div>
                    </label>
                    <label class="form-check-label ms-0 d-flex align-items-center mb-4" for="flexCheckDefault2">
                        <div class="pic_avatar secondary_text">P</div>
                        <div class="ms-2">
                            <h6 class="title m-0 ">A Notification Tittle will goes here </h6>
                            <small class="m-0 fontsize12 paragraph_text fontweightregular">4 minutes ago </small>
                        </div>
                    </label> --}}
                </div>
            </div>
            <!--  -->
            <div class="col-lg-6">
                <div class="card p-4 h-100 card-body text-center black_bg">
                    <h5 class="h5head text-white fontweightbold">Make Your Payment</h5>
                    <p class="text-white fontsize14">we are waiting for their validation for the publication schedule,Please make the payment and enjoy </p>
                    <button type="button" class="mt-4 btn-custom w-100 text-white">Schudule a Video Call</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
