@extends('layouts.admin')

@section('content')

    {{-- <div class="card p-3 bg-light">
        <div class="row">
            <div class="col-12 col-md-3 text-center">
                <p class="mb-2">Yearly Income</p>
                <h4>${{ $stats['yearly_income'] }}</h4>
            </div>
            <div class="col-12 col-md-3 text-center">
                <p class="mb-2">Monthly Income</p>
                <h4>${{ $stats['monthly_income'] }}</h4>
            </div>
            <div class="col-12 col-md-3 text-center">
                <p class="mb-2">Weekly</p>
                <h4>${{ $stats['weekly_income'] }}</h4>
            </div>
            <div class="col-12 col-md-3 text-center">
                <p class="mb-2">Balance</p>
                <h4>${{ $stats['balance'] }}</h4>
            </div>
        </div>
    </div> --}}
    <div class="l-main">
        <div class="content-wrapper">
            <div class="card card-body head_card mb-4">
                <h5 class="m-0 h5head mb-0">
                    My Client
            </div>


            <div class=" white_bg p-3">
                @if ($users->count())
                    <table class="table all_table">
                        <thead>
                            <tr>
                                <th>
                                    First Name
                                </th>
                                <th>
                                    Last Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Subscription
                                </th>
                                <th>
                                    Paid Amount
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>
                                        {{ $user->first_name }}
                                    </td>
                                    <td>
                                        {{ $user->last_name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td class="text-capitalize">
                                        {{ $user->subscription }}
                                    </td>
                                    <td>
                                        {{ $user->paid_amount }}
                                    </td>
                                    <td>
                                        Active
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="text-center">No paid users found</div>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-10 mx-auto">
            <div class="chart-box chart-item w-100">
                <div class="chart-headline d-flex align-items-center justify-content-between mb-4">
                    <h3 class="widget-title font-size-16 pb-0"><i class="font-size-20 la la-bar-chart mr-1"></i> Financial
                        Report</h3>
                    <div class="user-chosen-select-container">
                        <select class="user-chosen-select">
                            <option value="30">30 Days</option>
                            <option value="60" @if ($chart == 60) selected @endif>60 Days</option>
                            <option value="90" @if ($chart == 90) selected @endif>90 Days</option>
                        </select>
                    </div><!-- end short-option -->
                </div>
                <canvas id="line-chart"></canvas>
            </div><!-- end chart-box -->
        </div>
    </div>

@endsection

@section('scripts')
    <script src="/dash-assets/js/chart.js"></script>
    <script>
        $(document).ready(function() {
            $('.user-chosen-select').on('change', function() {
                window.location.href = '/admin/paid-users/' + $(this).val();
            });

            $('.view-more').on('click', function(e) {
                e.preventDefault();
                $(this).closest('td').text($(this).closest('td').data('value'));
            });
        });

        var ctx = document.getElementById("line-chart");

        Chart.defaults.global.defaultFontFamily = "Noto Sans JP",
            Chart.defaults.global.defaultFontSize = 14,
            Chart.defaults.global.defaultFontStyle = "500",
            Chart.defaults.global.defaultFontColor = "#2e3d62";

        var labels = [];
        var data = [];
        @foreach ($data as $key => $value)
            labels.push('{{ $key }}');
            data.push('{{ $value }}');
        @endforeach

        var chart = new Chart(ctx, {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    label: "Views",
                    data: data,
                    backgroundColor: "rgba(6,181,144,0.1)",
                    borderColor: "#06b590",
                    pointBorderColor: "#ffffff",
                    pointBackgroundColor: "#06b590",
                    pointBorderWidth: 2,
                    pointRadius: 4
                }]
            },
            options: {
                tooltips: {
                    xPadding: 12,
                    yPadding: 12,
                    backgroundColor: "#2e3d62"
                },
                legend: {
                    display: !1,
                    tooltips: {
                        displayColors: !1
                    }
                },
                scales: {
                    xAxes: [{
                        display: !0,
                        gridLines: {
                            color: "#eee"
                        }
                    }],
                    yAxes: [{
                        display: !0,
                        gridLines: {
                            color: "#eee"
                        },
                        ticks: {
                            fontSize: 14
                        }
                    }]
                }
            }
        });
    </script>
@endsection
