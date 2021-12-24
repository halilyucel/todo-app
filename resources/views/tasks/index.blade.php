@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">

            <!-- doğrulama hatalarını göster -->
            @include('common.status')

            @if (count($tasks) > 0)

                <div id="content">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#all" data-toggle="tab"><span class="fa fa-tasks" aria-hidden="true"></span> <span class="hidden-xs">Tümü</span></a></li>
                        <li><a href="#incomplete" data-toggle="tab"><span class="fa fa-square-o" aria-hidden="true"></span> <span class="hidden-xs">Yapılacak işler</span></a></li>
                        <li><a href="#complete" data-toggle="tab"><span class="fa fa-check-square-o" aria-hidden="true"></span> <span class="hidden-xs">Tamamlananlar</span></a></li>

                        <a style='float:right' href="/tasks/create" class='btn btn-primary btn-sm'><i class="fa fa-btn fa-plus" aria-hidden="true"></i> Yeni</a> 
                    </ul>
                    <div id="my-tab-content" class="tab-content">

                        @include('tasks/partials/task-tab', array('tab' => 'all', 'tasks' => $tasks, 'title' => 'Tümü', 'status' => 'active'))
                        @include('tasks/partials/task-tab', array('tab' => 'incomplete', 'tasks' => $tasksInComplete, 'title' => 'Yapılacak işler'))
                        @include('tasks/partials/task-tab', array('tab' => 'complete', 'tasks' => $tasksComplete, 'title' => 'Tamamlananlar'))

                    </div>
                </div>
            @else

                <div class="panel panel-default">
                    <div class="panel-heading">
                         Yeni İş Ekle
                    </div>
                    <div class="panel-body">

                        @include('tasks.partials.create-task')

                    </div>
                </div>

            @endif

        </div>
    </div>
@endsection