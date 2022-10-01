<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/stylestrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('style')

    <title>@yield('page_title')</title>
</head>

<body class="sc5 dashboard_body">
    <!-- ================================start header============================== -->
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="logo__txt"><a @if(auth()->user()->is_admin) href="{{url('admin/admin')}}" @else href="{{url('home')}}" @endif><span>Poly</span>digit.</a></div>
                <div class="single-text"><a @if(auth()->user()->is_admin) href="{{url('admin/admin')}}" @else href="{{url('home')}}" @endif><span>P</span>D</a></div>
            </div>
            <div class="l-sidebar__content">
                <nav class="theme-navbar h-100">
                    <div class="scrollable">
                        <ul class="mt-xl-3 side-navbar ps-xl-3 m-0 side-menu list-unstyled">
                            <li class=""><a class="active d-flex align-items-center" @if(auth()->user()->is_admin) href="{{url('admin/admin')}}" @else href="{{url('home')}}" @endif
                                    aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-1.svg') }}"></span><span class="text-hidee">Dashboard </span></a></li>
                            @can('user_management_access')
                            <li class="nav-item">
                                <a href="#" class='sidebar-link dropdown-toggle d-flex align-items-center' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-1.svg') }}"></span> <span>Users
                                        Management</span> </a>
                                <ul class="dropdown-menu ">
                                    <li class="dropdown-item "> <a href="{{ url('admin/permissions') }}">Permissions</a>
                                    </li>
                                    <li class="dropdown-item "> <a href="{{ url('admin/roles') }}">Roles</a> </li>
                                    <li class="dropdown-item "> <a href="{{ url('admin/users') }}">Users</a> </li>
                                </ul>
                            </li>
                            <li class=""><a class="d-flex align-items-center" href="{{url('admin/paid-users')}}" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-6.svg') }}"></span><span class="text-hidee">My Client </span></a></li>
                            @endcan
                            @can('appointment_access')
                            <li class=""><a class="d-flex align-items-center" href="{{url('admin/appointment')}}" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-10.svg')}}"></span><span class="text-hidee">Appointments </span></a></li>
                            @endcan
                            <li class=""><a class="d-flex align-items-center" href="storage.html" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-2.svg') }}"></span><span class="text-hidee">Storage </span></a></li>

                            <li class=""><a class="d-flex align-items-center" href="{{ route("admin.events.index") }}" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-2.svg') }}"></span><span class="text-hidee">Events </span></a></li>
                            <li class=""><a class="d-flex align-items-center" href="{{ route("admin.systemCalendar") }}" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-2.svg') }}"></span><span class="text-hidee">Publication Schedule </span></a></li>

                            <li class=""><a class="d-flex align-items-center" href="messages.html" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-3.svg') }}"></span><span class="text-hidee">Messages </span></a></li>
                            <li class=""><a class="d-flex align-items-center" href="payment.html" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-4.svg') }}"></span><span class="text-hidee">Payment </span></a></li>
                            <li class=""><a class="d-flex align-items-center" href="invoices.html" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-5.svg') }}"></span><span class="text-hidee">Invoices </span></a></li>
                            <li class=""><a class="d-flex align-items-center" href="customers.html" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-6.svg') }}"></span><span class="text-hidee">Customers </span></a></li>
                            <li class=""><a class="d-flex align-items-center" href="account-pages.html" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-7.svg') }}"></span><span class="text-hidee">Account & Pages </span></a></li>
                            <li class=""><a class="d-flex align-items-center" href="additional-services.html" aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-8.svg') }}"></span><span class="text-hidee">Additional Services </span></a></li>
                            <li class=""><a class="d-flex align-items-center" @if(auth()->user()->is_admin) href="{{url('admin/notification')}}" @else href="{{url('notification')}}" @endif
                                    aria-expanded="false"><span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-9.svg') }}"></span><span class="text-hidee">Nofifications </span></a></li>
                            @can('setting_access')
                            <li class="nav-item">
                                <a href="#" class='sidebar-link dropdown-toggle d-flex align-items-center' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="img-icon me-2"><img class="icon-bike" src="{{ asset('assets/images/sidebar-icn-1.svg') }}"></span> <span>Settings</span> </a>
                                <ul class="dropdown-menu ">
                                    @can('content_access')
                                    <li class="dropdown-item "> <a href="{{ url('admin/content') }}">Website Content</a></li>
                                    @endcan
                                    @can('service_access')
                                    <li class="dropdown-item "> <a href="{{ url('admin/service') }}">Services</a></li>
                                    @endcan
                                    @can('review_access')
                                    <li class="dropdown-item "> <a href="{{ url('admin/review') }}">Reviews</a></li>
                                    @endcan
                                    @can('media_access')
                                    <li class="dropdown-item "> <a href="{{ url('admin/media') }}">Social Media</a></li>
                                    @endcan
                                    @can('newsletter_access')
                                    <li class="dropdown-item "> <a href="{{ url('admin/newsletter') }}">Newsletter</a></li>
                                    @endcan
                                </ul>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <!-- Page Content Holder -->
        <div id="content">
            <div class="l-header">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid p-0">
                        <div class="navbar-header w-100 d-flex justify-content-between">
                            <button type="button" id="sidebarCollapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" class="btn text-white d-block d-lg-none"><img class="img-fluid" width="20" src="{{ asset('assets/images/barsleft.svg') }}" alt="icon" /></button>
                            <form class="">
                                <div class="input-group mb-0">
                                    <span class="input-group-text" id="basic-addon1"><img class="img-fluid" src="{{ asset('assets/images/searchicon.svg') }}" alt="icon" /></span>
                                    <input type="text" class="form-control fontsize14" placeholder="Type here to Search" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </form>
                        </div>
                        <ul class="navbar-nav ml-auto align-items-center d-none d-lg-flex">
                            <li class="nav-item profile me-lg-3">
                                <a href="javascript:;" class="profile_link">
                                    <div class="avatar-img"><img class="img-fluid" src="{{ asset(Auth()->user()->image??'assets/images/avatarpic.jpg') }}" alt="icon" /></div>
                                    <div class="ms-2">
                                        <h4>{{ Auth()->user()->first_name ?? '' }} {{ Auth()->user()->last_name ?? '' }}</h4>
                                        <p class="m-0 fontsize12">@if(auth()->user()->is_admin) Admin @else User @endif</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="btn web_btn" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false"><img width="" class="img-fluid" src="{{ asset('assets/images/baricon.svg') }}" alt="icon" /></a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Setting</a></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--  -->
            @yield('content')
        </div>
    </div>
    <!-- back-to-top -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('assets/js/theme-jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/function.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
 
  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['{{ app()->getLocale() }}']
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'copy',
        className: 'btn-default',
        text: copyButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn-default',
        text: colvisButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>
    @yield('script')
</body>

</html>