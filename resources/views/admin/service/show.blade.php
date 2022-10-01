@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Show Review
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
                                {{ $service->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Name
                            </th>
                            <td>
                                {{ $service->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Title
                            </th>
                            <td>
                                {{ $service->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Image
                            </th>
                            <td>
                                <img src="{{asset($service->image)}}" style="width:200px; height:200px;" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Description
                            </th>
                            <td>
                                {{$service->description}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.service.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
