@extends('sidebar.layouts.master')

@section('title', '| Должности')

@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Список магазинов</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb float-sm-right">
                        {{--<li class="breadcrumb-item"><a href="{{ \Illuminate\Support\Facades\URL::to('positions/create') }}" type="button"--}}
                        {{--class="btn btn-block btn-outline-primary">Добавить </a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover dataTable" id="positions" role="grid">
                                <thead>
                                <tr>
                                    <th>SiteID</th>
                                    <th>Компании</th>
                                    <th>Ссылка</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($result as $res)
                                    <tr>
                                        <td>{{$res->SiteID}}</td>
                                        <td>{{$res->Link}}</td>
                                        <td><a href="http://{{$res->Link}}">{{$res->Link}}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
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