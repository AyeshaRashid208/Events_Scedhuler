@extends('layouts.admin')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        Event Detail
        
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $event->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Event Name
                        </th>
                        <td>
                            {{ $event->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Start Time
                        </th>
                        <td>
                            {{ $event->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Description
                        </th>
                        <td>
                            {{ $event->description  }}
                        </td>
                    </tr>
                    
                    <tr>

                        <th>
                            Comments
                        </th>
                        <td>
                            {{ $event->comment  }}
                        </td>
                    </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                    <tr>
                        <th>
                            Add another Comment
                        </th>
                        <td>
                                
                        
                                
                                    <form action="{{ route('admin.events.addcomment', $event->id) }}" method="POST" >
                                    @csrf
                                        <input type="text" class="form-control" name="comment" >
                                        <br>
                                        <input type="submit" class="btn btn-xs btn-success" value="Add">
                                    </form>
                               

                            </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
                Back
            </a>
            
        </div>


    </div>
</div>
@endsection