<!-- yeni görev -->
{!! Form::model(new App\Task, ['route' => ['tasks.store'], 'class'=>'form-horizontal', 'role' => 'form']) !!}

    <!-- görev adı -->
    <div class="form-group">
        <label for="task-name" class="col-sm-3 control-label">Yapılacak İş</label>

        <div class="col-sm-6">
            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
        </div>
    </div>

    <!-- Task Description -->
    <div class="form-group">
        <label for="task-description" class="col-sm-3 control-label">Detayı</label>

        <div class="col-sm-6">
            <textarea name="description" id="task-description" class="form-control" value="{{ old('task') }}" maxlength="155"></textarea>
        </div>
    </div>

    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
             {{Form::button('<span class="fa fa-plus fa-fw" aria-hidden="true"></span> Yapılacaklara ekle', array('type' => 'submit', 'class' => 'btn btn-default'))}}
        </div>
    </div>

{!! Form::close() !!}