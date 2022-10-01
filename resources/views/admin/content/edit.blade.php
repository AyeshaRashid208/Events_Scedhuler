@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Update Website Content
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.content.update', $content->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="required" for="heading">Page</label>
                    <input class="form-control" type="text" name="page" id="page" value="{{ $content->page }}">
                </div>
                <div class="form-group">
                    <label class="required" for="heading">Heading</label>
                    <input class="form-control" type="text" name="heading" id="heading"
                        value="{{ $content->heading }}">
                </div>
                @if ($content->image != null)
                    <div class="form-group">
                        <label class="required" for="icon">Old Image</label>
                        <img src="{{ asset($content->image) }}" style="width: 200px; height:200px;" alt="">
                    </div>
                @endif
                <div class="form-group">
                    <label class="required" for="icon">New Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label class="required" for="description">Description</label>
                    <textarea id="div_editor1" class="form-control" type="text" name="description">{{ $content->description }}</textarea>
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
