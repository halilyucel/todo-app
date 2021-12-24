
@if (Auth::guest())

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class='text-center'>Yapılacaklar Uygulamasına Hoşgeldin</h3></div>
                <div class="panel-body text-center">
                    <p>Yapılacak işler listeni oluşturmak için oturum veya hesap oluştur.</p> 
                        <a class='btn btn-success' href="/login">Oturum aç</a> 
                        <a class='btn btn-primary' href="/register">Hesap oluştur</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@else
<script>window.location.href = "/tasks";</script>

@endif