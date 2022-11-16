@extends('layouts.admin_panel')

@section('content')
    <h4 style="margin-bottom: 20px">Усі замовлення</h4>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Імʼя</th>
            <th scope="col">Телефон</th>
            <th scope="col">Пошта</th>
            <th scope="col">Інформація</th>
            <th scope="col">Спосіб звʼязку</th>
            <th scope="col">Видалити замовлення</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($data as $element)
            @if(!$element->deleted)
                <tr>
                    <td>{{$element->name}}</td>
                    <td>{{$element->phone}}</td>
                    <td>{{$element->email}}</td>
                    <td>{{$element->information}}</td>
                    <td>@if($element->byPhone)
                            Дзвінок<br>
                        @endif
                        @if($element->byEmail)
                            Пошта<br>
                        @endif
                        @if($element->byViber)
                            Вайбер<br>
                        @endif
                        @if($element->byTelegram)
                            Телеграм
                        @endif</td>
                    <td><a class="far fa-trash-alt" href="{{route('admin.deleteOneOrders', $element->id)}}"></a></td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    <hr>
    <h4 style="margin-bottom: 20px">Очистити усі замовлення</h4>
    <form action="{{route('admin.deleteOrders')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-outline-primary" style="margin: 0 0 30px 0">Очистити замовлення</button>
    </form>
@endsection
