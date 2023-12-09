@extends('layouts.app')
@section('venda.cadastro')
<h1>Cadastro de Venda</h1>
<form action="{{ route('venda.novo') }}" method="post">
    @csrf
    <select class="form-control "name="id_usuario">
        @foreach($usuarios as $u)
        <option value="{{ $u -> id}}"> {{$u -> nome}} </option>
        @endforeach
    </select>
    <input type="number" class="form-control" name="valor" placeholder="Valor">
    <input type="submit" class="btn btn-sucess" value="Enviar">
</form>
@endsection