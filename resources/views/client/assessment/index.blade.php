
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Assessments
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User"  id="table-1">
                    <thead>
                        <tr>    
                            <th>
                                Sr.
                            </th>
                            <th>
                                Heading
                            </th>
                            <th>
                                File
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assessment as $index=> $item)
                            <tr>
                                <td>
                                    {{ $index+1 }}
                                </td>
                                <td>
                                    {{ $item->heading ?? '' }}
                                </td>
                                <td>
                                    <a href="{{asset($item->file)}}">{{$item->file}}</a>
                                </td>
                                <td>
                                    {!! $item->description ?? '' !!}
                                </td>
                                <td>
                                    @can('user_assessment_view')
                                    <a class="btn btn-xs btn-info" href="{{route('client.user-assessment.show',$item->id)}}">
                                        View
                                    </a>
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

