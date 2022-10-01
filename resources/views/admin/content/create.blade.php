@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Create Website Content
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.content.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="heading">Page</label>
                    <input class="form-control" type="text" name="page" id="page" value="{{ old('page') }}">
                </div>
                <div class="form-group">
                    <label class="required" for="heading">Heading</label>
                    <input class="form-control" type="text" name="heading" id="heading" value="{{ old('heading') }}">
                </div>
                <div class="form-group">
                    <label class="required" for="icon">Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label class="required" for="heading">Key</label>
                    <input class="form-control" type="text" name="key" id="key" value="{{ old('key') }}">
                    {!! $errors->first('key', "<span class='text-danger'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <label class="required" for="description">Description</label>
                    <textarea id="div_editor1" class="form-control" type="text" name="description">{{ old('description') }}</textarea>
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
