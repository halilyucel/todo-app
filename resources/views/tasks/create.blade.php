@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Display Validation Errors -->
            @include('common.status')

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class='text-center'>Yapılacak İş Oluştur</h3>
                </div>
                <div class="panel-body">

                    @include('tasks.partials.create-task')

                </div>
                <div class="panel-footer">
                    <a href="{{ route('tasks.index') }}" type="button">
                        <span class="fa fa-reply" aria-hidden="true"></span> Yapılacak işlere dön
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection