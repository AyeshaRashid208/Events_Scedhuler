@extends('layouts.admin')
@section('content')
    <div class="l-main">
        <div class="content-wrapper">
            <div class="card card-body head_card mb-4">
                <h5 class="m-0 h5head mb-0">Social Media
                    @can('media_create')
                    <a class="btn btn-primary" href="{{ route('admin.media.create') }}">
                        Add New
                    </a>
                @endcan
                </h5>
                
            </div>
            <!--  -->
            <div class=" white_bg p-3">
                <table class="table all_table">
                    <thead>
                        <tr>
                            <th>
                                Sr.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Icon
                            </th>
                            <th>
                                Link
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($media as $index => $item)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    {{ $item->icon }}
                                </td>
                                <td>
                                    {{ $item->link }}
                                </td>
                                <td>
                                    <div class="dropdown d-flex align-items-center">
                                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid" src="{{asset('assets/images/3-dots.svg')}}" alt="icon"/></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            @can('media_edit')
                                            <li><a class="dropdown-item"
                                                    href="{{ route('admin.media.edit', $item->id) }}">
                                                    Edit
                                                </a></li>
                                            @endcan

                                            @can('media_delete')
                                                <li><a class="dropdown-item"
                                                    onclick="mediaDelete{{ $item->id }}({{ $item->id }})">
                                                    Delete
                                                </a></li>
                                            @endcan
                                        </ul>
                                    </div>

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
                            {{ $media->links() }}
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
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js"></script>
    @foreach ($media as $item)
        <script>
            function mediaDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete Social Media?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('admin.deleteMedia', ':id') }}';
                        url = url.replace(':id', id);
                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            url: url,
                            dataType: "json",
                            data: {
                                id: id
                            },
                            success: function(data) {
                                console.log(data);
                                //var data = JSON.parse(response);
                                iziToast.success({
                                    message: data.message,
                                    position: 'topRight'
                                });
                                //Reload page
                                window.location.reload();

                            }
                        });
                    }
                });

            }
        </script>
    @endforeach
@endsection
