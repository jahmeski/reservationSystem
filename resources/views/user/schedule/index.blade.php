@extends('layouts.app') 
@section('sitemap', 'My Schedule') 
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="card mb-3">
                    <div class="card-header">
                        Create a Schedule
                    </div>
                    <div class="card-body">
                        @include('layouts.alert')
                        {!! Form::open(['route' =>'my-schedule.store','method' => 'POST']) !!}
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('event_name', 'Name of event:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('event_name', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('event_desc', 'Description:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::textarea('event_desc', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('event_loc', 'Location:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('event_loc', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('schedule', 'Pick Date:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('schedule', null, ['class' => ['form-control', 'sched-dates'], 'required']) !!}
                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block btn-flat']) !!} 
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="card mb-3">
                    <div class="card-header">
                        List of Schedules
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success" id="update-alert" style="display: none"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Description</th>
                                    <th>Dates</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Description</th>
                                    <th>Dates</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach ($schedules as $schedule)
                                    @include('user.schedule.sched')
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        @include('user.modal.modal')
                        @include('user.modal.confirm_modal')
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection

@section('scripts')
<script>
    // EDIT SCHEDULE MODAL
    $('body').on('click', '.show-modal', function (event) {
        event.preventDefault();

        var me = $(this),
            url = me.attr('href'),
            title = me.attr('title');

        $('#modal-title').text(title);

        $.ajax({
            url: url,
            dataType: 'html',
            success: function (response) {
                $('#modal-body').html(response);
                initScripts();
            }
        });

        $('#schedule-modal').modal('show');
    });


    // SAVING CHANGES TO THE EVENT
    $('#save-btn').click(function (event) {
        event.preventDefault();

        var form = $('#modal-body form'),
            url = form.attr('action'),
            method = 'PUT';

        // reset errror messages
        form.find('.help-block').remove();
        form.find('.input-group').removeClass('has-error');

        $.ajax({
            url: url,
            method: method,
            data: form.serialize(),
            success: function (response) {
                var id = $('input[name=id]').val();
                if (id) {
                    $('#sched-list-' + id).replaceWith(response);
                }
                $('#schedule-modal').modal('hide');
                showMessage("Event updated!", '#update-alert');

            },
            error: function(xhr) {
                var errors = xhr.responseJSON;

                if ($.isEmptyObject(errors) == false) {
                    $.each(errors, function (key, value) {
                        alert(value);
                    });
                }
            }

        });
    });


    $('body').on('click', '.show-confirm-modal', function (event) {
        event.preventDefault();

        var me = $(this),
            action = me.attr('href');

        $('#confirm-body form').attr('action', action);
        $('#confirm-body p').html("Are you sure you want to delete this entry?");

        $('#confirm-modal').modal('show');
    });

    $('#destroy-btn').click(function (event) {
        event.preventDefault();

        var form = $('#confirm-body form'),
            url = form.attr('action');

        $.ajax({
            url: url,
            method: 'DELETE',
            data: form.serialize(),
            success: function (data) {
                $('#confirm-modal').modal('hide');

                $('#sched-list-' + data.id).fadeOut(function () {
                    $(this).remove();
                    showMessage("Event deleted!", "#update-alert");
                });
            }
        });
    });

function showMessage(message, element) {
    var alert = element == undefined ? "#add-new-alert" : element;
    $(alert).text(message).fadeTo(1000, 500).slideUp(500, function () {
        $(this).slideUp(500);
    });
}

function initScripts() {
    //Date range picker
    $('.sched-dates').daterangepicker({
            timePicker: true,
            locale: {
            format: 'MM/DD/YYYY h:mm A'
            },
            showDropdowns: true,
            drops: "down",
            minDate: '01/01/2019'
        });

}

</script>
@endsection