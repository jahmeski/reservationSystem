@extends('layouts.app') 

@section('sitemap', 'Login Credentials')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    Login Credentials
                </div>
                <div class="card-body">

                    @include('layouts.alert')

                    {!! Form::model($user,['route' => ['login-credential.update', $user->id], 'method' => 'PUT']) !!}
                        <div class="form-group">
                            <div class="row">
                                <div class="label-group col-md-3">
                                    {!! Form::label('email', 'E-mail Address:', ['class' => 'control-label'] ) !!}
                                </div>
                                <div class="input-group col-md-9">
                                    {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="label-group col-md-3">
                                    {!! Form::label('password', 'Password:', ['class' => 'control-label'] ) !!}
                                </div>
                                <div class="input-group col-md-9">
                                    {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
                                </div>
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="label-group col-md-3">
                                    {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label'] ) !!}
                                </div>
                                <div class="input-group col-md-9">
                                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm']) !!}
                                </div>
                            </div> 
                        </div>

                        {!! Form::submit('Update', ['class' => 'btn btn-primary btn-block btn-flat']) !!} 
                    {!! Form::close() !!}
                </div>

                <div class="card-footer small text-muted">Updated {{ \Carbon\Carbon::createFromTimeStamp(strtotime($user->updated_at))->diffForHumans()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection