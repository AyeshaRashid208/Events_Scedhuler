@extends('layouts.admin')
@section('content')
            <div class="card">
                <div class="card-header">
                    Create Client Review
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.review.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">Client Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}"
                                required>
                            {!! $errors->first('name', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="name">Client Profession</label>
                            <input class="form-control" type="text" name="profession" id="profession"
                                value="{{ old('profession', '') }}" required>
                            {!! $errors->first('profession', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="name">Review Description</label>
                            <textarea class="form-control" name="description" required>{{ old('description') }}</textarea>
                            {!! $errors->first('description', "<span class='text-danger'>:message</span>") !!}
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
