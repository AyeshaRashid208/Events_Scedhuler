@extends('layouts.admin')
@section('content')
    <div class="l-main">
        <div class="content-wrapper">
            <div class="card card-body head_card mb-4">
                <h5 class="m-0 h5head mb-0">{{ trans('cruds.permission.title_singular') }} {{ trans('global.list') }}
                    @can('media_create')
                        <a class="btn btn-success" href="{{ route('admin.permissions.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.permission.title_singular') }}
                        </a>
                    @endcan
                </h5>

            </div>
            <!--  -->
            <div class=" white_bg p-3">
                <table class="table all_table">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.permission.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.permission.fields.title') }}
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $key => $permission)
                            <tr data-entry-id="{{ $permission->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $permission->id ?? '' }}
                                </td>
                                <td>
                                    {{ $permission->title ?? '' }}
                                </td>
                                <td>
                                    <div class="dropdown d-flex align-items-center">
                                        @can('permission_show')
                                            <a class="btn" href="{{ route('admin.permissions.show', $permission->id) }}"
                                                type="button"><img class="img-fluid"
                                                    src="{{ asset('assets/images/eyeicon.svg') }}" alt="icon" /></a>
                                        @endcan
                                        <button class="btn" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img class="img-fluid"
                                                src="{{ asset('assets/images/3-dots.svg') }}" alt="icon" /></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">


                                            @can('permission_edit')
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.permissions.edit', $permission->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('permission_delete')
                                                <form action="{{ route('admin.permissions.destroy', $permission->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                    style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit"  class="dropdown-item"
                                                        value="{{ trans('global.delete') }}">
                                                </form>
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
                            {{ $permissions->links() }}
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
@section('scripts')
    @parent
    <!-- <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('permission_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.permissions.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-Permission:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script> -->
@endsection
