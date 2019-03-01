{!! Form::model($schedule, ['route' =>['my-schedule.update', $schedule->id],'method' => 'POST']) !!}
    <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <div class="label-group col-md-6">
                {!! Form::label('event_name', 'Name of event:', ['class' => 'control-label', 'pull-right'] ) !!}
            </div>
            <div class="input-group col-md-12">
                {!! Form::text('event_name', null, ['class' => 'form-control', 'id' => 'event_name']) !!}
                {!! Form::hidden('id') !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <div class="label-group col-md-6">
                {!! Form::label('event_desc', 'Description:', ['class' => 'control-label', 'pull-right'] ) !!}
            </div>
            <div class="input-group col-md-12">
                {!! Form::textarea('event_desc', null, ['class' => 'form-control', 'id' => 'event_desc', 'rows' => 2]) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <div class="label-group col-md-6">
                {!! Form::label('event_loc', 'Location:', ['class' => 'control-label', 'pull-right'] ) !!}
            </div>
            <div class="input-group col-md-12">
                {!! Form::text('event_loc', null, ['class' => 'form-control', 'id' => 'event_loc']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <div class="label-group col-md-6">
                {!! Form::label('schedule', 'Pick Date:', ['class' => 'control-label', 'pull-right'] ) !!}
            </div>
            <div class="input-group col-md-12">
                {!! Form::text('schedule', null, ['class' => ['form-control', 'sched-dates'], 'id' => 'schedule']) !!}
            </div>
        </div>
    </div>
{!! Form::close() !!}