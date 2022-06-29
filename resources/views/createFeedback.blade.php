<meta name="token" content="{{csrf_token()}}">
@extends('layout.app')
@section('title', 'Додаємо відгук')
@section('content')
    @isset($status)
        <div class="error" role="alert">
            Відгук було створено.<br>
            Останній відгук:
        </div>
        <div class="error"> {{$feedbacks[count($feedbacks)-1]}} </div>
    @endisset
    <form action="{{route('createFeedback')}}" class="order" method="POST">
        @csrf
        <div class="order_block">
            <label class="order_text">Введіть Ваш відгук про наш антивірус</label>
            <input type="text" class="form-control" placeholder="Введіть відгук" name="text" required>
        </div>
        <div class="order_block">
            <label class="order_text">Ваша оцінка нашому антвірусу</label>
            <input type="number" step="0.01" class="form-control" placeholder="Введіть оцінку" name="estimate" required>
        </div>
        <div class="order_block">
            <label class="order_text">Користувач</label>
            <select class="form-select" name="user_id" required>
                <option selected>Виберіть користувача</option>
                @foreach($users as $i=>$user)
                    <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option>
                @endforeach
            </select>
        </div>
        <div class="order_block">
            <button type="submit">Підтвердити</button>
        </div>
    </form>
@endsection
