@extends('layouts.admin')
@section('content')
<div class="l-main">
    <div class="content-wrapper">
        <div class="card card-body head_card mb-4">
            <h5 class="m-0 h5head mb-0">Client Review's
                @can('review_create')
        
                <a class="btn btn-success" href="{{ route('admin.review.create') }}">
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
                            ID
                        </th>
                        <th>
                            Client Name
                        </th>
                        <th>
                            Client Profession
                        </th>
                        <th>
                            Permission
                        </th>
                        <th>
                            Review Description
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($review as $item)
                        <tr>
                            <td>
                                {{ $item->id ?? '' }}
                            </td>
                            <td>
                                {{ $item->name ?? '' }}
                            </td>
                            <td>
                                {{ $item->profession ?? '' }}
                            </td>
                            <td>
                                @if ($item->permission == 0)
                                    <span class="badge badge-success">Yes</span>
                                @else
                                    <span class="badge badge-danger">No</span>
                                @endif
                            </td>
                            <td>
                                {{ $item->description ?? '' }}
                            </td>
                            <td>
                                <div class="dropdown d-flex align-items-center">
                                    @can('review_show')
                                        <a class="btn" href="{{ route('admin.review.show', $item->id) }}"
                                            type="button"><img class="img-fluid"
                                                src="{{ asset('assets/images/eyeicon.svg') }}" alt="icon" /></a>
                                    @endcan
                                    <button class="btn" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid"
                                            src="{{ asset('assets/images/3-dots.svg') }}" alt="icon" /></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                @can('review_edit')
                                    <li><a class="dropdown-item" href="{{ route('admin.review.edit', $item->id) }}">
                                        Edit
                                    </a></li>
                                @endcan

                                @can('review_delete')
                                    <li><a class="dropdown-item"
                                        onclick="reviewDelete{{ $item->id }}({{ $item->id }})">
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
                        {{ $review->links() }}
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
    @foreach ($review as $item)
        <script>
            function reviewDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete Review?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('admin.deleteReview', ':id') }}';
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
