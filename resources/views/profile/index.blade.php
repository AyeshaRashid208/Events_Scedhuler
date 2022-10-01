@extends('layouts.admin')

@section('content')

    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
           <form action="{{ url('update-profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="form-group col-12 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

               <div class="row">
                   <div class="col-12">
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" value="{{ $user->name }}">
                      </div>
                   </div>
                   <div class="col-12">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" email="email" value="{{ $user->email }}">
                      </div>
                   </div>
                    <div class="col-12">
                    <img src="{{ auth()->user()->image ?? asset('dash-assets/images/profile-avatar.png') }}" width="100" height="100">
                    <div class="form-group">
                        <label for="image">Profile Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                      </div>
                   </div>
                   
                   <div class="text-center mx-auto">
                       <button class="btn btn-primary px-5 py-3 mt-4">Save</button>
                   </div>
               </div>
           </form>
          </div>
        </div>   
      </div>
  </div>

@endsection