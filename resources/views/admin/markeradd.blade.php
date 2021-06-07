@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <a href="/admin/list/marker"><h4><u>Все позиции</u></h4></a>
            <form id="form_req" action="/admin/updatemarker/{{$id}}" method="post"> <!-- action="/request/create" method = 'post'-->
                <div class="form-group">
                    <label for="name">Компания</label>
                    <select class="form-control" name='company_id' id='CompanyName' @if($id!=0) disabled @endif>
                        @foreach($companiesList as $ids=>$name)
                            <option value="{{$ids}}" @if($company_id == $ids) selected @endif>{{$name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input_data">Местоположение</label>
                    <input class="form-control" name='location' type="text" value="{{$location ?? ''}}"/>
                </div>
                <div class="form-group">
                    <label for="process_information">Текст для информационного блока : </label>
                    <input class="form-control" name='info' type="text"  value="{{$info ?? ''}}"/>
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