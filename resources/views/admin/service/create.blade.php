
@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Create Service
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.service.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">Service Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                    {!! $errors->first('name', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <label class="required" for="title">Service Title</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                    {!! $errors->first('title', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <label class="required" for="name">Service Image</label>
                    <input class="form-control" type="file" name="image" id="image" required>
                    {!! $errors->first('image', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <label class="required" for="name">Service Description</label>
                    <textarea id="div_editor1" class="form-control" style="height: 150px;" name="description"
                        required>{{ old('description') }}</textarea>
                    {!! $errors->first('image', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
