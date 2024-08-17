@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <a href="#">Добавить продукт</a>
            </div>
            <div>
                <a href="{{route('products.get')}}">Получить продукты iPhone</a>
            </div>
        </div>
    </div>
</div>
@endsection
