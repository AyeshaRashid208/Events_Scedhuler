@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Create Appointment
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.createZoom') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Topic</label>
                    <input type="text" class="form-control" name="topic">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Start Time</label>
                    <input type="datetime-local" class="form-control" name="start_time">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agenda</label>
                    <input type="text" class="form-control" name="agenda">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Duration</label>
                    <input type="number" class="form-control" name="duration" min="30">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
