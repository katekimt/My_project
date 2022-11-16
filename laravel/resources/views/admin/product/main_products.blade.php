@extends('layouts.admin_panel')

@section('content')
    <h4 style="margin-bottom: 20px">Додати товар на головний екран</h4>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.addMainProductForm')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Код товару" name="code" id="code">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary" style="margin: 30px 0">Додати товар</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Назва товару</th>
            <th scope="col">Код товару</th>
            <th scope="col">Видалити з головних товарів</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($data as $element)
        <tr>
            <th scope="row">{{$element->name}}</th>
            <td>{{$element->code}}</td>
            <td><a class="far fa-trash-alt" href="{{route('admin.deleteOneMainProductForm', $element->id)}}" ></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
