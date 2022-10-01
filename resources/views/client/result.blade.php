@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Result
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
                            <th scope="col">Title</th>
                            <th scope="col">Quiz Score</th>
                            <th scope="col">My Score</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $index=> $result)
                            <tr>
                                <th scope="row">{{ $index+1 }}</th>
                                <td>{{ $result->title }}</td>
                                <td>{{ $result->quiz_score }}</td>
                                <td>{{ $result->achieved_score }}</td>
                                <td>{{ $result->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
