@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Tests
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User" id="table-1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Duration</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $sl=1;
                        @endphp
                        @foreach($quiz_list as $quiz)
                            <tr>
                                <th scope="row">{{$sl++}}</th>
                                <td><a href="{{url('test/'.$quiz->id)}}">{{$quiz->title}}</a></td>
                                <td>{{$quiz->from_time}}</td>
                                <td>{{$quiz->to_time}}</td>
                                <td>{{$quiz->duration}} minutes</td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
