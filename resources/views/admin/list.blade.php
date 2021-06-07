@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <script>
        function delObj(id){
            if(confirm("Вы действительно хотите удалить мероприятие?")){
                window.open('/events/delete?id='+id, '_self');
            }
        }
    </script>

    <div class="container">
        @if(isset($type) && $type=='price')
            <a href="/admin/add/0"><h3><u>Добавить позицию</u></h3></a>
            <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Компания</th>
                <th>Продукт</th>
                <th>Цена</th>
                <th>Дата</th>
                <th>Операции</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $item) {
                echo '<tr>';
                echo '<td>'.$item['id'].'</td>';
                echo '<td>'.$item['company'].'</td>';
                echo '<td>'.$item['product'].'</td>';
                echo '<td>'.$item['price'].'</td>';
                echo '<td>'.$item['date'].'</td>';
                echo '<td>
                        <a href="/admin/add/'.$item['id'].'"><i class="fas fa-pen"></i></a>
                        <a href="/admin/delete/'.$item['id'].'"><i class="fas fa-trash"></i></a>
                      </td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
        @elseif(isset($type) && $type=='location')
            <a href="/admin/addmarker"><h3><u>Добавить маркер</u></h3></a>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>LOCATION</td>
                    <td>INFO</td>
                    <td>COMPANY</td>
                    <th>Операции</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                       <td>{{$item['id']}}</td>
                       <td>{{$item['location']}}</td>
                       <td>{{$item['info']}}</td>
                       <td>{{$item['company']}}</td>
                       <td>
                           <a href="/admin/deletemarker/{{$item['id']}}"><i class="fas fa-trash"></i></a>
                       </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <table class="table table-striped table-bordered">
            <a href="{{$link}}"><h3><u>Добавить {{$title}}</u></h3></a>

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $item) {
                    echo '<tr>';
                    echo '<td>'.$item['id'].'</td>';
                    echo '<td>'.$item['name'].'</td>';
                }
                ?>
                </tbody>
            </table>
        @endif

    </div>
@endsection