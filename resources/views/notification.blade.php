@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (isset($result) && array_key_exists('id', $result))
            Вы успешно добавили запись под идентификатором {{$result['id']}}
            @else
            Импорт товаров Apple инициализирован. Если вы это делаете впервые,
            не забудьте запустить очередь (php artisan queue:work)
            @endif
            <div class="my-3">
                <a href="{{route('home')}}">На главную</a>
            </div>
        </div>
    </div>
</div>
@endsection
