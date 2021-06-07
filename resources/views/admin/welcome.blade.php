@extends('admin.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="top-right links">
        @guest
            <a href="/login">ВОЙТИ</a>
        @else
            <a href="/logout">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
        @endif
    </div>
    <div class="content">
        <div class="title m-b-md">
            WELCOME
        </div>
        <div class="links">
            <a href="/admin/list/company">Company</a>
            <a href="/admin/list/products">Product</a>
            <a href="/admin/list/price">Price</a>
            <a href="/admin/list/marker">map markers</a>
        </div>

    </div>
</div>
@endsection