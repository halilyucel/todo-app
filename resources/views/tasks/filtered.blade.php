@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">

            <!-- Display Validation Errors -->
            @include('common.status')

            <!-- Current Tasks -->
            @if (count($tasks) > 0)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">

                                @if (Request::is('tasks-all'))
                                    Tümü
                                @elseif (Request::is('tasks-incomplete'))
                                    Yapılacak işler
                                @elseif (Request::is('tasks-complete'))
                                   Tamamlananlar
                                @else
                                    Yapılacak iş yok
                                @endif

                                <div class="pull-right">

                                    <a href="{{ url('/tasks-all') }}" class="btn btn-sm btn-default {{ Request::is('tasks-all') ? 'active' : '' }}" type="button">
                                        <span class="fa fa-tasks" aria-hidden="true"></span> <span class="hidden-xs">Tümü</span>
                                    </a>
                                    <a href="{{ url('/tasks-incomplete') }}" class="btn btn-sm btn-default {{ Request::is('tasks-incomplete') ? 'active' : '' }}" type="button">
                                        <span class="fa fa-square-o" aria-hidden="true"></span> <span class="hidden-xs">Yapılacak işler</span>
                                    </a>
                                    <a href="{{ url('/tasks-complete') }}" class="btn btn-sm btn-default {{ Request::is('tasks-complete') ? 'active' : '' }}" type="button">
                                        <span class="fa fa-check-square-o" aria-hidden="true"></span> <span class="hidden-xs">Tamamlananlar</span>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped task-table table-condensed">
                                <thead>
                                    <th>No</th>
                                    <th>Yapılacak iş</th>
                                    <th>Detay</th>
                                    <th colspan="3">Durum</th>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        @include('tasks.partials.task-row')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="{{ url('/tasks/create') }}" class="btn btn-sm btn-primary pull-right" type="button">
                                    <span class="fa fa-plus" aria-hidden="true"></span> Yeni Ekle
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            @else

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Yeni iş ekle
                    </div>
                    <div class="panel-body">

                        @include('tasks.partials.create-task')

                    </div>
                </div>

            @endif

        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('table').DataTable();
        } );
    </script>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>

@endsection