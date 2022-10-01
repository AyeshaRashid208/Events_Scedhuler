
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Assessment
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User"  id="table-1">
                    <tbody>
                        <tr>    
                            <th>
                                ID
                            </th>
                            <td>
                                {{ $assessment->id }}
                            </td>
                        </tr>
                        <tr>    
                            <th>
                                Heading
                            </th>
                            <td>
                                {{ $assessment->heading??'' }}
                            </td>
                        </tr>
                        <tr>    
                            <th>
                                File
                            </th>
                            <td>
                                <a href="{{asset($assessment->file??'')}}">{{ $assessment->file??'' }}</a>
                            </td>
                        </tr>
                        <tr>    
                            <th>
                                Description
                            </th>
                            <td>
                                {!! $assessment->description??'' !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

