@extends('layouts.admin')
@section('content')
            <div class="card">
                <div class="card-header">
                    Update Social Media
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.media.update', $media->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="required" for="name">Social Media Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ $media->name }}"
                                required>
                            {!! $errors->first('name', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="icon">Social Media Icon</label>
                            <input class="form-control" type="text" name="icon" id="icon" value="{{ $media->icon }}"
                                required>
                            {!! $errors->first('icon', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="link">Social Media Link</label>
                            <input class="form-control" type="text" name="link" id="link" value="{{ $media->link }}"
                                required>
                            {!! $errors->first('link', "<span class='text-danger'>:message</span>") !!}
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
