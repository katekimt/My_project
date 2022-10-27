@extends('layouts.admin_panel')

@section('content')
    <h4 style="margin-bottom: 20px">Форма для додавання товару</h4>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.addProductForm')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Назва товару" name="name" id="name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Код товару" name="code" id="code">
            </div>
            <div class="col">
                <input type="file" name="image" placeholder="Download file" id="image" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary" style="margin-top: 30px">Додати товар</button>
    </form>
    <hr>
    <h4 style="margin: 20px 0">Форма для редагування товару</h4>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.updateProductForm')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h6>Введіть код товару, який хочете редагувати</h6>
        <div class="row" style="margin-bottom: 30px">
            <div class="col">
                <input type="text" class="form-control" placeholder="Код товару, який хочете редагувати" name="old_code" id="old_code">
            </div>
        </div>
        <h6>Введіть нову інформацію</h6>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Назва товару" name="name" id="name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Код товару" name="code" id="code">
            </div>
            <div class="col">
                <input type="file" name="image" placeholder="Download file" id="image" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary" style="margin-top: 30px">Обновити товар</button>
    </form>
    <hr>
    <h4 style="margin: 20px 0">Форма для видалення товару</h4>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.deleteProductForm')}}" method="post">
        @csrf
        <h6>Введіть код товару, який хочете видалити</h6>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Код товару" name="code" id="code">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary" style="margin: 30px 0">Видалити товар</button>
    </form>
@endsection
