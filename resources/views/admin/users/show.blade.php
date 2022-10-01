@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.user.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.users.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            First Name
                        </th>
                        <td>
                            {{ $user->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Last Name
                        </th>
                        <td>
                            {{ $user->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email_verified_at') }}
                        </th>
                        <td>
                            {{ $user->email_verified_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.roles') }}
                        </th>
                        <td>
                            @foreach($user->roles as $key => $roles)
                                <span class="label label-info">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Image
                        </th>
                        <td>
                            @if ($user->image!=null)
                            <img src="{{asset($user->image)}}" style="height: 60px; width:60px;" alt="">
                            @else
                            No Image
                            @endif
                            
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Profession
                        </th>
                        <td>
                            {{ $user->profession ?? 'No Profession' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Address
                        </th>
                        <td>
                            {{ $user->address ?? 'No Address' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            City
                        </th>
                        <td>
                            {{ $user->city ?? 'No City' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Zip Code
                        </th>
                        <td>
                            {{ $user->postcode ?? 'No Postal Code' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Country
                        </th>
                        <td>
                            {{ $user->country_name->name ?? 'No Country' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Website
                        </th>
                        <td>
                            {{ $user->website ?? 'No Website' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Bio
                        </th>
                        <td>
                            {{ $user->bio ?? 'No Bio' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.users.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection