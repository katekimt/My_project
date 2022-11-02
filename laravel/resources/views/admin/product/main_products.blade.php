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
        <button type="submit" class="btn btn-outline-primary" style="margin-top: 30px">Додати товар</button>
    </form>
    <hr>
@endsection
