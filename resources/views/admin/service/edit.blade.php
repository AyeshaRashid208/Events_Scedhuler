@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Update Service
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.service.update',$service->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="required" for="name">Service Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $service->name }}" required>
                    {!! $errors->first('name', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <label class="required" for="title">Service Title</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $service->title }}" required>
                    {!! $errors->first('title', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <label class="required" for="name">Old Service Image</label>
                    <img src="{{asset($service->image)}}" style="width:70px; height:70px;" alt="">
                </div>
                <div class="form-group">
                    <label class="required" for="name">New Service Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                    {!! $errors->first('image', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <label class="required" for="name">Service Description</label>
                    <textarea class="form-control" id="div_editor1" name="description"
                        required>{{ $service->description }}</textarea>
                    {!! $errors->first('image', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        UPDATE
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"
        integrity="sha512-MbhLUiUv8Qel+cWFyUG0fMC8/g9r+GULWRZ0axljv3hJhU6/0B3NoL6xvnJPTYZzNqCQU3+TzRVxhkE531CLKg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        tinymce.init({
            selector: '#myTextarea'
        });
    </script>
@endsection
