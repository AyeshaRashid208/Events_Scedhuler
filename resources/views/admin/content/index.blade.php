@extends('layouts.admin')
@section('content')
    <div class="l-main">
        <div class="content-wrapper">
            <div class="card card-body head_card mb-4">
                <h5 class="m-0 h5head mb-0">Website Content</h5>
                @can('content_create')
                    <a class="btn btn-primary" href="{{ route('admin.content.create') }}">
                        Add New
                    </a>
                @endcan
            </div>
            <!--  -->
            <div class=" white_bg p-3">
                <table class="table all_table">
                    <thead>
                        <tr>
                            <th scope="col">Sr.</th>
                            <th scope="col">Page</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Key</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($content as $index => $item)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    {{ $item->page ?? 'Null' }}
                                </td>
                                <td>
                                    {{ $item->heading ?? 'Null' }}
                                </td>
                                <td>
                                    {{ $item->key ?? '' }}
                                </td>
                                <td>
                                    @if ($item->image != null)
                                        <img src="{{ asset($item->image) }}" style="width:100px; height:100px;"
                                            alt="">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    {!! $item->description ?? 'Null' !!}
                                </td>
                                <td>
                                    @can('content_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.content.edit', $item->id) }}">
                                            Edit
                                        </a>
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--  -->
            <div class="col-xl-11 mx-auto">
                <div class="card card-body mt-4">
                    <nav aria-label="...">
                        <ul class="pagination m-0">
                            {{ $content->links() }}
                            {{-- <li class="page-item disabled"><span class="page-link w-auto previous mw-100">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:;">01</a></li>
                            <li class="page-item active" aria-current="page"><span class="page-link">02</span></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">03</a></li>
                            <li class="page-item"><a class="page-link next w-auto max-w-auto" href="javascript:;">Next</a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
