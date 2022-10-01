@extends('layouts.admin')
@section('content')
            <div class="card">
                <div class="card-header">
                    Create Social Media
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.media.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">Social Media Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}"
                                required>
                            {!! $errors->first('name', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="icon">Social Media Icon <a
                                    href="https://www.codesprogram.com/icons/font-awesome-5" target="_blank"
                                    class="btn btn-dark">Find</a></label>
                            <input class="form-control" type="text" name="icon" id="icon" value="{{ old('icon') }}"
                                required>
                            {!! $errors->first('icon', "<span class='text-danger'>:message</span>") !!}
                        </div>
                        <div class="form-group">
                            <label class="required" for="link">Social Media Link</label>
                            <input class="form-control" type="url" name="link" id="link" value="{{ old('link') }}"
                                required>
                            {!! $errors->first('link', "<span class='text-danger'>:message</span>") !!}
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
