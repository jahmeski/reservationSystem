@extends('layouts.app')

@section('sitemap', 'Personal Information')

@section('content')
<div id="content-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card mb-3">
                    <div class="card-header">
                        Personal Information
                    </div>
                    <div class="card-body">
                        @include('layouts.alert')

                        {!! Form::model($personalInfo,[
                            'route' => $personalInfo->exists ? ['personal-info.update', $personalInfo->id] : ['personal-info.store'],
                            'method' => $personalInfo->exists ? 'PUT' : 'POST']) !!}
            
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('last_name', 'Last Name:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('last_name', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('first_name', 'First Name:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('middle_name', 'Middle Name:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('birth_date', 'Birthday:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('birth_date', null, ['class' => 'form-control', 'required', 'id' => 'datepicker']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('birth_place', 'Birthplace:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('birth_place', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('gender', 'Gender:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::select('gender', [
                                            '' => 'Select',
                                            'Male' => 'Male',
                                            'Female' => 'Female'], null,
                                            ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('civil_status', 'Civil Status:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::select('civil_status', [
                                            '' => 'Select',
                                            'Single' => 'Single',
                                            'Married' => 'Married',
                                            'Widowed' => 'Widowed',
                                            'Separated' => 'Separated',
                                            'Other' => 'Other'], null,
                                            ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('citizenship', 'Citizenship:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('citizenship', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="label-group col-md-6">
                                            {!! Form::label('mobile', 'Mobile No.:', ['class' => 'control-label', 'pull-right'] ) !!}
                                        </div>
                                        <div class="input-group col-md-12">
                                            {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="label-group col-md-6">
                                            {!! Form::label('telephone', 'Telephone No.:', ['class' => 'control-label', 'pull-right'] ) !!}
                                        </div>
                                        <div class="input-group col-md-12">
                                            {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>                         
                            </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('address1', 'Address Line 1:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('address1', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('address2', 'Address Line 2:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('address2', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('barangay', 'Barangay:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('barangay', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('city', 'City:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('city', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('province', 'Province:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('province', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('zip_code', 'Zip Code:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('zip_code', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('height', 'Height:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('height', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('weight', 'Weight:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('weight', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('blood_type', 'Blood type:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('blood_type', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>                         
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('pagibig', 'PAGIBIG No.:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('pagibig', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('philhealth', 'Philhealth:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('philhealth', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('sss', 'SSS No.:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('sss', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="label-group col-md-6">
                                        {!! Form::label('tin', 'TIN:', ['class' => 'control-label', 'pull-right'] ) !!}
                                    </div>
                                    <div class="input-group col-md-12">
                                        {!! Form::text('tin', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>                         
                        </div>


                        {!! Form::submit($personalInfo->exists ? 'Update' : 'Save', ['class' => 'btn btn-primary btn-block btn-flat']) !!} 
                    {!! Form::close() !!}

                    </div>
    
                    <div class="card-footer small text-muted">Updated {{ \Carbon\Carbon::createFromTimeStamp(strtotime($personalInfo->updated_at))->diffForHumans()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    
    $(document).ready(function() {    
        $('#datepicker').datepicker();
    });
</script>    
@endsection