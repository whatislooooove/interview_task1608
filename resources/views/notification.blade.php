@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            Импорт товаров Apple инициализирован. Если вы это делаете впервые,
            не забудьте запустить очередь (php artisan queue:work)
            <div class="my-3">
                <a href="{{route('home')}}">На главную</a>
            </div>
        </div>
    </div>
</div>
@endsection
