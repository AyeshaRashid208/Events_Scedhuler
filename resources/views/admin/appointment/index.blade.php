@extends('layouts.admin')

@section('content')
    <div class="l-main">
        <div class="content-wrapper">
            <div class="card card-body head_card mb-4">
                <h5 class="m-0 h5head mb-0">Appointments
                    @can('appointment_create')
                        <a class="btn btn-primary" href="{{ route('admin.createMeeting') }}">
                            Add New
                        </a>
                    @endcan
                </h5>

            </div>
            <div class=" white_bg p-3">
                <table class="table all_table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Appointment ID</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">Invite Link</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Time Zone</th>
                            {{-- <th scope="col">Created AT</th> --}}
                            <th scope="col">Start</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            
                            $arr1 = json_decode($meetings, true);
                            // $arr2 = var_dump($arr1);
                            // get_object_vars(object $object): array;
                            // dd($arr1);
                        @endphp

                        @foreach ($arr1 as $index => $item)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['topic'] }}</td>
                                <td>{{ $item['start_time'] }}</td>
                                <td>{{ $item['join_url'] }}</td>
                                <td>{{ $item['duration'] }}</td>
                                <td>{{ $item['timezone'] }}</td>
                                {{-- <td>{{ date('Y-m-d H:i:s', strtotime($item['created_at'])) }}</td> --}}
                                <td>
                                    <a href="https://zoom.us/wc/{{ $item['id'] }}/start" class="btn btn-info">Start</a>
                                </td>
                                <td>
                                    <div class="dropdown d-flex align-items-center">
                                        <button class="btn" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid"
                                                src="{{ asset('assets/images/3-dots.svg') }}" alt="icon" /></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a href="{{ route('admin.ZoomEdit', $item['id']) }}"
                                                class="dropdown-item">Edit</a></li>
                                            <li><a href="{{ route('admin.ZoomDelete', $item['id']) }}"
                                                class="dropdown-item">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
