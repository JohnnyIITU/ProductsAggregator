@extends ('layouts/app')

@section('content')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.js"
            xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <style>
        .test input {
            margin-left: 10px;
        }

        .test span {
            margin-left: 10px;
        }
    </style>
    {{--Скрипты для прорисвки данных--}}
    <script type="text/javascript">
        //google charts init
        google.charts.load('current', {'packages': ['table']});
        google.charts.load('current', {'packages':['corechart']});
        function drawTable(array) {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Магазин');
            data.addColumn('string', 'Продукт');
            data.addColumn('number', 'Цена');
            for (var i in array) {
                data.addRow([array[i]['magazine'], array[i]['product'], {
                    v: array[i]['price'],
                    f: '₸' + array[i]['price']
                }]);
            }
            var table = new google.visualization.Table(document.getElementById('table-div'));
            table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
        }
        function drawChart(array) {
            //TODO Получить данные по Ajax запросу и передать данные на функция.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Дата');
            data.addColumn('number', 'Цена');
            for (var i in array){
                data.addRow([array[i]['date'], array[i]['price']]);
            }

            //TODO написать options связанный с версткой
            var options = {
                width: '100%',
                height: '100%',
                tooltip:{
                    isHtml : true,
                }
            };
            //TODO Добавить div. и проставить его ID для прорисовки
            var chart = new google.visualization.LineChart(document.getElementById('dynamicChart'));

            chart.draw(data, options);
        }
    </script>
    {{--Скрипты для получения данных--}}
    <script>
        //Курсы валют с НБРК
        window.onload = getCurrency();
        function getCurrency() {
            $.ajax({
                cache: false,
                type: 'GET',
                dataType: 'json',
                url: '/getCurrency',
                data: {
                    _token: '{{csrf_token()}}',
                },
                success: function (data) {
                    $('#RUR').text(data.RUR);
                    $('#EUR').text(data.EUR);
                    $('#USD').text(data.USD);
                },
                error: function (data) {
                    alert(data);
                }
            });
        }
        //Заполнение полей для поучения и распарсинга данных
        function getAllData() {
            var dateBeg = $('#dateBeg').val();
            var dateEnd = $('#dateEnd').val();
            var company = $('#CompanyName').val();
            var product = $('#ProductName').val();
            $.ajax({
                cache: false,
                type: 'POST',
                datatype: 'json',
                url: 'dashboard/getData',
                data: {
                    begin: dateBeg,
                    end: dateEnd,
                    companyId: company,
                    productId: product,
                    _token: '{{csrf_token()}}',
                },
                success: function (result) {
                    response = JSON.parse(result);
                    drawTable(response['table']);
                    drawChart(response['chart']);
                }
            });
        }
    </script>
    {!! $map['js'] !!}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <div id="table-div"></div>
                    <div class="chart">
                        <div id="dynamicChart"></div>
                    </div>
                    <div class="map">
                        {!! $map['html'] !!}
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="card" style="
    background-color: #eaeaea;
    border-radius: 1em;
"><span style="
    margin: 0 10px 10px;
">Отчет с :</span> <div class="row col-md-offset-1 col-md-5"><input type="date" id="dateBeg" value="2019-01-01" style="

    margin: 0 10px 10px;
"></div> <span style="
    margin: 0 10px 10px;
">Отчет по :</span> <div class="row col-md-offset-1 col-md-5"><input type="date" id="dateEnd" value="2019-01-01" style="
    margin: 0 10px 10px;
"></div> <div><select id="CompanyName" style="
    margin: 0 10px 10px;
"><option value="0">Не выбрано</option> <option value="1">comp1</option> <option value="2">comp2</option></select></div> <div><select id="ProductName" style="
    margin: 0px 10px 10px;
"><option value="0">Не выбрано</option> <option value="1">first</option> <option value="2">second</option></select></div> <input type="button" onclick="getAllData()" value="Поиск" style="
    margin: 0px 10px 10px;
"></div>
                    <div class="card" style="background-color: rgb(234, 234, 234); border-radius: 1em;"><div style="
    margin: 0px 10px 0 10px;
">RUB - <span id="RUR">5.88</span></div> <br> <div style="
    margin: 0px 10px 0 10px;
">EUR - <span id="EUR">424.47</span></div> <br> <div style="
    margin: 0px 10px 0 10px;
">USD - <span id="USD">379.36</span></div> <br></div>
                </div>
            </div>
        </div>
    </div>


@endsection