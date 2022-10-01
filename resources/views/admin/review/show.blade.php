@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Show Client Review
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.review.index') }}">
                        Back
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                ID
                            </th>
                            <td>
                                {{ $review->id ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Client Name
                            </th>
                            <td>
                                {{ $review->name ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Client Profession
                            </th>
                            <td>
                                {{ $review->profession ?? '' }}
                            </td>
                        </tr>

                        <tr>
                            <th>
                                Review Description
                            </th>
                            <td>
                                {{ $review->description ?? '' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.review.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
