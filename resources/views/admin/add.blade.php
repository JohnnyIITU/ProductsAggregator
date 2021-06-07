@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <a href="list"><h4><u>Все позиции</u></h4></a>
            <form id="form_req" action="/admin/add/{{$id}}" method="post"> <!-- action="/request/create" method = 'post'-->
                <div class="form-group">
                    <label for="name">Компания</label>
                    <select class="form-control" name='company_id' id='CompanyName' @if($id!=0) disabled @endif>
                        @foreach($companiesList as $ids=>$name)
                            <option value="{{$ids}}" @if($company_id == $ids) selected @endif>{{$name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Продукт</label>
                    <select class="form-control" name='product_id' id='ProductName' @if($id!=0) disabled @endif>
                        @foreach($productsList as $ids=>$name)
                            <option value="{{$ids}}" @if($product_id == $ids) selected @endif>{{$name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="input_data">Цена</label>
                    <input class="form-control" name='price' type="number" value="{{$price}}"/>
                </div>
                <div class="form-group">
                    <label for="process_information">Цена актуальна с : </label>
                    <div class="row">
                        <input type="date" class="form-control" name='date' style="margin: 0 14px;" id="dateBeg" value="{{$date}}"/>
                    </div>
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