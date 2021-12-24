@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <!-- Display Validation Errors -->
                @include('common.status')

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <strong>{{$task->name}} işi düzenleniyor</strong>
                    </div>
                    <div class="panel-body">

                        {!! Form::model($task, array('action' => array('TasksController@update', $task->id), 'method' => 'PUT')) !!}

                            <div class="form-group row">
                                {!! Form::label('name', 'Yapılacak iş', array('class' => 'col-sm-3 col-sm-offset-1 control-label text-right')) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>


                            <div class="form-group row">
                                {!! Form::label('description', 'İş detayı', array('class' => 'col-sm-3 col-sm-offset-1 control-label text-right')) !!}
                                <div class="col-sm-6">
                                    {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>


                            <!-- Durumu düzenle -->

                            <div class="form-group row">
                                <label for="status" class="col-sm-3 col-sm-offset-1 control-label text-right">Durumu</label>
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label for="status">
                                            {!! Form::checkbox('completed', 1, null, ['id' => 'status']) !!} Tamamlandı olarak işaretle
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <!-- kaydet butonu -->
                            <div class="form-group row">
                                <div class="col-sm-offset-4 col-sm-6">
                                     {{Form::button(' <span class="hidden-xxs">Güncellemeleri</span> <span class="hidden-xs">Kaydet</span>', array('type' => 'submit', 'class' => 'btn btn-success btn-block'))}}
                                </div>
                            </div>


                        {!! Form::close() !!}

                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('tasks.index') }}" class='btn btn-info' type="button">
                            <span class="fa fa-reply" aria-hidden="true"></span> Yapılacak işlere dön
                        </a>

                        {!! Form::open(array('class' => 'form-inline pull-right', 'method' => 'DELETE', 'route' => array('tasks.destroy', $task->id))) !!}
                            {{ method_field('DELETE') }}
                            {{Form::button('<span class="fa fa-trash fa-fw" aria-hidden="true"></span> <span class="hidden-xxs">Tamamen</span> <span class="hidden-sm hidden-xs">Sil</span>', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection