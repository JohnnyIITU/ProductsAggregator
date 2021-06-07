@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <a href="/admin"><h4><u>Все позиции</u></h4></a>
            <form id="form_req" action="{{$link}}" method="post"> <!-- action="/request/create" method = 'post'-->
                <div class="form-group">
                    <label for="input_data">{{$title}}</label>
                    <input class="form-control" name='name' type="text" value=""/>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button class="btn btn-info" id="saveRequest">Сохранить</button>
                    </div>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection()