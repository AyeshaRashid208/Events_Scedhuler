@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Interview
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User" id="table-1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">Join</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($interview as $index=> $item)
                            <tr>
                                <th scope="row">{{ $index+1 }}</th>
                                <td>{{ $item->topic??'' }}</td>
                                <td>{{ $item->start_time??'' }}</td>
                                <td><a href="{{$item->invite_link??''}}" target="_blank" class="btn btn-success">Join</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
