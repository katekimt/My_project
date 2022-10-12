@extends('layouts.admin_panel')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.addProductForm')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Назва товару" name="name" id="name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Код товару" name="code" id="code">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary" style="margin-top: 30px">Додати товар</button>
    </form>
@endsection
