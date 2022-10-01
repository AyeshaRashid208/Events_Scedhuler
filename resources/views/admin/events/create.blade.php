
@extends('layouts.admin')
@section('content')
<br>
<div class="card">
    <div class="card-header" >
        EVENT ADD
    </div>

    <div class="card-body">
        <form action="{{ route("admin.events.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Event Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($event) ? $event->name : '') }}">
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                <label for="start_time">Start Date & Time</label>
                <label >(  YY-MM-DD & HH-MM-SS)</label>
                <input type="text"  id="start_time" name="start_time" class="form-control datetime" value="2022-08-11 23:15:10">
                @if($errors->has('start_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    
                </p>
            </div>
            
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="desc">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
               
                <p class="helper-block">
                    
                </p>
            </div>
            
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>

@endsection