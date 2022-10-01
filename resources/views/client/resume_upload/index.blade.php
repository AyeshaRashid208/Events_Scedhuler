
@extends('layouts.admin')
@section('content')
    @can('resume_upload_create')
    <div class="card">
        <div class="card-header">
            Resume Upload
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route("client.resume_upload.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="file" name="resume" id="resume" required>
                    {!!$errors->first("resume", "<span class='text-danger'>:message</span>")!!}
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        UPLOAD
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endcan

    <div class="card">
        <div class="card-header">
            Your Resumes
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
                                Resume
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resume_upload as $index=> $item)
                            <tr>
                                <td>
                                    {{ $index+1 }}
                                </td>
                                <td>
                                    {{ $item->resume ?? 'Null' }}
                                </td>
                                <td>
                                    @can('resume_upload_delete')
                                    <a class="btn btn-xs btn-danger" onclick="resume_uploadDelete{{ $item->id }}({{ $item->id }})">
                                        Delete
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
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js"></script>
    @foreach ($resume_upload as $item)
        <script>
            function resume_uploadDelete{{ $item->id }}(id) {
                swal({
                    title: "Are You Sure Want To Delete Resume?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route('client.deleteResumeUpload',':id') }}';
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

