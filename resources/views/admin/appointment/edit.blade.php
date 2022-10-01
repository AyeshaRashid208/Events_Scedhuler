@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Update Appointment
        </div>

        <div class="card-body">
            @php
                
                $arr1 = json_decode($meeting, true);
                // dd($arr1);
            @endphp
            <form method="POST" action="{{ route('admin.ZoomUpdate', $arr1['id']) }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Topic</label>
                    <input type="text" class="form-control" value="{{ $arr1['topic'] }}" name="topic">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Start Time</label>
                    <input type="datetime-local" class="form-control"
                        value="{{ date('Y-m-d H:i:s', strtotime($arr1['start_time'])) }}" name="start_time">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agenda</label>
                    <input type="text" class="form-control" value="{{ $arr1['agenda'] }}" name="agenda">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Duration</label>
                    <input type="number" class="form-control" value="{{ $arr1['duration'] }}" name="duration"
                        min="30">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
