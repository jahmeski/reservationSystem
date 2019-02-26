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
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="card mb-3">
                    <div class="card-header">
                        List of Schedules
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated {{ \Carbon\Carbon::createFromTimeStamp(strtotime($user->updated_at))->diffForHumans()}}</div>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection

@section('scripts')
<script>
    $(function() {
        $('.sched-dates').daterangepicker({
            timePicker: true,
            locale: {
            format: 'MM/DD/YYYY h:mm A'
            },
            showDropdowns: true,
            drops: "down",
            minDate: '01/01/2019'
        });
    });
</script>
@endsection