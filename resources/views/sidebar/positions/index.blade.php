@extends('sidebar.layouts.master')

@section('title', '| Должности')

@section('content')
    <script>
        function hide(id, btn) {
            $('#RRC').hide();
            $('#out-of-stock').hide();
            $('#damping').hide();
            $('#damping-chng').hide();
            $('.btn-block').removeClass('active');
            $(btn).addClass('active');
            $('#'+id).show();
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
        <div class="row">
            {{--<div class="col-md-10 offset-md-1">--}}
            <div class="col-md-3">
                <button class="btn btn-block btn-outline-primary active" onclick="hide('RRC', this)">Соблюдения РРЦ</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-block btn-outline-primary" onclick="hide('out-of-stock', this)">Группа out-of-stock</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-block btn-outline-primary" onclick="hide('damping', this)">Демпинг</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-block btn-outline-primary" onclick="hide('damping-chng', this)">Изменения в демпинге</button>
            </div>
            {{--</div>--}}
        </div>
        <div class="row">&nbsp</div>

        <div id="RRC">
            <chart data-highcharts-chart="32">
            <div id="highcharts-e8uyvut-234" dir="ltr" class="highcharts-container "
                 style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root "
                     style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                     xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                    <desc>Created with Highcharts 6.2.0</desc>
                    <defs>
                        <clipPath id="highcharts-e8uyvut-235">
                            <rect x="0" y="0" width="1559" height="225" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                          ry="0"></rect>
                    <rect fill="none" class="highcharts-plot-background" x="74" y="53" width="1559" height="225"></rect>
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
                            <tspan>Товары</tspan>
                        </text>
                        <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 74 53 L 74 278"></path>
                    </g>
                    <g class="highcharts-series-group" data-z-index="3">
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-0 highcharts-column-series  highcharts-tracker"
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-235)">
                            <rect x="14" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="65" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="117" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="169" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="221" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="273" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="325" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="377" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="429" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="481" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="533" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="585" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="637" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="689" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="741" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="793" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="845" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="897" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="949" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1001" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1053" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1105" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1157" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1209" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1261" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1313" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1365" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1417" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1469" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1521" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-1 highcharts-column-series  highcharts-tracker"
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-235)">
                            <rect x="14" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point "></rect>
                            <rect x="65" y="61" width="25" height="97" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="117" y="61" width="25" height="102" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="169" y="61" width="25" height="100" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="221" y="61" width="25" height="99" fill="#ff5833" class="highcharts-point "></rect>
                            <rect x="273" y="61" width="25" height="95" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="325" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="377" y="61" width="25" height="101" fill="#ff5833"
                                  class="highcharts-point "></rect>
                            <rect x="429" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point "></rect>
                            <rect x="481" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point "></rect>
                            <rect x="533" y="61" width="25" height="103" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="585" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="637" y="61" width="25" height="105" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="689" y="61" width="25" height="100" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="741" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="793" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="845" y="61" width="25" height="99" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="897" y="61" width="25" height="99" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="949" y="61" width="25" height="101" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1001" y="61" width="25" height="101" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1053" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1105" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1157" y="61" width="25" height="98" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1209" y="61" width="25" height="91" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1261" y="61" width="25" height="96" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1313" y="61" width="25" height="92" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1365" y="61" width="25" height="96" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1417" y="61" width="25" height="100" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1469" y="61" width="25" height="112" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1521" y="61" width="25" height="111" fill="#ff5833"
                                  class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-1 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-2 highcharts-column-series highcharts-tracker "
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-235)">
                            <rect x="14" y="159" width="25" height="14" fill="#FF8366" class="highcharts-point "></rect>
                            <rect x="65" y="158" width="25" height="15" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="117" y="163" width="25" height="15" fill="rgb(255,131,102)"
                                  class="highcharts-point "></rect>
                            <rect x="169" y="161" width="25" height="16" fill="rgb(255,131,102)"
                                  class="highcharts-point "></rect>
                            <rect x="221" y="160" width="25" height="15" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="273" y="156" width="25" height="14" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="325" y="159" width="25" height="14" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="377" y="162" width="25" height="16" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="429" y="159" width="25" height="15" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="481" y="159" width="25" height="15" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="533" y="164" width="25" height="17" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="585" y="159" width="25" height="17" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="637" y="166" width="25" height="17" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="689" y="161" width="25" height="16" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="741" y="159" width="25" height="16" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="793" y="159" width="25" height="16" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="845" y="160" width="25" height="15" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="897" y="160" width="25" height="15" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="949" y="162" width="25" height="15" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1001" y="162" width="25" height="16" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1053" y="159" width="25" height="17" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1105" y="159" width="25" height="17" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1157" y="159" width="25" height="16" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1209" y="152" width="25" height="16" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1261" y="157" width="25" height="17" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1313" y="153" width="25" height="16" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1365" y="157" width="25" height="17" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1417" y="161" width="25" height="15" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1469" y="173" width="25" height="10" fill="#FF8366"
                                  class="highcharts-point"></rect>
                            <rect x="1521" y="172" width="25" height="11" fill="#FF8366"
                                  class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-2 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-3 highcharts-column-series highcharts-tracker "
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-235)">
                            <rect x="14" y="173" width="25" height="19" fill="rgb(181,225,157)"
                                  class="highcharts-point "></rect>
                            <rect x="65" y="173" width="25" height="17" fill="rgb(181,225,157)"
                                  class="highcharts-point "></rect>
                            <rect x="117" y="178" width="25" height="19" fill="#b5e19d"
                                  class="highcharts-point "></rect>
                            <rect x="169" y="177" width="25" height="20" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="221" y="175" width="25" height="21" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="273" y="170" width="25" height="21" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="325" y="173" width="25" height="19" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="377" y="178" width="25" height="19" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="429" y="174" width="25" height="20" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="481" y="174" width="25" height="20" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="533" y="181" width="25" height="19" fill="#b5e19d"
                                  class="highcharts-point "></rect>
                            <rect x="585" y="176" width="25" height="21" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="637" y="183" width="25" height="15" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="689" y="177" width="25" height="14" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="741" y="175" width="25" height="15" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="793" y="175" width="25" height="15" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="845" y="175" width="25" height="15" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="897" y="175" width="25" height="15" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="949" y="177" width="25" height="15" fill="#b5e19d" class="highcharts-point"></rect>
                            <rect x="1001" y="178" width="25" height="19" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1053" y="176" width="25" height="21" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1105" y="176" width="25" height="21" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1157" y="175" width="25" height="21" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1209" y="168" width="25" height="22" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1261" y="174" width="25" height="22" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1313" y="169" width="25" height="22" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1365" y="174" width="25" height="22" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1417" y="176" width="25" height="19" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1469" y="183" width="25" height="16" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                            <rect x="1521" y="183" width="25" height="14" fill="#b5e19d"
                                  class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-3 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-4 highcharts-column-series  highcharts-tracker"
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-235)">
                            <rect x="14" y="192" width="25" height="8" fill="#98d576" class="highcharts-point "></rect>
                            <rect x="65" y="190" width="25" height="9" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="117" y="197" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="169" y="197" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="221" y="196" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="273" y="191" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="325" y="192" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="377" y="197" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="429" y="194" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="481" y="194" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="533" y="200" width="25" height="6" fill="#98d576" class="highcharts-point "></rect>
                            <rect x="585" y="197" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="637" y="198" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="689" y="191" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="741" y="190" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="793" y="190" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="845" y="190" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="897" y="190" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="949" y="192" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1001" y="197" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1053" y="197" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1105" y="197" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1157" y="196" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1209" y="190" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1261" y="196" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1313" y="191" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1365" y="196" width="25" height="7" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1417" y="195" width="25" height="8" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1469" y="199" width="25" height="5" fill="#98d576" class="highcharts-point"></rect>
                            <rect x="1521" y="197" width="25" height="6" fill="#98d576" class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-4 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-5 highcharts-column-series  highcharts-tracker"
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-235)">
                            <rect x="14" y="200" width="25" height="26" fill="#6AC13C" class="highcharts-point "></rect>
                            <rect x="65" y="199" width="25" height="27" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="117" y="204" width="25" height="22" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="169" y="204" width="25" height="22" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="221" y="203" width="25" height="23" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="273" y="198" width="25" height="28" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="325" y="200" width="25" height="26" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="377" y="204" width="25" height="22" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="429" y="201" width="25" height="25" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="481" y="201" width="25" height="25" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="533" y="206" width="25" height="20" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="585" y="205" width="25" height="21" fill="#6AC13C"
                                  class="highcharts-point "></rect>
                            <rect x="637" y="205" width="25" height="21" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="689" y="199" width="25" height="27" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="741" y="198" width="25" height="28" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="793" y="198" width="25" height="28" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="845" y="198" width="25" height="28" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="897" y="198" width="25" height="28" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="949" y="200" width="25" height="26" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1001" y="204" width="25" height="22" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1053" y="204" width="25" height="22" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1105" y="204" width="25" height="22" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1157" y="203" width="25" height="23" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1209" y="198" width="25" height="28" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1261" y="203" width="25" height="23" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1313" y="199" width="25" height="27" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1365" y="203" width="25" height="23" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1417" y="203" width="25" height="23" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1469" y="204" width="25" height="22" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1521" y="203" width="25" height="23" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-5 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                    </g>

                    <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                          style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Соблюдение РРЦ</tspan>
                    </text>
                    <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                          style="color:#666666;fill:#666666;" y="52"></text>
                    <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                       transform="translate(74,53)">
                        <text x="26" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="26" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="26" y="54">588</tspan>
                        </text>
                        <text x="78" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="78" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="78" y="54">588</tspan>
                        </text>
                        <text x="130" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="130" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="130" y="54">588</tspan>
                        </text>
                        <text x="182" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="182" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="182" y="54">588</tspan>
                        </text>
                        <text x="234" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="234" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="234" y="54">588</tspan>
                        </text>
                        <text x="286" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="286" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="286" y="53">589</tspan>
                        </text>
                        <text x="338" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="338" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="338" y="53">589</tspan>
                        </text>
                        <text x="390" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="390" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="390" y="53">589</tspan>
                        </text>
                        <text x="442" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="442" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="442" y="53">589</tspan>
                        </text>
                        <text x="494" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="494" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="494" y="53">589</tspan>
                        </text>
                        <text x="546" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="546" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="546" y="53">589</tspan>
                        </text>
                        <text x="598" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="598" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="598" y="53">589</tspan>
                        </text>
                        <text x="650" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="650" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="650" y="53">589</tspan>
                        </text>
                        <text x="702" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="702" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="702" y="53">589</tspan>
                        </text>
                        <text x="754" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="754" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="754" y="53">589</tspan>
                        </text>
                        <text x="805" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="805" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="805" y="53">589</tspan>
                        </text>
                        <text x="857" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="857" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="857" y="53">589</tspan>
                        </text>
                        <text x="909" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="909" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="909" y="53">589</tspan>
                        </text>
                        <text x="961" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="961" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="961" y="53">589</tspan>
                        </text>
                        <text x="1013" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1013" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1013" y="53">589</tspan>
                        </text>
                        <text x="1065" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1065" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1065" y="53">589</tspan>
                        </text>
                        <text x="1117" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1117" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1117" y="53">589</tspan>
                        </text>
                        <text x="1169" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1169" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1169" y="53">589</tspan>
                        </text>
                        <text x="1221" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1221" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1221" y="53">589</tspan>
                        </text>
                        <text x="1273" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1273" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1273" y="53">589</tspan>
                        </text>
                        <text x="1325" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1325" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1325" y="53">589</tspan>
                        </text>
                        <text x="1377" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1377" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1377" y="53">589</tspan>
                        </text>
                        <text x="1429" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1429" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1429" y="53">589</tspan>
                        </text>
                        <text x="1481" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1481" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1481" y="53">589</tspan>
                        </text>
                        <text x="1533" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1533" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1533" y="53">589</tspan>
                        </text>
                    </g>
                    <g class="highcharts-legend" data-z-index="7" transform="translate(392,356)">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="858"
                              height="29" visibility="visible"></rect>
                        <g data-z-index="1">
                            <g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-0"
                                   data-z-index="1" transform="translate(8,3)">
                                    <text x="21"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2" y="15">
                                        <tspan>Нет РРЦ</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#dbdbdb" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-1"
                                   data-z-index="1" transform="translate(99.6875,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Сильный демпинг</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#ff5833" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-2"
                                   data-z-index="1" transform="translate(254.265625,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Слабый демпинг</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#FF8366" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-3"
                                   data-z-index="1" transform="translate(401.28125,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Соответствует РРЦ</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#b5e19d" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-4"
                                   data-z-index="1" transform="translate(559.125,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Немного выше РРЦ</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#98d576" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-5"
                                   data-z-index="1" transform="translate(719.28125,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Сильно выше РРЦ</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#6AC13C" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                        <text x="102.57605819768735" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 102.57605819768735 294)" y="294"
                              opacity="1">25-04-2019
                        </text>
                        <text x="154.54272486434735" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 154.54272486434735 294)" y="294"
                              opacity="1">26-04-2019
                        </text>
                        <text x="206.50939153101734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 206.50939153101734 294)" y="294"
                              opacity="1">27-04-2019
                        </text>
                        <text x="258.47605819768734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 258.47605819768734 294)" y="294"
                              opacity="1">28-04-2019
                        </text>
                        <text x="310.4427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 310.4427248643473 294)" y="294"
                              opacity="1">29-04-2019
                        </text>
                        <text x="362.4093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 362.4093915310173 294)" y="294"
                              opacity="1">30-04-2019
                        </text>
                        <text x="414.3760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 414.3760581976873 294)" y="294"
                              opacity="1">01-05-2019
                        </text>
                        <text x="466.3427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 466.3427248643473 294)" y="294"
                              opacity="1">02-05-2019
                        </text>
                        <text x="518.3093915310174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 518.3093915310174 294)" y="294"
                              opacity="1">03-05-2019
                        </text>
                        <text x="570.2760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 570.2760581976873 294)" y="294"
                              opacity="1">04-05-2019
                        </text>
                        <text x="622.2427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 622.2427248643473 294)" y="294"
                              opacity="1">05-05-2019
                        </text>
                        <text x="674.2093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 674.2093915310173 294)" y="294"
                              opacity="1">06-05-2019
                        </text>
                        <text x="726.1760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 726.1760581976873 294)" y="294"
                              opacity="1">07-05-2019
                        </text>
                        <text x="778.1427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 778.1427248643473 294)" y="294"
                              opacity="1">08-05-2019
                        </text>
                        <text x="830.1093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 830.1093915310173 294)" y="294"
                              opacity="1">09-05-2019
                        </text>
                        <text x="882.0760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 882.0760581976873 294)" y="294"
                              opacity="1">10-05-2019
                        </text>
                        <text x="934.0427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 934.0427248643473 294)" y="294"
                              opacity="1">11-05-2019
                        </text>
                        <text x="986.0093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 986.0093915310173 294)" y="294"
                              opacity="1">12-05-2019
                        </text>
                        <text x="1037.9760581977173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1037.9760581977173 294)" y="294"
                              opacity="1">13-05-2019
                        </text>
                        <text x="1089.9427248643174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1089.9427248643174 294)" y="294"
                              opacity="1">14-05-2019
                        </text>
                        <text x="1141.9093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1141.9093915310173 294)" y="294"
                              opacity="1">15-05-2019
                        </text>
                        <text x="1193.8760581977174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1193.8760581977174 294)" y="294"
                              opacity="1">16-05-2019
                        </text>
                        <text x="1245.8427248643172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1245.8427248643172 294)" y="294"
                              opacity="1">17-05-2019
                        </text>
                        <text x="1297.8093915310174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1297.8093915310174 294)" y="294"
                              opacity="1">18-05-2019
                        </text>
                        <text x="1349.7760581977172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1349.7760581977172 294)" y="294"
                              opacity="1">19-05-2019
                        </text>
                        <text x="1401.7427248643173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1401.7427248643173 294)" y="294"
                              opacity="1">20-05-2019
                        </text>
                        <text x="1453.7093915310172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1453.7093915310172 294)" y="294"
                              opacity="1">21-05-2019
                        </text>
                        <text x="1505.6760581977173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1505.6760581977173 294)" y="294"
                              opacity="1">22-05-2019
                        </text>
                        <text x="1557.6427248643174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1557.6427248643174 294)" y="294"
                              opacity="1">23-05-2019
                        </text>
                        <text x="1609.6093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1609.6093915310173 294)" y="294"
                              opacity="1">24-05-2019
                        </text>
                    </g>
                    <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="282" opacity="1">0
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="226" opacity="1">200
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="170" opacity="1">400
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="113" opacity="1">600
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="57" opacity="1">800
                        </text>
                    </g>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                       style="pointer-events:none;white-space:nowrap;" data-z-index="8" transform="translate(17,-9999)"
                       opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 162.5 0.5 C 165.5 0.5 165.5 0.5 165.5 3.5 L 165.5 44.5 C 165.5 47.5 165.5 47.5 162.5 47.5 L 88.5 47.5 82.5 53.5 76.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                              transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 162.5 0.5 C 165.5 0.5 165.5 0.5 165.5 3.5 L 165.5 44.5 C 165.5 47.5 165.5 47.5 162.5 47.5 L 88.5 47.5 82.5 53.5 76.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                              transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 162.5 0.5 C 165.5 0.5 165.5 0.5 165.5 3.5 L 165.5 44.5 C 165.5 47.5 165.5 47.5 162.5 47.5 L 88.5 47.5 82.5 53.5 76.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                              transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                              d="M 3.5 0.5 L 162.5 0.5 C 165.5 0.5 165.5 0.5 165.5 3.5 L 165.5 44.5 C 165.5 47.5 165.5 47.5 162.5 47.5 L 88.5 47.5 82.5 53.5 76.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#b5e19d" stroke-width="1"></path>
                        <text x="8" data-z-index="1" style="font-size:12px;color:#333333;cursor:default;fill:#333333;"
                              y="20">
                            <tspan style="font-size: 10px">25-04-2019</tspan>
                            <tspan style="fill:#b5e19d" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Соответствует РРЦ:</tspan>
                            <tspan style="font-weight:bold" dx="0">68</tspan>
                        </text>
                    </g>
                </svg>
            </div>
        </chart>
        </div>
        <div style="display: none;" id="out-of-stock">
            <chart data-highcharts-chart="37">
            <div id="highcharts-e8uyvut-802" dir="ltr" class="highcharts-container "
                 style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root"
                     style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                     xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                    <desc>Created with Highcharts 6.2.0</desc>
                    <defs>
                        <clipPath id="highcharts-e8uyvut-803">
                            <rect x="0" y="0" width="1559" height="225" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                          ry="0"></rect>
                    <rect fill="none" class="highcharts-plot-background" x="74" y="53" width="1559" height="225"></rect>
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
                            <tspan>Товары</tspan>
                        </text>
                        <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 74 53 L 74 278"></path>
                    </g>
                    <g class="highcharts-series-group" data-z-index="3">
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-tracker"
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-803)">
                            <rect x="14" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="65" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="117" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="169" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="221" y="61" width="25" height="0" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="273" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="325" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="377" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="429" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="481" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="533" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="585" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="637" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="689" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="741" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="793" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="845" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="897" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="949" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1001" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1053" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1105" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1157" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1209" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1261" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1313" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1365" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1417" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1469" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1521" y="60" width="25" height="1" fill="#dbdbdb" class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-tracker"
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-803)">
                            <rect x="14" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="65" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="117" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="169" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="221" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="273" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="325" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="377" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="429" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="481" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="533" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="585" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="637" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="689" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="741" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="793" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="845" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="897" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="949" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1001" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1053" y="61" width="25" height="4" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1105" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1157" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1209" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1261" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1313" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1365" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1417" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1469" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                            <rect x="1521" y="61" width="25" height="5" fill="#FF8366" class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-1 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-2 highcharts-column-series highcharts-tracker "
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-803)">
                            <rect x="14" y="66" width="25" height="13" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="65" y="66" width="25" height="13" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="117" y="66" width="25" height="15" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="169" y="66" width="25" height="12" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="221" y="66" width="25" height="13" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="273" y="65" width="25" height="15" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="325" y="65" width="25" height="15" fill="rgb(248,169,94)"
                                  class="highcharts-point "></rect>
                            <rect x="377" y="65" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="429" y="65" width="25" height="13" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="481" y="65" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="533" y="65" width="25" height="26" fill="rgb(248,169,94)"
                                  class="highcharts-point "></rect>
                            <rect x="585" y="65" width="25" height="15" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="637" y="65" width="25" height="13" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="689" y="65" width="25" height="13" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="741" y="65" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="793" y="65" width="25" height="16" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="845" y="65" width="25" height="15" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="897" y="65" width="25" height="15" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="949" y="65" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1001" y="65" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1053" y="65" width="25" height="16" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1105" y="66" width="25" height="15" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1157" y="66" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1209" y="66" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1261" y="66" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1313" y="66" width="25" height="13" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1365" y="66" width="25" height="15" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1417" y="66" width="25" height="13" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1469" y="66" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                            <rect x="1521" y="66" width="25" height="14" fill="#F8A95E" class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-2 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-3 highcharts-column-series highcharts-tracker "
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-803)">
                            <rect x="14" y="79" width="25" height="17" fill="rgb(251,218,53)"
                                  class="highcharts-point "></rect>
                            <rect x="65" y="79" width="25" height="17" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="117" y="81" width="25" height="31" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="169" y="78" width="25" height="32" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="221" y="79" width="25" height="31" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="273" y="80" width="25" height="32" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="325" y="80" width="25" height="31" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="377" y="79" width="25" height="31" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="429" y="78" width="25" height="32" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="481" y="79" width="25" height="30" fill="rgb(251,218,53)"
                                  class="highcharts-point "></rect>
                            <rect x="533" y="91" width="25" height="38" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="585" y="80" width="25" height="32" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="637" y="78" width="25" height="17" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="689" y="78" width="25" height="18" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="741" y="79" width="25" height="35" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="793" y="81" width="25" height="35" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="845" y="80" width="25" height="36" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="897" y="80" width="25" height="35" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="949" y="79" width="25" height="36" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1001" y="79" width="25" height="36" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1053" y="81" width="25" height="27" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1105" y="81" width="25" height="27" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1157" y="80" width="25" height="28" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1209" y="80" width="25" height="18" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1261" y="80" width="25" height="18" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1313" y="79" width="25" height="19" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1365" y="81" width="25" height="18" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1417" y="79" width="25" height="19" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1469" y="80" width="25" height="19" fill="#FBDA35" class="highcharts-point"></rect>
                            <rect x="1521" y="80" width="25" height="18" fill="#FBDA35" class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-3 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-4 highcharts-column-series highcharts-tracker "
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-803)">
                            <rect x="14" y="96" width="25" height="130" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="65" y="96" width="25" height="130" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="117" y="112" width="25" height="114" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="169" y="110" width="25" height="116" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="221" y="110" width="25" height="116" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="273" y="112" width="25" height="114" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="325" y="111" width="25" height="115" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="377" y="110" width="25" height="116" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="429" y="110" width="25" height="116" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="481" y="109" width="25" height="117" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="533" y="129" width="25" height="97" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="585" y="112" width="25" height="114" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="637" y="95" width="25" height="131" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="689" y="96" width="25" height="130" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="741" y="114" width="25" height="112" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="793" y="116" width="25" height="110" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="845" y="116" width="25" height="110" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="897" y="115" width="25" height="111" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="949" y="115" width="25" height="111" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1001" y="115" width="25" height="111" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1053" y="108" width="25" height="118" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1105" y="108" width="25" height="118" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1157" y="108" width="25" height="118" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1209" y="98" width="25" height="128" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1261" y="98" width="25" height="128" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1313" y="98" width="25" height="128" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1365" y="99" width="25" height="127" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1417" y="98" width="25" height="128" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1469" y="99" width="25" height="127" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1521" y="98" width="25" height="128" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-4 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                    </g>
                    <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                          style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Группа out-of-stock</tspan>
                    </text>
                    <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                          style="color:#666666;fill:#666666;" y="52"></text>
                    <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                       transform="translate(74,53)">
                        <text x="26" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="26" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="26" y="54">588</tspan>
                        </text>
                        <text x="78" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="78" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="78" y="54">588</tspan>
                        </text>
                        <text x="130" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="130" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="130" y="54">588</tspan>
                        </text>
                        <text x="182" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="182" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="182" y="54">588</tspan>
                        </text>
                        <text x="234" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="234" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="234" y="54">588</tspan>
                        </text>
                        <text x="286" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="286" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="286" y="53">589</tspan>
                        </text>
                        <text x="338" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="338" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="338" y="53">589</tspan>
                        </text>
                        <text x="390" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="390" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="390" y="53">589</tspan>
                        </text>
                        <text x="442" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="442" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="442" y="53">589</tspan>
                        </text>
                        <text x="494" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="494" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="494" y="53">589</tspan>
                        </text>
                        <text x="546" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="546" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="546" y="53">589</tspan>
                        </text>
                        <text x="598" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="598" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="598" y="53">589</tspan>
                        </text>
                        <text x="650" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="650" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="650" y="53">589</tspan>
                        </text>
                        <text x="702" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="702" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="702" y="53">589</tspan>
                        </text>
                        <text x="754" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="754" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="754" y="53">589</tspan>
                        </text>
                        <text x="805" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="805" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="805" y="53">589</tspan>
                        </text>
                        <text x="857" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="857" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="857" y="53">589</tspan>
                        </text>
                        <text x="909" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="909" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="909" y="53">589</tspan>
                        </text>
                        <text x="961" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="961" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="961" y="53">589</tspan>
                        </text>
                        <text x="1013" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1013" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1013" y="53">589</tspan>
                        </text>
                        <text x="1065" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1065" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1065" y="53">589</tspan>
                        </text>
                        <text x="1117" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1117" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1117" y="53">589</tspan>
                        </text>
                        <text x="1169" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1169" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1169" y="53">589</tspan>
                        </text>
                        <text x="1221" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1221" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1221" y="53">589</tspan>
                        </text>
                        <text x="1273" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1273" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1273" y="53">589</tspan>
                        </text>
                        <text x="1325" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1325" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1325" y="53">589</tspan>
                        </text>
                        <text x="1377" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1377" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1377" y="53">589</tspan>
                        </text>
                        <text x="1429" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1429" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1429" y="53">589</tspan>
                        </text>
                        <text x="1481" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1481" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1481" y="53">589</tspan>
                        </text>
                        <text x="1533" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1533" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1533" y="53">589</tspan>
                        </text>
                    </g>
                    <g class="highcharts-legend" data-z-index="7" transform="translate(324,356)">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="994"
                              height="29" visibility="visible"></rect>
                        <g data-z-index="1">
                            <g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-0"
                                   data-z-index="1" transform="translate(8,3)">
                                    <text x="21"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2" y="15">
                                        <tspan>Не связан</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#dbdbdb" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-1"
                                   data-z-index="1" transform="translate(108.9375,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Нет в наличии у всех</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#FF8366" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-2"
                                   data-z-index="1" transform="translate(280.921875,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>В наличии у менее 50% магазинов</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#F8A95E" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-3"
                                   data-z-index="1" transform="translate(532.703125,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>В наличии у более 50% магазинов</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#FBDA35" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-4"
                                   data-z-index="1" transform="translate(783.140625,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>В наличии во всех магазинах</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#6AC13C" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                        <text x="102.57605819768735" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 102.57605819768735 294)" y="294"
                              opacity="1">25-04-2019
                        </text>
                        <text x="154.54272486434735" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 154.54272486434735 294)" y="294"
                              opacity="1">26-04-2019
                        </text>
                        <text x="206.50939153101734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 206.50939153101734 294)" y="294"
                              opacity="1">27-04-2019
                        </text>
                        <text x="258.47605819768734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 258.47605819768734 294)" y="294"
                              opacity="1">28-04-2019
                        </text>
                        <text x="310.4427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 310.4427248643473 294)" y="294"
                              opacity="1">29-04-2019
                        </text>
                        <text x="362.4093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 362.4093915310173 294)" y="294"
                              opacity="1">30-04-2019
                        </text>
                        <text x="414.3760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 414.3760581976873 294)" y="294"
                              opacity="1">01-05-2019
                        </text>
                        <text x="466.3427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 466.3427248643473 294)" y="294"
                              opacity="1">02-05-2019
                        </text>
                        <text x="518.3093915310174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 518.3093915310174 294)" y="294"
                              opacity="1">03-05-2019
                        </text>
                        <text x="570.2760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 570.2760581976873 294)" y="294"
                              opacity="1">04-05-2019
                        </text>
                        <text x="622.2427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 622.2427248643473 294)" y="294"
                              opacity="1">05-05-2019
                        </text>
                        <text x="674.2093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 674.2093915310173 294)" y="294"
                              opacity="1">06-05-2019
                        </text>
                        <text x="726.1760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 726.1760581976873 294)" y="294"
                              opacity="1">07-05-2019
                        </text>
                        <text x="778.1427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 778.1427248643473 294)" y="294"
                              opacity="1">08-05-2019
                        </text>
                        <text x="830.1093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 830.1093915310173 294)" y="294"
                              opacity="1">09-05-2019
                        </text>
                        <text x="882.0760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 882.0760581976873 294)" y="294"
                              opacity="1">10-05-2019
                        </text>
                        <text x="934.0427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 934.0427248643473 294)" y="294"
                              opacity="1">11-05-2019
                        </text>
                        <text x="986.0093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 986.0093915310173 294)" y="294"
                              opacity="1">12-05-2019
                        </text>
                        <text x="1037.9760581977173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1037.9760581977173 294)" y="294"
                              opacity="1">13-05-2019
                        </text>
                        <text x="1089.9427248643174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1089.9427248643174 294)" y="294"
                              opacity="1">14-05-2019
                        </text>
                        <text x="1141.9093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1141.9093915310173 294)" y="294"
                              opacity="1">15-05-2019
                        </text>
                        <text x="1193.8760581977174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1193.8760581977174 294)" y="294"
                              opacity="1">16-05-2019
                        </text>
                        <text x="1245.8427248643172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1245.8427248643172 294)" y="294"
                              opacity="1">17-05-2019
                        </text>
                        <text x="1297.8093915310174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1297.8093915310174 294)" y="294"
                              opacity="1">18-05-2019
                        </text>
                        <text x="1349.7760581977172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1349.7760581977172 294)" y="294"
                              opacity="1">19-05-2019
                        </text>
                        <text x="1401.7427248643173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1401.7427248643173 294)" y="294"
                              opacity="1">20-05-2019
                        </text>
                        <text x="1453.7093915310172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1453.7093915310172 294)" y="294"
                              opacity="1">21-05-2019
                        </text>
                        <text x="1505.6760581977173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1505.6760581977173 294)" y="294"
                              opacity="1">22-05-2019
                        </text>
                        <text x="1557.6427248643174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1557.6427248643174 294)" y="294"
                              opacity="1">23-05-2019
                        </text>
                        <text x="1609.6093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1609.6093915310173 294)" y="294"
                              opacity="1">24-05-2019
                        </text>
                    </g>
                    <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="282" opacity="1">0
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="226" opacity="1">200
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="170" opacity="1">400
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="113" opacity="1">600
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="57" opacity="1">800
                        </text>
                    </g>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                       style="pointer-events:none;white-space:nowrap;" data-z-index="8" transform="translate(1,-9999)"
                       opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 253.5 0.5 C 256.5 0.5 256.5 0.5 256.5 3.5 L 256.5 44.5 C 256.5 47.5 256.5 47.5 253.5 47.5 L 104.5 47.5 98.5 53.5 92.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                              transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 253.5 0.5 C 256.5 0.5 256.5 0.5 256.5 3.5 L 256.5 44.5 C 256.5 47.5 256.5 47.5 253.5 47.5 L 104.5 47.5 98.5 53.5 92.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                              transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 253.5 0.5 C 256.5 0.5 256.5 0.5 256.5 3.5 L 256.5 44.5 C 256.5 47.5 256.5 47.5 253.5 47.5 L 104.5 47.5 98.5 53.5 92.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                              transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                              d="M 3.5 0.5 L 253.5 0.5 C 256.5 0.5 256.5 0.5 256.5 3.5 L 256.5 44.5 C 256.5 47.5 256.5 47.5 253.5 47.5 L 104.5 47.5 98.5 53.5 92.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#FBDA35" stroke-width="1"></path>
                        <text x="8" data-z-index="1" style="font-size:12px;color:#333333;cursor:default;fill:#333333;"
                              y="20">
                            <tspan style="font-size: 10px">25-04-2019</tspan>
                            <tspan style="fill:#FBDA35" x="8" dy="15">●</tspan>
                            <tspan dx="0"> В наличии у более 50% магазинов:</tspan>
                            <tspan style="font-weight:bold" dx="0">59</tspan>
                        </text>
                    </g>
                </svg>
            </div>
        </chart>
        </div>
        <div style="display: none;" id="damping">
            <chart data-highcharts-chart="38">
            <div id="highcharts-e8uyvut-959" dir="ltr" class="highcharts-container "
                 style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root"
                     style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                     xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                    <desc>Created with Highcharts 6.2.0</desc>
                    <defs>
                        <clipPath id="highcharts-e8uyvut-960">
                            <rect x="0" y="0" width="1559" height="225" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                          ry="0"></rect>
                    <rect fill="none" class="highcharts-plot-background" x="74" y="53" width="1559" height="225"></rect>
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
                            <tspan>Товары</tspan>
                        </text>
                        <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 74 53 L 74 278"></path>
                    </g>
                    <g class="highcharts-series-group" data-z-index="3">
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-tracker "
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-960)">
                            <rect x="14" y="61" width="25" height="112" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="65" y="61" width="25" height="112" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="117" y="61" width="25" height="117" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="169" y="61" width="25" height="116" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="221" y="61" width="25" height="115" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="273" y="60" width="25" height="110" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="325" y="60" width="25" height="113" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="377" y="60" width="25" height="118" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="429" y="60" width="25" height="114" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="481" y="60" width="25" height="114" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="533" y="60" width="25" height="121" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="585" y="60" width="25" height="117" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="637" y="60" width="25" height="123" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="689" y="60" width="25" height="117" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="741" y="60" width="25" height="115" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="793" y="60" width="25" height="115" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="845" y="60" width="25" height="115" fill="rgb(255,88,51)"
                                  class="highcharts-point "></rect>
                            <rect x="897" y="60" width="25" height="115" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="949" y="60" width="25" height="117" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1001" y="60" width="25" height="118" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1053" y="60" width="25" height="116" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1105" y="60" width="25" height="116" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1157" y="60" width="25" height="115" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1209" y="60" width="25" height="109" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1261" y="60" width="25" height="115" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1313" y="60" width="25" height="109" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1365" y="60" width="25" height="114" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1417" y="60" width="25" height="117" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1469" y="60" width="25" height="123" fill="#ff5833"
                                  class="highcharts-point"></rect>
                            <rect x="1521" y="60" width="25" height="123" fill="#ff5833"
                                  class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-tracker "
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-960)">
                            <rect x="14" y="173" width="25" height="53" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="65" y="173" width="25" height="53" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="117" y="178" width="25" height="48" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="169" y="177" width="25" height="49" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="221" y="176" width="25" height="50" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="273" y="170" width="25" height="56" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="325" y="173" width="25" height="53" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="377" y="178" width="25" height="48" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="429" y="174" width="25" height="52" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="481" y="174" width="25" height="52" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="533" y="181" width="25" height="45" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="585" y="177" width="25" height="49" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="637" y="183" width="25" height="43" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="689" y="177" width="25" height="49" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="741" y="175" width="25" height="51" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="793" y="175" width="25" height="51" fill="rgb(106,193,60)"
                                  class="highcharts-point "></rect>
                            <rect x="845" y="175" width="25" height="51" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="897" y="175" width="25" height="51" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="949" y="177" width="25" height="49" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1001" y="178" width="25" height="48" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1053" y="176" width="25" height="50" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1105" y="176" width="25" height="50" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1157" y="175" width="25" height="51" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1209" y="169" width="25" height="57" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1261" y="175" width="25" height="51" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1313" y="169" width="25" height="57" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1365" y="174" width="25" height="52" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1417" y="177" width="25" height="49" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1469" y="183" width="25" height="43" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                            <rect x="1521" y="183" width="25" height="43" fill="#6AC13C"
                                  class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-1 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                    </g>
                    <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                          style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Демпинг</tspan>
                    </text>
                    <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                          style="color:#666666;fill:#666666;" y="52"></text>
                    <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                       transform="translate(74,53)">
                        <text x="26" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="26" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="26" y="54">588</tspan>
                        </text>
                        <text x="78" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="78" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="78" y="54">588</tspan>
                        </text>
                        <text x="130" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="130" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="130" y="54">588</tspan>
                        </text>
                        <text x="182" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="182" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="182" y="54">588</tspan>
                        </text>
                        <text x="234" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="234" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="234" y="54">588</tspan>
                        </text>
                        <text x="286" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="286" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="286" y="53">589</tspan>
                        </text>
                        <text x="338" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="338" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="338" y="53">589</tspan>
                        </text>
                        <text x="390" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="390" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="390" y="53">589</tspan>
                        </text>
                        <text x="442" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="442" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="442" y="53">589</tspan>
                        </text>
                        <text x="494" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="494" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="494" y="53">589</tspan>
                        </text>
                        <text x="546" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="546" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="546" y="53">589</tspan>
                        </text>
                        <text x="598" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="598" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="598" y="53">589</tspan>
                        </text>
                        <text x="650" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="650" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="650" y="53">589</tspan>
                        </text>
                        <text x="702" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="702" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="702" y="53">589</tspan>
                        </text>
                        <text x="754" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="754" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="754" y="53">589</tspan>
                        </text>
                        <text x="805" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="805" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="805" y="53">589</tspan>
                        </text>
                        <text x="857" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="857" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="857" y="53">589</tspan>
                        </text>
                        <text x="909" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="909" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="909" y="53">589</tspan>
                        </text>
                        <text x="961" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="961" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="961" y="53">589</tspan>
                        </text>
                        <text x="1013" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1013" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1013" y="53">589</tspan>
                        </text>
                        <text x="1065" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1065" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1065" y="53">589</tspan>
                        </text>
                        <text x="1117" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1117" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1117" y="53">589</tspan>
                        </text>
                        <text x="1169" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1169" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1169" y="53">589</tspan>
                        </text>
                        <text x="1221" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1221" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1221" y="53">589</tspan>
                        </text>
                        <text x="1273" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1273" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1273" y="53">589</tspan>
                        </text>
                        <text x="1325" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1325" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1325" y="53">589</tspan>
                        </text>
                        <text x="1377" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1377" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1377" y="53">589</tspan>
                        </text>
                        <text x="1429" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1429" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1429" y="53">589</tspan>
                        </text>
                        <text x="1481" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1481" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1481" y="53">589</tspan>
                        </text>
                        <text x="1533" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1533" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1533" y="53">589</tspan>
                        </text>
                    </g>
                    <g class="highcharts-legend" data-z-index="7" transform="translate(710,356)">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="222"
                              height="29" visibility="visible"></rect>
                        <g data-z-index="1">
                            <g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-0"
                                   data-z-index="1" transform="translate(8,3)">
                                    <text x="21"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2" y="15">
                                        <tspan>Демпинг</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#ff5833" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-1"
                                   data-z-index="1" transform="translate(105.53125,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Нет демпинга</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#6AC13C" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                        <text x="102.57605819768735" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 102.57605819768735 294)" y="294"
                              opacity="1">25-04-2019
                        </text>
                        <text x="154.54272486434735" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 154.54272486434735 294)" y="294"
                              opacity="1">26-04-2019
                        </text>
                        <text x="206.50939153101734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 206.50939153101734 294)" y="294"
                              opacity="1">27-04-2019
                        </text>
                        <text x="258.47605819768734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 258.47605819768734 294)" y="294"
                              opacity="1">28-04-2019
                        </text>
                        <text x="310.4427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 310.4427248643473 294)" y="294"
                              opacity="1">29-04-2019
                        </text>
                        <text x="362.4093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 362.4093915310173 294)" y="294"
                              opacity="1">30-04-2019
                        </text>
                        <text x="414.3760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 414.3760581976873 294)" y="294"
                              opacity="1">01-05-2019
                        </text>
                        <text x="466.3427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 466.3427248643473 294)" y="294"
                              opacity="1">02-05-2019
                        </text>
                        <text x="518.3093915310174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 518.3093915310174 294)" y="294"
                              opacity="1">03-05-2019
                        </text>
                        <text x="570.2760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 570.2760581976873 294)" y="294"
                              opacity="1">04-05-2019
                        </text>
                        <text x="622.2427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 622.2427248643473 294)" y="294"
                              opacity="1">05-05-2019
                        </text>
                        <text x="674.2093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 674.2093915310173 294)" y="294"
                              opacity="1">06-05-2019
                        </text>
                        <text x="726.1760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 726.1760581976873 294)" y="294"
                              opacity="1">07-05-2019
                        </text>
                        <text x="778.1427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 778.1427248643473 294)" y="294"
                              opacity="1">08-05-2019
                        </text>
                        <text x="830.1093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 830.1093915310173 294)" y="294"
                              opacity="1">09-05-2019
                        </text>
                        <text x="882.0760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 882.0760581976873 294)" y="294"
                              opacity="1">10-05-2019
                        </text>
                        <text x="934.0427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 934.0427248643473 294)" y="294"
                              opacity="1">11-05-2019
                        </text>
                        <text x="986.0093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 986.0093915310173 294)" y="294"
                              opacity="1">12-05-2019
                        </text>
                        <text x="1037.9760581977173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1037.9760581977173 294)" y="294"
                              opacity="1">13-05-2019
                        </text>
                        <text x="1089.9427248643174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1089.9427248643174 294)" y="294"
                              opacity="1">14-05-2019
                        </text>
                        <text x="1141.9093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1141.9093915310173 294)" y="294"
                              opacity="1">15-05-2019
                        </text>
                        <text x="1193.8760581977174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1193.8760581977174 294)" y="294"
                              opacity="1">16-05-2019
                        </text>
                        <text x="1245.8427248643172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1245.8427248643172 294)" y="294"
                              opacity="1">17-05-2019
                        </text>
                        <text x="1297.8093915310174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1297.8093915310174 294)" y="294"
                              opacity="1">18-05-2019
                        </text>
                        <text x="1349.7760581977172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1349.7760581977172 294)" y="294"
                              opacity="1">19-05-2019
                        </text>
                        <text x="1401.7427248643173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1401.7427248643173 294)" y="294"
                              opacity="1">20-05-2019
                        </text>
                        <text x="1453.7093915310172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1453.7093915310172 294)" y="294"
                              opacity="1">21-05-2019
                        </text>
                        <text x="1505.6760581977173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1505.6760581977173 294)" y="294"
                              opacity="1">22-05-2019
                        </text>
                        <text x="1557.6427248643174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1557.6427248643174 294)" y="294"
                              opacity="1">23-05-2019
                        </text>
                        <text x="1609.6093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1609.6093915310173 294)" y="294"
                              opacity="1">24-05-2019
                        </text>
                    </g>
                    <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="282" opacity="1">0
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="226" opacity="1">200
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="170" opacity="1">400
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="113" opacity="1">600
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="57" opacity="1">800
                        </text>
                    </g>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                       style="pointer-events:none;white-space:nowrap;" data-z-index="8" transform="translate(183,-9999)"
                       opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 142.5 0.5 C 145.5 0.5 145.5 0.5 145.5 3.5 L 145.5 44.5 C 145.5 47.5 145.5 47.5 142.5 47.5 L 78.5 47.5 72.5 53.5 66.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                              transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 142.5 0.5 C 145.5 0.5 145.5 0.5 145.5 3.5 L 145.5 44.5 C 145.5 47.5 145.5 47.5 142.5 47.5 L 78.5 47.5 72.5 53.5 66.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                              transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 142.5 0.5 C 145.5 0.5 145.5 0.5 145.5 3.5 L 145.5 44.5 C 145.5 47.5 145.5 47.5 142.5 47.5 L 78.5 47.5 72.5 53.5 66.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                              transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                              d="M 3.5 0.5 L 142.5 0.5 C 145.5 0.5 145.5 0.5 145.5 3.5 L 145.5 44.5 C 145.5 47.5 145.5 47.5 142.5 47.5 L 78.5 47.5 72.5 53.5 66.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#6AC13C" stroke-width="1"></path>
                        <text x="8" data-z-index="1" style="font-size:12px;color:#333333;cursor:default;fill:#333333;"
                              y="20">
                            <tspan style="font-size: 10px">28-04-2019</tspan>
                            <tspan style="fill:#6AC13C" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Нет демпинга:</tspan>
                            <tspan style="font-weight:bold" dx="0">174</tspan>
                        </text>
                    </g>
                </svg>
                <div class="highcharts-contextmenu"
                     style="position: absolute; z-index: 1000; padding: 24px; pointer-events: auto; display: none; right: -14px; top: 8px;">
                    <div class="highcharts-menu"
                         style="box-shadow: rgb(136, 136, 136) 3px 3px 10px; border: 1px solid rgb(153, 153, 153); background: rgb(255, 255, 255); padding: 5px 0px;">
                        <div class="highcharts-menu-item"
                             style="cursor: pointer; padding: 0.5em 1em; background: none; color: rgb(51, 51, 51); font-size: 11px; transition: background 250ms ease 0s, color 250ms ease 0s;">
                            Print chart
                        </div>
                        <hr>
                        <div class="highcharts-menu-item"
                             style="cursor: pointer; padding: 0.5em 1em; background: none; color: rgb(51, 51, 51); font-size: 11px; transition: background 250ms ease 0s, color 250ms ease 0s;">
                            Download PNG image
                        </div>
                        <div class="highcharts-menu-item"
                             style="cursor: pointer; padding: 0.5em 1em; background: none; color: rgb(51, 51, 51); font-size: 11px; transition: background 250ms ease 0s, color 250ms ease 0s;">
                            Download JPEG image
                        </div>
                        <div class="highcharts-menu-item"
                             style="cursor: pointer; padding: 0.5em 1em; background: none; color: rgb(51, 51, 51); font-size: 11px; transition: background 250ms ease 0s, color 250ms ease 0s;">
                            Download PDF document
                        </div>
                        <div class="highcharts-menu-item"
                             style="cursor: pointer; padding: 0.5em 1em; background: none; color: rgb(51, 51, 51); font-size: 11px; transition: background 250ms ease 0s, color 250ms ease 0s;">
                            Download SVG vector image
                        </div>
                    </div>
                </div>
            </div>
        </chart>
        </div>
        <div style="display: none;" id="damping-chng">
            <chart data-highcharts-chart="39">
            <div id="highcharts-e8uyvut-1023" dir="ltr" class="highcharts-container "
                 style="position: relative; overflow: hidden; width: 1643px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <svg version="1.1" class="highcharts-root"
                     style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                     xmlns="http://www.w3.org/2000/svg" width="1643" height="400" viewBox="0 0 1643 400">
                    <desc>Created with Highcharts 6.2.0</desc>
                    <defs>
                        <clipPath id="highcharts-e8uyvut-1024">
                            <rect x="0" y="0" width="1559" height="225" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1643" height="400" rx="0"
                          ry="0"></rect>
                    <rect fill="none" class="highcharts-plot-background" x="74" y="53" width="1559" height="225"></rect>
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
                            <tspan>Товары</tspan>
                        </text>
                        <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 74 53 L 74 278"></path>
                    </g>
                    <g class="highcharts-series-group" data-z-index="3">
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-tracker "
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-1024)">
                            <rect x="14" y="61" width="25" height="142" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="65" y="61" width="25" height="161" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="117" y="61" width="25" height="155" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="169" y="61" width="25" height="160" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="221" y="61" width="25" height="163" fill="rgb(219,219,219)"
                                  class="highcharts-point "></rect>
                            <rect x="273" y="60" width="25" height="158" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="325" y="60" width="25" height="159" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="377" y="60" width="25" height="161" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="429" y="60" width="25" height="157" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="481" y="60" width="25" height="163" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="533" y="60" width="25" height="159" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="585" y="60" width="25" height="160" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="637" y="60" width="25" height="156" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="689" y="60" width="25" height="159" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="741" y="60" width="25" height="164" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="793" y="60" width="25" height="166" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="845" y="60" width="25" height="166" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="897" y="60" width="25" height="165" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="949" y="60" width="25" height="163" fill="#dbdbdb" class="highcharts-point"></rect>
                            <rect x="1001" y="60" width="25" height="156" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1053" y="60" width="25" height="162" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1105" y="60" width="25" height="165" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1157" y="60" width="25" height="164" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1209" y="60" width="25" height="159" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1261" y="60" width="25" height="159" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1313" y="60" width="25" height="160" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1365" y="60" width="25" height="160" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1417" y="60" width="25" height="160" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1469" y="60" width="25" height="158" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                            <rect x="1521" y="60" width="25" height="165" fill="#dbdbdb"
                                  class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-tracker"
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-1024)">
                            <rect x="14" y="203" width="25" height="20" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="65" y="222" width="25" height="1" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="117" y="216" width="25" height="8" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="169" y="221" width="25" height="2" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="221" y="224" width="25" height="0" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="273" y="218" width="25" height="2" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="325" y="219" width="25" height="5" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="377" y="221" width="25" height="5" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="429" y="217" width="25" height="3" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="481" y="223" width="25" height="1" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="533" y="219" width="25" height="7" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="585" y="220" width="25" height="1" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="637" y="216" width="25" height="8" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="689" y="219" width="25" height="1" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="741" y="224" width="25" height="0" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="793" y="226" width="25" height="0" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="845" y="226" width="25" height="0" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="897" y="225" width="25" height="1" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="949" y="223" width="25" height="3" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1001" y="216" width="25" height="6" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1053" y="222" width="25" height="1" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1105" y="225" width="25" height="0" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1157" y="224" width="25" height="1" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1209" y="219" width="25" height="0" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1261" y="219" width="25" height="6" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1313" y="220" width="25" height="0" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1365" y="220" width="25" height="6" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1417" y="220" width="25" height="4" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1469" y="218" width="25" height="7" fill="#ff5833" class="highcharts-point"></rect>
                            <rect x="1521" y="225" width="25" height="0" fill="#ff5833" class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-1 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                        <g data-z-index="0.1"
                           class="highcharts-series highcharts-series-2 highcharts-column-series highcharts-tracker"
                           transform="translate(74,53) scale(1 1)"
                           clip-path="url(https://app.priceva.com/ai/client/g/dashboard#highcharts-e8uyvut-1024)">
                            <rect x="14" y="223" width="25" height="3" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="65" y="223" width="25" height="3" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="117" y="224" width="25" height="2" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="169" y="223" width="25" height="3" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="221" y="224" width="25" height="2" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="273" y="220" width="25" height="6" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="325" y="224" width="25" height="2" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="377" y="226" width="25" height="0" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="429" y="220" width="25" height="6" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="481" y="224" width="25" height="2" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="533" y="226" width="25" height="0" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="585" y="221" width="25" height="5" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="637" y="224" width="25" height="2" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="689" y="220" width="25" height="6" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="741" y="224" width="25" height="2" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="793" y="226" width="25" height="0" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="845" y="226" width="25" height="0" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="897" y="226" width="25" height="0" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="949" y="226" width="25" height="0" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1001" y="222" width="25" height="4" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1053" y="223" width="25" height="3" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1105" y="225" width="25" height="1" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1157" y="225" width="25" height="1" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1209" y="219" width="25" height="7" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1261" y="225" width="25" height="1" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1313" y="220" width="25" height="6" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1365" y="226" width="25" height="0" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1417" y="224" width="25" height="2" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1469" y="225" width="25" height="1" fill="#6AC13C" class="highcharts-point"></rect>
                            <rect x="1521" y="225" width="25" height="1" fill="#6AC13C" class="highcharts-point"></rect>
                        </g>
                        <g data-z-index="0.1" class="highcharts-markers highcharts-series-2 highcharts-column-series "
                           transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                    </g>
                    <text x="822" text-anchor="middle" class="highcharts-title" data-z-index="4"
                          style="color:#333333;font-size:18px;fill:#333333;" y="24">
                        <tspan>Изменения в демпинге</tspan>
                    </text>
                    <text x="822" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                          style="color:#666666;fill:#666666;" y="52"></text>
                    <g class="highcharts-stack-labels" visibility="visible" data-z-index="6"
                       transform="translate(74,53)">
                        <text x="26" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="26" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="26" y="54">588</tspan>
                        </text>
                        <text x="78" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="78" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="78" y="54">588</tspan>
                        </text>
                        <text x="130" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="130" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="130" y="54">588</tspan>
                        </text>
                        <text x="182" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="182" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="182" y="54">588</tspan>
                        </text>
                        <text x="234" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="54">
                            <tspan x="234" y="54" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">588
                            </tspan>
                            <tspan x="234" y="54">588</tspan>
                        </text>
                        <text x="286" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="286" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="286" y="53">589</tspan>
                        </text>
                        <text x="338" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="338" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="338" y="53">589</tspan>
                        </text>
                        <text x="390" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="390" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="390" y="53">589</tspan>
                        </text>
                        <text x="442" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="442" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="442" y="53">589</tspan>
                        </text>
                        <text x="494" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="494" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="494" y="53">589</tspan>
                        </text>
                        <text x="546" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="546" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="546" y="53">589</tspan>
                        </text>
                        <text x="598" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="598" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="598" y="53">589</tspan>
                        </text>
                        <text x="650" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="650" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="650" y="53">589</tspan>
                        </text>
                        <text x="702" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="702" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="702" y="53">589</tspan>
                        </text>
                        <text x="754" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="754" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="754" y="53">589</tspan>
                        </text>
                        <text x="805" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="805" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="805" y="53">589</tspan>
                        </text>
                        <text x="857" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="857" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="857" y="53">589</tspan>
                        </text>
                        <text x="909" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="909" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="909" y="53">589</tspan>
                        </text>
                        <text x="961" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="961" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="961" y="53">589</tspan>
                        </text>
                        <text x="1013" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1013" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1013" y="53">589</tspan>
                        </text>
                        <text x="1065" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1065" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1065" y="53">589</tspan>
                        </text>
                        <text x="1117" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1117" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1117" y="53">589</tspan>
                        </text>
                        <text x="1169" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1169" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1169" y="53">589</tspan>
                        </text>
                        <text x="1221" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1221" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1221" y="53">589</tspan>
                        </text>
                        <text x="1273" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1273" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1273" y="53">589</tspan>
                        </text>
                        <text x="1325" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1325" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1325" y="53">589</tspan>
                        </text>
                        <text x="1377" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1377" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1377" y="53">589</tspan>
                        </text>
                        <text x="1429" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1429" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1429" y="53">589</tspan>
                        </text>
                        <text x="1481" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1481" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1481" y="53">589</tspan>
                        </text>
                        <text x="1533" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"
                              text-anchor="middle" transform="translate(0,0)" y="53">
                            <tspan x="1533" y="53" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF"
                                   stroke-width="2px" stroke-linejoin="round">589
                            </tspan>
                            <tspan x="1533" y="53">589</tspan>
                        </text>
                    </g>
                    <g class="highcharts-legend" data-z-index="7" transform="translate(594,356)">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="454"
                              height="29" visibility="visible"></rect>
                        <g data-z-index="1">
                            <g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-0"
                                   data-z-index="1" transform="translate(8,3)">
                                    <text x="21"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2" y="15">
                                        <tspan>Без изменений</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#dbdbdb" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-1"
                                   data-z-index="1" transform="translate(140.78125,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Демпинг начался</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#ff5833" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                                <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-2"
                                   data-z-index="1" transform="translate(288.96875,3)">
                                    <text x="21" y="15"
                                          style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                          text-anchor="start" data-z-index="2">
                                        <tspan>Демпинг прекратился</tspan>
                                    </text>
                                    <rect x="2" y="4" width="12" height="12" fill="#6AC13C" rx="6" ry="6"
                                          class="highcharts-point" data-z-index="3"></rect>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g class="highcharts-axis-labels highcharts-xaxis-labels " data-z-index="7">
                        <text x="102.57605819768735" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 102.57605819768735 294)" y="294"
                              opacity="1">25-04-2019
                        </text>
                        <text x="154.54272486434735" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 154.54272486434735 294)" y="294"
                              opacity="1">26-04-2019
                        </text>
                        <text x="206.50939153101734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 206.50939153101734 294)" y="294"
                              opacity="1">27-04-2019
                        </text>
                        <text x="258.47605819768734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 258.47605819768734 294)" y="294"
                              opacity="1">28-04-2019
                        </text>
                        <text x="310.4427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 310.4427248643473 294)" y="294"
                              opacity="1">29-04-2019
                        </text>
                        <text x="362.4093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 362.4093915310173 294)" y="294"
                              opacity="1">30-04-2019
                        </text>
                        <text x="414.3760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 414.3760581976873 294)" y="294"
                              opacity="1">01-05-2019
                        </text>
                        <text x="466.3427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 466.3427248643473 294)" y="294"
                              opacity="1">02-05-2019
                        </text>
                        <text x="518.3093915310174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 518.3093915310174 294)" y="294"
                              opacity="1">03-05-2019
                        </text>
                        <text x="570.2760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 570.2760581976873 294)" y="294"
                              opacity="1">04-05-2019
                        </text>
                        <text x="622.2427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 622.2427248643473 294)" y="294"
                              opacity="1">05-05-2019
                        </text>
                        <text x="674.2093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 674.2093915310173 294)" y="294"
                              opacity="1">06-05-2019
                        </text>
                        <text x="726.1760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 726.1760581976873 294)" y="294"
                              opacity="1">07-05-2019
                        </text>
                        <text x="778.1427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 778.1427248643473 294)" y="294"
                              opacity="1">08-05-2019
                        </text>
                        <text x="830.1093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 830.1093915310173 294)" y="294"
                              opacity="1">09-05-2019
                        </text>
                        <text x="882.0760581976873" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 882.0760581976873 294)" y="294"
                              opacity="1">10-05-2019
                        </text>
                        <text x="934.0427248643473" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 934.0427248643473 294)" y="294"
                              opacity="1">11-05-2019
                        </text>
                        <text x="986.0093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 986.0093915310173 294)" y="294"
                              opacity="1">12-05-2019
                        </text>
                        <text x="1037.9760581977173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1037.9760581977173 294)" y="294"
                              opacity="1">13-05-2019
                        </text>
                        <text x="1089.9427248643174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1089.9427248643174 294)" y="294"
                              opacity="1">14-05-2019
                        </text>
                        <text x="1141.9093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1141.9093915310173 294)" y="294"
                              opacity="1">15-05-2019
                        </text>
                        <text x="1193.8760581977174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1193.8760581977174 294)" y="294"
                              opacity="1">16-05-2019
                        </text>
                        <text x="1245.8427248643172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1245.8427248643172 294)" y="294"
                              opacity="1">17-05-2019
                        </text>
                        <text x="1297.8093915310174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1297.8093915310174 294)" y="294"
                              opacity="1">18-05-2019
                        </text>
                        <text x="1349.7760581977172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1349.7760581977172 294)" y="294"
                              opacity="1">19-05-2019
                        </text>
                        <text x="1401.7427248643173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1401.7427248643173 294)" y="294"
                              opacity="1">20-05-2019
                        </text>
                        <text x="1453.7093915310172" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1453.7093915310172 294)" y="294"
                              opacity="1">21-05-2019
                        </text>
                        <text x="1505.6760581977173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1505.6760581977173 294)" y="294"
                              opacity="1">22-05-2019
                        </text>
                        <text x="1557.6427248643174" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1557.6427248643174 294)" y="294"
                              opacity="1">23-05-2019
                        </text>
                        <text x="1609.6093915310173" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                              text-anchor="end" transform="translate(0,0) rotate(-45 1609.6093915310173 294)" y="294"
                              opacity="1">24-05-2019
                        </text>
                    </g>
                    <g class="highcharts-axis-labels highcharts-yaxis-labels " data-z-index="7">
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="282" opacity="1">0
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="226" opacity="1">200
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="170" opacity="1">400
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="113" opacity="1">600
                        </text>
                        <text x="59" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end"
                              transform="translate(0,0)" y="57" opacity="1">800
                        </text>
                    </g>
                    <g class="highcharts-label highcharts-tooltip highcharts-color-undefined"
                       style="pointer-events:none;white-space:nowrap;" data-z-index="8" transform="translate(233,-9999)"
                       opacity="0" visibility="visible">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 146.5 0.5 C 149.5 0.5 149.5 0.5 149.5 3.5 L 149.5 44.5 C 149.5 47.5 149.5 47.5 146.5 47.5 L 80.5 47.5 74.5 53.5 68.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
                              transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 146.5 0.5 C 149.5 0.5 149.5 0.5 149.5 3.5 L 149.5 44.5 C 149.5 47.5 149.5 47.5 146.5 47.5 L 80.5 47.5 74.5 53.5 68.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
                              transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
                              d="M 3.5 0.5 L 146.5 0.5 C 149.5 0.5 149.5 0.5 149.5 3.5 L 149.5 44.5 C 149.5 47.5 149.5 47.5 146.5 47.5 L 80.5 47.5 74.5 53.5 68.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#000000" stroke-opacity="0.15" stroke-width="1"
                              transform="translate(1, 1)"></path>
                        <path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
                              d="M 3.5 0.5 L 146.5 0.5 C 149.5 0.5 149.5 0.5 149.5 3.5 L 149.5 44.5 C 149.5 47.5 149.5 47.5 146.5 47.5 L 80.5 47.5 74.5 53.5 68.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                              stroke="#dbdbdb" stroke-width="1"></path>
                        <text x="8" data-z-index="1" style="font-size:12px;color:#333333;cursor:default;fill:#333333;"
                              y="20">
                            <tspan style="font-size: 10px">29-04-2019</tspan>
                            <tspan style="fill:#dbdbdb" x="8" dy="15">●</tspan>
                            <tspan dx="0"> Без изменений:</tspan>
                            <tspan style="font-weight:bold" dx="0">581</tspan>
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