@extends('layouts.app')

@section('title', {{env("APP_NAME")}})

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <p>{$clientes}</p>
@endsection