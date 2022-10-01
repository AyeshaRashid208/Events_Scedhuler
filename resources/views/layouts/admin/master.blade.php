<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ali Raza Arshad">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <title>{{ config('app.name', 'Laravel').' | Administrator' }}</title>
    <link rel="icon" type="image/png" href="{{asset('public/bulkit/assets/img/favicon.png')}}"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>
    <!-- Js -->
    <style>
        .social li a {
            padding: 0 !important;
        }

        /*.btn-fab.btn-fab-sm {*/
        /*    padding: 0 !important;*/
        /*}*/

        .select2-container .select2-selection--single .select2-selection__rendered {
            float: left !important;
        }

        .select2-selection__rendered {
            padding-top: 0px !important;
        }

        .sidebar-menu .treeview-menu > li > form > a {
            display: block;
            font-size: 12px;
            font-weight: 300;
            padding: 10px 5px 10px 15px;
            color: #86939e;
        }
    </style>
    <script>
        (function (w, d, u) {
            w.readyQ = [];
            w.bindReadyQ = [];

            function p(x, y) {
                if (x == "ready") {
                    w.bindReadyQ.push(y);
                } else {
                    w.readyQ.push(x);
                }
            };
            var a = {ready: p, bind: p};
            w.$ = w.jQuery = function (f) {
                if (f === d || f === u) {
                    return a
                } else {
                    p(f)
                }
            }
        })(window, document)
    </script>
    <script src="https://use.fontawesome.com/2f4fa758f1.js"></script>
    @yield('style')
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
    <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
        <section class="sidebar" style="overflow: auto;!important">
            <div class="w-80 mt-3 mb-3 ml-3 text-center">
                <a href="{{url('admin')}}">
                    <img class="w-50" src="{{asset('admin/assets/img/logo.png')}}" width="100" alt="logo">
                </a>
            </div>
            <div class="relative">
                <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                   aria-controls="userSettingsCollapse"
                   class="das-setting-btn ">
                    <i class="icon icon-cogs"></i>
                </a>
                <div class="user-panel p-3 light mb-2 text-center">
                    <div>
                        <div class="image">
                            <a href="{{url('profile')}}">
                                <img class="user_avatar" height="60"
                                     src="{{(isset(Auth::user()->picture))?asset('assets/images/profile/'.Auth::user()->picture):asset('assets/images/profile/profile.png')}}"
                                     alt="User Image">
                            </a>
                            <h6 class="font-weight-light mt-2 mb-1">Hello, {{ Auth::user()->first_name}}</h6>
                            {{--<a href="#"><i class="icon-circle text-primary blink"></i> Online</a>--}}
                        </div>
                        <!--<div class="float-left info">-->
                    <!--    <h6 class="font-weight-light mt-2 mb-1">{{ Auth::user()->first_name." ".Auth::user()->last_name}}</h6>-->
                    <!--    {{--<a href="#"><i class="icon-circle text-primary blink"></i> Online</a>--}}-->
                        <!--</div>-->
                    </div>
                    <div class="clearfix"></div>
                    <div class="collapse multi-collapse" id="userSettingsCollapse">
                        <div class="list-group mt-3 shadow">
                            <a href="{{url('profile')}}" class="list-group-item list-group-item-action ">
                                <i class="mr-2 icon-umbrella text-blue"></i>Profile
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                               class="list-group-item list-group-item-action ">
                                <i class="mr-2 icon icon-power-off text-red"></i>Logout
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                @role('Admin|Super Admin')
                <li class="{{(request()->segment(1) == 'admin')?'active':''}}">
                    <a href="{{url('admin')}}">
                        <i class="icon icon-sailing-boat-water s-18"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @endrole
                <li class="treeview {{ (request()->segment(1) == 'category'
                        || request()->segment(1) == 'products'
                        || request()->segment(1) == 'stock-count'
                        || request()->segment(1) == 'qty_adjustment'
                        || request()->segment(1) == 'purchases'
                        || request()->segment(1) == 'sales'
                        || request()->segment(1) == 'delivery'
                        || request()->segment(1) == 'expense_categories'
                        || request()->segment(1) == 'expenses'
                        || request()->segment(1) == 'quotations'
                        || request()->segment(1) == 'transfers'
                        || request()->segment(1) == 'return-sale'
                        || request()->segment(1) == 'return-purchase'
                        || request()->segment(1) == 'accounts'
                        || request()->segment(1) == 'money-transfers'
                        || request()->segment(1) == 'departments'
                        || request()->segment(1) == 'employees'
                        || request()->segment(1) == 'payroll'
                        || request()->segment(1) == 'holidays'
                        || request()->segment(1) == 'attendance'
                        || request()->segment(1) == 'customer'
                        || request()->segment(1) == 'biller'
                        || request()->segment(1) == 'supplier'
                        || request()->segment(1) == 'report'
                        || request()->segment(1) == 'warehouse'
                        || request()->segment(1) == 'brand'
                        || request()->segment(1) == 'tax'
                        || request()->segment(1) == 'customer_group'
                        || request()->segment(1) == 'setting'
                        || request()->segment(1) == 'unit') ? 'active' : '' }}">
                    <a href="#">
                        <i class="icon icon-shop s-18"></i>
                        Inventory
                        <i class="icon icon-angle-left s-18 pull-right"></i>
                    </a>
                    <ul class="treeview-menu {{ (request()->segment(1) == 'category'
                        || request()->segment(1) == 'products'
                        || request()->segment(1) == 'stock-count'
                        || request()->segment(1) == 'qty_adjustment'
                        || request()->segment(1) == 'purchases'
                        || request()->segment(1) == 'sales'
                        || request()->segment(1) == 'delivery'
                        || request()->segment(1) == 'expense_categories'
                        || request()->segment(1) == 'expenses'
                        || request()->segment(1) == 'quotations'
                        || request()->segment(1) == 'transfers'
                        || request()->segment(1) == 'return-sale'
                        || request()->segment(1) == 'return-purchase'
                        || request()->segment(1) == 'accounts'
                        || request()->segment(1) == 'money-transfers'
                        || request()->segment(1) == 'departments'
                        || request()->segment(1) == 'employees'
                        || request()->segment(1) == 'payroll'
                        || request()->segment(1) == 'holidays'
                        || request()->segment(1) == 'attendance'
                        || request()->segment(1) == 'customer'
                        || request()->segment(1) == 'biller'
                        || request()->segment(1) == 'supplier'
                        || request()->segment(1) == 'report'
                        || request()->segment(1) == 'warehouse'
                        || request()->segment(1) == 'brand'
                        || request()->segment(1) == 'tax'
                        || request()->segment(1) == 'customer_group'
                        || request()->segment(1) == 'setting'
                        || request()->segment(1) == 'unit') ? 'menu-open' : '' }}">
                        <li class="treeview {{ (request()->segment(1) == 'purchases'
                                        || request()->segment(1) == 'quotations'
                                        || request()->segment(1) == 'category'
                                        || request()->segment(1) == 'products'
                                        || request()->segment(1) == 'stock-count'
                                        || request()->segment(1) == 'qty_adjustment') ? 'active' : '' }}">
                            <a href="#">
                                <i class="icon icon-shopping-bag s-18"></i>
                                Procurement
                                <i class="icon icon-angle-left s-18 pull-right"></i>
                            </a>
                            <ul id="procurement"
                                class="treeview-menu {{ (request()->segment(1) == 'purchases'
                                        || request()->segment(1) == 'quotations'
                                        || request()->segment(1) == 'category'
                                        || request()->segment(1) == 'products'
                                        || request()->segment(1) == 'stock-count'
                                        || request()->segment(1) == 'qty_adjustment') ? 'menu-open' : '' }}">

                                <li class="treeview {{ (request()->segment(1) == 'purchases') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-card_membership s-18"></i>
                                        Purchase
                                        <i class="icon icon-angle-left s-14 pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu {{ (request()->segment(1) == 'purchases') ? 'menu-open' : '' }}">
                                        <li class="{{(request()->segment(1) == 'purchases' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('purchases.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Purchase List
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'purchases' && request()->segment(2) == 'create')?'active':''}}">
                                            <a href="{{route('purchases.create')}}">
                                                <i class="icon icon-circle-o s-12"></i>Add Purchase
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'purchases' && request()->segment(2) == 'purchase_by_csv')?'active':''}}">
                                            <a href="{{url('purchases/purchase_by_csv')}}">
                                                <i class="icon icon-circle-o s-12"></i>Import Purchase By CSV
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--<li class="">-->
                                <!--    <a href="#">-->
                                <!--        <i class="icon icon-circle-o s-12"></i>Requisition-->
                                <!--    </a>-->
                                <!--</li>-->
                                @role('Admin|Super Admin')
                                <li class="treeview {{ (request()->segment(1) == 'quotations') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-document s-18"></i>
                                        {{trans('file.Quotation')}}
                                        <i class="icon icon-angle-left s-14 pull-right"></i>
                                    </a>
                                    <ul id="expense"
                                        class="treeview-menu {{ (request()->segment(1) == 'quotations') ? 'menu-open' : '' }}">
                                        <li id="quotation-list-menu"
                                            class="{{(request()->segment(1) == 'quotations' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('quotations.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Quotation List')}}
                                            </a>
                                        </li>
                                        <li id="quotation-create-menu"
                                            class="{{(request()->segment(1) == 'quotations' && request()->segment(2) == 'create')?'active':''}}">
                                            <a href="{{route('quotations.create')}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Add Quotation')}}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endrole
                                <li class="treeview {{ (request()->segment(1) == 'category'
                                        || request()->segment(1) == 'products'
                                        || request()->segment(1) == 'stock-count'
                                        || request()->segment(1) == 'qty_adjustment') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-list s-18"></i>
                                        Product
                                        <i class="icon icon-angle-left s-14 pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu {{ (request()->segment(1) == 'category'
                                        || request()->segment(1) == 'products'
                                        || request()->segment(1) == 'stock-count'
                                        || request()->segment(1) == 'qty_adjustment') ? 'menu-open' : '' }}">
                                        <li class="{{(request()->segment(1) == 'category')?'active':''}}">
                                            <a href="{{route('category.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Category
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'products' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('products.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Product List
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'products' && request()->segment(2) == 'create')?'active':''}}">
                                            <a href="{{route('products.create')}}">
                                                <i class="icon icon-circle-o s-12"></i>Add Product
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'products' && request()->segment(2) == 'print_barcode')?'active':''}}">
                                            <a href="{{route('product.printBarcode')}}">
                                                <i class="icon icon-circle-o s-12"></i>Print Barcode
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'qty_adjustment' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('qty_adjustment.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Adjustment List
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'qty_adjustment' && request()->segment(2) == 'create')?'active':''}}">
                                            <a href="{{route('qty_adjustment.create')}}">
                                                <i class="icon icon-circle-o s-12"></i>Add Adjustment
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'stock-count')?'active':''}}">
                                            <a href="{{route('stock-count.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Stock Count
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview {{ (request()->segment(1) == 'return-sale'
                                        || request()->segment(1) == 'return-purchase'
                                        || request()->segment(1) == 'transfers') ? 'active' : '' }}">
                            <a href="#">
                                <i class="icon icon-house s-18"></i>
                                Warehousing
                                <i class="icon icon-angle-left s-18 pull-right"></i>
                            </a>
                            <ul id="warehousing"
                                class="treeview-menu {{ (request()->segment(1) == 'return-sale'
                                        || request()->segment(1) == 'return-purchase'
                                        || request()->segment(1) == 'transfers') ? 'menu-open' : '' }}">
                                <!--<li class="">-->
                                <!--    <a href="#">-->
                                <!--        <i class="icon icon-circle-o s-12"></i>GRN-->
                                <!--    </a>-->
                                <!--</li>-->
                                <li class="treeview {{ (request()->segment(1) == 'transfers') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-import_export s-18"></i>
                                        {{trans('file.Transfer')}}
                                        <i class="icon icon-angle-left s-18 pull-right"></i>
                                    </a>
                                    <ul id="expense"
                                        class="treeview-menu {{ (request()->segment(1) == 'transfers') ? 'menu-open' : '' }}">
                                        <li id="transfer-list-menu"
                                            class="{{(request()->segment(1) == 'transfers' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('transfers.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Transfer List')}}</a>
                                        </li>
                                        <li id="transfer-create-menu"
                                            class="{{(request()->segment(1) == 'transfers' && request()->segment(2) == 'create')?'active':''}}">
                                            <a href="{{route('transfers.create')}}">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Add Transfer')}}
                                            </a>
                                        </li>
                                        <li id="transfer-import-menu"
                                            class="{{(request()->segment(1) == 'transfers' && request()->segment(2) == 'transfer_by_csv')?'active':''}}">
                                            <a href="{{url('transfers/transfer_by_csv')}}">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Import Transfer By CSV')}}
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="treeview {{ (request()->segment(1) == 'return-sale'
                                        || request()->segment(1) == 'return-purchase') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-archive s-18"></i>
                                        {{trans('file.return')}}
                                        <i class="icon icon-angle-left s-18 pull-right"></i>
                                    </a>
                                    <ul id="expense" class="treeview-menu {{ (request()->segment(1) == 'return-sale'
                                        || request()->segment(1) == 'return-purchase') ? 'menu-open' : '' }}">
                                        <li id="sale-return-menu"
                                            class="{{(request()->segment(1) == 'return-sale' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('return-sale.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Sale')}}
                                            </a>
                                        </li>
                                        <li id="purchase-return-menu"
                                            class="{{(request()->segment(1) == 'return-purchase' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('return-purchase.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Purchase')}}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview {{ (request()->segment(1) == 'expense_categories'
                                                || request()->segment(1) == 'expenses'
                                                || request()->segment(1) == 'accounts'
                                                || request()->segment(1) == 'money-transfers') ? 'active' : '' }}">
                            <a href="#">
                                <i class="icon icon-money s-18"></i>
                                Finance
                                <i class="icon icon-angle-left s-18 pull-right"></i>
                            </a>
                            <ul id="finance"
                                class="treeview-menu {{ (request()->segment(1) == 'expense_categories'
                                                    || request()->segment(1) == 'expenses'
                                                    || request()->segment(1) == 'accounts'
                                                    || request()->segment(1) == 'money-transfers') ? 'menu-open' : '' }}">
                                <li class="treeview {{ (request()->segment(1) == 'accounts'
                                                    || request()->segment(1) == 'money-transfers') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-briefcase s-18"></i>
                                        {{trans('file.Accounting')}}
                                        <i class="icon icon-angle-left s-18 pull-right"></i>
                                    </a>
                                    <ul id="expense" class="treeview-menu {{ (request()->segment(1) == 'accounts'
                                                    || request()->segment(1) == 'money-transfers') ? 'menu-open' : '' }}">

                                        <li id="account-list-menu"
                                            class="{{(request()->segment(1) == 'accounts' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('accounts.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Account List')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a id="add-account" href="">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Add Account')}}
                                            </a>
                                        </li>
                                        <li id="money-transfer-menu"
                                            class="{{(request()->segment(1) == 'money-transfers' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('money-transfers.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Money Transfer')}}
                                            </a>
                                        </li>
                                        <li id="balance-sheet-menu"
                                            class="{{(request()->segment(1) == 'accounts' && request()->segment(2) == 'balancesheet')?'active':''}}">
                                            <a href="{{route('accounts.balancesheet')}}">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Balance Sheet')}}
                                            </a>
                                        </li>
                                        <li id="account-statement-menu">
                                            <a id="account-statement" href="">
                                                <i class="icon icon-circle-o s-12"></i>{{trans('file.Account Statement')}}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="treeview {{ (request()->segment(1) == 'expense_categories'
                                                    || request()->segment(1) == 'expenses') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-wallet s-18"></i>
                                        Expense
                                        <i class="icon icon-angle-left s-18 pull-right"></i>
                                    </a>
                                    <ul id="expense" class="treeview-menu {{ (request()->segment(1) == 'expense_categories'
                                                    || request()->segment(1) == 'expenses') ? 'menu-open' : '' }}">
                                        <li id="exp-cat-menu"
                                            class="{{(request()->segment(1) == 'expense_categories' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('expense_categories.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Expense Category
                                            </a>
                                        </li>
                                        <li id="exp-list-menu"
                                            class="{{(request()->segment(1) == 'expenses' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('expenses.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Expense List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" id="add-expense">
                                                <i class="icon icon-circle-o s-12"></i>Add Expense
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview {{ (request()->segment(1) == 'sales'
                                                || request()->segment(1) == 'delivery'
                                                || request()->segment(1) == 'report') ? 'active' : '' }}">
                            <a href="#">
                                <i class="icon icon-cogs s-18"></i>
                                Management
                                <i class="icon icon-angle-left s-18 pull-right"></i>
                            </a>
                            <ul id="management"
                                class="treeview-menu {{ (request()->segment(1) == 'sales'
                                                        || request()->segment(1) == 'delivery'
                                                        || request()->segment(1) == 'report') ? 'menu-open' : '' }}">
                                <li class="treeview {{ (request()->segment(1) == 'sales'
                                                    || request()->segment(1) == 'delivery') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-cart-arrow-down s-18"></i>
                                        Sale
                                        <i class="icon icon-angle-left s-18 pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu {{ (request()->segment(1) == 'sales'
                                                        || request()->segment(1) == 'delivery') ? 'menu-open' : '' }}">
                                        <li class="{{(request()->segment(1) == 'sales' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('sales.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Sale List
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'sales' && request()->segment(2) == 'create')?'active':''}}">
                                            <a href="{{route('sales.create')}}">
                                                <i class="icon icon-circle-o s-12"></i>Add Sale
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'sales' && request()->segment(2) == 'sale_by_csv')?'active':''}}">
                                            <a href="{{url('sales/sale_by_csv')}}">
                                                <i class="icon icon-circle-o s-12"></i>Import Sales By CSV
                                            </a>
                                        </li>
                                        <li class="{{(request()->segment(1) == 'delivery' && request()->segment(2) == '')?'active':''}}">
                                            <a href="{{route('delivery.index')}}">
                                                <i class="icon icon-circle-o s-12"></i>Delivery List
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                 
                                <li class="treeview {{ (request()->segment(1) == 'report') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-files-o s-18"></i>
                                        Reports
                                        <i class="icon icon-angle-left s-18 pull-right"></i>
                                    </a>
                                    <ul id="report"
                                        class="treeview-menu {{ (request()->segment(1) == 'report') ? 'menu-open' : '' }}">
                                        <li id="profit-loss-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'profit_loss')?'active':''}}">
                                            {!! Form::open(['route' => 'report.profitLoss', 'method' => 'post', 'id' => 'profitLoss-report-form']) !!}
                                            <input type="hidden" name="start_date" value="{{date('Y-m').'-'.'01'}}"/>
                                            <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>
                                            {!! Form::close() !!}
                                            <a href="" onclick="event.preventDefault();
                                        document.getElementById('profitLoss-report-form').submit();">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Summary Report')}}
                                            </a>
                                        </li>
                                        <li id="daily-sale-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'daily_sale')?'active':''}}">
                                            <a href="{{url('report/daily_sale/'.date('Y').'/'.date('m'))}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Daily Sale')}}
                                            </a>
                                        </li>
                                        <li id="monthly-sale-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'monthly_sale')?'active':''}}">
                                            <a href="{{url('report/monthly_sale/'.date('Y'))}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Monthly Sale')}}
                                            </a>
                                        </li>
                                        <li id="daily-purchase-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'daily_purchase')?'active':''}}">
                                            <a href="{{url('report/daily_purchase/'.date('Y').'/'.date('m'))}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Daily Purchase')}}
                                            </a>
                                        </li>
                                        <li id="monthly-purchase-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'monthly_purchase')?'active':''}}">
                                            <a href="{{url('report/monthly_purchase/'.date('Y'))}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Monthly Purchase')}}
                                            </a>
                                        </li>
                                        <li id="sale-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'sale')?'active':''}}">
                                            {!! Form::open(['route' => 'report.sale', 'method' => 'post', 'id' => 'sale-report-form']) !!}
                                            <input type="hidden" name="start_date" value="1988-04-18"/>
                                            <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>
                                            <input type="hidden" name="warehouse_id" value="0"/>
                                            <a id="sale-report-link" href="">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Sale Report')}}
                                            </a>
                                            {!! Form::close() !!}
                                        </li>
                                        <li id="payment-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'paymentByDate')?'active':''}}">
                                            {!! Form::open(['route' => 'report.paymentByDate', 'method' => 'post', 'id' => 'payment-report-form']) !!}
                                            <input type="hidden" name="start_date" value="1988-04-18"/>
                                            <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>
                                            <a id="payment-report-link" href="">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Payment Report')}}
                                            </a>
                                            {!! Form::close() !!}
                                        </li>
                                        <li id="purchase-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'purchase')?'active':''}}">
                                            {!! Form::open(['route' => 'report.purchase', 'method' => 'post', 'id' => 'purchase-report-form']) !!}
                                            <input type="hidden" name="start_date" value="1988-04-18"/>
                                            <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>
                                            <input type="hidden" name="warehouse_id" value="0"/>
                                            <a id="purchase-report-link" href="">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Purchase Report')}}
                                            </a>
                                            {!! Form::close() !!}
                                        </li>
                                        <li id="warehouse-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'paymentByDate')?'active':''}}">
                                            <a id="warehouse-report-link" href="">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Warehouse Report')}}
                                            </a>
                                        </li>
                                        <li id="warehouse-stock-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'warehouseStock')?'active':''}}">
                                            <a href="{{route('report.warehouseStock')}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Warehouse Stock Chart')}}
                                            </a>
                                        </li>
                                        <li id="qtyAlert-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'qtyAlert')?'active':''}}">
                                            <a href="{{route('report.qtyAlert')}}">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Product Quantity Alert')}}
                                            </a>
                                        </li>
                                        <li id="user-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'userReport')?'active':''}}">
                                            <a id="user-report-link" href="">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.User Report')}}
                                            </a>
                                        </li>
                                        <li id="customer-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'customerReport')?'active':''}}">
                                            <a id="customer-report-link" href="">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Customer Report')}}
                                            </a>
                                        </li>
                                        <li id="supplier-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'supplierReport')?'active':''}}">
                                            <a id="supplier-report-link" href="">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Supplier Report')}}
                                            </a>
                                        </li>
                                        <li id="due-report-menu"
                                            class="{{(request()->segment(1) == 'report' && request()->segment(2) == 'dueByDate')?'active':''}}">
                                            {!! Form::open(['route' => 'report.dueByDate', 'method' => 'post', 'id' => 'due-report-form']) !!}
                                            <input type="hidden" name="start_date" value="1988-04-18"/>
                                            <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>
                                            <a id="due-report-link" href="">
                                                <i class="icon icon-circle-o s-12"></i>
                                                {{trans('file.Due Report')}}
                                            </a>
                                            {!! Form::close() !!}
                                        </li>
                                    </ul>
                                </li>
<li class="treeview">
                                    <a href="#">
                                        <i class="icon icon-cart-arrow-down s-18"></i>
                                        Approvals
                                        <i class="icon icon-angle-left s-18 pull-right"></i>
                                    </a>
                                    
                                </li>
                            </ul>
                        </li>

                        @role('Admin|Super Admin')
                        {{--<li class="treeview {{ (request()->segment(1) == 'departments'
                        || request()->segment(1) == 'employees'
                        || request()->segment(1) == 'payroll'
                        || request()->segment(1) == 'holidays'
                        || request()->segment(1) == 'attendance') ? 'active' : '' }}">
                            <a href="#">
                                <i class="icon icon-users s-18"></i>
                                HRM
                                <i class="icon icon-angle-left s-18 pull-right"></i>
                            </a>
                            <ul id="expense" class="treeview-menu {{ (request()->segment(1) == 'departments'
                            || request()->segment(1) == 'employees'
                            || request()->segment(1) == 'payroll'
                            || request()->segment(1) == 'holidays'
                            || request()->segment(1) == 'attendance') ? 'menu-open' : '' }}">
                                <li id="dept-menu"
                                    class="{{(request()->segment(1) == 'departments' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('departments.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>{{trans('file.Department')}}
                                    </a>
                                </li>
                                <li id="employee-menu"
                                    class="{{(request()->segment(1) == 'employees' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('employees.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>{{trans('file.Employee')}}
                                    </a>
                                </li>
                                <li id="attendance-menu"
                                    class="{{(request()->segment(1) == 'attendance' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('attendance.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>{{trans('file.Attendance')}}
                                    </a>
                                </li>
                                <li id="payroll-menu"
                                    class="{{(request()->segment(1) == 'payroll' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('payroll.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>{{trans('file.Payroll')}}
                                    </a>
                                </li>
                                <li id="holiday-menu"
                                    class="{{(request()->segment(1) == 'holidays' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('holidays.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>{{trans('file.Holiday')}}
                                    </a>
                                </li>
                            </ul>
                        </li>--}}
                        @endrole

                        {{--<li class="treeview {{ (request()->segment(1) == 'customer'
                        || request()->segment(1) == 'biller'
                        || request()->segment(1) == 'supplier') ? 'active' : '' }}">
                            <a href="#">
                                <i class="icon icon-user s-18"></i>
                                People
                                <i class="icon icon-angle-left s-18 pull-right"></i>
                            </a>
                            <ul id="people" class="treeview-menu {{ (request()->segment(1) == 'customer'
                            || request()->segment(1) == 'biller'
                            || request()->segment(1) == 'supplier') ? 'menu-open' : '' }}">
                                <li id="customer-list-menu"
                                    class="{{(request()->segment(1) == 'customer' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('customer.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>Customer List
                                    </a>
                                </li>
                                <li id="customer-create-menu"
                                    class="{{(request()->segment(1) == 'customer' && request()->segment(2) == 'create')?'active':''}}">
                                    <a href="{{route('customer.create')}}">
                                        <i class="icon icon-circle-o s-12"></i>Add Customer
                                    </a>
                                </li>
                                <li id="biller-list-menu"
                                    class="{{(request()->segment(1) == 'biller' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('biller.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>Biller List
                                    </a>
                                </li>
                                <li id="biller-create-menu"
                                    class="{{(request()->segment(1) == 'biller' && request()->segment(2) == 'create')?'active':''}}">
                                    <a href="{{route('biller.create')}}">
                                        <i class="icon icon-circle-o s-12"></i>Add Biller
                                    </a>
                                </li>
                                <li id="supplier-list-menu"
                                    class="{{(request()->segment(1) == 'supplier' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('supplier.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>Supplier List
                                    </a>
                                </li>
                                <li id="supplier-create-menu"
                                    class="{{(request()->segment(1) == 'supplier' && request()->segment(2) == 'create')?'active':''}}">
                                    <a href="{{route('supplier.create')}}">
                                        <i class="icon icon-circle-o s-12"></i>Add Supplier
                                    </a>
                                </li>
                            </ul>
                        </li>--}}

                        <li class="treeview {{ (request()->segment(1) == 'warehouse'
                        || request()->segment(1) == 'brand'
                        || request()->segment(1) == 'tax'
                        || request()->segment(1) == 'customer_group'
                        || request()->segment(1) == 'setting'
                        || request()->segment(1) == 'unit') ? 'active' : '' }}">
                            <a href="#">
                                <i class="icon icon-cog s-18"></i>
                                Inventory Setting
                                <i class="icon icon-angle-left s-18 pull-right"></i>
                            </a>
                            <ul id="people" class="treeview-menu {{ (request()->segment(1) == 'warehouse'
                            || request()->segment(1) == 'brand'
                            || request()->segment(1) == 'tax'
                            || request()->segment(1) == 'customer_group'
                            || request()->segment(1) == 'setting'
                            || request()->segment(1) == 'unit') ? 'menu-open' : '' }}">
                                <li id="customer-list-menu"
                                    class="{{(request()->segment(1) == 'warehouse' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('warehouse.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>Warehouse List
                                    </a>
                                </li>
                                @role('Admin|Super Admin')
                                <li id="customer-group-menu"
                                    class="{{(request()->segment(1) == 'customer_group' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('customer_group.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.Customer Group')}}
                                    </a>
                                </li>
                                @endrole
                                <li id="brand-menu"
                                    class="{{(request()->segment(1) == 'brand' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('brand.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.Brand')}}
                                    </a>
                                </li>
                                <li id="unit-menu"
                                    class="{{(request()->segment(1) == 'unit' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('unit.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.Unit')}}
                                    </a>
                                </li>
                                <li id="tax-menu"
                                    class="{{(request()->segment(1) == 'tax' && request()->segment(2) == '')?'active':''}}">
                                    <a href="{{route('tax.index')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.Tax')}}
                                    </a>
                                </li>
                                <li id="general-setting-menu"
                                    class="{{(request()->segment(1) == 'setting' && request()->segment(2) == 'general_setting')?'active':''}}">
                                    <a href="{{route('setting.general')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.General Setting')}}
                                    </a>
                                </li>
                                @role('Admin|Super Admin')
                                <li id="create-sms-menu"
                                    class="{{(request()->segment(1) == 'setting' && request()->segment(2) == 'createsms')?'active':''}}">
                                    <a href="{{route('setting.createSms')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.Create SMS')}}
                                    </a>
                                </li>
                                <li id="mail-setting-menu"
                                    class="{{(request()->segment(1) == 'setting' && request()->segment(2) == 'mail_setting')?'active':''}}">
                                    <a href="{{route('setting.mail')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.Mail Setting')}}
                                    </a>
                                </li>
                                <li id="sms-setting-menu"
                                    class="{{(request()->segment(1) == 'setting' && request()->segment(2) == 'sms_setting')?'active':''}}">
                                    <a href="{{route('setting.sms')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.SMS Setting')}}
                                    </a>
                                </li>
                                <li id="pos-setting-menu"
                                    class="{{(request()->segment(1) == 'setting' && request()->segment(2) == 'pos_setting')?'active':''}}">
                                    <a href="{{route('setting.pos')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        POS {{trans('file.settings')}}
                                    </a>
                                </li>
                                {{--<li id="hrm-setting-menu">
                                    <a href="{{route('setting.hrm')}}">
                                        <i class="icon icon-circle-o s-12"></i>
                                        {{trans('file.HRM Setting')}}
                                    </a>
                                </li>--}}
                                @endrole
                            </ul>
                        </li>
                    </ul>
                </li>
                @can('shipment module','add supplier')
                    <li class="treeview {{ (request()->segment(1) == 'shipments' || request()->segment(1) == 'shipment') ? 'active' : '' }}">
                        <a href="#">
                            <i class="icon icon-ship s-18"></i>
                            Shipment and Tracking
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu {{ (request()->segment(1) == 'shipments' || request()->segment(1) == 'shipment') ? 'menu-open' : '' }}">
                            @can('shipment module','add supplier')
                                <li class="treeview {{ (request()->segment(1) == 'shipments' || request()->segment(1) == 'shipment') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-ship"></i>
                                        Shipments
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu {{ (request()->segment(1) == 'shipments' || request()->segment(1) == 'shipment') ? 'menu-open' : '' }}">
                                        @can('shipment module')
                                            <li>
                                                <a href="{{route('shipments.index')}}">
                                                    <i class="icon icon-minus"></i>All Shipments
                                                </a>
                                            </li>
                                        @endcan
                                        {{--                                        @can('shipment module')--}}
                                        {{--<li>--}}
                                        {{--<a href="{{route('shipment.index')}}">--}}
                                        {{--<i class="icon icon-minus"></i>Shipments Overview--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--@endcan--}}
                                        @can('add supplier')
                                            <li>
                                                <a href="{{route('shipment.create')}}">
                                                    <i class="icon icon-minus"></i>Add Shipment
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('schedule module','task module','user module','add user')
                    <li class="treeview {{ (request()->segment(1) == 'employee'
                        || request()->segment(1) == 'schedule'
                        || request()->segment(1) == 'task'
                        || request()->segment(2) == 'user') ? 'active' : '' }}">
                        <a href="#">
                            <i class="icon icon-users s-18"></i>
                            Employee Scheduling
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu {{ (request()->segment(1) == 'employee'
                            || request()->segment(1) == 'schedule'
                            || request()->segment(1) == 'task'
                            || request()->segment(2) == 'user') ? 'menu-open' : '' }}">
                            {{--<li class="treeview {{ (request()->segment(1) == 'schedule') ? 'active' : '' }}">
                                <a href="#">
                                    <i class="icon icon-business_center"></i>
                                    Make Schedule
                                    <i class="icon icon-angle-left pull-right"></i>
                                </a>

                            </li>--}}
                            @can('schedule module')
                                <li class="{{ (request()->segment(1) == 'schedule') ? 'active' : '' }}">
                                    <a href="{{route('schedule.index')}}">
                                        <i class="icon icon-business_center"></i>Make Schedule
                                    </a>
                                </li>
                                <li class="{{ (request()->segment(1) == 'schedule') ? 'active' : '' }}">
                                    <a href="{{route('schedule.index.table')}}">
                                        <i class="icon icon-list"></i>View Schedule
                                    </a>
                                </li>
                            @endcan
                            @can('task module')
                                <li class="treeview {{ (request()->segment(1) == 'task') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-tasks"></i>
                                        Tasks
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu {{ (request()->segment(1) == 'task') ? 'menu-open' : '' }}">
                                        @can('task module')
                                            <li>
                                                <a href="{{route('task.index')}}">
                                                    <i class="icon icon-minus"></i>All Tasks
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan
                            @can('user module','add user')
                                <li class="treeview {{ (request()->segment(2) == 'user') ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-account_box"></i>
                                        Users
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu {{ (request()->segment(2) == 'user') ? 'menu-open' : '' }}">
                                        @can('user module')
                                            <li>
                                                <a href="{{route('admin.user.index')}}">
                                                    <i class="icon icon-users"></i>All Users
                                                </a>
                                            </li>
                                    @endcan
                                    <!--@can('add user')
                                        <li>
                                            <a href="{{route('admin.user.create')}}">
                                                    <i class="icon icon-user-plus"></i>Add User
                                                </a>
                                            </li>
                                        @endcan
                                            @role('Super Admin|Admin')
                                            <li>
                                                <a href="{{route('admin.user.trash')}}">
                                                <i class="icon icon-user-times"></i>Delete Users
                                            </a>
                                        </li>
                                        @endrole-->
                                    </ul>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('document module')
                    <li class="{{(request()->segment(1) == 'document' || request()->segment(1) == 'folder')?'active':''}}">
                        <a href="{{route('document.index')}}">
                            <i class="icon icon-file s-18"></i>Documents
                        </a>
                    </li>
                @endcan
                {{--<li class="{{(request()->segment(1) == 'other-document')?'active':''}}">
                    <a href="{{route('other-document.index')}}">
                        <i class="icon icon-file s-18"></i>Other Documents
                    </a>
                </li>--}}
                {{--<li class="{{(request()->segment(1) == 'calender')?'active':''}}">
                    <a href="{{route('calender')}}">
                        <i class="icon icon-calendar s-18"></i>Calendar
                    </a>
                </li>--}}
                <li>
                    <a href="{{url('profile')}}">
                        <i class="icon icon-user"></i>
                        Profile
                    </a>
                </li>
                @canany('features heading module','what are we module','banner module','city module','country module','state module','assign permission module')
                    <li class="treeview {{ (request()->url() == route('admin.permission.index') ||
                           request()->url() == route('admin.permission.set') ||
                           request()->url() == route('admin.role.create') ||
                           request()->url() == route('admin.permission.create') ||
                           request()->url() == route('admin.role.index') ||
                           request()->segment(1) == 'banner' ||
                           request()->segment(1) == 'what-are-we' ||
                           request()->segment(1) == 'features-heading' ||
                           request()->segment(1) == 'pricing-heading' ||
                           request()->segment(1) == 'blog-heading' ||
                           request()->segment(1) == 'feature' ||
                           request()->segment(1) == 'figure' ||
                           request()->segment(1) == 'challenges' ||
                           request()->segment(1) == 'module' ||
                           request()->segment(1) == 'about-us' ||
                           request()->segment(1) == 'blog' ||
                           request()->segment(1) == 'city' ||
                           request()->segment(1) == 'state' ||
                           request()->segment(1) == 'country') ? 'active' : '' }}">
                        <a href="#">
                            <i class="icon icon-cogs text-lime s-18"></i>
                            <span>Settings</span>
                            <i class="icon icon-angle-left s-18 pull-right"></i>
                        </a>
                        <ul class="treeview-menu {{ (request()->url() == route('admin.permission.index') ||
                           request()->url() == route('admin.permission.set') ||
                           request()->url() == route('admin.role.create') ||
                           request()->url() == route('admin.permission.create') ||
                           request()->url() == route('admin.role.index') ||
                           request()->segment(1) == 'banner' ||
                           request()->segment(1) == 'what-are-we' ||
                           request()->segment(1) == 'features-heading' ||
                           request()->segment(1) == 'pricing-heading' ||
                           request()->segment(1) == 'blog-heading' ||
                           request()->segment(1) == 'feature' ||
                           request()->segment(1) == 'figure' ||
                           request()->segment(1) == 'challenges' ||
                           request()->segment(1) == 'nodule' ||
                           request()->segment(1) == 'about-us' ||
                           request()->segment(1) == 'blog' ||
                           request()->segment(1) == 'city' ||
                           request()->segment(1) == 'state' ||
                           request()->segment(1) == 'country') ? 'menu-open' : '' }}">
                            @role('Admin|Super Admin')
                            <li>
                                <a href="{{route('admin.permission.index')}}"
                                   class="@if(request()->url() == route('admin.permission.index') ){{'active'}}@endif">
                                    <i class="icon icon-user-secret light-green-text"></i>
                                    Permissions
                                </a>
                            </li>
                            @endrole
                            @can('assign permission module')
                                <li>
                                    <a href="{{route('admin.permission.set')}}"
                                       class="@if(request()->url() == route('admin.permission.set') ){{'active'}}@endif">
                                        <i class="icon icon-check3"></i>
                                        Assign Permissions
                                    </a>
                                </li>
                            @endcan
                            @role('Admin|Super Admin')
                            <li>
                                <a href="{{route('admin.role.index')}}"
                                   class="@if(request()->url() == route('admin.role.index') ){{'active'}}@endif">
                                    <i class="icon icon-users"></i>
                                    Roles
                                </a>
                            </li>
                            @endrole
                            @can('banner module')
                                <li>
                                    <a href="{{route('banner.index')}}"
                                       class="@if(request()->url() == route('banner.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Banners
                                    </a>
                                </li>
                            @endcan
                            @can('what are we module')
                                <li>
                                    <a href="{{route('what-are-we.index')}}"
                                       class="@if(request()->url() == route('what-are-we.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        What is Swiftlogix?
                                    </a>
                                </li>
                            @endcan
                            @can('features heading module')
                                <li>
                                    <a href="{{route('features-heading.index')}}"
                                       class="@if(request()->url() == route('features-heading.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Features Heading
                                    </a>
                                </li>
                            @endcan
                            @can('feature module')
                                <li>
                                    <a href="{{route('feature.index')}}"
                                       class="@if(request()->url() == route('feature.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Features
                                    </a>
                                </li>
                            @endcan
                            {{--@can('figure module')
                                <li>
                                    <a href="{{route('figure.index')}}"
                                       class="@if(request()->url() == route('figure.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Amazing Figures
                                    </a>
                                </li>
                            @endcan--}}
                            @can('challenges module')
                                <li>
                                    <a href="{{route('challenges.index')}}"
                                       class="@if(request()->url() == route('challenges.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        We Solve Challenges
                                    </a>
                                </li>
                            @endcan
                            @can('module module')
                                <li>
                                    <a href="{{route('module.index')}}"
                                       class="@if(request()->url() == route('module.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Modules
                                    </a>
                                </li>
                            @endcan
                            @can('about us module')
                                <li>
                                    <a href="{{route('about-us.index')}}"
                                       class="@if(request()->url() == route('about-us.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Get In Touch
                                    </a>
                                </li>
                            @endcan
                            @can('pricing heading module')
                                <li>
                                    <a href="{{route('pricing-heading.index')}}"
                                       class="@if(request()->url() == route('pricing-heading.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Pricing Heading
                                    </a>
                                </li>
                            @endcan
                            @can('pricing module')
                                <li>
                                    <a href="{{route('pricing.index')}}"
                                       class="@if(request()->url() == route('pricing.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Pricing Plans
                                    </a>
                                </li>
                            @endcan
                            @can('blog heading module')
                                <li>
                                    <a href="{{route('blog-heading.index')}}"
                                       class="@if(request()->url() == route('blog-heading.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Blog Heading
                                    </a>
                                </li>
                            @endcan
                            @can('blog module')
                                <li>
                                    <a href="{{route('blog.index')}}"
                                       class="@if(request()->url() == route('blog.index') ){{'active'}}@endif">
                                        <i class="icon icon-circle"></i>
                                        Blog
                                    </a>
                                </li>
                            @endcan
                            @canany('city module','country module','state module')
                                <li class="treeview {{ request()->segment(1) == 'city' ||
                           request()->segment(1) == 'state' ||
                           request()->segment(1) == 'country' ? 'active' : '' }}">
                                    <a href="#">
                                        <i class="icon icon-road text-lime"></i>
                                        <span>Routes</span>
                                        <i class="icon icon-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu {{ request()->segment(1) == 'city' ||
                                                request()->segment(1) == 'state' ||
                                                request()->segment(1) == 'country' ? 'menu-open' : ''}}">
                                        @can('city module')
                                            <li class="@if(request()->segment(1) == 'city' ){{'active'}}@endif">
                                                <a href="{{route('city.index')}}">
                                                    <i class="icon icon-flag"></i>
                                                    Cities
                                                </a>
                                            </li>
                                        @endcan
                                        @can('state module')
                                            <li class="@if(request()->segment(1) == 'state' ){{'active'}}@endif">
                                                <a href="{{route('state.index')}}">
                                                    <i class="icon icon-flag"></i>
                                                    States
                                                </a>
                                            </li>
                                        @endcan
                                        @can('country module')
                                            <li class="@if(request()->segment(1) == 'country' ){{'active'}}@endif">
                                                <a href="{{route('country.index')}}">
                                                    <i class="icon icon-flag"></i>
                                                    Countries
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcanany
                        </ul>
                    </li>
                @endcanany
                <li style="margin-top:30px;">
                    <a style="color:red;font-weight:bold;" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        <i class="icon icon-power-off s-18"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </section>
    </aside>
    <!--Sidebar End-->
    <div class="page has-sidebar-left">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                    <div class="search-bar">
                        <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                               placeholder="start typing...">
                    </div>
                    <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                       aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active ">
                        <i></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand d-flex navbar-dark justify-content-between bd-navbar blue accent-3 shadow">
            <div class="relative das-title">
                <div class="d-flex align-items-center">

                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle ">
                        <i></i>
                    </a>

                    @yield('header')
                </div>
            </div>
            <!--Top Menu Start -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages-->
                {{--<li class="dropdown custom-dropdown messages-menu">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="icon-message "></i>
                        <span class="badge badge-success badge-mini rounded-circle">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu pl-2 pr-2">
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="{{asset('admin/assets/img/dummy/u2.png')}}" alt="">
                                            <span class="avatar-badge busy"></span>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="{{asset('admin/assets/img/dummy/u1.png')}}" alt="">
                                            <span class="avatar-badge online"></span>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="{{asset('admin/assets/img/dummy/u2.png')}}" alt="">
                                            <span class="avatar-badge idle"></span>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="{{asset('admin/assets/img/dummy/u1.png')}}" alt="">
                                            <span class="avatar-badge busy"></span>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                        </li>
                        <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                    </ul>
                </li>--}}
                <!-- Notifications -->
                {{--<li class="dropdown custom-dropdown notifications-menu">
                    <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-notifications "></i>
                        <span class="badge badge-danger badge-mini rounded-circle">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer p-2 text-center"><a href="#">View all</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                       aria-controls="navbarToggleExternalContent"
                       aria-expanded="false" aria-label="Toggle navigation">
                        <i class=" icon-search3 "></i>
                    </a>
                </li>--}}
                <!-- Right Sidebar Toggle Button -->
                {{--<li>
                    <a class="nav-link ml-2" data-toggle="control-sidebar">
                        <i class="icon-tasks "></i>
                    </a>
                </li>--}}
                <!-- User Account-->
                    <li class="dropdown custom-dropdown user user-menu ">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                        <!--<img src="{{(isset(Auth::user()->picture))?asset('assets/images/profile/'.Auth::user()->picture):asset('assets/images/profile/profile.png')}}"-->
                            <!--     class="user-image" alt="User Image">-->
                            <i class="icon-more_vert"></i>
                        </a>
                        <div class="dropdown-menu p-4 dropdown-menu-right">
                            <div class="row box justify-content-between my-4">
                                {{--<div class="col">
                                    <a href="#">
                                        <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Apps</div>
                                    </a>
                                </div>--}}
                                <div class="col">
                                    <a href="{{url('profile')}}">
                                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Profile</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                            {{--<div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Favourites</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                                        <div class="pt-1">Saved</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Apps</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Profile</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>--}}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @yield('content')
    </div>
</div>
<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                              <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                            data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
<!-- expense modal -->
<div id="expense-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
     class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Add Expense')}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p class="italic">
                    <small>{{trans('file.The field labels marked with * are required input fields')}}.
                    </small>
                </p>
                {!! Form::open(['route' => 'expenses.store', 'method' => 'post']) !!}
                <?php
                $lims_expense_category_list = DB::table('expense_categories')->where('is_active', true)->get();
                $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                $lims_account_list = \App\Models\Inventory\Account::where('is_active', true)->get();

                ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>{{trans('file.Expense Category')}} *</label>
                        <select name="expense_category_id" class="select2 form-control" required
                                data-live-search="true" data-live-search-style="begins"
                                title="Select Expense Category...">
                            @foreach($lims_expense_category_list as $expense_category)
                                <option value="{{$expense_category->id}}">{{$expense_category->name . ' (' . $expense_category->code. ')'}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>{{trans('file.Amount')}} *</label>
                        <input type="number" name="amount" step="any" required class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label> {{trans('file.Account')}}</label>
                        <select class="form-control select2" name="account_id">
                            @foreach($lims_account_list as $account)
                                @if($account->is_default)
                                    <option selected value="{{$account->id}}">{{$account->name}}
                                        [{{$account->account_no}}]
                                    </option>
                                @else
                                    <option value="{{$account->id}}">{{$account->name}}
                                        [{{$account->account_no}}]
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>{{trans('file.Note')}}</label>
                    <textarea name="note" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- account modal -->
<div id="account-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
     class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Add Account')}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p class="italic">
                    <small>{{trans('file.The field labels marked with * are required input fields')}}.
                    </small>
                </p>
                {!! Form::open(['route' => 'accounts.store', 'method' => 'post']) !!}
                <div class="form-group">
                    <label>{{trans('file.Account No')}} *</label>
                    <input type="text" name="account_no" required class="form-control">
                </div>
                <div class="form-group">
                    <label>{{trans('file.name')}} *</label>
                    <input type="text" name="name" required class="form-control">
                </div>
                <div class="form-group">
                    <label>{{trans('file.Initial Balance')}}</label>
                    <input type="number" name="initial_balance" step="any" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{trans('file.Note')}}</label>
                    <textarea name="note" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- account statement modal -->
<div id="account-statement-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true"
     class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Account Statement')}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p class="italic">
                    <small>{{trans('file.The field labels marked with * are required input fields')}}.
                    </small>
                </p>
                {!! Form::open(['route' => 'accounts.statement', 'method' => 'post']) !!}
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label> {{trans('file.Account')}}</label>
                        <select class="form-control select2" name="account_id">
                            @foreach($lims_account_list as $account)
                                <option value="{{$account->id}}">{{$account->name}}[{{$account->account_no}}
                                    ]
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label> {{trans('file.Type')}}</label>
                        <select class="form-control select2" name="type">
                            <option value="0">{{trans('file.All')}}</option>
                            <option value="1">{{trans('file.Debit')}}</option>
                            <option value="2">{{trans('file.Credit')}}</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>{{trans('file.Choose Your Date')}}</label>
                        <div class="input-group">
                            <input type="text" class="daterangepicker-field form-control" required/>
                            <input type="hidden" name="start_date"/>
                            <input type="hidden" name="end_date"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- warehouse modal -->
<div id="warehouse-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
     class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Warehouse Report')}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p class="italic">
                    <small>{{trans('file.The field labels marked with * are required input fields')}}.
                    </small>
                </p>
                {!! Form::open(['route' => 'report.warehouse', 'method' => 'post']) !!}
                <?php
                $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                ?>
                <div class="form-group">
                    <label>{{trans('file.Warehouse')}} *</label>
                    <select name="warehouse_id" class=" select2 form-control" requireddata-live-search="true"
                            id="warehouse-id" data-live-search-style="begins" title="Select warehouse...">
                        @foreach($lims_warehouse_list as $warehouse)
                            <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                        @endforeach
                    </select>
                </div>

                <input type="hidden" name="start_date" value="1988-04-18"/>
                <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- user modal -->
<div id="user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
     class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{trans('file.User Report')}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p class="italic">
                    <small>{{trans('file.The field labels marked with * are required input fields')}}.
                    </small>
                </p>
                {!! Form::open(['route' => 'report.user', 'method' => 'post']) !!}
                <?php
                $lims_user_list = DB::table('users')->where('is_active', true)->get();
                ?>

                <div class="form-group">
                    <label>{{trans('file.User')}} *</label>
                    <select name="user_id" class="select2 form-control" required
                            data-live-search="true"
                            id="user-id" data-live-search-style="begins" title="Select user...">
                        @foreach($lims_user_list as $user)
                            <option value="{{$user->id}}">{{$user->first_name . ' (' . $user->phone. ')'}}</option>
                        @endforeach
                    </select>
                </div>

                <input type="hidden" name="start_date" value="1988-04-18"/>
                <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- customer modal -->
<div id="customer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
     class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Customer Report')}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p class="italic">
                    <small>{{trans('file.The field labels marked with * are required input fields')}}.
                    </small>
                </p>
                {!! Form::open(['route' => 'report.customer', 'method' => 'post']) !!}
                <?php
                $lims_customer_list = DB::table('customers')->where('is_active', true)->get();
                ?>

                <div class="form-group">
                    <label>{{trans('file.customer')}} *</label>
                    <select name="customer_id" class="select2 form-control" required
                            data-live-search="true"
                            id="customer-id" data-live-search-style="begins" title="Select customer...">
                        @foreach($lims_customer_list as $customer)
                            <option value="{{$customer->id}}">{{$customer->name . ' (' . $customer->phone_number. ')'}}</option>
                        @endforeach
                    </select>
                </div>

                <input type="hidden" name="start_date" value="1988-04-18"/>
                <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- supplier modal -->
<div id="supplier-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
     class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Supplier Report')}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p class="italic">
                    <small>{{trans('file.The field labels marked with * are required input fields')}}.
                    </small>
                </p>
                {!! Form::open(['route' => 'report.supplier', 'method' => 'post']) !!}
                <?php
                $lims_supplier_list = DB::table('suppliers')->where('is_active', true)->get();
                ?>

                <div class="form-group">
                    <label>{{trans('file.Supplier')}} *</label>
                    <select name="supplier_id" class="select2 form-control" required
                            data-live-search="true"
                            id="supplier-id" data-live-search-style="begins" title="Select Supplier...">
                        @foreach($lims_supplier_list as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->name . ' (' . $supplier->phone_number. ')'}}</option>
                        @endforeach
                    </select>
                </div>

                <input type="hidden" name="start_date" value="1988-04-18"/>
                <input type="hidden" name="end_date" value="{{date('Y-m-d')}}"/>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!--/#app -->
<script src="{{asset('admin/assets/js/app.js')}}"></script>

<script>
    $(document).ready(function () {
        window.setTimeout(function () {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
                $(this).remove();
            });
        }, 5000);
    });
    (function ($, d) {
        $.each(readyQ, function (i, f) {
            $(f)
        });
        $.each(bindReadyQ, function (i, f) {
            $(d).bind("ready", f)
        })
    })(jQuery, document)
</script>
@yield('script')
</body>
</html>