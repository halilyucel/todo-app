<div class="tab-pane {{{ $status ?? '' }}}" id="{{ $tab }}">
    <h3>
        {{ $title }}
    </h3>

    <div class="table-responsive">
        <table class="table table-striped task-table table-condensed">
            <thead>
                <th>No</th>
                <th>Yapılacak</th>
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
