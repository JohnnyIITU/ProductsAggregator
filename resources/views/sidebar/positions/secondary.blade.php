@extends('sidebar.layouts.master')

@section('title', '| Должности')

@section('content')
    <script>
        function hide(id, btn) {
            $('#allDamp').hide();
            $('#avgDamp').hide();
            $('#indexRrc').hide();
            $('#indexDamp').hide();
            $('#durDamp').hide();
            $('#prices').hide();
            $('#knee').hide();
            $('#indexDiscount').hide();
            $('.btn-block').removeClass('active');
            $(btn).addClass('active');
            $('#' + id).show();
        }
    </script>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Основная информация</h1>
                </div>

            </div>
        </div>
    </section>
    <div class="content">
        <div class="row justify-content-center">
            <div class="text-center">
                <div class="btn-group">
                    <button onclick="hide('allDamp', this)" class="btn btn-block btn-outline-primary active"
                            style="margin-top: 8px;"> Счетчик демпинга и
                        out-of-stock (всего)
                    </button>
                    <button onclick="hide('avgDamp', this)" class="btn btn-block btn-outline-primary"> Счетчик демпинга и
                        out-of-stock (среднее)
                    </button>
                    <button onclick="hide('indexRrc', this)" class="btn btn-block btn-outline-primary"> Индекс РРЦ</button>
                    <button onclick="hide('indexDamp', this)" class="btn btn-block btn-outline-primary"> Индекс демпинга
                    </button>
                    <button onclick="hide('durDamp', this)" class="btn btn-block btn-outline-primary"> Продолжительность
                        демпинга
                    </button>
                    <button onclick="hide('prices', this)" class="btn btn-block btn-outline-primary"> Цены</button>
                    <button onclick="hide('knee', this)" class="btn btn-block btn-outline-primary"> Колебания</button>
                    <button onclick="hide('indexDiscount', this)" class="btn btn-block btn-outline-primary"> Индекс скидок
                    </button>
                </div>
            </div>
        </div>
        <div class="row">&nbsp</div>

        <div id="allDamp">
            <chart data-highcharts-chart="62">
                <div id="highcharts-1pjixtw-2398"
                     style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"
                     dir="ltr" class="highcharts-container ">
                    <svg version="1.1" class="highcharts-root"
                         style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                         xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                            <clipPath id="highcharts-1pjixtw-2399">
                                <rect x="0" y="0" width="1552" height="225" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                              ry="0"></rect>
                        <rect fill="none" class="highcharts-plot-background" x="81" y="53" width="1552"
                              height="225"></rect>
                        <g class="highcharts-pane-group" data-z-index="0"></g>
                        <g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 132.5 53 L 132.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 183.5 53 L 183.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 235.5 53 L 235.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 287.5 53 L 287.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 339.5 53 L 339.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 390.5 53 L 390.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 442.5 53 L 442.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 494.5 53 L 494.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 546.5 53 L 546.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 597.5 53 L 597.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 649.5 53 L 649.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 701.5 53 L 701.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 753.5 53 L 753.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 804.5 53 L 804.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 856.5 53 L 856.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 908.5 53 L 908.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 959.5 53 L 959.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1011.5 53 L 1011.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1063.5 53 L 1063.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1115.5 53 L 1115.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1166.5 53 L 1166.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1218.5 53 L 1218.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1270.5 53 L 1270.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1322.5 53 L 1322.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1373.5 53 L 1373.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1425.5 53 L 1425.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1477.5 53 L 1477.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1529.5 53 L 1529.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1580.5 53 L 1580.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1632.5 53 L 1632.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 80.5 53 L 80.5 278"
                                  opacity="1"></path>
                        </g>
                        <g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 81 278.5 L 1633 278.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 81 233.5 L 1633 233.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 81 188.5 L 1633 188.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 81 143.5 L 1633 143.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 81 98.5 L 1633 98.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 81 52.5 L 1633 52.5" opacity="1"></path>
                        </g>
                        <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="81" y="53" width="1552"
                              height="225"></rect>
                        <g class="highcharts-axis highcharts-xaxis " data-z-index="2">
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 132.5 278 L 132.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 183.5 278 L 183.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 235.5 278 L 235.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 287.5 278 L 287.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 339.5 278 L 339.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 390.5 278 L 390.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 442.5 278 L 442.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 494.5 278 L 494.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 546.5 278 L 546.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 597.5 278 L 597.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 649.5 278 L 649.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 701.5 278 L 701.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 753.5 278 L 753.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 804.5 278 L 804.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 856.5 278 L 856.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 908.5 278 L 908.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 959.5 278 L 959.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1011.5 278 L 1011.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1063.5 278 L 1063.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1115.5 278 L 1115.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1166.5 278 L 1166.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1218.5 278 L 1218.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1270.5 278 L 1270.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1322.5 278 L 1322.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1373.5 278 L 1373.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1425.5 278 L 1425.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1477.5 278 L 1477.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1529.5 278 L 1529.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1580.5 278 L 1580.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1633.5 278 L 1633.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 80.5 278 L 80.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                  data-z-index="7" d="M 81 278.5 L 1633 278.5"></path>
                        </g>
                        <g class="highcharts-axis highcharts-yaxis " data-z-index="2">
                            <text x="26.140625" data-z-index="7" text-anchor="middle"
                                  transform="translate(0,0) rotate(270 26.140625 165.5)" class="highcharts-axis-title"
                                  style="color:#666666;fill:#666666;" y="165.5">
                                <tspan>Количетсво</tspan>
                            </text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 81 53 L 81 278"></path>
                        </g>
                        <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series "
                               transform="translate(81,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2399)">
                                <path fill="none"
                                      d="M 25.866666666667 62.46000000000001 L 77.6 67.32 L 129.33333333333 50.76000000000002 L 181.06666666667 58.68000000000001 L 232.8 57.06 L 284.53333333333 87.66 L 336.26666666667 77.4 L 388 52.56 L 439.73333333333 75.42000000000002 L 491.46666666667 82.80000000000001 L 543.2 66.24000000000001 L 594.93333333333 58.140000000000015 L 646.66666666667 47.34 L 698.4 61.379999999999995 L 750.13333333333 61.74000000000001 L 801.86666666667 60.48000000000002 L 853.6 57.96000000000001 L 905.33333333333 57.599999999999994 L 957.06666666667 53.81999999999999 L 1008.8 64.98000000000002 L 1060.5333333333 59.94 L 1112.2666666667 60.48000000000002 L 1164 64.80000000000001 L 1215.7333333333 97.2 L 1267.4666666667 65.16 L 1319.2 90.53999999999999 L 1370.9333333333 65.52000000000001 L 1422.6666666667 74.88 L 1474.4 51.66 L 1526.1333333333 52.56"
                                      class="highcharts-graph" data-z-index="1" stroke="#FF8366" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.866666666667001 62.46000000000001 L 25.866666666667 62.46000000000001 L 77.6 67.32 L 129.33333333333 50.76000000000002 L 181.06666666667 58.68000000000001 L 232.8 57.06 L 284.53333333333 87.66 L 336.26666666667 77.4 L 388 52.56 L 439.73333333333 75.42000000000002 L 491.46666666667 82.80000000000001 L 543.2 66.24000000000001 L 594.93333333333 58.140000000000015 L 646.66666666667 47.34 L 698.4 61.379999999999995 L 750.13333333333 61.74000000000001 L 801.86666666667 60.48000000000002 L 853.6 57.96000000000001 L 905.33333333333 57.599999999999994 L 957.06666666667 53.81999999999999 L 1008.8 64.98000000000002 L 1060.5333333333 59.94 L 1112.2666666667 60.48000000000002 L 1164 64.80000000000001 L 1215.7333333333 97.2 L 1267.4666666667 65.16 L 1319.2 90.53999999999999 L 1370.9333333333 65.52000000000001 L 1422.6666666667 74.88 L 1474.4 51.66 L 1526.1333333333 52.56 L 1536.1333333333 52.56"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker "
                               transform="translate(81,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2430)">
                                <path fill="#FF8366" visibility="hidden"
                                      d="M 25 62.46000000000001 A 0 0 0 1 1 25 62.46000000000001 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#FF8366"
                                      d="M 29 62.46000000000001 A 4 4 0 1 1 28.99999800000017 62.45600000066667 Z"
                                      class="highcharts-point "></path>
                                <path fill="#FF8366" d="M 81 67 A 4 4 0 1 1 80.99999800000016 66.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 133 51 A 4 4 0 1 1 132.99999800000018 50.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366"
                                      d="M 185 58.68000000000001 A 4 4 0 1 1 184.99999800000018 58.67600000066667 Z"
                                      class="highcharts-point " stroke-width="0.01136593821590326"></path>
                                <path fill="#FF8366" d="M 236 57.06 A 4 4 0 1 1 235.99999800000018 57.056000000666664 Z"
                                      class="highcharts-point " stroke-width="0.8468266529064025"></path>
                                <path fill="#FF8366" d="M 288 87.66 A 4 4 0 1 1 287.9999980000002 87.65600000066667 Z"
                                      class="highcharts-point " stroke-width="0.006657027896066037"></path>
                                <path fill="#FF8366" d="M 340 77.4 A 4 4 0 1 1 339.9999980000002 77.39600000066667 Z"
                                      class="highcharts-point " stroke-width="0.004346184465246816"></path>
                                <path fill="#FF8366" d="M 392 52.56 A 4 4 0 1 1 391.9999980000002 52.556000000666664 Z"
                                      class="highcharts-point "></path>
                                <path fill="#FF8366"
                                      d="M 443 75.42000000000002 A 4 4 0 1 1 442.9999980000002 75.41600000066668 Z"
                                      class="highcharts-point " stroke-width="0.18371491904343773"></path>
                                <path fill="#FF8366" d="M 495 83 A 4 4 0 1 1 494.9999980000002 82.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 547 66 A 4 4 0 1 1 546.9999980000001 65.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 598 58 A 4 4 0 1 1 597.9999980000001 57.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 650 47 A 4 4 0 1 1 649.9999980000001 46.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 702 61 A 4 4 0 1 1 701.9999980000001 60.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 754 62 A 4 4 0 1 1 753.9999980000001 61.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 805 60 A 4 4 0 1 1 804.9999980000001 59.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 857 58 A 4 4 0 1 1 856.9999980000001 57.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 909 58 A 4 4 0 1 1 908.9999980000001 57.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 961 54 A 4 4 0 1 1 960.9999980000001 53.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1012 65 A 4 4 0 1 1 1011.9999980000001 64.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1064 60 A 4 4 0 1 1 1063.9999980000002 59.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1116 60 A 4 4 0 1 1 1115.9999980000002 59.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1168 65 A 4 4 0 1 1 1167.9999980000002 64.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1219 97 A 4 4 0 1 1 1218.9999980000002 96.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1271 65 A 4 4 0 1 1 1270.9999980000002 64.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1323 91 A 4 4 0 1 1 1322.9999980000002 90.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1374 66 A 4 4 0 1 1 1373.9999980000002 65.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1426 75 A 4 4 0 1 1 1425.9999980000002 74.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1478 52 A 4 4 0 1 1 1477.9999980000002 51.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1530 53 A 4 4 0 1 1 1529.9999980000002 52.99600000066666 Z"
                                      class="highcharts-point"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-1 highcharts-line-series "
                               transform="translate(81,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2399)">
                                <path fill="none"
                                      d="M 25.866666666667 195.3 L 77.6 195.84 L 129.33333333333 189.72 L 181.06666666667 194.22 L 232.8 191.52 L 284.53333333333 194.4 L 336.26666666667 198.36 L 388 200.7 L 439.73333333333 198.54 L 491.46666666667 201.24 L 543.2 188.1 L 594.93333333333 198.54 L 646.66666666667 209.88 L 698.4 209.52 L 750.13333333333 197.28 L 801.86666666667 195.84 L 853.6 194.94 L 905.33333333333 196.2 L 957.06666666667 195.12 L 1008.8 194.22 L 1060.5333333333 199.08 L 1112.2666666667 196.02 L 1164 195.84 L 1215.7333333333 201.96 L 1267.4666666667 201.6 L 1319.2 202.14 L 1370.9333333333 199.62 L 1422.6666666667 199.98 L 1474.4 199.44 L 1526.1333333333 202.5"
                                      class="highcharts-graph" data-z-index="1" stroke="#F8A95E" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.866666666667001 195.3 L 25.866666666667 195.3 L 77.6 195.84 L 129.33333333333 189.72 L 181.06666666667 194.22 L 232.8 191.52 L 284.53333333333 194.4 L 336.26666666667 198.36 L 388 200.7 L 439.73333333333 198.54 L 491.46666666667 201.24 L 543.2 188.1 L 594.93333333333 198.54 L 646.66666666667 209.88 L 698.4 209.52 L 750.13333333333 197.28 L 801.86666666667 195.84 L 853.6 194.94 L 905.33333333333 196.2 L 957.06666666667 195.12 L 1008.8 194.22 L 1060.5333333333 199.08 L 1112.2666666667 196.02 L 1164 195.84 L 1215.7333333333 201.96 L 1267.4666666667 201.6 L 1319.2 202.14 L 1370.9333333333 199.62 L 1422.6666666667 199.98 L 1474.4 199.44 L 1526.1333333333 202.5 L 1536.1333333333 202.5"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-tracker "
                               transform="translate(81,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2430)">
                                <path fill="#F8A95E" visibility="hidden" d="M 25 195.3 A 0 0 0 1 1 25 195.3 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#F8A95E" d="M 25 191.3 L 29 195.3 25 199.3 21 195.3 Z"
                                      class="highcharts-point "></path>
                                <path fill="#F8A95E" d="M 77 192 L 81 196 77 200 73 196 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 129 186 L 133 190 129 194 125 190 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 181 190 L 185 194 181 198 177 194 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 232 187.52 L 236 191.52 232 195.52 228 191.52 Z"
                                      class="highcharts-point "></path>
                                <path fill="#F8A95E" d="M 284 190.4 L 288 194.4 284 198.4 280 194.4 Z"
                                      class="highcharts-point "></path>
                                <path fill="#F8A95E" d="M 336 194.36 L 340 198.36 336 202.36 332 198.36 Z"
                                      class="highcharts-point " stroke-width="0.019853157161528467"></path>
                                <path fill="#F8A95E" d="M 388 197 L 392 201 388 205 384 201 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 439 194.54 L 443 198.54 439 202.54 435 198.54 Z"
                                      class="highcharts-point "></path>
                                <path fill="#F8A95E" d="M 491 197 L 495 201 491 205 487 201 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 543 184 L 547 188 543 192 539 188 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 594 195 L 598 199 594 203 590 199 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 646 206 L 650 210 646 214 642 210 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 698 206 L 702 210 698 214 694 210 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 750 193 L 754 197 750 201 746 197 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 801 192 L 805 196 801 200 797 196 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 853 191 L 857 195 853 199 849 195 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 905 192 L 909 196 905 200 901 196 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 957 191 L 961 195 957 199 953 195 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1008 190 L 1012 194 1008 198 1004 194 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1060 195 L 1064 199 1060 203 1056 199 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1112 192 L 1116 196 1112 200 1108 196 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1164 192 L 1168 196 1164 200 1160 196 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1215 198 L 1219 202 1215 206 1211 202 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1267 198 L 1271 202 1267 206 1263 202 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1319 198 L 1323 202 1319 206 1315 202 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1370 196 L 1374 200 1370 204 1366 200 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1422 196 L 1426 200 1422 204 1418 200 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1474 195 L 1478 199 1474 203 1470 199 Z"
                                      class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1526 199 L 1530 203 1526 207 1522 203 Z"
                                      class="highcharts-point"></path>
                            </g>
                        </g>
                        <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                              style="color:#333333;font-size:18px;fill:#333333;" y="24">
                            <tspan>Счетчик демпинга и out-of-stock (всего)</tspan>
                        </text>
                        <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                              style="color:#666666;fill:#666666;" y="52"></text>
                        <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                           transform="translate(81,53)"></g>
                        <g class="highcharts-legend" data-z-index="7" transform="translate(613,356)">
                            <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="416"
                                  height="29" visibility="visible"></rect>
                            <g data-z-index="1">
                                <g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-0"
                                       data-z-index="1" transform="translate(8,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#FF8366"
                                              stroke-width="2"></path>
                                        <path fill="#FF8366"
                                              d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z"
                                              class="highcharts-point"></path>
                                        <text x="21"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2" y="15">
                                            <tspan>Счетчик демпинга (всего)</tspan>
                                        </text>
                                    </g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-1"
                                       data-z-index="1" transform="translate(208.984375,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#F8A95E"
                                              stroke-width="2"></path>
                                        <path fill="#F8A95E" d="M 8 7 L 12 11 8 15 4 11 Z"
                                              class="highcharts-point"></path>
                                        <text x="21" y="15"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2">
                                            <tspan>Счетчик out-of-stock (всего)</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                            <text x="109.459391531014" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 109.459391531014 294)" y="294"
                                  opacity="1">25-04-2019
                            </text>
                            <text x="161.192724864354" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 161.192724864354 294)" y="294"
                                  opacity="1">26-04-2019
                            </text>
                            <text x="212.926058197684" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 212.926058197684 294)" y="294"
                                  opacity="1">27-04-2019
                            </text>
                            <text x="264.65939153101397"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 264.65939153101397 294)" y="294" opacity="1">
                                28-04-2019
                            </text>
                            <text x="316.39272486435397"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 316.39272486435397 294)" y="294" opacity="1">
                                29-04-2019
                            </text>
                            <text x="368.12605819768396"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 368.12605819768396 294)" y="294" opacity="1">
                                30-04-2019
                            </text>
                            <text x="419.85939153101396"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 419.85939153101396 294)" y="294" opacity="1">
                                01-05-2019
                            </text>
                            <text x="471.592724864354" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 471.592724864354 294)" y="294"
                                  opacity="1">02-05-2019
                            </text>
                            <text x="523.326058197684" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 523.326058197684 294)" y="294"
                                  opacity="1">03-05-2019
                            </text>
                            <text x="575.059391531014" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 575.059391531014 294)" y="294"
                                  opacity="1">04-05-2019
                            </text>
                            <text x="626.792724864354" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 626.792724864354 294)" y="294"
                                  opacity="1">05-05-2019
                            </text>
                            <text x="678.5260581976839"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 678.5260581976839 294)" y="294" opacity="1">
                                06-05-2019
                            </text>
                            <text x="730.259391531014" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 730.259391531014 294)" y="294"
                                  opacity="1">07-05-2019
                            </text>
                            <text x="781.9927248643539"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 781.9927248643539 294)" y="294" opacity="1">
                                08-05-2019
                            </text>
                            <text x="833.726058197684" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 833.726058197684 294)" y="294"
                                  opacity="1">09-05-2019
                            </text>
                            <text x="885.459391531014" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 885.459391531014 294)" y="294"
                                  opacity="1">10-05-2019
                            </text>
                            <text x="937.192724864354" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 937.192724864354 294)" y="294"
                                  opacity="1">11-05-2019
                            </text>
                            <text x="988.926058197684" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0) rotate(-45 988.926058197684 294)" y="294"
                                  opacity="1">12-05-2019
                            </text>
                            <text x="1040.659391530984"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1040.659391530984 294)" y="294" opacity="1">
                                13-05-2019
                            </text>
                            <text x="1092.392724864384"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1092.392724864384 294)" y="294" opacity="1">
                                14-05-2019
                            </text>
                            <text x="1144.1260581976842"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1144.1260581976842 294)" y="294" opacity="1">
                                15-05-2019
                            </text>
                            <text x="1195.859391530984"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1195.859391530984 294)" y="294" opacity="1">
                                16-05-2019
                            </text>
                            <text x="1247.592724864384"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1247.592724864384 294)" y="294" opacity="1">
                                17-05-2019
                            </text>
                            <text x="1299.326058197684"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1299.326058197684 294)" y="294" opacity="1">
                                18-05-2019
                            </text>
                            <text x="1351.0593915309842"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1351.0593915309842 294)" y="294" opacity="1">
                                19-05-2019
                            </text>
                            <text x="1402.7927248643841"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1402.7927248643841 294)" y="294" opacity="1">
                                20-05-2019
                            </text>
                            <text x="1454.526058197684"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1454.526058197684 294)" y="294" opacity="1">
                                21-05-2019
                            </text>
                            <text x="1506.2593915309842"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1506.2593915309842 294)" y="294" opacity="1">
                                22-05-2019
                            </text>
                            <text x="1557.9927248643842"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1557.9927248643842 294)" y="294" opacity="1">
                                23-05-2019
                            </text>
                            <text x="1609.726058197684"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1609.726058197684 294)" y="294" opacity="1">
                                24-05-2019
                            </text>
                        </g>
                        <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                            <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="282" opacity="1">250
                            </text>
                            <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="237" opacity="1">500
                            </text>
                            <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="192" opacity="1">750
                            </text>
                            <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="147" opacity="1">1000
                            </text>
                            <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="102" opacity="1">1250
                            </text>
                            <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="57" opacity="1">1500
                            </text>
                        </g>
                        <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                           style="pointer-events:none;white-space:nowrap;" data-z-index="8"
                           transform="translate(1,-9999)" opacity="0" visibility="visible">
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 229.5 0.5 C 232.5 0.5 232.5 0.5 232.5 3.5 L 232.5 44.5 C 232.5 47.5 232.5 47.5 229.5 47.5 L 111.5 47.5 105.5 53.5 99.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 229.5 0.5 C 232.5 0.5 232.5 0.5 232.5 3.5 L 232.5 44.5 C 232.5 47.5 232.5 47.5 229.5 47.5 L 111.5 47.5 105.5 53.5 99.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 229.5 0.5 C 232.5 0.5 232.5 0.5 232.5 3.5 L 232.5 44.5 C 232.5 47.5 232.5 47.5 229.5 47.5 L 111.5 47.5 105.5 53.5 99.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                                  transform="translate(1, 1)"></path>
                            <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                                  d="M 3.5 0.5 L 229.5 0.5 C 232.5 0.5 232.5 0.5 232.5 3.5 L 232.5 44.5 C 232.5 47.5 232.5 47.5 229.5 47.5 L 111.5 47.5 105.5 53.5 99.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#F8A95E" stroke-width="1"></path>
                            <text x="8" data-z-index="1"
                                  style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20">
                                <tspan style="font-size: 10px">25-04-2019</tspan>
                                <tspan style="fill:#F8A95E" x="8" dy="15">●</tspan>
                                <tspan dx="0"> Счетчик out-of-stock (всего):</tspan>
                                <tspan style="font-weight:bold" dx="0">415</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
            </chart>
        </div>
        <div style="display: none;" id="avgDamp">
            <chart data-highcharts-chart="63">
                <div id="highcharts-1pjixtw-2462" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                            <clipPath id="highcharts-1pjixtw-2463">
                                <rect x="0" y="0" width="1563" height="225" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0" ry="0"></rect>
                        <rect fill="none" class="highcharts-plot-background" x="70" y="53" width="1563" height="225"></rect>
                        <g class="highcharts-pane-group" data-z-index="0"></g>
                        <g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 121.5 53 L 121.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 173.5 53 L 173.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 225.5 53 L 225.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 277.5 53 L 277.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 330.5 53 L 330.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 382.5 53 L 382.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 434.5 53 L 434.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 486.5 53 L 486.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 538.5 53 L 538.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 590.5 53 L 590.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 642.5 53 L 642.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 694.5 53 L 694.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 746.5 53 L 746.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 798.5 53 L 798.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 851.5 53 L 851.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 903.5 53 L 903.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 955.5 53 L 955.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1007.5 53 L 1007.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1059.5 53 L 1059.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1111.5 53 L 1111.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1163.5 53 L 1163.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1215.5 53 L 1215.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1267.5 53 L 1267.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1319.5 53 L 1319.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1372.5 53 L 1372.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1424.5 53 L 1424.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1476.5 53 L 1476.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1528.5 53 L 1528.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1580.5 53 L 1580.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1632.5 53 L 1632.5 278" opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 69.5 53 L 69.5 278" opacity="1"></path>
                        </g>
                        <g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 70 278.5 L 1633 278.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 70 233.5 L 1633 233.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 70 188.5 L 1633 188.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 70 143.5 L 1633 143.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 70 98.5 L 1633 98.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 70 52.5 L 1633 52.5" opacity="1"></path>
                        </g>
                        <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="70" y="53" width="1563" height="225"></rect>
                        <g class="highcharts-axis highcharts-xaxis " data-z-index="2">
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 121.5 278 L 121.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 173.5 278 L 173.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 225.5 278 L 225.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 277.5 278 L 277.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 330.5 278 L 330.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 382.5 278 L 382.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 434.5 278 L 434.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 486.5 278 L 486.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 538.5 278 L 538.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 590.5 278 L 590.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 642.5 278 L 642.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 694.5 278 L 694.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 746.5 278 L 746.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 798.5 278 L 798.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 851.5 278 L 851.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 903.5 278 L 903.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 955.5 278 L 955.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1007.5 278 L 1007.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1059.5 278 L 1059.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1111.5 278 L 1111.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1163.5 278 L 1163.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1215.5 278 L 1215.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1267.5 278 L 1267.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1319.5 278 L 1319.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1372.5 278 L 1372.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1424.5 278 L 1424.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1476.5 278 L 1476.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1528.5 278 L 1528.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1580.5 278 L 1580.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1633.5 278 L 1633.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 69.5 278 L 69.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 70 278.5 L 1633 278.5"></path>
                        </g>
                        <g class="highcharts-axis highcharts-yaxis " data-z-index="2">
                            <text x="25.609375" data-z-index="7" text-anchor="middle" transform="translate(0,0) rotate(270 25.609375 165.5)" class="highcharts-axis-title" style="color:#666666;fill:#666666;" y="165.5">
                                <tspan>Количетсво</tspan>
                            </text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 70 53 L 70 278"></path>
                        </g>
                        <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series " transform="translate(70,53) scale(1 1)" clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2463)">
                                <path fill="none" d="M 26.05 47.69999999999999 L 78.15 52.20000000000002 L 130.25 37.79999999999998 L 182.35 45 L 234.45 43.19999999999999 L 286.55 68.4 L 338.65 59.400000000000006 L 390.75 38.70000000000002 L 442.85 58.5 L 494.95 64.80000000000001 L 547.05 50.400000000000006 L 599.15 43.19999999999999 L 651.25 34.19999999999999 L 703.35 45.900000000000006 L 755.45 46.80000000000001 L 807.55 45 L 859.65 43.19999999999999 L 911.75 43.19999999999999 L 963.85 39.599999999999994 L 1015.95 49.5 L 1068.05 45 L 1120.15 45 L 1172.25 48.599999999999994 L 1224.35 76.5 L 1276.45 49.5 L 1328.55 71.1 L 1380.65 49.5 L 1432.75 57.599999999999994 L 1484.85 37.79999999999998 L 1536.95 38.70000000000002" class="highcharts-graph" data-z-index="1" stroke="#FF8366" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none" d="M 16.05 47.69999999999999 L 26.05 47.69999999999999 L 78.15 52.20000000000002 L 130.25 37.79999999999998 L 182.35 45 L 234.45 43.19999999999999 L 286.55 68.4 L 338.65 59.400000000000006 L 390.75 38.70000000000002 L 442.85 58.5 L 494.95 64.80000000000001 L 547.05 50.400000000000006 L 599.15 43.19999999999999 L 651.25 34.19999999999999 L 703.35 45.900000000000006 L 755.45 46.80000000000001 L 807.55 45 L 859.65 43.19999999999999 L 911.75 43.19999999999999 L 963.85 39.599999999999994 L 1015.95 49.5 L 1068.05 45 L 1120.15 45 L 1172.25 48.599999999999994 L 1224.35 76.5 L 1276.45 49.5 L 1328.55 71.1 L 1380.65 49.5 L 1432.75 57.599999999999994 L 1484.85 37.79999999999998 L 1536.95 38.70000000000002 L 1546.95 38.70000000000002" stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22" visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker " transform="translate(70,53) scale(1 1)" clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2494)">
                                <path fill="#FF8366" visibility="hidden" d="M 78 52.20000000000002 A 0 0 0 1 1 78 52.20000000000002 Z" class="highcharts-halo highcharts-color-undefined" data-z-index="-1" fill-opacity="0.25"></path>
                                <path fill="#FF8366" d="M 30 48 A 4 4 0 1 1 29.99999800000017 47.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 82 52.20000000000002 A 4 4 0 1 1 81.99999800000016 52.19600000066668 Z" class="highcharts-point " stroke-width="0.004601829099875165"></path>
                                <path fill="#FF8366" d="M 134 38 A 4 4 0 1 1 133.99999800000018 37.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 186 45 A 4 4 0 1 1 185.99999800000018 44.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 238 43 A 4 4 0 1 1 237.99999800000018 42.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 290 68 A 4 4 0 1 1 289.9999980000002 67.99600000066667 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 342 59 A 4 4 0 1 1 341.9999980000002 58.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 394 39 A 4 4 0 1 1 393.9999980000002 38.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 446 59 A 4 4 0 1 1 445.9999980000002 58.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 498 65 A 4 4 0 1 1 497.9999980000002 64.99600000066667 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 551 50 A 4 4 0 1 1 550.9999980000001 49.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 603 43 A 4 4 0 1 1 602.9999980000001 42.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 655 34 A 4 4 0 1 1 654.9999980000001 33.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 707 46 A 4 4 0 1 1 706.9999980000001 45.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 759 47 A 4 4 0 1 1 758.9999980000001 46.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 811 45 A 4 4 0 1 1 810.9999980000001 44.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 863 43 A 4 4 0 1 1 862.9999980000001 42.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 915 43 A 4 4 0 1 1 914.9999980000001 42.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 967 40 A 4 4 0 1 1 966.9999980000001 39.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1019 50 A 4 4 0 1 1 1018.9999980000001 49.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1072 45 A 4 4 0 1 1 1071.9999980000002 44.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1124 45 A 4 4 0 1 1 1123.9999980000002 44.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1176 49 A 4 4 0 1 1 1175.9999980000002 48.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1228 77 A 4 4 0 1 1 1227.9999980000002 76.99600000066667 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1280 50 A 4 4 0 1 1 1279.9999980000002 49.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1332 71 A 4 4 0 1 1 1331.9999980000002 70.99600000066667 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1384 50 A 4 4 0 1 1 1383.9999980000002 49.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1436 58 A 4 4 0 1 1 1435.9999980000002 57.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1488 38 A 4 4 0 1 1 1487.9999980000002 37.99600000066666 Z" class="highcharts-point"></path>
                                <path fill="#FF8366" d="M 1540 39 A 4 4 0 1 1 1539.9999980000002 38.99600000066666 Z" class="highcharts-point"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-1 highcharts-line-series highcharts-series-hover" transform="translate(70,53) scale(1 1)" clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2463)">
                                <path fill="none" d="M 26.05 161.1 L 78.15 162 L 130.25 156.6 L 182.35 160.2 L 234.45 158.4 L 286.55 160.2 L 338.65 163.8 L 390.75 165.6 L 442.85 163.8 L 494.95 166.5 L 547.05 154.8 L 599.15 163.8 L 651.25 173.7 L 703.35 173.7 L 755.45 162.9 L 807.55 162 L 859.65 161.1 L 911.75 162 L 963.85 161.1 L 1015.95 160.2 L 1068.05 164.7 L 1120.15 162 L 1172.25 162 L 1224.35 166.5 L 1276.45 166.5 L 1328.55 167.4 L 1380.65 164.7 L 1432.75 164.7 L 1484.85 164.7 L 1536.95 167.4" class="highcharts-graph" data-z-index="1" stroke="#F8A95E" stroke-width="3" stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none" d="M 16.05 161.1 L 26.05 161.1 L 78.15 162 L 130.25 156.6 L 182.35 160.2 L 234.45 158.4 L 286.55 160.2 L 338.65 163.8 L 390.75 165.6 L 442.85 163.8 L 494.95 166.5 L 547.05 154.8 L 599.15 163.8 L 651.25 173.7 L 703.35 173.7 L 755.45 162.9 L 807.55 162 L 859.65 161.1 L 911.75 162 L 963.85 161.1 L 1015.95 160.2 L 1068.05 164.7 L 1120.15 162 L 1172.25 162 L 1224.35 166.5 L 1276.45 166.5 L 1328.55 167.4 L 1380.65 164.7 L 1432.75 164.7 L 1484.85 164.7 L 1536.95 167.4 L 1546.95 167.4" stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22" visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>






































































                            <g data-z-index="0.1" class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-tracker highcharts-series-hover" transform="translate(70,53) scale(1 1)" clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2494)">

                                <path fill="#F8A95E" d="M 26 157.1 L 30 161.1 26 165.1 22 161.1 Z" class="highcharts-point " stroke-width="0.00008882380959551739"></path>
                                <path fill="#F8A95E" d="M 78 158 L 82 162 78 166 74 162 Z" class="highcharts-point "></path>
                                <path fill="#F8A95E" d="M 130 153 L 134 157 130 161 126 157 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 182 156 L 186 160 182 164 178 160 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 234 154 L 238 158 234 162 230 158 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 286 156 L 290 160 286 164 282 160 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 338 160 L 342 164 338 168 334 164 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 390 162 L 394 166 390 170 386 166 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 442 160 L 446 164 442 168 438 164 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 494 163 L 498 167 494 171 490 167 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 547 151 L 551 155 547 159 543 155 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 599 160 L 603 164 599 168 595 164 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 651 170 L 655 174 651 178 647 174 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 703 170 L 707 174 703 178 699 174 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 755 159 L 759 163 755 167 751 163 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 807 158 L 811 162 807 166 803 162 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 859 157 L 863 161 859 165 855 161 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 911 158 L 915 162 911 166 907 162 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 963 157 L 967 161 963 165 959 161 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1015 156 L 1019 160 1015 164 1011 160 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1068 161 L 1072 165 1068 169 1064 165 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1120 158 L 1124 162 1120 166 1116 162 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1172 158 L 1176 162 1172 166 1168 162 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1224 163 L 1228 167 1224 171 1220 167 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1276 163 L 1280 167 1276 171 1272 167 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1328 163 L 1332 167 1328 171 1324 167 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1380 161 L 1384 165 1380 169 1376 165 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1432 161 L 1436 165 1432 169 1428 165 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1484 161 L 1488 165 1484 169 1480 165 Z" class="highcharts-point"></path>
                                <path fill="#F8A95E" d="M 1536 163 L 1540 167 1536 171 1532 167 Z" class="highcharts-point"></path>
                            </g>
                        </g>
                        <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24">
                            <tspan>Счетчик демпинга и out-of-stock (среднее)</tspan>
                        </text>
                        <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="52"></text>
                        <g class="highcharts-stack-labels" visibility="visible" data-z-index="6" transform="translate(70,53)"></g>
                        <g class="highcharts-legend" data-z-index="7" transform="translate(596,356)">
                            <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="451" height="29" visibility="visible"></rect>
                            <g data-z-index="1">
                                <g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-0" data-z-index="1" transform="translate(8,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#FF8366" stroke-width="2"></path>
                                        <path fill="#FF8366" d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z" class="highcharts-point"></path>
                                        <text x="21" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" data-z-index="2" y="15">
                                            <tspan>Счетчик демпинга (среднее)</tspan>
                                        </text>
                                    </g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-1" data-z-index="1" transform="translate(226.375,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#F8A95E" stroke-width="2"></path>
                                        <path fill="#F8A95E" d="M 8 7 L 12 11 8 15 4 11 Z" class="highcharts-point"></path>
                                        <text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" data-z-index="2">
                                            <tspan>Счетчик out-of-stock (среднее)</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                            <text x="98.64272486435067" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 98.64272486435067 294)" y="294" opacity="1">
                                25-04-2019
                            </text>
                            <text x="150.74272486435066" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 150.74272486435066 294)" y="294" opacity="1">
                                26-04-2019
                            </text>
                            <text x="202.84272486435069" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 202.84272486435069 294)" y="294" opacity="1">
                                27-04-2019
                            </text>
                            <text x="254.94272486435062" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 254.94272486435062 294)" y="294" opacity="1">
                                28-04-2019
                            </text>
                            <text x="307.04272486435065" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 307.04272486435065 294)" y="294" opacity="1">
                                29-04-2019
                            </text>
                            <text x="359.14272486435067" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 359.14272486435067 294)" y="294" opacity="1">
                                30-04-2019
                            </text>
                            <text x="411.24272486435063" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 411.24272486435063 294)" y="294" opacity="1">
                                01-05-2019
                            </text>
                            <text x="463.34272486435066" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 463.34272486435066 294)" y="294" opacity="1">
                                02-05-2019
                            </text>
                            <text x="515.4427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 515.4427248643507 294)" y="294" opacity="1">
                                03-05-2019
                            </text>
                            <text x="567.5427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 567.5427248643507 294)" y="294" opacity="1">
                                04-05-2019
                            </text>
                            <text x="619.6427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 619.6427248643507 294)" y="294" opacity="1">
                                05-05-2019
                            </text>
                            <text x="671.7427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 671.7427248643507 294)" y="294" opacity="1">
                                06-05-2019
                            </text>
                            <text x="723.8427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 723.8427248643507 294)" y="294" opacity="1">
                                07-05-2019
                            </text>
                            <text x="775.9427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 775.9427248643507 294)" y="294" opacity="1">
                                08-05-2019
                            </text>
                            <text x="828.0427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 828.0427248643507 294)" y="294" opacity="1">
                                09-05-2019
                            </text>
                            <text x="880.1427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 880.1427248643507 294)" y="294" opacity="1">
                                10-05-2019
                            </text>
                            <text x="932.2427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 932.2427248643507 294)" y="294" opacity="1">
                                11-05-2019
                            </text>
                            <text x="984.3427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 984.3427248643507 294)" y="294" opacity="1">
                                12-05-2019
                            </text>
                            <text x="1036.4427248643508" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1036.4427248643508 294)" y="294" opacity="1">
                                13-05-2019
                            </text>
                            <text x="1088.5427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1088.5427248643507 294)" y="294" opacity="1">
                                14-05-2019
                            </text>
                            <text x="1140.6427248643506" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1140.6427248643506 294)" y="294" opacity="1">
                                15-05-2019
                            </text>
                            <text x="1192.7427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1192.7427248643507 294)" y="294" opacity="1">
                                16-05-2019
                            </text>
                            <text x="1244.8427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1244.8427248643507 294)" y="294" opacity="1">
                                17-05-2019
                            </text>
                            <text x="1296.9427248643508" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1296.9427248643508 294)" y="294" opacity="1">
                                18-05-2019
                            </text>
                            <text x="1349.0427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1349.0427248643507 294)" y="294" opacity="1">
                                19-05-2019
                            </text>
                            <text x="1401.1427248643506" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1401.1427248643506 294)" y="294" opacity="1">
                                20-05-2019
                            </text>
                            <text x="1453.2427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1453.2427248643507 294)" y="294" opacity="1">
                                21-05-2019
                            </text>
                            <text x="1505.3427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1505.3427248643507 294)" y="294" opacity="1">
                                22-05-2019
                            </text>
                            <text x="1557.4427248643508" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1557.4427248643508 294)" y="294" opacity="1">
                                23-05-2019
                            </text>
                            <text x="1609.5427248643507" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-45 1609.5427248643507 294)" y="294" opacity="1">
                                24-05-2019
                            </text>
                        </g>
                        <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                            <text x="55" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="282" opacity="1">0
                            </text>
                            <text x="55" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="237" opacity="1">0.5
                            </text>
                            <text x="55" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="192" opacity="1">1
                            </text>
                            <text x="55" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="147" opacity="1">1.5
                            </text>
                            <text x="55" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="102" opacity="1">2
                            </text>
                            <text x="55" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="57" opacity="1">2.5
                            </text>
                        </g>

                    </svg>
                </div>
            </chart>
        </div>
        <div style="display: none;" id="indexRrc">
            <chart data-highcharts-chart="64">
                <div id="highcharts-1pjixtw-2526" dir="ltr" class="highcharts-container "
                     style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" class="highcharts-root"
                         style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                         xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                            <clipPath id="highcharts-1pjixtw-2527">
                                <rect x="0" y="0" width="1559" height="225" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                              ry="0"></rect>
                        <rect fill="none" class="highcharts-plot-background" x="74" y="53" width="1559"
                              height="225"></rect>
                        <g class="highcharts-pane-group" data-z-index="0"></g>
                        <g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 125.5 53 L 125.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 177.5 53 L 177.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 229.5 53 L 229.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 281.5 53 L 281.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 333.5 53 L 333.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 385.5 53 L 385.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 437.5 53 L 437.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 489.5 53 L 489.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 541.5 53 L 541.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 593.5 53 L 593.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 645.5 53 L 645.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 697.5 53 L 697.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 749.5 53 L 749.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 801.5 53 L 801.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 853.5 53 L 853.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 904.5 53 L 904.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 956.5 53 L 956.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1008.5 53 L 1008.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1060.5 53 L 1060.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1112.5 53 L 1112.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1164.5 53 L 1164.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1216.5 53 L 1216.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1268.5 53 L 1268.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1320.5 53 L 1320.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1372.5 53 L 1372.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1424.5 53 L 1424.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1476.5 53 L 1476.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1528.5 53 L 1528.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1580.5 53 L 1580.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1632.5 53 L 1632.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 73.5 53 L 73.5 278"
                                  opacity="1"></path>
                        </g>
                        <g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 278.5 L 1633 278.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 203.5 L 1633 203.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 128.5 L 1633 128.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 52.5 L 1633 52.5" opacity="1"></path>
                        </g>
                        <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="74" y="53" width="1559"
                              height="225"></rect>
                        <g class="highcharts-axis highcharts-xaxis " data-z-index="2">
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 125.5 278 L 125.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 177.5 278 L 177.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 229.5 278 L 229.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 281.5 278 L 281.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 333.5 278 L 333.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 385.5 278 L 385.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 437.5 278 L 437.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 489.5 278 L 489.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 541.5 278 L 541.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 593.5 278 L 593.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 645.5 278 L 645.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 697.5 278 L 697.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 749.5 278 L 749.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 801.5 278 L 801.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 853.5 278 L 853.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 904.5 278 L 904.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 956.5 278 L 956.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1008.5 278 L 1008.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1060.5 278 L 1060.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1112.5 278 L 1112.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1164.5 278 L 1164.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1216.5 278 L 1216.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1268.5 278 L 1268.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1320.5 278 L 1320.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1372.5 278 L 1372.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1424.5 278 L 1424.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1476.5 278 L 1476.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1528.5 278 L 1528.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1580.5 278 L 1580.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1633.5 278 L 1633.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 73.5 278 L 73.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                  data-z-index="7" d="M 74 278.5 L 1633 278.5"></path>
                        </g>
                        <g class="highcharts-axis highcharts-yaxis " data-z-index="2">
                            <text x="26.09375" data-z-index="7" text-anchor="middle"
                                  transform="translate(0,0) rotate(270 26.09375 165.5)" class="highcharts-axis-title"
                                  style="color:#666666;fill:#666666;" y="165.5">
                                <tspan>Индекс</tspan>
                            </text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 74 53 L 74 278"></path>
                        </g>
                        <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2527)">
                                <path fill="none"
                                      d="M 25.983333333333 45.45000000000002 L 77.95 43.80000000000001 L 129.91666666667 64.35000000000008 L 181.88333333333 38.5499999999999 L 233.85 36.89999999999992 L 285.81666666667 16.499999999999915 L 337.78333333333 26.999999999999943 L 389.75 43.80000000000001 L 441.71666666667 30.15000000000009 L 493.68333333333 26.85000000000008 L 545.65 46.94999999999993 L 597.61666666667 16.800000000000068 L 649.58333333333 33.14999999999992 L 701.55 34.650000000000034 L 753.51666666667 36.30000000000001 L 805.48333333333 35.69999999999993 L 857.45 34.049999999999955 L 909.41666666667 36.89999999999992 L 961.38333333333 38.999999999999915 L 1013.35 28.500000000000085 L 1065.3166666667 34.7999999999999 L 1117.2833333333 39.14999999999998 L 1169.25 37.5 L 1221.2166666667 13.649999999999949 L 1273.1833333333 34.20000000000002 L 1325.15 18.14999999999992 L 1377.1166666667 33.450000000000045 L 1429.0833333333 25.64999999999992 L 1481.05 52.5 L 1533.0166666667 45.15000000000009"
                                      class="highcharts-graph" data-z-index="1" stroke="#ff9eb0" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.983333333333 45.45000000000002 L 25.983333333333 45.45000000000002 L 77.95 43.80000000000001 L 129.91666666667 64.35000000000008 L 181.88333333333 38.5499999999999 L 233.85 36.89999999999992 L 285.81666666667 16.499999999999915 L 337.78333333333 26.999999999999943 L 389.75 43.80000000000001 L 441.71666666667 30.15000000000009 L 493.68333333333 26.85000000000008 L 545.65 46.94999999999993 L 597.61666666667 16.800000000000068 L 649.58333333333 33.14999999999992 L 701.55 34.650000000000034 L 753.51666666667 36.30000000000001 L 805.48333333333 35.69999999999993 L 857.45 34.049999999999955 L 909.41666666667 36.89999999999992 L 961.38333333333 38.999999999999915 L 1013.35 28.500000000000085 L 1065.3166666667 34.7999999999999 L 1117.2833333333 39.14999999999998 L 1169.25 37.5 L 1221.2166666667 13.649999999999949 L 1273.1833333333 34.20000000000002 L 1325.15 18.14999999999992 L 1377.1166666667 33.450000000000045 L 1429.0833333333 25.64999999999992 L 1481.05 52.5 L 1533.0166666667 45.15000000000009 L 1543.0166666667 45.15000000000009"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker"
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2558)">
                                <path fill="#ff9eb0" d="M 29 45 A 4 4 0 1 1 28.99999800000017 44.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 81 44 A 4 4 0 1 1 80.99999800000016 43.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 133 64 A 4 4 0 1 1 132.99999800000018 63.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 185 39 A 4 4 0 1 1 184.99999800000018 38.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 237 37 A 4 4 0 1 1 236.99999800000018 36.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 289 16 A 4 4 0 1 1 288.9999980000002 15.996000000666664 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 341 27 A 4 4 0 1 1 340.9999980000002 26.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 393 44 A 4 4 0 1 1 392.9999980000002 43.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 445 30 A 4 4 0 1 1 444.9999980000002 29.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 497 27 A 4 4 0 1 1 496.9999980000002 26.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 549 47 A 4 4 0 1 1 548.9999980000001 46.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 601 17 A 4 4 0 1 1 600.9999980000001 16.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 653 33 A 4 4 0 1 1 652.9999980000001 32.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 705 35 A 4 4 0 1 1 704.9999980000001 34.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 757 36 A 4 4 0 1 1 756.9999980000001 35.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 809 36 A 4 4 0 1 1 808.9999980000001 35.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 861 34 A 4 4 0 1 1 860.9999980000001 33.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 913 37 A 4 4 0 1 1 912.9999980000001 36.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 965 39 A 4 4 0 1 1 964.9999980000001 38.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1017 29 A 4 4 0 1 1 1016.9999980000001 28.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1069 35 A 4 4 0 1 1 1068.9999980000002 34.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1121 39 A 4 4 0 1 1 1120.9999980000002 38.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1173 38 A 4 4 0 1 1 1172.9999980000002 37.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1225 14 A 4 4 0 1 1 1224.9999980000002 13.996000000666664 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1277 34 A 4 4 0 1 1 1276.9999980000002 33.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1329 18 A 4 4 0 1 1 1328.9999980000002 17.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1381 33 A 4 4 0 1 1 1380.9999980000002 32.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1433 26 A 4 4 0 1 1 1432.9999980000002 25.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1485 53 A 4 4 0 1 1 1484.9999980000002 52.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1537 45 A 4 4 0 1 1 1536.9999980000002 44.99600000066666 Z"
                                      class="highcharts-point"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-1 highcharts-line-series "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2527)">
                                <path fill="none"
                                      d="M 25.983333333333 169.04999999999995 L 77.95 167.39999999999995 L 129.91666666667 178.50000000000009 L 181.88333333333 173.10000000000008 L 233.85 170.55000000000007 L 285.81666666667 171.59999999999997 L 337.78333333333 178.9500000000001 L 389.75 181.35000000000005 L 441.71666666667 187.3499999999999 L 493.68333333333 186.00000000000009 L 545.65 192.89999999999998 L 597.61666666667 183.00000000000006 L 649.58333333333 188.99999999999991 L 701.55 182.39999999999995 L 753.51666666667 180.60000000000008 L 805.48333333333 180.45000000000002 L 857.45 180.74999999999994 L 909.41666666667 180.60000000000008 L 961.38333333333 182.10000000000002 L 1013.35 174.89999999999995 L 1065.3166666667 176.0999999999999 L 1117.2833333333 176.25 L 1169.25 171.89999999999992 L 1221.2166666667 163.35000000000002 L 1273.1833333333 169.35000000000008 L 1325.15 163.35000000000002 L 1377.1166666667 169.65000000000003 L 1429.0833333333 173.40000000000003 L 1481.05 186.14999999999995 L 1533.0166666667 179.54999999999998"
                                      class="highcharts-graph" data-z-index="1" stroke="#ff103d" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.983333333333 169.04999999999995 L 25.983333333333 169.04999999999995 L 77.95 167.39999999999995 L 129.91666666667 178.50000000000009 L 181.88333333333 173.10000000000008 L 233.85 170.55000000000007 L 285.81666666667 171.59999999999997 L 337.78333333333 178.9500000000001 L 389.75 181.35000000000005 L 441.71666666667 187.3499999999999 L 493.68333333333 186.00000000000009 L 545.65 192.89999999999998 L 597.61666666667 183.00000000000006 L 649.58333333333 188.99999999999991 L 701.55 182.39999999999995 L 753.51666666667 180.60000000000008 L 805.48333333333 180.45000000000002 L 857.45 180.74999999999994 L 909.41666666667 180.60000000000008 L 961.38333333333 182.10000000000002 L 1013.35 174.89999999999995 L 1065.3166666667 176.0999999999999 L 1117.2833333333 176.25 L 1169.25 171.89999999999992 L 1221.2166666667 163.35000000000002 L 1273.1833333333 169.35000000000008 L 1325.15 163.35000000000002 L 1377.1166666667 169.65000000000003 L 1429.0833333333 173.40000000000003 L 1481.05 186.14999999999995 L 1533.0166666667 179.54999999999998 L 1543.0166666667 179.54999999999998"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-tracker"
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2558)">
                                <path fill="#ff103d" d="M 25 165 L 29 169 25 173 21 169 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 77 163 L 81 167 77 171 73 167 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 129 175 L 133 179 129 183 125 179 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 181 169 L 185 173 181 177 177 173 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 233 167 L 237 171 233 175 229 171 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 285 168 L 289 172 285 176 281 172 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 337 175 L 341 179 337 183 333 179 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 389 177 L 393 181 389 185 385 181 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 441 183 L 445 187 441 191 437 187 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 493 182 L 497 186 493 190 489 186 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 545 189 L 549 193 545 197 541 193 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 597 179 L 601 183 597 187 593 183 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 649 185 L 653 189 649 193 645 189 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 701 178 L 705 182 701 186 697 182 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 753 177 L 757 181 753 185 749 181 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 805 176 L 809 180 805 184 801 180 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 857 177 L 861 181 857 185 853 181 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 909 177 L 913 181 909 185 905 181 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 961 178 L 965 182 961 186 957 182 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1013 171 L 1017 175 1013 179 1009 175 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1065 172 L 1069 176 1065 180 1061 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1117 172 L 1121 176 1117 180 1113 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1169 168 L 1173 172 1169 176 1165 172 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1221 159 L 1225 163 1221 167 1217 163 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1273 165 L 1277 169 1273 173 1269 169 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1325 159 L 1329 163 1325 167 1321 163 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1377 166 L 1381 170 1377 174 1373 170 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1429 169 L 1433 173 1429 177 1425 173 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1481 182 L 1485 186 1481 190 1477 186 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1533 176 L 1537 180 1533 184 1529 180 Z"
                                      class="highcharts-point"></path>
                            </g>
                        </g>
                        <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                              style="color:#333333;font-size:18px;fill:#333333;" y="24">
                            <tspan>Индекс РРЦ</tspan>
                        </text>
                        <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                              style="color:#666666;fill:#666666;" y="52"></text>
                        <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                           transform="translate(74,53)"></g>
                        <g class="highcharts-legend" data-z-index="7" transform="translate(629,356)">
                            <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="384"
                                  height="29" visibility="visible"></rect>
                            <g data-z-index="1">
                                <g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-0"
                                       data-z-index="1" transform="translate(8,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ff9eb0"
                                              stroke-width="2"></path>
                                        <path fill="#ff9eb0"
                                              d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z"
                                              class="highcharts-point"></path>
                                        <text x="21"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2" y="15">
                                            <tspan>Индекс РРЦ (средней)</tspan>
                                        </text>
                                    </g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-1"
                                       data-z-index="1" transform="translate(185.96875,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ff103d"
                                              stroke-width="2"></path>
                                        <path fill="#ff103d" d="M 8 7 L 12 11 8 15 4 11 Z"
                                              class="highcharts-point"></path>
                                        <text x="21" y="15"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2">
                                            <tspan>Индекс РРЦ (минимальной)</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                            <text x="102.57605819768735"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 102.57605819768735 294)" y="294" opacity="1">
                                25-04-2019
                            </text>
                            <text x="154.54272486434735"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 154.54272486434735 294)" y="294" opacity="1">
                                26-04-2019
                            </text>
                            <text x="206.50939153101734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 206.50939153101734 294)" y="294" opacity="1">
                                27-04-2019
                            </text>
                            <text x="258.47605819768734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 258.47605819768734 294)" y="294" opacity="1">
                                28-04-2019
                            </text>
                            <text x="310.4427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 310.4427248643473 294)" y="294" opacity="1">
                                29-04-2019
                            </text>
                            <text x="362.4093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 362.4093915310173 294)" y="294" opacity="1">
                                30-04-2019
                            </text>
                            <text x="414.3760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 414.3760581976873 294)" y="294" opacity="1">
                                01-05-2019
                            </text>
                            <text x="466.3427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 466.3427248643473 294)" y="294" opacity="1">
                                02-05-2019
                            </text>
                            <text x="518.3093915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 518.3093915310174 294)" y="294" opacity="1">
                                03-05-2019
                            </text>
                            <text x="570.2760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 570.2760581976873 294)" y="294" opacity="1">
                                04-05-2019
                            </text>
                            <text x="622.2427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 622.2427248643473 294)" y="294" opacity="1">
                                05-05-2019
                            </text>
                            <text x="674.2093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 674.2093915310173 294)" y="294" opacity="1">
                                06-05-2019
                            </text>
                            <text x="726.1760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 726.1760581976873 294)" y="294" opacity="1">
                                07-05-2019
                            </text>
                            <text x="778.1427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 778.1427248643473 294)" y="294" opacity="1">
                                08-05-2019
                            </text>
                            <text x="830.1093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 830.1093915310173 294)" y="294" opacity="1">
                                09-05-2019
                            </text>
                            <text x="882.0760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 882.0760581976873 294)" y="294" opacity="1">
                                10-05-2019
                            </text>
                            <text x="934.0427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 934.0427248643473 294)" y="294" opacity="1">
                                11-05-2019
                            </text>
                            <text x="986.0093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 986.0093915310173 294)" y="294" opacity="1">
                                12-05-2019
                            </text>
                            <text x="1037.9760581977173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1037.9760581977173 294)" y="294" opacity="1">
                                13-05-2019
                            </text>
                            <text x="1089.9427248643174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1089.9427248643174 294)" y="294" opacity="1">
                                14-05-2019
                            </text>
                            <text x="1141.9093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1141.9093915310173 294)" y="294" opacity="1">
                                15-05-2019
                            </text>
                            <text x="1193.8760581977174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1193.8760581977174 294)" y="294" opacity="1">
                                16-05-2019
                            </text>
                            <text x="1245.8427248643172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1245.8427248643172 294)" y="294" opacity="1">
                                17-05-2019
                            </text>
                            <text x="1297.8093915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1297.8093915310174 294)" y="294" opacity="1">
                                18-05-2019
                            </text>
                            <text x="1349.7760581977172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1349.7760581977172 294)" y="294" opacity="1">
                                19-05-2019
                            </text>
                            <text x="1401.7427248643173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1401.7427248643173 294)" y="294" opacity="1">
                                20-05-2019
                            </text>
                            <text x="1453.7093915310172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1453.7093915310172 294)" y="294" opacity="1">
                                21-05-2019
                            </text>
                            <text x="1505.6760581977173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1505.6760581977173 294)" y="294" opacity="1">
                                22-05-2019
                            </text>
                            <text x="1557.6427248643174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1557.6427248643174 294)" y="294" opacity="1">
                                23-05-2019
                            </text>
                            <text x="1609.6093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1609.6093915310173 294)" y="294" opacity="1">
                                24-05-2019
                            </text>
                        </g>
                        <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="282" opacity="1">85
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="207" opacity="1">90
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="132" opacity="1">95
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="57" opacity="1">100
                            </text>
                        </g>
                    </svg>
                </div>
            </chart>
        </div>
        <div style="display: none;" id="indexDamp">
            <chart data-highcharts-chart="65">
                <div id="highcharts-1pjixtw-2590" dir="ltr" class="highcharts-container "
                     style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" class="highcharts-root"
                         style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                         xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                            <clipPath id="highcharts-1pjixtw-2591">
                                <rect x="0" y="0" width="1566" height="225" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                              ry="0"></rect>
                        <rect fill="none" class="highcharts-plot-background" x="67" y="53" width="1566"
                              height="225"></rect>
                        <g class="highcharts-pane-group" data-z-index="0"></g>
                        <g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 118.5 53 L 118.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 170.5 53 L 170.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 223.5 53 L 223.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 275.5 53 L 275.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 327.5 53 L 327.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 379.5 53 L 379.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 431.5 53 L 431.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 484.5 53 L 484.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 536.5 53 L 536.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 588.5 53 L 588.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 640.5 53 L 640.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 692.5 53 L 692.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 745.5 53 L 745.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 797.5 53 L 797.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 849.5 53 L 849.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 901.5 53 L 901.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 953.5 53 L 953.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1006.5 53 L 1006.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1058.5 53 L 1058.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1110.5 53 L 1110.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1162.5 53 L 1162.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1214.5 53 L 1214.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1267.5 53 L 1267.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1319.5 53 L 1319.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1371.5 53 L 1371.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1423.5 53 L 1423.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1475.5 53 L 1475.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1528.5 53 L 1528.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1580.5 53 L 1580.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1632.5 53 L 1632.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 66.5 53 L 66.5 278"
                                  opacity="1"></path>
                        </g>
                        <g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 278.5 L 1633 278.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 203.5 L 1633 203.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 128.5 L 1633 128.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 52.5 L 1633 52.5" opacity="1"></path>
                        </g>
                        <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="67" y="53" width="1566"
                              height="225"></rect>
                        <g class="highcharts-axis highcharts-xaxis " data-z-index="2">
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 118.5 278 L 118.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 170.5 278 L 170.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 223.5 278 L 223.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 275.5 278 L 275.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 327.5 278 L 327.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 379.5 278 L 379.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 431.5 278 L 431.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 484.5 278 L 484.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 536.5 278 L 536.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 588.5 278 L 588.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 640.5 278 L 640.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 692.5 278 L 692.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 745.5 278 L 745.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 797.5 278 L 797.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 849.5 278 L 849.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 901.5 278 L 901.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 953.5 278 L 953.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1006.5 278 L 1006.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1058.5 278 L 1058.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1110.5 278 L 1110.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1162.5 278 L 1162.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1214.5 278 L 1214.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1267.5 278 L 1267.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1319.5 278 L 1319.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1371.5 278 L 1371.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1423.5 278 L 1423.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1475.5 278 L 1475.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1528.5 278 L 1528.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1580.5 278 L 1580.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1633.5 278 L 1633.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 66.5 278 L 66.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                  data-z-index="7" d="M 67 278.5 L 1633 278.5"></path>
                        </g>
                        <g class="highcharts-axis highcharts-yaxis " data-z-index="2">
                            <text x="26.046875" data-z-index="7" text-anchor="middle"
                                  transform="translate(0,0) rotate(270 26.046875 165.5)" class="highcharts-axis-title"
                                  style="color:#666666;fill:#666666;" y="165.5">
                                <tspan>Индекс</tspan>
                            </text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 67 53 L 67 278"></path>
                        </g>
                        <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series "
                               transform="translate(67,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2591)">
                                <path fill="none"
                                      d="M 26.1 123.44999999999996 L 78.3 141.45 L 130.5 63.75 L 182.7 74.85000000000002 L 234.9 80.70000000000005 L 287.1 202.80000000000004 L 339.3 167.39999999999995 L 391.5 65.10000000000005 L 443.7 161.99999999999994 L 495.9 171.3 L 548.1 82.95000000000002 L 600.3 90.45000000000002 L 652.5 57.89999999999998 L 704.7 117.60000000000005 L 756.9 115.94999999999996 L 809.1 110.85000000000001 L 861.3 112.95000000000002 L 913.5 106.50000000000003 L 965.7 90.30000000000004 L 1017.9 115.65 L 1070.1 85.34999999999997 L 1122.3 90.90000000000003 L 1174.5 100.79999999999998 L 1226.7 208.04999999999995 L 1278.9 96.44999999999999 L 1331.1 186.59999999999997 L 1383.3 101.10000000000002 L 1435.5 141.9 L 1487.7 24.00000000000003 L 1539.9 22.5"
                                      class="highcharts-graph" data-z-index="1" stroke="#ff103d" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 16.1 123.44999999999996 L 26.1 123.44999999999996 L 78.3 141.45 L 130.5 63.75 L 182.7 74.85000000000002 L 234.9 80.70000000000005 L 287.1 202.80000000000004 L 339.3 167.39999999999995 L 391.5 65.10000000000005 L 443.7 161.99999999999994 L 495.9 171.3 L 548.1 82.95000000000002 L 600.3 90.45000000000002 L 652.5 57.89999999999998 L 704.7 117.60000000000005 L 756.9 115.94999999999996 L 809.1 110.85000000000001 L 861.3 112.95000000000002 L 913.5 106.50000000000003 L 965.7 90.30000000000004 L 1017.9 115.65 L 1070.1 85.34999999999997 L 1122.3 90.90000000000003 L 1174.5 100.79999999999998 L 1226.7 208.04999999999995 L 1278.9 96.44999999999999 L 1331.1 186.59999999999997 L 1383.3 101.10000000000002 L 1435.5 141.9 L 1487.7 24.00000000000003 L 1539.9 22.5 L 1549.9 22.5"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker "
                               transform="translate(67,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2622)">
                                <path fill="#ff103d" visibility="hidden"
                                      d="M 443 161.99999999999994 A 0 0 0 1 1 443 161.99999999999994 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#ff103d" d="M 30 123 A 4 4 0 1 1 29.99999800000017 122.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 82 141 A 4 4 0 1 1 81.99999800000016 140.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 134 64 A 4 4 0 1 1 133.99999800000018 63.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 186 75 A 4 4 0 1 1 185.99999800000018 74.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 238 81 A 4 4 0 1 1 237.99999800000018 80.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 291 203 A 4 4 0 1 1 290.9999980000002 202.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d"
                                      d="M 343 167.39999999999995 A 4 4 0 1 1 342.9999980000002 167.39600000066662 Z"
                                      class="highcharts-point " stroke-width="0.0000160402388251768"></path>
                                <path fill="#ff103d"
                                      d="M 395 65.10000000000005 A 4 4 0 1 1 394.9999980000002 65.09600000066672 Z"
                                      class="highcharts-point " stroke-width="0.0007992249455124334"></path>
                                <path fill="#ff103d"
                                      d="M 447 161.99999999999994 A 4 4 0 1 1 446.9999980000002 161.9960000006666 Z"
                                      class="highcharts-point " stroke-width="0.0004835326609375912"></path>
                                <path fill="#ff103d" d="M 499 171 A 4 4 0 1 1 498.9999980000002 170.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 552 83 A 4 4 0 1 1 551.9999980000001 82.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 604 90 A 4 4 0 1 1 603.9999980000001 89.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 656 58 A 4 4 0 1 1 655.9999980000001 57.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 708 118 A 4 4 0 1 1 707.9999980000001 117.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 760 116 A 4 4 0 1 1 759.9999980000001 115.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 813 111 A 4 4 0 1 1 812.9999980000001 110.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 865 113 A 4 4 0 1 1 864.9999980000001 112.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 917 107 A 4 4 0 1 1 916.9999980000001 106.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 969 90 A 4 4 0 1 1 968.9999980000001 89.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1021 116 A 4 4 0 1 1 1020.9999980000001 115.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1074 85 A 4 4 0 1 1 1073.9999980000002 84.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1126 91 A 4 4 0 1 1 1125.9999980000002 90.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1178 101 A 4 4 0 1 1 1177.9999980000002 100.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1230 208 A 4 4 0 1 1 1229.9999980000002 207.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1282 96 A 4 4 0 1 1 1281.9999980000002 95.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1335 187 A 4 4 0 1 1 1334.9999980000002 186.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1387 101 A 4 4 0 1 1 1386.9999980000002 100.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1439 142 A 4 4 0 1 1 1438.9999980000002 141.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1491 24 A 4 4 0 1 1 1490.9999980000002 23.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1543 23 A 4 4 0 1 1 1542.9999980000002 22.996000000666665 Z"
                                      class="highcharts-point"></path>
                            </g>
                        </g>
                        <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                              style="color:#333333;font-size:18px;fill:#333333;" y="24">
                            <tspan>Индекс демпинга</tspan>
                        </text>
                        <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                              style="color:#666666;fill:#666666;" y="52"></text>
                        <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                           transform="translate(67,53)"></g>
                        <g class="highcharts-legend" data-z-index="7" transform="translate(748,356)">
                            <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="147"
                                  height="29" visibility="visible"></rect>
                            <g data-z-index="1">
                                <g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-0"
                                       data-z-index="1" transform="translate(8,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ff103d"
                                              stroke-width="2"></path>
                                        <path fill="#ff103d"
                                              d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z"
                                              class="highcharts-point"></path>
                                        <text x="21"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2" y="15">
                                            <tspan>Индекс демпинга</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                            <text x="95.69272486435068"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 95.69272486435068 294)" y="294" opacity="1">
                                25-04-2019
                            </text>
                            <text x="147.8927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 147.8927248643507 294)" y="294" opacity="1">
                                26-04-2019
                            </text>
                            <text x="200.09272486435069"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 200.09272486435069 294)" y="294" opacity="1">
                                27-04-2019
                            </text>
                            <text x="252.29272486435067"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 252.29272486435067 294)" y="294" opacity="1">
                                28-04-2019
                            </text>
                            <text x="304.49272486435063"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 304.49272486435063 294)" y="294" opacity="1">
                                29-04-2019
                            </text>
                            <text x="356.6927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 356.6927248643506 294)" y="294" opacity="1">
                                30-04-2019
                            </text>
                            <text x="408.8927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 408.8927248643506 294)" y="294" opacity="1">
                                01-05-2019
                            </text>
                            <text x="461.09272486435066"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 461.09272486435066 294)" y="294" opacity="1">
                                02-05-2019
                            </text>
                            <text x="513.2927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 513.2927248643506 294)" y="294" opacity="1">
                                03-05-2019
                            </text>
                            <text x="565.4927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 565.4927248643506 294)" y="294" opacity="1">
                                04-05-2019
                            </text>
                            <text x="617.6927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 617.6927248643507 294)" y="294" opacity="1">
                                05-05-2019
                            </text>
                            <text x="669.8927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 669.8927248643506 294)" y="294" opacity="1">
                                06-05-2019
                            </text>
                            <text x="722.0927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 722.0927248643507 294)" y="294" opacity="1">
                                07-05-2019
                            </text>
                            <text x="774.2927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 774.2927248643506 294)" y="294" opacity="1">
                                08-05-2019
                            </text>
                            <text x="826.4927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 826.4927248643506 294)" y="294" opacity="1">
                                09-05-2019
                            </text>
                            <text x="878.6927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 878.6927248643507 294)" y="294" opacity="1">
                                10-05-2019
                            </text>
                            <text x="930.8927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 930.8927248643506 294)" y="294" opacity="1">
                                11-05-2019
                            </text>
                            <text x="983.0927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 983.0927248643507 294)" y="294" opacity="1">
                                12-05-2019
                            </text>
                            <text x="1035.2927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1035.2927248643507 294)" y="294" opacity="1">
                                13-05-2019
                            </text>
                            <text x="1087.4927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1087.4927248643507 294)" y="294" opacity="1">
                                14-05-2019
                            </text>
                            <text x="1139.6927248643508"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1139.6927248643508 294)" y="294" opacity="1">
                                15-05-2019
                            </text>
                            <text x="1191.8927248643508"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1191.8927248643508 294)" y="294" opacity="1">
                                16-05-2019
                            </text>
                            <text x="1244.0927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1244.0927248643507 294)" y="294" opacity="1">
                                17-05-2019
                            </text>
                            <text x="1296.2927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1296.2927248643507 294)" y="294" opacity="1">
                                18-05-2019
                            </text>
                            <text x="1348.4927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1348.4927248643507 294)" y="294" opacity="1">
                                19-05-2019
                            </text>
                            <text x="1400.6927248643508"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1400.6927248643508 294)" y="294" opacity="1">
                                20-05-2019
                            </text>
                            <text x="1452.8927248643508"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1452.8927248643508 294)" y="294" opacity="1">
                                21-05-2019
                            </text>
                            <text x="1505.0927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1505.0927248643507 294)" y="294" opacity="1">
                                22-05-2019
                            </text>
                            <text x="1557.2927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1557.2927248643507 294)" y="294" opacity="1">
                                23-05-2019
                            </text>
                            <text x="1609.4927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1609.4927248643507 294)" y="294" opacity="1">
                                24-05-2019
                            </text>
                        </g>
                        <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="282" opacity="1">40
                            </text>
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="207" opacity="1">45
                            </text>
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="132" opacity="1">50
                            </text>
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="57" opacity="1">55
                            </text>
                        </g>
                        <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                           style="pointer-events:none;white-space:nowrap;" data-z-index="8"
                           transform="translate(426,-9999)" opacity="0" visibility="visible">
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 168.5 0.5 C 171.5 0.5 171.5 0.5 171.5 3.5 L 171.5 44.5 C 171.5 47.5 171.5 47.5 168.5 47.5 L 90.5 47.5 84.5 53.5 78.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 168.5 0.5 C 171.5 0.5 171.5 0.5 171.5 3.5 L 171.5 44.5 C 171.5 47.5 171.5 47.5 168.5 47.5 L 90.5 47.5 84.5 53.5 78.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 168.5 0.5 C 171.5 0.5 171.5 0.5 171.5 3.5 L 171.5 44.5 C 171.5 47.5 171.5 47.5 168.5 47.5 L 90.5 47.5 84.5 53.5 78.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                                  transform="translate(1, 1)"></path>
                            <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                                  d="M 3.5 0.5 L 168.5 0.5 C 171.5 0.5 171.5 0.5 171.5 3.5 L 171.5 44.5 C 171.5 47.5 171.5 47.5 168.5 47.5 L 90.5 47.5 84.5 53.5 78.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#ff103d" stroke-width="1"></path>
                            <text x="8" data-z-index="1"
                                  style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20">
                                <tspan style="font-size: 10px">03-05-2019</tspan>
                                <tspan style="fill:#ff103d" x="8" dy="15">●</tspan>
                                <tspan dx="0"> Индекс демпинга:</tspan>
                                <tspan style="font-weight:bold" dx="0">44.2</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
            </chart>
        </div>
        <div style="display: none;" id="durDamp">
            <chart data-highcharts-chart="66">
                <div id="highcharts-1pjixtw-2624" dir="ltr" class="highcharts-container "
                     style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" class="highcharts-root"
                         style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                         xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                            <clipPath id="highcharts-1pjixtw-2625">
                                <rect x="0" y="0" width="1559" height="225" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                              ry="0"></rect>
                        <rect fill="none" class="highcharts-plot-background" x="74" y="53" width="1559"
                              height="225"></rect>
                        <g class="highcharts-pane-group" data-z-index="0"></g>
                        <g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 125.5 53 L 125.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 177.5 53 L 177.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 229.5 53 L 229.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 281.5 53 L 281.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 333.5 53 L 333.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 385.5 53 L 385.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 437.5 53 L 437.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 489.5 53 L 489.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 541.5 53 L 541.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 593.5 53 L 593.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 645.5 53 L 645.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 697.5 53 L 697.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 749.5 53 L 749.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 801.5 53 L 801.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 853.5 53 L 853.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 904.5 53 L 904.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 956.5 53 L 956.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1008.5 53 L 1008.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1060.5 53 L 1060.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1112.5 53 L 1112.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1164.5 53 L 1164.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1216.5 53 L 1216.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1268.5 53 L 1268.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1320.5 53 L 1320.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1372.5 53 L 1372.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1424.5 53 L 1424.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1476.5 53 L 1476.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1528.5 53 L 1528.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1580.5 53 L 1580.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1632.5 53 L 1632.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 73.5 53 L 73.5 278"
                                  opacity="1"></path>
                        </g>
                        <g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 278.5 L 1633 278.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 222.5 L 1633 222.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 166.5 L 1633 166.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 109.5 L 1633 109.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 52.5 L 1633 52.5" opacity="1"></path>
                        </g>
                        <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="74" y="53" width="1559"
                              height="225"></rect>
                        <g class="highcharts-axis highcharts-xaxis " data-z-index="2">
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 125.5 278 L 125.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 177.5 278 L 177.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 229.5 278 L 229.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 281.5 278 L 281.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 333.5 278 L 333.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 385.5 278 L 385.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 437.5 278 L 437.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 489.5 278 L 489.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 541.5 278 L 541.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 593.5 278 L 593.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 645.5 278 L 645.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 697.5 278 L 697.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 749.5 278 L 749.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 801.5 278 L 801.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 853.5 278 L 853.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 904.5 278 L 904.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 956.5 278 L 956.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1008.5 278 L 1008.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1060.5 278 L 1060.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1112.5 278 L 1112.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1164.5 278 L 1164.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1216.5 278 L 1216.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1268.5 278 L 1268.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1320.5 278 L 1320.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1372.5 278 L 1372.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1424.5 278 L 1424.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1476.5 278 L 1476.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1528.5 278 L 1528.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1580.5 278 L 1580.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1633.5 278 L 1633.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 73.5 278 L 73.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                  data-z-index="7" d="M 74 278.5 L 1633 278.5"></path>
                        </g>
                        <g class="highcharts-axis highcharts-yaxis " data-z-index="2">
                            <text x="26.09375" data-z-index="7" text-anchor="middle"
                                  transform="translate(0,0) rotate(270 26.09375 165.5)" class="highcharts-axis-title"
                                  style="color:#666666;fill:#666666;" y="165.5">
                                <tspan>Дни</tspan>
                            </text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 74 53 L 74 278"></path>
                        </g>
                        <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2625)">
                                <path fill="none"
                                      d="M 25.983333333333 173.86874999999998 L 77.95 171.67499999999998 L 129.91666666667 188.38124999999997 L 181.88333333333 180.05625000000003 L 233.85 169.875 L 285.81666666667 151.93125000000003 L 337.78333333333 156.76875 L 389.75 167.68125 L 441.71666666667 149.79375 L 493.68333333333 144.45000000000005 L 545.65 163.125 L 597.61666666667 144.675 L 649.58333333333 161.38125 L 701.55 136.01250000000005 L 753.51666666667 123.4125 L 805.48333333333 117.7875 L 857.45 112.1625 L 909.41666666667 111.88125000000001 L 961.38333333333 114.58125000000003 L 1013.35 112.8375 L 1065.3166666667 100.57499999999997 L 1117.2833333333 96.18749999999997 L 1169.25 89.49374999999998 L 1221.2166666667 59.849999999999994 L 1273.1833333333 80.26874999999998 L 1325.15 51.75000000000003 L 1377.1166666667 68.79375000000002 L 1429.0833333333 72.84375000000003 L 1481.05 92.41875000000005 L 1533.0166666667 86.79375000000005"
                                      class="highcharts-graph" data-z-index="1" stroke="#ff8366" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.983333333333 173.86874999999998 L 25.983333333333 173.86874999999998 L 77.95 171.67499999999998 L 129.91666666667 188.38124999999997 L 181.88333333333 180.05625000000003 L 233.85 169.875 L 285.81666666667 151.93125000000003 L 337.78333333333 156.76875 L 389.75 167.68125 L 441.71666666667 149.79375 L 493.68333333333 144.45000000000005 L 545.65 163.125 L 597.61666666667 144.675 L 649.58333333333 161.38125 L 701.55 136.01250000000005 L 753.51666666667 123.4125 L 805.48333333333 117.7875 L 857.45 112.1625 L 909.41666666667 111.88125000000001 L 961.38333333333 114.58125000000003 L 1013.35 112.8375 L 1065.3166666667 100.57499999999997 L 1117.2833333333 96.18749999999997 L 1169.25 89.49374999999998 L 1221.2166666667 59.849999999999994 L 1273.1833333333 80.26874999999998 L 1325.15 51.75000000000003 L 1377.1166666667 68.79375000000002 L 1429.0833333333 72.84375000000003 L 1481.05 92.41875000000005 L 1533.0166666667 86.79375000000005 L 1543.0166666667 86.79375000000005"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2656)">
                                <path fill="#ff8366" visibility="hidden"
                                      d="M 129 188.38124999999997 A 0 0 0 1 1 129 188.38124999999997 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#ff8366" d="M 29 174 A 4 4 0 1 1 28.99999800000017 173.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 81 172 A 4 4 0 1 1 80.99999800000016 171.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366"
                                      d="M 133 188.38124999999997 A 4 4 0 1 1 132.99999800000018 188.37725000066663 Z"
                                      class="highcharts-point " stroke-width="0.006552456509679616"></path>
                                <path fill="#ff8366"
                                      d="M 185 180.05625000000003 A 4 4 0 1 1 184.99999800000018 180.0522500006667 Z"
                                      class="highcharts-point " stroke-width="0.0005859006574716052"></path>
                                <path fill="#ff8366"
                                      d="M 237 169.875 A 4 4 0 1 1 236.99999800000018 169.87100000066667 Z"
                                      class="highcharts-point " stroke-width="0.0009866357858642205"></path>
                                <path fill="#ff8366" d="M 289 152 A 4 4 0 1 1 288.9999980000002 151.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366"
                                      d="M 341 156.76875 A 4 4 0 1 1 340.9999980000002 156.76475000066668 Z"
                                      class="highcharts-point " stroke-width="0.00035526367970539763"></path>
                                <path fill="#ff8366"
                                      d="M 393 167.68125 A 4 4 0 1 1 392.9999980000002 167.67725000066667 Z"
                                      class="highcharts-point " stroke-width="0.000009869571931497845"></path>
                                <path fill="#ff8366"
                                      d="M 445 149.79375 A 4 4 0 1 1 444.9999980000002 149.78975000066666 Z"
                                      class="highcharts-point " stroke-width="0.0007811809637697231"></path>
                                <path fill="#ff8366" d="M 497 144 A 4 4 0 1 1 496.9999980000002 143.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 549 163 A 4 4 0 1 1 548.9999980000001 162.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 601 145 A 4 4 0 1 1 600.9999980000001 144.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 653 161 A 4 4 0 1 1 652.9999980000001 160.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 705 136 A 4 4 0 1 1 704.9999980000001 135.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 757 123 A 4 4 0 1 1 756.9999980000001 122.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 809 118 A 4 4 0 1 1 808.9999980000001 117.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 861 112 A 4 4 0 1 1 860.9999980000001 111.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 913 112 A 4 4 0 1 1 912.9999980000001 111.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 965 115 A 4 4 0 1 1 964.9999980000001 114.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1017 113 A 4 4 0 1 1 1016.9999980000001 112.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1069 101 A 4 4 0 1 1 1068.9999980000002 100.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1121 96 A 4 4 0 1 1 1120.9999980000002 95.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1173 89 A 4 4 0 1 1 1172.9999980000002 88.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1225 60 A 4 4 0 1 1 1224.9999980000002 59.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1277 80 A 4 4 0 1 1 1276.9999980000002 79.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1329 52 A 4 4 0 1 1 1328.9999980000002 51.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1381 69 A 4 4 0 1 1 1380.9999980000002 68.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1433 73 A 4 4 0 1 1 1432.9999980000002 72.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1485 92 A 4 4 0 1 1 1484.9999980000002 91.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1537 87 A 4 4 0 1 1 1536.9999980000002 86.99600000066667 Z"
                                      class="highcharts-point"></path>
                            </g>
                        </g>
                        <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                              style="color:#333333;font-size:18px;fill:#333333;" y="24">
                            <tspan>Продолжительность демпинга</tspan>
                        </text>
                        <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                              style="color:#666666;fill:#666666;" y="52"></text>
                        <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                           transform="translate(74,53)"></g>
                        <g class="highcharts-legend" data-z-index="7" transform="translate(708,356)">
                            <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="227"
                                  height="29" visibility="visible"></rect>
                            <g data-z-index="1">
                                <g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-0"
                                       data-z-index="1" transform="translate(8,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ff8366"
                                              stroke-width="2"></path>
                                        <path fill="#ff8366"
                                              d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z"
                                              class="highcharts-point"></path>
                                        <text x="21"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2" y="15">
                                            <tspan>Продолжительность демпинга</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                            <text x="102.57605819768735"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 102.57605819768735 294)" y="294" opacity="1">
                                25-04-2019
                            </text>
                            <text x="154.54272486434735"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 154.54272486434735 294)" y="294" opacity="1">
                                26-04-2019
                            </text>
                            <text x="206.50939153101734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 206.50939153101734 294)" y="294" opacity="1">
                                27-04-2019
                            </text>
                            <text x="258.47605819768734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 258.47605819768734 294)" y="294" opacity="1">
                                28-04-2019
                            </text>
                            <text x="310.4427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 310.4427248643473 294)" y="294" opacity="1">
                                29-04-2019
                            </text>
                            <text x="362.4093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 362.4093915310173 294)" y="294" opacity="1">
                                30-04-2019
                            </text>
                            <text x="414.3760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 414.3760581976873 294)" y="294" opacity="1">
                                01-05-2019
                            </text>
                            <text x="466.3427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 466.3427248643473 294)" y="294" opacity="1">
                                02-05-2019
                            </text>
                            <text x="518.3093915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 518.3093915310174 294)" y="294" opacity="1">
                                03-05-2019
                            </text>
                            <text x="570.2760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 570.2760581976873 294)" y="294" opacity="1">
                                04-05-2019
                            </text>
                            <text x="622.2427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 622.2427248643473 294)" y="294" opacity="1">
                                05-05-2019
                            </text>
                            <text x="674.2093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 674.2093915310173 294)" y="294" opacity="1">
                                06-05-2019
                            </text>
                            <text x="726.1760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 726.1760581976873 294)" y="294" opacity="1">
                                07-05-2019
                            </text>
                            <text x="778.1427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 778.1427248643473 294)" y="294" opacity="1">
                                08-05-2019
                            </text>
                            <text x="830.1093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 830.1093915310173 294)" y="294" opacity="1">
                                09-05-2019
                            </text>
                            <text x="882.0760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 882.0760581976873 294)" y="294" opacity="1">
                                10-05-2019
                            </text>
                            <text x="934.0427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 934.0427248643473 294)" y="294" opacity="1">
                                11-05-2019
                            </text>
                            <text x="986.0093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 986.0093915310173 294)" y="294" opacity="1">
                                12-05-2019
                            </text>
                            <text x="1037.9760581977173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1037.9760581977173 294)" y="294" opacity="1">
                                13-05-2019
                            </text>
                            <text x="1089.9427248643174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1089.9427248643174 294)" y="294" opacity="1">
                                14-05-2019
                            </text>
                            <text x="1141.9093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1141.9093915310173 294)" y="294" opacity="1">
                                15-05-2019
                            </text>
                            <text x="1193.8760581977174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1193.8760581977174 294)" y="294" opacity="1">
                                16-05-2019
                            </text>
                            <text x="1245.8427248643172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1245.8427248643172 294)" y="294" opacity="1">
                                17-05-2019
                            </text>
                            <text x="1297.8093915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1297.8093915310174 294)" y="294" opacity="1">
                                18-05-2019
                            </text>
                            <text x="1349.7760581977172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1349.7760581977172 294)" y="294" opacity="1">
                                19-05-2019
                            </text>
                            <text x="1401.7427248643173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1401.7427248643173 294)" y="294" opacity="1">
                                20-05-2019
                            </text>
                            <text x="1453.7093915310172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1453.7093915310172 294)" y="294" opacity="1">
                                21-05-2019
                            </text>
                            <text x="1505.6760581977173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1505.6760581977173 294)" y="294" opacity="1">
                                22-05-2019
                            </text>
                            <text x="1557.6427248643174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1557.6427248643174 294)" y="294" opacity="1">
                                23-05-2019
                            </text>
                            <text x="1609.6093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1609.6093915310173 294)" y="294" opacity="1">
                                24-05-2019
                            </text>
                        </g>
                        <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="226" opacity="1">70
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="170" opacity="1">80
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="113" opacity="1">90
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="282" opacity="1">60
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="57" opacity="1">100
                            </text>
                        </g>
                        <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                           style="pointer-events:none;white-space:nowrap;" data-z-index="8"
                           transform="translate(76,-9999)" opacity="0" visibility="visible">
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 253.5 0.5 C 256.5 0.5 256.5 0.5 256.5 3.5 L 256.5 44.5 C 256.5 47.5 256.5 47.5 253.5 47.5 L 133.5 47.5 127.5 53.5 121.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 253.5 0.5 C 256.5 0.5 256.5 0.5 256.5 3.5 L 256.5 44.5 C 256.5 47.5 256.5 47.5 253.5 47.5 L 133.5 47.5 127.5 53.5 121.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 253.5 0.5 C 256.5 0.5 256.5 0.5 256.5 3.5 L 256.5 44.5 C 256.5 47.5 256.5 47.5 253.5 47.5 L 133.5 47.5 127.5 53.5 121.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                                  transform="translate(1, 1)"></path>
                            <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                                  d="M 3.5 0.5 L 253.5 0.5 C 256.5 0.5 256.5 0.5 256.5 3.5 L 256.5 44.5 C 256.5 47.5 256.5 47.5 253.5 47.5 L 133.5 47.5 127.5 53.5 121.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#ff8366" stroke-width="1"></path>
                            <text x="8" data-z-index="1"
                                  style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20">
                                <tspan style="font-size: 10px">27-04-2019</tspan>
                                <tspan style="fill:#ff8366" x="8" dy="15">●</tspan>
                                <tspan dx="0"> Продолжительность демпинга:</tspan>
                                <tspan style="font-weight:bold" dx="0">66.51</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
            </chart>
        </div>
        <div style="display: none;" id="prices">
            <chart data-highcharts-chart="67">
                <div id="highcharts-1pjixtw-2658" dir="ltr" class="highcharts-container "
                     style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" class="highcharts-root"
                         style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                         xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                            <clipPath id="highcharts-1pjixtw-2659">
                                <rect x="0" y="0" width="1559" height="225" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                              ry="0"></rect>
                        <rect fill="none" class="highcharts-plot-background" x="74" y="53" width="1559"
                              height="225"></rect>
                        <g class="highcharts-pane-group" data-z-index="0"></g>
                        <g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 125.5 53 L 125.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 177.5 53 L 177.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 229.5 53 L 229.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 281.5 53 L 281.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 333.5 53 L 333.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 385.5 53 L 385.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 437.5 53 L 437.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 489.5 53 L 489.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 541.5 53 L 541.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 593.5 53 L 593.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 645.5 53 L 645.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 697.5 53 L 697.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 749.5 53 L 749.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 801.5 53 L 801.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 853.5 53 L 853.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 904.5 53 L 904.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 956.5 53 L 956.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1008.5 53 L 1008.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1060.5 53 L 1060.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1112.5 53 L 1112.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1164.5 53 L 1164.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1216.5 53 L 1216.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1268.5 53 L 1268.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1320.5 53 L 1320.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1372.5 53 L 1372.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1424.5 53 L 1424.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1476.5 53 L 1476.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1528.5 53 L 1528.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1580.5 53 L 1580.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1632.5 53 L 1632.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 73.5 53 L 73.5 278"
                                  opacity="1"></path>
                        </g>
                        <g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 278.5 L 1633 278.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 222.5 L 1633 222.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 166.5 L 1633 166.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 109.5 L 1633 109.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 74 52.5 L 1633 52.5" opacity="1"></path>
                        </g>
                        <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="74" y="53" width="1559"
                              height="225"></rect>
                        <g class="highcharts-axis highcharts-xaxis " data-z-index="2">
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 125.5 278 L 125.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 177.5 278 L 177.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 229.5 278 L 229.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 281.5 278 L 281.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 333.5 278 L 333.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 385.5 278 L 385.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 437.5 278 L 437.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 489.5 278 L 489.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 541.5 278 L 541.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 593.5 278 L 593.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 645.5 278 L 645.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 697.5 278 L 697.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 749.5 278 L 749.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 801.5 278 L 801.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 853.5 278 L 853.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 904.5 278 L 904.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 956.5 278 L 956.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1008.5 278 L 1008.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1060.5 278 L 1060.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1112.5 278 L 1112.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1164.5 278 L 1164.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1216.5 278 L 1216.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1268.5 278 L 1268.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1320.5 278 L 1320.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1372.5 278 L 1372.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1424.5 278 L 1424.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1476.5 278 L 1476.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1528.5 278 L 1528.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1580.5 278 L 1580.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1633.5 278 L 1633.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 73.5 278 L 73.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                  data-z-index="7" d="M 74 278.5 L 1633 278.5"></path>
                        </g>
                        <g class="highcharts-axis highcharts-yaxis " data-z-index="2">
                            <text x="26.09375" data-z-index="7" text-anchor="middle"
                                  transform="translate(0,0) rotate(270 26.09375 165.5)" class="highcharts-axis-title"
                                  style="color:#666666;fill:#666666;" y="165.5">
                                <tspan>Цены</tspan>
                            </text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 74 53 L 74 278"></path>
                        </g>
                        <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2659)">
                                <path fill="none"
                                      d="M 25.983333333333 47.285718749999916 L 77.95 47.285718749999916 L 129.91666666667 45.6052499999999 L 181.88333333333 47.285718749999916 L 233.85 47.285718749999916 L 285.81666666667 47.56724999999997 L 337.78333333333 47.56724999999997 L 389.75 47.56724999999997 L 441.71666666667 47.56724999999997 L 493.68333333333 47.56724999999997 L 545.65 47.56724999999997 L 597.61666666667 47.56724999999997 L 649.58333333333 47.56724999999997 L 701.55 47.56724999999997 L 753.51666666667 47.56724999999997 L 805.48333333333 47.56724999999997 L 857.45 47.56724999999997 L 909.41666666667 47.56724999999997 L 961.38333333333 47.56724999999997 L 1013.35 47.56724999999997 L 1065.3166666667 47.56724999999997 L 1117.2833333333 47.56724999999997 L 1169.25 47.56724999999997 L 1221.2166666667 48.37528125000006 L 1273.1833333333 48.37528125000006 L 1325.15 48.37528125000006 L 1377.1166666667 48.37528125000006 L 1429.0833333333 48.37528125000006 L 1481.05 48.4709062500001 L 1533.0166666667 48.4709062500001"
                                      class="highcharts-graph" data-z-index="1" stroke="#ff103d" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.983333333333 47.285718749999916 L 25.983333333333 47.285718749999916 L 77.95 47.285718749999916 L 129.91666666667 45.6052499999999 L 181.88333333333 47.285718749999916 L 233.85 47.285718749999916 L 285.81666666667 47.56724999999997 L 337.78333333333 47.56724999999997 L 389.75 47.56724999999997 L 441.71666666667 47.56724999999997 L 493.68333333333 47.56724999999997 L 545.65 47.56724999999997 L 597.61666666667 47.56724999999997 L 649.58333333333 47.56724999999997 L 701.55 47.56724999999997 L 753.51666666667 47.56724999999997 L 805.48333333333 47.56724999999997 L 857.45 47.56724999999997 L 909.41666666667 47.56724999999997 L 961.38333333333 47.56724999999997 L 1013.35 47.56724999999997 L 1065.3166666667 47.56724999999997 L 1117.2833333333 47.56724999999997 L 1169.25 47.56724999999997 L 1221.2166666667 48.37528125000006 L 1273.1833333333 48.37528125000006 L 1325.15 48.37528125000006 L 1377.1166666667 48.37528125000006 L 1429.0833333333 48.37528125000006 L 1481.05 48.4709062500001 L 1533.0166666667 48.4709062500001 L 1543.0166666667 48.4709062500001"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2690)">
                                <path fill="#ff103d" visibility="hidden"
                                      d="M 129 45.6052499999999 A 0 0 0 1 1 129 45.6052499999999 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#ff103d" d="M 29 47 A 4 4 0 1 1 28.99999800000017 46.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 81 47 A 4 4 0 1 1 80.99999800000016 46.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d"
                                      d="M 133 45.6052499999999 A 4 4 0 1 1 132.99999800000018 45.60125000066656 Z"
                                      class="highcharts-point " stroke-width="0.0006262304962383891"></path>
                                <path fill="#ff103d" d="M 185 47 A 4 4 0 1 1 184.99999800000018 46.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 237 47 A 4 4 0 1 1 236.99999800000018 46.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 289 48 A 4 4 0 1 1 288.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 341 48 A 4 4 0 1 1 340.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 393 48 A 4 4 0 1 1 392.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 445 48 A 4 4 0 1 1 444.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 497 48 A 4 4 0 1 1 496.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 549 48 A 4 4 0 1 1 548.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 601 48 A 4 4 0 1 1 600.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 653 48 A 4 4 0 1 1 652.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 705 48 A 4 4 0 1 1 704.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 757 48 A 4 4 0 1 1 756.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 809 48 A 4 4 0 1 1 808.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 861 48 A 4 4 0 1 1 860.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 913 48 A 4 4 0 1 1 912.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 965 48 A 4 4 0 1 1 964.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1017 48 A 4 4 0 1 1 1016.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1069 48 A 4 4 0 1 1 1068.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1121 48 A 4 4 0 1 1 1120.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1173 48 A 4 4 0 1 1 1172.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1225 48 A 4 4 0 1 1 1224.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1277 48 A 4 4 0 1 1 1276.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1329 48 A 4 4 0 1 1 1328.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1381 48 A 4 4 0 1 1 1380.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1433 48 A 4 4 0 1 1 1432.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1485 48 A 4 4 0 1 1 1484.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1537 48 A 4 4 0 1 1 1536.9999980000002 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-1 highcharts-line-series "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2659)">
                                <path fill="none"
                                      d="M 25.983333333333 178.88287499999996 L 77.95 177.08596874999998 L 129.91666666667 176.60700000000003 L 181.88333333333 177.00299999999996 L 233.85 176.44837500000003 L 285.81666666667 174.08784375000002 L 337.78333333333 176.01243750000003 L 389.75 176.23828125 L 441.71666666667 176.61234374999998 L 493.68333333333 175.69153125000003 L 545.65 177.09215625000002 L 597.61666666667 175.18725000000003 L 649.58333333333 177.37790625000002 L 701.55 175.57228125 L 753.51666666667 175.13634374999998 L 805.48333333333 175.12509374999996 L 857.45 175.27781249999995 L 909.41666666667 175.42659375 L 961.38333333333 175.73737499999996 L 1013.35 173.95649999999998 L 1065.3166666667 175.60096875 L 1117.2833333333 176.57521874999998 L 1169.25 171.676125 L 1221.2166666667 170.93981250000002 L 1273.1833333333 172.03218750000002 L 1325.15 170.89453125 L 1377.1166666667 171.93656249999998 L 1429.0833333333 172.98421874999997 L 1481.05 173.56218749999996 L 1533.0166666667 175.40465625000002"
                                      class="highcharts-graph" data-z-index="1" stroke="#6ac13c" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.983333333333 178.88287499999996 L 25.983333333333 178.88287499999996 L 77.95 177.08596874999998 L 129.91666666667 176.60700000000003 L 181.88333333333 177.00299999999996 L 233.85 176.44837500000003 L 285.81666666667 174.08784375000002 L 337.78333333333 176.01243750000003 L 389.75 176.23828125 L 441.71666666667 176.61234374999998 L 493.68333333333 175.69153125000003 L 545.65 177.09215625000002 L 597.61666666667 175.18725000000003 L 649.58333333333 177.37790625000002 L 701.55 175.57228125 L 753.51666666667 175.13634374999998 L 805.48333333333 175.12509374999996 L 857.45 175.27781249999995 L 909.41666666667 175.42659375 L 961.38333333333 175.73737499999996 L 1013.35 173.95649999999998 L 1065.3166666667 175.60096875 L 1117.2833333333 176.57521874999998 L 1169.25 171.676125 L 1221.2166666667 170.93981250000002 L 1273.1833333333 172.03218750000002 L 1325.15 170.89453125 L 1377.1166666667 171.93656249999998 L 1429.0833333333 172.98421874999997 L 1481.05 173.56218749999996 L 1533.0166666667 175.40465625000002 L 1543.0166666667 175.40465625000002"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-tracker "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2690)">
                                <path fill="#6ac13c" visibility="hidden"
                                      d="M 181 177.00299999999996 A 0 0 0 1 1 181 177.00299999999996 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#6ac13c" d="M 25 175 L 29 179 25 183 21 179 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 77 173 L 81 177 77 181 73 177 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 129 173 L 133 177 129 181 125 177 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c"
                                      d="M 181 173.00299999999996 L 185 177.00299999999996 181 181.00299999999996 177 177.00299999999996 Z"
                                      class="highcharts-point " stroke-width="0.0002467198171342"></path>
                                <path fill="#6ac13c" d="M 233 172 L 237 176 233 180 229 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 285 170 L 289 174 285 178 281 174 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 337 172 L 341 176 337 180 333 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 389 172 L 393 176 389 180 385 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 441 173 L 445 177 441 181 437 177 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 493 172 L 497 176 493 180 489 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 545 173 L 549 177 545 181 541 177 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 597 171 L 601 175 597 179 593 175 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 649 173 L 653 177 649 181 645 177 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 701 172 L 705 176 701 180 697 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 753 171 L 757 175 753 179 749 175 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 805 171 L 809 175 805 179 801 175 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 857 171 L 861 175 857 179 853 175 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 909 171 L 913 175 909 179 905 175 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 961 172 L 965 176 961 180 957 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1013 170 L 1017 174 1013 178 1009 174 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1065 172 L 1069 176 1065 180 1061 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1117 173 L 1121 177 1117 181 1113 177 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1169 168 L 1173 172 1169 176 1165 172 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1221 167 L 1225 171 1221 175 1217 171 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1273 168 L 1277 172 1273 176 1269 172 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1325 167 L 1329 171 1325 175 1321 171 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1377 168 L 1381 172 1377 176 1373 172 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1429 169 L 1433 173 1429 177 1425 173 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1481 170 L 1485 174 1481 178 1477 174 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1533 171 L 1537 175 1533 179 1529 175 Z"
                                      class="highcharts-point"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-2 highcharts-line-series "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2659)">
                                <path fill="none"
                                      d="M 25.983333333333 115.99143749999998 L 77.95 114.84253125000002 L 129.91666666667 116.35509375 L 181.88333333333 115.52934374999997 L 233.85 112.82175000000007 L 285.81666666667 105.87262500000001 L 337.78333333333 108.24046875000008 L 389.75 113.90399999999995 L 441.71666666667 108.33328124999996 L 493.68333333333 109.99490625 L 545.65 113.50406249999992 L 597.61666666667 108.08606249999993 L 649.58333333333 111.81515625000004 L 701.55 111.78815625000006 L 753.51666666667 112.22718750000008 L 805.48333333333 112.06743750000007 L 857.45 111.89671875000008 L 909.41666666667 112.63500000000008 L 961.38333333333 112.8490312500001 L 1013.35 110.08940625000002 L 1065.3166666667 111.80249999999991 L 1117.2833333333 112.36528124999997 L 1169.25 112.15687500000008 L 1221.2166666667 108.83643749999995 L 1273.1833333333 112.75650000000007 L 1325.15 109.18659375000006 L 1377.1166666667 112.45275 L 1429.0833333333 111.47850000000001 L 1481.05 114.84815624999995 L 1533.0166666667 116.73871874999998"
                                      class="highcharts-graph" data-z-index="1" stroke="#fbda35" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.983333333333 115.99143749999998 L 25.983333333333 115.99143749999998 L 77.95 114.84253125000002 L 129.91666666667 116.35509375 L 181.88333333333 115.52934374999997 L 233.85 112.82175000000007 L 285.81666666667 105.87262500000001 L 337.78333333333 108.24046875000008 L 389.75 113.90399999999995 L 441.71666666667 108.33328124999996 L 493.68333333333 109.99490625 L 545.65 113.50406249999992 L 597.61666666667 108.08606249999993 L 649.58333333333 111.81515625000004 L 701.55 111.78815625000006 L 753.51666666667 112.22718750000008 L 805.48333333333 112.06743750000007 L 857.45 111.89671875000008 L 909.41666666667 112.63500000000008 L 961.38333333333 112.8490312500001 L 1013.35 110.08940625000002 L 1065.3166666667 111.80249999999991 L 1117.2833333333 112.36528124999997 L 1169.25 112.15687500000008 L 1221.2166666667 108.83643749999995 L 1273.1833333333 112.75650000000007 L 1325.15 109.18659375000006 L 1377.1166666667 112.45275 L 1429.0833333333 111.47850000000001 L 1481.05 114.84815624999995 L 1533.0166666667 116.73871874999998 L 1543.0166666667 116.73871874999998"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-2 highcharts-line-series highcharts-tracker "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2690)">
                                <path fill="#fbda35" visibility="hidden"
                                      d="M 181 115.52934374999997 A 0 0 0 1 1 181 115.52934374999997 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#fbda35" d="M 21 112 L 29 112 29 120 21 120 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 73 111 L 81 111 81 119 73 119 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35"
                                      d="M 125 112.35509375 L 133 112.35509375 133 120.35509375 125 120.35509375 Z"
                                      class="highcharts-point " stroke-width="0.00013016127849851955"></path>
                                <path fill="#fbda35"
                                      d="M 177 111.52934374999997 L 185 111.52934374999997 185 119.52934374999997 177 119.52934374999997 Z"
                                      class="highcharts-point "></path>
                                <path fill="#fbda35" d="M 229 109 L 237 109 237 117 229 117 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 281 102 L 289 102 289 110 281 110 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 333 104 L 341 104 341 112 333 112 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 385 110 L 393 110 393 118 385 118 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 437 104 L 445 104 445 112 437 112 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 489 106 L 497 106 497 114 489 114 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 541 110 L 549 110 549 118 541 118 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 593 104 L 601 104 601 112 593 112 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 645 108 L 653 108 653 116 645 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 697 108 L 705 108 705 116 697 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 749 108 L 757 108 757 116 749 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 801 108 L 809 108 809 116 801 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 853 108 L 861 108 861 116 853 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 905 109 L 913 109 913 117 905 117 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 957 109 L 965 109 965 117 957 117 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1009 106 L 1017 106 1017 114 1009 114 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1061 108 L 1069 108 1069 116 1061 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1113 108 L 1121 108 1121 116 1113 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1165 108 L 1173 108 1173 116 1165 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1217 105 L 1225 105 1225 113 1217 113 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1269 109 L 1277 109 1277 117 1269 117 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1321 105 L 1329 105 1329 113 1321 113 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1373 108 L 1381 108 1381 116 1373 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1425 107 L 1433 107 1433 115 1425 115 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1477 111 L 1485 111 1485 119 1477 119 Z"
                                      class="highcharts-point"></path>
                                <path fill="#fbda35" d="M 1529 113 L 1537 113 1537 121 1529 121 Z"
                                      class="highcharts-point"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-3 highcharts-line-series "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2659)">
                                <path fill="none"
                                      d="M 25.983333333333 54.498656250000096 L 77.95 54.0095624999999 L 129.91666666667 53.370281250000005 L 181.88333333333 52.14149999999995 L 233.85 49.059562499999885 L 285.81666666667 45.395718749999986 L 337.78333333333 46.52718750000008 L 389.75 51.163875000000104 L 441.71666666667 44.60259375000007 L 493.68333333333 50.070374999999956 L 545.65 50.41574999999992 L 597.61666666667 41.4331875 L 649.58333333333 42.508125000000035 L 701.55 50.10159374999998 L 753.51666666667 50.27146875 L 805.48333333333 49.35909374999994 L 857.45 48.43350000000004 L 909.41666666667 49.16418749999994 L 961.38333333333 49.165031249999885 L 1013.35 49.059 L 1065.3166666667 49.21143749999993 L 1117.2833333333 49.40775000000002 L 1169.25 54.13724999999991 L 1221.2166666667 55.937812500000035 L 1273.1833333333 55.78087499999998 L 1325.15 56.57624999999996 L 1377.1166666667 56.57568750000004 L 1429.0833333333 55.75528125000008 L 1481.05 57.09375 L 1533.0166666667 57.43237500000001"
                                      class="highcharts-graph" data-z-index="1" stroke="#f8a95e" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.983333333333 54.498656250000096 L 25.983333333333 54.498656250000096 L 77.95 54.0095624999999 L 129.91666666667 53.370281250000005 L 181.88333333333 52.14149999999995 L 233.85 49.059562499999885 L 285.81666666667 45.395718749999986 L 337.78333333333 46.52718750000008 L 389.75 51.163875000000104 L 441.71666666667 44.60259375000007 L 493.68333333333 50.070374999999956 L 545.65 50.41574999999992 L 597.61666666667 41.4331875 L 649.58333333333 42.508125000000035 L 701.55 50.10159374999998 L 753.51666666667 50.27146875 L 805.48333333333 49.35909374999994 L 857.45 48.43350000000004 L 909.41666666667 49.16418749999994 L 961.38333333333 49.165031249999885 L 1013.35 49.059 L 1065.3166666667 49.21143749999993 L 1117.2833333333 49.40775000000002 L 1169.25 54.13724999999991 L 1221.2166666667 55.937812500000035 L 1273.1833333333 55.78087499999998 L 1325.15 56.57624999999996 L 1377.1166666667 56.57568750000004 L 1429.0833333333 55.75528125000008 L 1481.05 57.09375 L 1533.0166666667 57.43237500000001 L 1543.0166666667 57.43237500000001"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-3 highcharts-line-series highcharts-tracker "
                               transform="translate(74,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2690)">
                                <path fill="#f8a95e" d="M 25 50 L 29 58 21 58 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 77 50 L 81 58 73 58 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 129 49 L 133 57 125 57 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 181 48 L 185 56 177 56 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 233 45 L 237 53 229 53 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 285 41 L 289 49 281 49 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 337 43 L 341 51 333 51 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 389 47 L 393 55 385 55 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 441 41 L 445 49 437 49 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 493 46 L 497 54 489 54 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 545 46 L 549 54 541 54 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 597 37 L 601 45 593 45 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 649 39 L 653 47 645 47 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 701 46 L 705 54 697 54 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 753 46 L 757 54 749 54 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 805 45 L 809 53 801 53 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 857 44 L 861 52 853 52 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 909 45 L 913 53 905 53 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 961 45 L 965 53 957 53 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1013 45 L 1017 53 1009 53 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1065 45 L 1069 53 1061 53 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1117 45 L 1121 53 1113 53 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1169 50 L 1173 58 1165 58 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1221 52 L 1225 60 1217 60 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1273 52 L 1277 60 1269 60 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1325 53 L 1329 61 1321 61 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1377 53 L 1381 61 1373 61 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1429 52 L 1433 60 1425 60 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1481 53 L 1485 61 1477 61 Z" class="highcharts-point"></path>
                                <path fill="#f8a95e" d="M 1533 53 L 1537 61 1529 61 Z" class="highcharts-point"></path>
                            </g>
                        </g>
                        <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                              style="color:#333333;font-size:18px;fill:#333333;" y="24">
                            <tspan>Цены</tspan>
                        </text>
                        <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                              style="color:#666666;fill:#666666;" y="52"></text>
                        <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                           transform="translate(74,53)"></g>
                        <g class="highcharts-legend" data-z-index="7" transform="translate(516,356)">
                            <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="611"
                                  height="29" visibility="visible"></rect>
                            <g data-z-index="1">
                                <g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-0"
                                       data-z-index="1" transform="translate(8,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ff103d"
                                              stroke-width="2"></path>
                                        <path fill="#ff103d"
                                              d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z"
                                              class="highcharts-point"></path>
                                        <text x="21"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2" y="15">
                                            <tspan>Уровень цены (РРЦ)</tspan>
                                        </text>
                                    </g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-1"
                                       data-z-index="1" transform="translate(171.6875,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#6ac13c"
                                              stroke-width="2"></path>
                                        <path fill="#6ac13c" d="M 8 7 L 12 11 8 15 4 11 Z"
                                              class="highcharts-point"></path>
                                        <text x="21" y="15"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2">
                                            <tspan>Минимальная цена</tspan>
                                        </text>
                                    </g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-2"
                                       data-z-index="1" transform="translate(331.6875,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#fbda35"
                                              stroke-width="2"></path>
                                        <path fill="#fbda35" d="M 4 7 L 12 7 12 15 4 15 Z"
                                              class="highcharts-point"></path>
                                        <text x="21" y="15"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2">
                                            <tspan>Средняя цена</tspan>
                                        </text>
                                    </g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-3"
                                       data-z-index="1" transform="translate(459.46875,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#f8a95e"
                                              stroke-width="2"></path>
                                        <path fill="#f8a95e" d="M 8 7 L 12 15 4 15 Z" class="highcharts-point"></path>
                                        <text x="21" y="15"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2">
                                            <tspan>Максимальная цена</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                            <text x="102.57605819768735"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 102.57605819768735 294)" y="294" opacity="1">
                                25-04-2019
                            </text>
                            <text x="154.54272486434735"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 154.54272486434735 294)" y="294" opacity="1">
                                26-04-2019
                            </text>
                            <text x="206.50939153101734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 206.50939153101734 294)" y="294" opacity="1">
                                27-04-2019
                            </text>
                            <text x="258.47605819768734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 258.47605819768734 294)" y="294" opacity="1">
                                28-04-2019
                            </text>
                            <text x="310.4427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 310.4427248643473 294)" y="294" opacity="1">
                                29-04-2019
                            </text>
                            <text x="362.4093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 362.4093915310173 294)" y="294" opacity="1">
                                30-04-2019
                            </text>
                            <text x="414.3760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 414.3760581976873 294)" y="294" opacity="1">
                                01-05-2019
                            </text>
                            <text x="466.3427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 466.3427248643473 294)" y="294" opacity="1">
                                02-05-2019
                            </text>
                            <text x="518.3093915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 518.3093915310174 294)" y="294" opacity="1">
                                03-05-2019
                            </text>
                            <text x="570.2760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 570.2760581976873 294)" y="294" opacity="1">
                                04-05-2019
                            </text>
                            <text x="622.2427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 622.2427248643473 294)" y="294" opacity="1">
                                05-05-2019
                            </text>
                            <text x="674.2093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 674.2093915310173 294)" y="294" opacity="1">
                                06-05-2019
                            </text>
                            <text x="726.1760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 726.1760581976873 294)" y="294" opacity="1">
                                07-05-2019
                            </text>
                            <text x="778.1427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 778.1427248643473 294)" y="294" opacity="1">
                                08-05-2019
                            </text>
                            <text x="830.1093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 830.1093915310173 294)" y="294" opacity="1">
                                09-05-2019
                            </text>
                            <text x="882.0760581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 882.0760581976873 294)" y="294" opacity="1">
                                10-05-2019
                            </text>
                            <text x="934.0427248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 934.0427248643473 294)" y="294" opacity="1">
                                11-05-2019
                            </text>
                            <text x="986.0093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 986.0093915310173 294)" y="294" opacity="1">
                                12-05-2019
                            </text>
                            <text x="1037.9760581977173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1037.9760581977173 294)" y="294" opacity="1">
                                13-05-2019
                            </text>
                            <text x="1089.9427248643174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1089.9427248643174 294)" y="294" opacity="1">
                                14-05-2019
                            </text>
                            <text x="1141.9093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1141.9093915310173 294)" y="294" opacity="1">
                                15-05-2019
                            </text>
                            <text x="1193.8760581977174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1193.8760581977174 294)" y="294" opacity="1">
                                16-05-2019
                            </text>
                            <text x="1245.8427248643172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1245.8427248643172 294)" y="294" opacity="1">
                                17-05-2019
                            </text>
                            <text x="1297.8093915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1297.8093915310174 294)" y="294" opacity="1">
                                18-05-2019
                            </text>
                            <text x="1349.7760581977172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1349.7760581977172 294)" y="294" opacity="1">
                                19-05-2019
                            </text>
                            <text x="1401.7427248643173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1401.7427248643173 294)" y="294" opacity="1">
                                20-05-2019
                            </text>
                            <text x="1453.7093915310172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1453.7093915310172 294)" y="294" opacity="1">
                                21-05-2019
                            </text>
                            <text x="1505.6760581977173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1505.6760581977173 294)" y="294" opacity="1">
                                22-05-2019
                            </text>
                            <text x="1557.6427248643174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1557.6427248643174 294)" y="294" opacity="1">
                                23-05-2019
                            </text>
                            <text x="1609.6093915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1609.6093915310173 294)" y="294" opacity="1">
                                24-05-2019
                            </text>
                        </g>
                        <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="226" opacity="1">32k
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="170" opacity="1">34k
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="113" opacity="1">36k
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="282" opacity="1">30k
                            </text>
                            <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="57" opacity="1">38k
                            </text>
                        </g>
                        <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                           style="pointer-events:none;white-space:nowrap;" data-z-index="8"
                           transform="translate(149,-9999)" opacity="0" visibility="visible">
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 212.5 0.5 C 215.5 0.5 215.5 0.5 215.5 3.5 L 215.5 44.5 C 215.5 47.5 215.5 47.5 212.5 47.5 L 112.5 47.5 106.5 53.5 100.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 212.5 0.5 C 215.5 0.5 215.5 0.5 215.5 3.5 L 215.5 44.5 C 215.5 47.5 215.5 47.5 212.5 47.5 L 112.5 47.5 106.5 53.5 100.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 212.5 0.5 C 215.5 0.5 215.5 0.5 215.5 3.5 L 215.5 44.5 C 215.5 47.5 215.5 47.5 212.5 47.5 L 112.5 47.5 106.5 53.5 100.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                                  transform="translate(1, 1)"></path>
                            <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                                  d="M 3.5 0.5 L 212.5 0.5 C 215.5 0.5 215.5 0.5 215.5 3.5 L 215.5 44.5 C 215.5 47.5 215.5 47.5 212.5 47.5 L 112.5 47.5 106.5 53.5 100.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#6ac13c" stroke-width="1"></path>
                            <text x="8" data-z-index="1"
                                  style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20">
                                <tspan style="font-size: 10px">28-04-2019</tspan>
                                <tspan style="fill:#6ac13c" x="8" dy="15">●</tspan>
                                <tspan dx="0"> Минимальная цена:</tspan>
                                <tspan style="font-weight:bold" dx="0">31 706.56</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
            </chart>
        </div>
        <div style="display: none;" id="knee">
            <chart data-highcharts-chart="68">
                <div id="highcharts-1pjixtw-2782" dir="ltr" class="highcharts-container "
                     style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" class="highcharts-root"
                         style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                         xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                            <clipPath id="highcharts-1pjixtw-2783">
                                <rect x="0" y="0" width="1566" height="225" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                              ry="0"></rect>
                        <rect fill="none" class="highcharts-plot-background" x="67" y="53" width="1566"
                              height="225"></rect>
                        <g class="highcharts-pane-group" data-z-index="0"></g>
                        <g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 118.5 53 L 118.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 170.5 53 L 170.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 223.5 53 L 223.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 275.5 53 L 275.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 327.5 53 L 327.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 379.5 53 L 379.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 431.5 53 L 431.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 484.5 53 L 484.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 536.5 53 L 536.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 588.5 53 L 588.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 640.5 53 L 640.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 692.5 53 L 692.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 745.5 53 L 745.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 797.5 53 L 797.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 849.5 53 L 849.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 901.5 53 L 901.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 953.5 53 L 953.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1006.5 53 L 1006.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1058.5 53 L 1058.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1110.5 53 L 1110.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1162.5 53 L 1162.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1214.5 53 L 1214.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1267.5 53 L 1267.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1319.5 53 L 1319.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1371.5 53 L 1371.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1423.5 53 L 1423.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1475.5 53 L 1475.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1528.5 53 L 1528.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1580.5 53 L 1580.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1632.5 53 L 1632.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 66.5 53 L 66.5 278"
                                  opacity="1"></path>
                        </g>
                        <g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 278.5 L 1633 278.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 233.5 L 1633 233.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 188.5 L 1633 188.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 143.5 L 1633 143.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 98.5 L 1633 98.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 67 52.5 L 1633 52.5" opacity="1"></path>
                        </g>
                        <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="67" y="53" width="1566"
                              height="225"></rect>
                        <g class="highcharts-axis highcharts-xaxis " data-z-index="2">
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 118.5 278 L 118.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 170.5 278 L 170.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 223.5 278 L 223.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 275.5 278 L 275.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 327.5 278 L 327.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 379.5 278 L 379.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 431.5 278 L 431.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 484.5 278 L 484.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 536.5 278 L 536.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 588.5 278 L 588.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 640.5 278 L 640.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 692.5 278 L 692.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 745.5 278 L 745.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 797.5 278 L 797.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 849.5 278 L 849.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 901.5 278 L 901.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 953.5 278 L 953.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1006.5 278 L 1006.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1058.5 278 L 1058.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1110.5 278 L 1110.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1162.5 278 L 1162.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1214.5 278 L 1214.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1267.5 278 L 1267.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1319.5 278 L 1319.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1371.5 278 L 1371.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1423.5 278 L 1423.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1475.5 278 L 1475.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1528.5 278 L 1528.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1580.5 278 L 1580.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1633.5 278 L 1633.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 66.5 278 L 66.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                  data-z-index="7" d="M 67 278.5 L 1633 278.5"></path>
                        </g>
                        <g class="highcharts-axis highcharts-yaxis " data-z-index="2">
                            <text x="26.046875" data-z-index="7" text-anchor="middle"
                                  transform="translate(0,0) rotate(270 26.046875 165.5)" class="highcharts-axis-title"
                                  style="color:#666666;fill:#666666;" y="165.5">
                                <tspan>Индекс</tspan>
                            </text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 67 53 L 67 278"></path>
                        </g>
                        <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series "
                               transform="translate(67,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2783)">
                                <path fill="none"
                                      d="M 26.1 70.38 L 78.3 156.42000000000002 L 130.5 73.53000000000003 L 182.7 149.67000000000002 L 234.9 188.28 L 287.1 76.59 L 339.3 174.24 L 391.5 84.69 L 443.7 73.08000000000001 L 495.9 182.61 L 548.1 116.55 L 600.3 83.51999999999998 L 652.5 132.75 L 704.7 44.370000000000005 L 756.9 197.64 L 809.1 212.85 L 861.3 214.2 L 913.5 206.01 L 965.7 186.57 L 1017.9 101.07000000000001 L 1070.1 75.06 L 1122.3 174.24 L 1174.5 171.72 L 1226.7 88.01999999999998 L 1278.9 102.87 L 1331.1 103.23 L 1383.3 111.33 L 1435.5 128.07 L 1487.7 25.109999999999985 L 1539.9 176.49"
                                      class="highcharts-graph" data-z-index="1" stroke="#ff103d" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 16.1 70.38 L 26.1 70.38 L 78.3 156.42000000000002 L 130.5 73.53000000000003 L 182.7 149.67000000000002 L 234.9 188.28 L 287.1 76.59 L 339.3 174.24 L 391.5 84.69 L 443.7 73.08000000000001 L 495.9 182.61 L 548.1 116.55 L 600.3 83.51999999999998 L 652.5 132.75 L 704.7 44.370000000000005 L 756.9 197.64 L 809.1 212.85 L 861.3 214.2 L 913.5 206.01 L 965.7 186.57 L 1017.9 101.07000000000001 L 1070.1 75.06 L 1122.3 174.24 L 1174.5 171.72 L 1226.7 88.01999999999998 L 1278.9 102.87 L 1331.1 103.23 L 1383.3 111.33 L 1435.5 128.07 L 1487.7 25.109999999999985 L 1539.9 176.49 L 1549.9 176.49"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker "
                               transform="translate(67,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2814)">
                                <path fill="#ff103d" visibility="hidden"
                                      d="M 182 149.67000000000002 A 0 0 0 1 1 182 149.67000000000002 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#ff103d" d="M 30 70 A 4 4 0 1 1 29.99999800000017 69.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 82 156 A 4 4 0 1 1 81.99999800000016 155.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 134 74 A 4 4 0 1 1 133.99999800000018 73.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d"
                                      d="M 186 149.67000000000002 A 4 4 0 1 1 185.99999800000018 149.66600000066668 Z"
                                      class="highcharts-point " stroke-width="0.00020199247366092798"></path>
                                <path fill="#ff103d" d="M 238 188 A 4 4 0 1 1 237.99999800000018 187.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 291 77 A 4 4 0 1 1 290.9999980000002 76.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 343 174 A 4 4 0 1 1 342.9999980000002 173.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 395 85 A 4 4 0 1 1 394.9999980000002 84.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 447 73 A 4 4 0 1 1 446.9999980000002 72.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 499 183 A 4 4 0 1 1 498.9999980000002 182.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 552 117 A 4 4 0 1 1 551.9999980000001 116.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 604 84 A 4 4 0 1 1 603.9999980000001 83.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 656 133 A 4 4 0 1 1 655.9999980000001 132.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 708 44 A 4 4 0 1 1 707.9999980000001 43.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 760 198 A 4 4 0 1 1 759.9999980000001 197.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 813 213 A 4 4 0 1 1 812.9999980000001 212.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 865 214 A 4 4 0 1 1 864.9999980000001 213.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 917 206 A 4 4 0 1 1 916.9999980000001 205.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 969 187 A 4 4 0 1 1 968.9999980000001 186.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1021 101 A 4 4 0 1 1 1020.9999980000001 100.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1074 75 A 4 4 0 1 1 1073.9999980000002 74.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1126 174 A 4 4 0 1 1 1125.9999980000002 173.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1178 172 A 4 4 0 1 1 1177.9999980000002 171.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1230 88 A 4 4 0 1 1 1229.9999980000002 87.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1282 103 A 4 4 0 1 1 1281.9999980000002 102.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1335 103 A 4 4 0 1 1 1334.9999980000002 102.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1387 111 A 4 4 0 1 1 1386.9999980000002 110.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1439 128 A 4 4 0 1 1 1438.9999980000002 127.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1491 25 A 4 4 0 1 1 1490.9999980000002 24.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff103d" d="M 1543 176 A 4 4 0 1 1 1542.9999980000002 175.99600000066667 Z"
                                      class="highcharts-point"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-1 highcharts-line-series "
                               transform="translate(67,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2783)">
                                <path fill="none"
                                      d="M 26.1 115.74 L 78.3 196.11 L 130.5 173.97 L 182.7 182.97 L 234.9 203.49 L 287.1 173.97 L 339.3 184.5 L 391.5 181.17000000000002 L 443.7 172.17000000000002 L 495.9 193.5 L 548.1 186.75 L 600.3 161.82 L 652.5 175.05 L 704.7 151.74 L 756.9 207.18 L 809.1 219.15 L 861.3 219.15 L 913.5 213.57 L 965.7 205.92 L 1017.9 163.98 L 1070.1 184.23 L 1122.3 205.29 L 1174.5 198.27 L 1226.7 173.7 L 1278.9 187.38 L 1331.1 177.48 L 1383.3 188.1 L 1435.5 192.24 L 1487.7 187.92000000000002 L 1539.9 203.31"
                                      class="highcharts-graph" data-z-index="1" stroke="#ff9eb0" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 16.1 115.74 L 26.1 115.74 L 78.3 196.11 L 130.5 173.97 L 182.7 182.97 L 234.9 203.49 L 287.1 173.97 L 339.3 184.5 L 391.5 181.17000000000002 L 443.7 172.17000000000002 L 495.9 193.5 L 548.1 186.75 L 600.3 161.82 L 652.5 175.05 L 704.7 151.74 L 756.9 207.18 L 809.1 219.15 L 861.3 219.15 L 913.5 213.57 L 965.7 205.92 L 1017.9 163.98 L 1070.1 184.23 L 1122.3 205.29 L 1174.5 198.27 L 1226.7 173.7 L 1278.9 187.38 L 1331.1 177.48 L 1383.3 188.1 L 1435.5 192.24 L 1487.7 187.92000000000002 L 1539.9 203.31 L 1549.9 203.31"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-tracker "
                               transform="translate(67,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2814)">
                                <path fill="#ff9eb0" visibility="hidden" d="M 182 182.97 A 0 0 0 1 1 182 182.97 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#ff9eb0" d="M 26 112 L 30 116 26 120 22 116 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 78 192 L 82 196 78 200 74 196 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 130 170 L 134 174 130 178 126 174 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 182 178.97 L 186 182.97 182 186.97 178 182.97 Z"
                                      class="highcharts-point "></path>
                                <path fill="#ff9eb0" d="M 234 199 L 238 203 234 207 230 203 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 287 170 L 291 174 287 178 283 174 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 339 181 L 343 185 339 189 335 185 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 391 177 L 395 181 391 185 387 181 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 443 168 L 447 172 443 176 439 172 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 495 190 L 499 194 495 198 491 194 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 548 183 L 552 187 548 191 544 187 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 600 158 L 604 162 600 166 596 162 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 652 171 L 656 175 652 179 648 175 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 704 148 L 708 152 704 156 700 152 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 756 203 L 760 207 756 211 752 207 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 809 215 L 813 219 809 223 805 219 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 861 215 L 865 219 861 223 857 219 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 913 210 L 917 214 913 218 909 214 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 965 202 L 969 206 965 210 961 206 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1017 160 L 1021 164 1017 168 1013 164 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1070 180 L 1074 184 1070 188 1066 184 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1122 201 L 1126 205 1122 209 1118 205 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1174 194 L 1178 198 1174 202 1170 198 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1226 170 L 1230 174 1226 178 1222 174 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1278 183 L 1282 187 1278 191 1274 187 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1331 173 L 1335 177 1331 181 1327 177 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1383 184 L 1387 188 1383 192 1379 188 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1435 188 L 1439 192 1435 196 1431 192 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1487 184 L 1491 188 1487 192 1483 188 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff9eb0" d="M 1539 199 L 1543 203 1539 207 1535 203 Z"
                                      class="highcharts-point"></path>
                            </g>
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-2 highcharts-line-series "
                               transform="translate(67,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2783)">
                                <path fill="none"
                                      d="M 26.1 218.97 L 78.3 220.95 L 130.5 200.88 L 182.7 220.14 L 234.9 221.58 L 287.1 209.61 L 339.3 221.13 L 391.5 224.37 L 443.7 221.94 L 495.9 224.1 L 548.1 173.61 L 600.3 172.07999999999998 L 652.5 197.46 L 704.7 221.67 L 756.9 196.56 L 809.1 221.22 L 861.3 224.82 L 913.5 221.4 L 965.7 223.74 L 1017.9 221.4 L 1070.1 209.97 L 1122.3 213.39 L 1174.5 217.71 L 1226.7 202.41 L 1278.9 223.56 L 1331.1 223.38 L 1383.3 216.27 L 1435.5 220.86 L 1487.7 219.15 L 1539.9 215.64"
                                      class="highcharts-graph" data-z-index="1" stroke="#6ac13c" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 16.1 218.97 L 26.1 218.97 L 78.3 220.95 L 130.5 200.88 L 182.7 220.14 L 234.9 221.58 L 287.1 209.61 L 339.3 221.13 L 391.5 224.37 L 443.7 221.94 L 495.9 224.1 L 548.1 173.61 L 600.3 172.07999999999998 L 652.5 197.46 L 704.7 221.67 L 756.9 196.56 L 809.1 221.22 L 861.3 224.82 L 913.5 221.4 L 965.7 223.74 L 1017.9 221.4 L 1070.1 209.97 L 1122.3 213.39 L 1174.5 217.71 L 1226.7 202.41 L 1278.9 223.56 L 1331.1 223.38 L 1383.3 216.27 L 1435.5 220.86 L 1487.7 219.15 L 1539.9 215.64 L 1549.9 215.64"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-2 highcharts-line-series highcharts-tracker"
                               transform="translate(67,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2814)">
                                <path fill="#6ac13c" d="M 22 215 L 30 215 30 223 22 223 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 74 217 L 82 217 82 225 74 225 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 126 197 L 134 197 134 205 126 205 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 178 216 L 186 216 186 224 178 224 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 230 218 L 238 218 238 226 230 226 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 283 206 L 291 206 291 214 283 214 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 335 217 L 343 217 343 225 335 225 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 387 220 L 395 220 395 228 387 228 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 439 218 L 447 218 447 226 439 226 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 491 220 L 499 220 499 228 491 228 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 544 170 L 552 170 552 178 544 178 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 596 168 L 604 168 604 176 596 176 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 648 193 L 656 193 656 201 648 201 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 700 218 L 708 218 708 226 700 226 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 752 193 L 760 193 760 201 752 201 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 805 217 L 813 217 813 225 805 225 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 857 221 L 865 221 865 229 857 229 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 909 217 L 917 217 917 225 909 225 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 961 220 L 969 220 969 228 961 228 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1013 217 L 1021 217 1021 225 1013 225 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1066 206 L 1074 206 1074 214 1066 214 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1118 209 L 1126 209 1126 217 1118 217 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1170 214 L 1178 214 1178 222 1170 222 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1222 198 L 1230 198 1230 206 1222 206 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1274 220 L 1282 220 1282 228 1274 228 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1327 219 L 1335 219 1335 227 1327 227 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1379 212 L 1387 212 1387 220 1379 220 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1431 217 L 1439 217 1439 225 1431 225 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1483 215 L 1491 215 1491 223 1483 223 Z"
                                      class="highcharts-point"></path>
                                <path fill="#6ac13c" d="M 1535 212 L 1543 212 1543 220 1535 220 Z"
                                      class="highcharts-point"></path>
                            </g>
                        </g>
                        <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                              style="color:#333333;font-size:18px;fill:#333333;" y="24">
                            <tspan>Колебания</tspan>
                        </text>
                        <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                              style="color:#666666;fill:#666666;" y="52"></text>
                        <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                           transform="translate(67,53)"></g>
                        <g class="highcharts-legend" data-z-index="7" transform="translate(520,356)">
                            <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="602"
                                  height="29" visibility="visible"></rect>
                            <g data-z-index="1">
                                <g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-0"
                                       data-z-index="1" transform="translate(8,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ff103d"
                                              stroke-width="2"></path>
                                        <path fill="#ff103d"
                                              d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z"
                                              class="highcharts-point"></path>
                                        <text x="21"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2" y="15">
                                            <tspan>Индекс колебания цен</tspan>
                                        </text>
                                    </g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-1"
                                       data-z-index="1" transform="translate(189.609375,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ff9eb0"
                                              stroke-width="2"></path>
                                        <path fill="#ff9eb0" d="M 8 7 L 12 11 8 15 4 11 Z"
                                              class="highcharts-point"></path>
                                        <text x="21" y="15"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2">
                                            <tspan>Индекс силы колебания цен</tspan>
                                        </text>
                                    </g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-2"
                                       data-z-index="1" transform="translate(405.375,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#6ac13c"
                                              stroke-width="2"></path>
                                        <path fill="#6ac13c" d="M 4 7 L 12 7 12 15 4 15 Z"
                                              class="highcharts-point"></path>
                                        <text x="21" y="15"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2">
                                            <tspan>Индекс колебания наличия</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                            <text x="95.69272486435068"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 95.69272486435068 294)" y="294" opacity="1">
                                25-04-2019
                            </text>
                            <text x="147.8927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 147.8927248643507 294)" y="294" opacity="1">
                                26-04-2019
                            </text>
                            <text x="200.09272486435069"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 200.09272486435069 294)" y="294" opacity="1">
                                27-04-2019
                            </text>
                            <text x="252.29272486435067"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 252.29272486435067 294)" y="294" opacity="1">
                                28-04-2019
                            </text>
                            <text x="304.49272486435063"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 304.49272486435063 294)" y="294" opacity="1">
                                29-04-2019
                            </text>
                            <text x="356.6927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 356.6927248643506 294)" y="294" opacity="1">
                                30-04-2019
                            </text>
                            <text x="408.8927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 408.8927248643506 294)" y="294" opacity="1">
                                01-05-2019
                            </text>
                            <text x="461.09272486435066"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 461.09272486435066 294)" y="294" opacity="1">
                                02-05-2019
                            </text>
                            <text x="513.2927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 513.2927248643506 294)" y="294" opacity="1">
                                03-05-2019
                            </text>
                            <text x="565.4927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 565.4927248643506 294)" y="294" opacity="1">
                                04-05-2019
                            </text>
                            <text x="617.6927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 617.6927248643507 294)" y="294" opacity="1">
                                05-05-2019
                            </text>
                            <text x="669.8927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 669.8927248643506 294)" y="294" opacity="1">
                                06-05-2019
                            </text>
                            <text x="722.0927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 722.0927248643507 294)" y="294" opacity="1">
                                07-05-2019
                            </text>
                            <text x="774.2927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 774.2927248643506 294)" y="294" opacity="1">
                                08-05-2019
                            </text>
                            <text x="826.4927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 826.4927248643506 294)" y="294" opacity="1">
                                09-05-2019
                            </text>
                            <text x="878.6927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 878.6927248643507 294)" y="294" opacity="1">
                                10-05-2019
                            </text>
                            <text x="930.8927248643506"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 930.8927248643506 294)" y="294" opacity="1">
                                11-05-2019
                            </text>
                            <text x="983.0927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 983.0927248643507 294)" y="294" opacity="1">
                                12-05-2019
                            </text>
                            <text x="1035.2927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1035.2927248643507 294)" y="294" opacity="1">
                                13-05-2019
                            </text>
                            <text x="1087.4927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1087.4927248643507 294)" y="294" opacity="1">
                                14-05-2019
                            </text>
                            <text x="1139.6927248643508"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1139.6927248643508 294)" y="294" opacity="1">
                                15-05-2019
                            </text>
                            <text x="1191.8927248643508"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1191.8927248643508 294)" y="294" opacity="1">
                                16-05-2019
                            </text>
                            <text x="1244.0927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1244.0927248643507 294)" y="294" opacity="1">
                                17-05-2019
                            </text>
                            <text x="1296.2927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1296.2927248643507 294)" y="294" opacity="1">
                                18-05-2019
                            </text>
                            <text x="1348.4927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1348.4927248643507 294)" y="294" opacity="1">
                                19-05-2019
                            </text>
                            <text x="1400.6927248643508"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1400.6927248643508 294)" y="294" opacity="1">
                                20-05-2019
                            </text>
                            <text x="1452.8927248643508"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1452.8927248643508 294)" y="294" opacity="1">
                                21-05-2019
                            </text>
                            <text x="1505.0927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1505.0927248643507 294)" y="294" opacity="1">
                                22-05-2019
                            </text>
                            <text x="1557.2927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1557.2927248643507 294)" y="294" opacity="1">
                                23-05-2019
                            </text>
                            <text x="1609.4927248643507"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1609.4927248643507 294)" y="294" opacity="1">
                                24-05-2019
                            </text>
                        </g>
                        <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="282" opacity="1">0
                            </text>
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="237" opacity="1">5
                            </text>
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="192" opacity="1">10
                            </text>
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="147" opacity="1">15
                            </text>
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="102" opacity="1">20
                            </text>
                            <text x="52" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="57" opacity="1">25
                            </text>
                        </g>
                        <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                           style="pointer-events:none;white-space:nowrap;" data-z-index="8"
                           transform="translate(133,-9999)" opacity="0" visibility="visible">
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 232.5 0.5 C 235.5 0.5 235.5 0.5 235.5 3.5 L 235.5 44.5 C 235.5 47.5 235.5 47.5 232.5 47.5 L 122.5 47.5 116.5 53.5 110.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 232.5 0.5 C 235.5 0.5 235.5 0.5 235.5 3.5 L 235.5 44.5 C 235.5 47.5 235.5 47.5 232.5 47.5 L 122.5 47.5 116.5 53.5 110.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 232.5 0.5 C 235.5 0.5 235.5 0.5 235.5 3.5 L 235.5 44.5 C 235.5 47.5 235.5 47.5 232.5 47.5 L 122.5 47.5 116.5 53.5 110.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                                  transform="translate(1, 1)"></path>
                            <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                                  d="M 3.5 0.5 L 232.5 0.5 C 235.5 0.5 235.5 0.5 235.5 3.5 L 235.5 44.5 C 235.5 47.5 235.5 47.5 232.5 47.5 L 122.5 47.5 116.5 53.5 110.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#ff9eb0" stroke-width="1"></path>
                            <text x="8" data-z-index="1"
                                  style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20">
                                <tspan style="font-size: 10px">28-04-2019</tspan>
                                <tspan style="fill:#ff9eb0" x="8" dy="15">●</tspan>
                                <tspan dx="0"> Индекс силы колебания цен:</tspan>
                                <tspan style="font-weight:bold" dx="0">4.67</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
            </chart>
        </div>
        <div style="display: none;" id="indexDiscount">
            <chart data-highcharts-chart="69">
                <div id="highcharts-1pjixtw-2876" dir="ltr" class="highcharts-container "
                     style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" class="highcharts-root"
                         style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                         xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                        <desc>Created with Highcharts 6.2.0</desc>
                        <defs>
                            <clipPath id="highcharts-1pjixtw-2877">
                                <rect x="0" y="0" width="1556" height="225" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                              ry="0"></rect>
                        <rect fill="none" class="highcharts-plot-background" x="77" y="53" width="1556"
                              height="225"></rect>
                        <g class="highcharts-pane-group" data-z-index="0"></g>
                        <g class="highcharts-grid highcharts-xaxis-grid " data-z-index="1">
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 128.5 53 L 128.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 180.5 53 L 180.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 232.5 53 L 232.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 283.5 53 L 283.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 335.5 53 L 335.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 387.5 53 L 387.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 439.5 53 L 439.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 491.5 53 L 491.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 543.5 53 L 543.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 595.5 53 L 595.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 647.5 53 L 647.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 698.5 53 L 698.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 750.5 53 L 750.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 802.5 53 L 802.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 854.5 53 L 854.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 906.5 53 L 906.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 958.5 53 L 958.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1010.5 53 L 1010.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1061.5 53 L 1061.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1113.5 53 L 1113.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1165.5 53 L 1165.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1217.5 53 L 1217.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1269.5 53 L 1269.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1321.5 53 L 1321.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1373.5 53 L 1373.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1425.5 53 L 1425.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1476.5 53 L 1476.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1528.5 53 L 1528.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1580.5 53 L 1580.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1632.5 53 L 1632.5 278"
                                  opacity="1"></path>
                            <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 76.5 53 L 76.5 278"
                                  opacity="1"></path>
                        </g>
                        <g class="highcharts-grid highcharts-yaxis-grid " data-z-index="1">
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 77 278.5 L 1633 278.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 77 222.5 L 1633 222.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 77 166.5 L 1633 166.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 77 109.5 L 1633 109.5" opacity="1"></path>
                            <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                  class="highcharts-grid-line" d="M 77 52.5 L 1633 52.5" opacity="1"></path>
                        </g>
                        <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="77" y="53" width="1556"
                              height="225"></rect>
                        <g class="highcharts-axis highcharts-xaxis " data-z-index="2">
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 128.5 278 L 128.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 180.5 278 L 180.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 232.5 278 L 232.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 283.5 278 L 283.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 335.5 278 L 335.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 387.5 278 L 387.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 439.5 278 L 439.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 491.5 278 L 491.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 543.5 278 L 543.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 595.5 278 L 595.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 647.5 278 L 647.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 698.5 278 L 698.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 750.5 278 L 750.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 802.5 278 L 802.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 854.5 278 L 854.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 906.5 278 L 906.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 958.5 278 L 958.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1010.5 278 L 1010.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1061.5 278 L 1061.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1113.5 278 L 1113.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1165.5 278 L 1165.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1217.5 278 L 1217.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1269.5 278 L 1269.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1321.5 278 L 1321.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1373.5 278 L 1373.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1425.5 278 L 1425.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1476.5 278 L 1476.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1528.5 278 L 1528.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1580.5 278 L 1580.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 1633.5 278 L 1633.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                  d="M 76.5 278 L 76.5 288" opacity="1"></path>
                            <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                  data-z-index="7" d="M 77 278.5 L 1633 278.5"></path>
                        </g>
                        <g class="highcharts-axis highcharts-yaxis " data-z-index="2">
                            <text x="25.65625" data-z-index="7" text-anchor="middle"
                                  transform="translate(0,0) rotate(270 25.65625 165.5)" class="highcharts-axis-title"
                                  style="color:#666666;fill:#666666;" y="165.5">
                                <tspan>Индекс</tspan>
                            </text>
                            <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 77 53 L 77 278"></path>
                        </g>
                        <g class="highcharts-series-group" data-z-index="3">
                            <g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-line-series "
                               transform="translate(77,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2877)">
                                <path fill="none"
                                      d="M 25.933333333333 159.29999999999995 L 77.8 151.875 L 129.66666666667 140.175 L 181.53333333333 148.50000000000003 L 233.4 146.02499999999998 L 285.26666666667 148.50000000000003 L 337.13333333333 103.725 L 389 108.67499999999995 L 440.86666666667 85.50000000000003 L 492.73333333333 87.74999999999997 L 544.6 72.44999999999999 L 596.46666666667 78.97500000000002 L 648.33333333333 48.37499999999997 L 700.2 17.100000000000023 L 752.06666666667 9.450000000000045 L 803.93333333333 10.350000000000023 L 855.8 20.24999999999997 L 907.66666666667 17.55000000000001 L 959.53333333333 10.574999999999989 L 1011.4 144.45000000000005 L 1063.2666666667 143.1 L 1115.1333333333 152.325 L 1167 159.29999999999995 L 1218.8666666667 152.325 L 1270.7333333333 154.79999999999998 L 1322.6 161.55 L 1374.4666666667 156.375 L 1426.3333333333 160.87499999999997 L 1478.2 155.70000000000005 L 1530.0666666667 157.27499999999998"
                                      class="highcharts-graph" data-z-index="1" stroke="#ff8366" stroke-width="2"
                                      stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                      d="M 15.933333333333 159.29999999999995 L 25.933333333333 159.29999999999995 L 77.8 151.875 L 129.66666666667 140.175 L 181.53333333333 148.50000000000003 L 233.4 146.02499999999998 L 285.26666666667 148.50000000000003 L 337.13333333333 103.725 L 389 108.67499999999995 L 440.86666666667 85.50000000000003 L 492.73333333333 87.74999999999997 L 544.6 72.44999999999999 L 596.46666666667 78.97500000000002 L 648.33333333333 48.37499999999997 L 700.2 17.100000000000023 L 752.06666666667 9.450000000000045 L 803.93333333333 10.350000000000023 L 855.8 20.24999999999997 L 907.66666666667 17.55000000000001 L 959.53333333333 10.574999999999989 L 1011.4 144.45000000000005 L 1063.2666666667 143.1 L 1115.1333333333 152.325 L 1167 159.29999999999995 L 1218.8666666667 152.325 L 1270.7333333333 154.79999999999998 L 1322.6 161.55 L 1374.4666666667 156.375 L 1426.3333333333 160.87499999999997 L 1478.2 155.70000000000005 L 1530.0666666667 157.27499999999998 L 1540.0666666667 157.27499999999998"
                                      stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"
                                      visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                            </g>
                            <g data-z-index="0.1"
                               class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker "
                               transform="translate(77,53) scale(1 1)"
                               clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-1pjixtw-2908)">
                                <path fill="#ff8366" visibility="hidden"
                                      d="M 285 148.50000000000003 A 0 0 0 1 1 285 148.50000000000003 Z"
                                      class="highcharts-halo highcharts-color-undefined" data-z-index="-1"
                                      fill-opacity="0.25"></path>
                                <path fill="#ff8366" d="M 29 159 A 4 4 0 1 1 28.99999800000017 158.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 81 152 A 4 4 0 1 1 80.99999800000016 151.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366"
                                      d="M 133 140.175 A 4 4 0 1 1 132.99999800000018 140.17100000066668 Z"
                                      class="highcharts-point " stroke-width="0.0006909174285217867"></path>
                                <path fill="#ff8366"
                                      d="M 185 148.50000000000003 A 4 4 0 1 1 184.99999800000018 148.4960000006667 Z"
                                      class="highcharts-point " stroke-width="0.000009101363563024378"></path>
                                <path fill="#ff8366"
                                      d="M 237 146.02499999999998 A 4 4 0 1 1 236.99999800000018 146.02100000066665 Z"
                                      class="highcharts-point " stroke-width="0.000017265002734856427"></path>
                                <path fill="#ff8366"
                                      d="M 289 148.50000000000003 A 4 4 0 1 1 288.9999980000002 148.4960000006667 Z"
                                      class="highcharts-point "></path>
                                <path fill="#ff8366" d="M 341 104 A 4 4 0 1 1 340.9999980000002 103.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 393 109 A 4 4 0 1 1 392.9999980000002 108.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 444 86 A 4 4 0 1 1 443.9999980000002 85.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 496 88 A 4 4 0 1 1 495.9999980000002 87.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 548 72 A 4 4 0 1 1 547.9999980000001 71.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 600 79 A 4 4 0 1 1 599.9999980000001 78.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 652 48 A 4 4 0 1 1 651.9999980000001 47.99600000066666 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 704 17 A 4 4 0 1 1 703.9999980000001 16.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 756 9 A 4 4 0 1 1 755.9999980000001 8.996000000666664 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 807 10 A 4 4 0 1 1 806.9999980000001 9.996000000666664 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 859 20 A 4 4 0 1 1 858.9999980000001 19.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 911 18 A 4 4 0 1 1 910.9999980000001 17.996000000666665 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 963 11 A 4 4 0 1 1 962.9999980000001 10.996000000666664 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1015 144 A 4 4 0 1 1 1014.9999980000001 143.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1067 143 A 4 4 0 1 1 1066.9999980000002 142.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1119 152 A 4 4 0 1 1 1118.9999980000002 151.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1171 159 A 4 4 0 1 1 1170.9999980000002 158.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1222 152 A 4 4 0 1 1 1221.9999980000002 151.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1274 155 A 4 4 0 1 1 1273.9999980000002 154.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1326 162 A 4 4 0 1 1 1325.9999980000002 161.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1378 156 A 4 4 0 1 1 1377.9999980000002 155.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1430 161 A 4 4 0 1 1 1429.9999980000002 160.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1482 156 A 4 4 0 1 1 1481.9999980000002 155.99600000066667 Z"
                                      class="highcharts-point"></path>
                                <path fill="#ff8366" d="M 1534 157 A 4 4 0 1 1 1533.9999980000002 156.99600000066667 Z"
                                      class="highcharts-point"></path>
                            </g>
                        </g>
                        <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                              style="color:#333333;font-size:18px;fill:#333333;" y="24">
                            <tspan>Индекс скидок</tspan>
                        </text>
                        <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                              style="color:#666666;fill:#666666;" y="52"></text>
                        <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                           transform="translate(77,53)"></g>
                        <g class="highcharts-legend" data-z-index="7" transform="translate(756,356)">
                            <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="130"
                                  height="29" visibility="visible"></rect>
                            <g data-z-index="1">
                                <g>
                                    <g class="highcharts-legend-item highcharts-line-series highcharts-color-undefined highcharts-series-0"
                                       data-z-index="1" transform="translate(8,3)">
                                        <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#ff8366"
                                              stroke-width="2"></path>
                                        <path fill="#ff8366"
                                              d="M 12 11 A 4 4 0 1 1 11.999998000000167 10.996000000666664 Z"
                                              class="highcharts-point"></path>
                                        <text x="21"
                                              style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                              text-anchor="start" data-z-index="2" y="15">
                                            <tspan>Индекс скидок</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                            <text x="105.52605819768735"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 105.52605819768735 294)" y="294" opacity="1">
                                25-04-2019
                            </text>
                            <text x="157.39272486434734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 157.39272486434734 294)" y="294" opacity="1">
                                26-04-2019
                            </text>
                            <text x="209.25939153101734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 209.25939153101734 294)" y="294" opacity="1">
                                27-04-2019
                            </text>
                            <text x="261.1260581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 261.1260581976873 294)" y="294" opacity="1">
                                28-04-2019
                            </text>
                            <text x="312.99272486434734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 312.99272486434734 294)" y="294" opacity="1">
                                29-04-2019
                            </text>
                            <text x="364.8593915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 364.8593915310173 294)" y="294" opacity="1">
                                30-04-2019
                            </text>
                            <text x="416.72605819768734"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 416.72605819768734 294)" y="294" opacity="1">
                                01-05-2019
                            </text>
                            <text x="468.5927248643473"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 468.5927248643473 294)" y="294" opacity="1">
                                02-05-2019
                            </text>
                            <text x="520.4593915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 520.4593915310173 294)" y="294" opacity="1">
                                03-05-2019
                            </text>
                            <text x="572.3260581976874"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 572.3260581976874 294)" y="294" opacity="1">
                                04-05-2019
                            </text>
                            <text x="624.1927248643474"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 624.1927248643474 294)" y="294" opacity="1">
                                05-05-2019
                            </text>
                            <text x="676.0593915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 676.0593915310174 294)" y="294" opacity="1">
                                06-05-2019
                            </text>
                            <text x="727.9260581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 727.9260581976873 294)" y="294" opacity="1">
                                07-05-2019
                            </text>
                            <text x="779.7927248643474"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 779.7927248643474 294)" y="294" opacity="1">
                                08-05-2019
                            </text>
                            <text x="831.6593915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 831.6593915310174 294)" y="294" opacity="1">
                                09-05-2019
                            </text>
                            <text x="883.5260581976873"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 883.5260581976873 294)" y="294" opacity="1">
                                10-05-2019
                            </text>
                            <text x="935.3927248643474"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 935.3927248643474 294)" y="294" opacity="1">
                                11-05-2019
                            </text>
                            <text x="987.2593915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 987.2593915310174 294)" y="294" opacity="1">
                                12-05-2019
                            </text>
                            <text x="1039.1260581977172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1039.1260581977172 294)" y="294" opacity="1">
                                13-05-2019
                            </text>
                            <text x="1090.9927248643173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1090.9927248643173 294)" y="294" opacity="1">
                                14-05-2019
                            </text>
                            <text x="1142.8593915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1142.8593915310173 294)" y="294" opacity="1">
                                15-05-2019
                            </text>
                            <text x="1194.7260581977173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1194.7260581977173 294)" y="294" opacity="1">
                                16-05-2019
                            </text>
                            <text x="1246.5927248643172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1246.5927248643172 294)" y="294" opacity="1">
                                17-05-2019
                            </text>
                            <text x="1298.4593915310172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1298.4593915310172 294)" y="294" opacity="1">
                                18-05-2019
                            </text>
                            <text x="1350.3260581977172"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1350.3260581977172 294)" y="294" opacity="1">
                                19-05-2019
                            </text>
                            <text x="1402.1927248643174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1402.1927248643174 294)" y="294" opacity="1">
                                20-05-2019
                            </text>
                            <text x="1454.0593915310174"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1454.0593915310174 294)" y="294" opacity="1">
                                21-05-2019
                            </text>
                            <text x="1505.9260581977173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1505.9260581977173 294)" y="294" opacity="1">
                                22-05-2019
                            </text>
                            <text x="1557.7927248643173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1557.7927248643173 294)" y="294" opacity="1">
                                23-05-2019
                            </text>
                            <text x="1609.6593915310173"
                                  style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                                  transform="translate(0,0) rotate(-45 1609.6593915310173 294)" y="294" opacity="1">
                                24-05-2019
                            </text>
                        </g>
                        <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                            <text x="62" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="170" opacity="1">20
                            </text>
                            <text x="62" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="282" opacity="1">15
                            </text>
                            <text x="62" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="226" opacity="1">17.5
                            </text>
                            <text x="62" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="113" opacity="1">22.5
                            </text>
                            <text x="62" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                  text-anchor="end" transform="translate(0,0)" y="57" opacity="1">25
                            </text>
                        </g>
                        <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                           style="pointer-events:none;white-space:nowrap;" data-z-index="8"
                           transform="translate(284,-9999)" opacity="0" visibility="visible">
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 152.5 0.5 C 155.5 0.5 155.5 0.5 155.5 3.5 L 155.5 44.5 C 155.5 47.5 155.5 47.5 152.5 47.5 L 83.5 47.5 77.5 53.5 71.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 152.5 0.5 C 155.5 0.5 155.5 0.5 155.5 3.5 L 155.5 44.5 C 155.5 47.5 155.5 47.5 152.5 47.5 L 83.5 47.5 77.5 53.5 71.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                                  transform="translate(1, 1)"></path>
                            <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                                  d="M 3.5 0.5 L 152.5 0.5 C 155.5 0.5 155.5 0.5 155.5 3.5 L 155.5 44.5 C 155.5 47.5 155.5 47.5 152.5 47.5 L 83.5 47.5 77.5 53.5 71.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                                  transform="translate(1, 1)"></path>
                            <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                                  d="M 3.5 0.5 L 152.5 0.5 C 155.5 0.5 155.5 0.5 155.5 3.5 L 155.5 44.5 C 155.5 47.5 155.5 47.5 152.5 47.5 L 83.5 47.5 77.5 53.5 71.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                  stroke="#ff8366" stroke-width="1"></path>
                            <text x="8" data-z-index="1"
                                  style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20">
                                <tspan style="font-size: 10px">30-04-2019</tspan>
                                <tspan style="fill:#ff8366" x="8" dy="15">●</tspan>
                                <tspan dx="0"> Индекс скидок:</tspan>
                                <tspan style="font-weight:bold" dx="0">18.4</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
            </chart>
        </div>

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#positions').DataTable({
                "processing": true,
                "responsive": true,
                "language": {
                    "processing": "Подождите...",
                    "search": "Поиск:",
                    "lengthMenu": "Показать _MENU_ записей",
                    "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                    "infoEmpty": "Записи с 0 до 0 из 0 записей",
                    "infoFiltered": "(отфильтровано из _MAX_ записей)",
                    "infoPostFix": "",
                    "loadingRecords": "Загрузка записей...",
                    "zeroRecords": "Записи отсутствуют.",
                    "emptyTable": "В таблице отсутствуют данные",
                    "paginate": {
                        "first": "Первая",
                        "previous": "Предыдущая",
                        "next": "Следующая",
                        "last": "Последняя"
                    },
                    "aria": {
                        "sortAscending": ": активировать для сортировки столбца по возрастанию",
                        "sortDescending": ": активировать для сортировки столбца по убыванию"
                    }
                }
            });     //capital "D"
        });
    </script>
@endsection