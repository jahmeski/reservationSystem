@extends('layouts.app')

@section('sitemap', 'Account Overview')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card mb-3">
                <div class="card-header">
                    Account Overview
                </div>
                <div class="card-body">
                    <p>
                        <b>Name:</b> {{ $user->personalInfo != null ? $user->personalInfo->last_name : 'Personal Info not yet provided'}}{{ $user->personalInfo != null ? ', ' . $user->personalInfo->first_name : ""}} 
                        {{ $user->personalInfo != null ? $user->personalInfo->middle_name : ""}}
                    </p>
                    <p>
                        <b>E-Mail:</b> {{ $user->email }}
                    </p>
                    <p>
                        <b>Mobile No.:</b> {{ $user->personalInfo != null ? $user->personalInfo->mobile : 'Personal Info not yet provided'}}
                    </p>
                    <p>
                        <b>Tel. No.:</b> {{ $user->personalInfo != null ? $user->personalInfo->telephone : 'Personal Info not yet provided'}}
                    </p>
                    
                </div>
                <div class="card-footer small text-muted">Updated {{ \Carbon\Carbon::createFromTimeStamp(strtotime($user->updated_at))->diffForHumans()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
    
