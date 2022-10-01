@extends('layouts.admin')
@section('content')
    @can('newsletter_email')
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.newsletter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="description" class="form-control" id="div_editor1" required>{{ old('description') }}</textarea>
                        {!! $errors->first('description', "<span class='text-danger'>:message</span>") !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Send</button>
                    </div>
                </div>
            </div>
        </form>
    @endcan

    <div class="l-main">
        <div class="content-wrapper">
            <div class="card card-body head_card mb-4">
                <h5 class="m-0 h5head mb-0">Newsletters
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
                                Email
                            </th>

                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newsletter as $index => $item)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    <div class="dropdown d-flex align-items-center">
                                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid" src="{{asset('assets/images/3-dots.svg')}}" alt="icon"/></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @can('newsletter_delete')
                                        <li><a  class="dropdown-item"
                                            onclick="newsletterDelete{{ $item->id }}({{ $item->id }})">
                                            Delete
                                        </a></li>
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
                            {{ $newsletter->links() }}
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
    @foreach ($newsletter as $item)
        <script>
            function newsletterDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete newsletter?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('admin.deleteNewsletter', ':id') }}';
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
