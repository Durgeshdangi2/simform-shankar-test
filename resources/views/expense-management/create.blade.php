@extends('layouts.app')
@section('title') {{ config('app.name', 'Laravel') }} | {{ 'Create Category' }} @endsection
@section('heading') {{ __('common.expense-management') }} @endsection
@section('content')
<div class="row">
        <div class="col-12">
            <form method="POST" enctype="multipart/form-data"
                  action="{{ route(($options['route_controller'] ?? '').'.store') }}">
                @include($options['route_controller'].'.includes.form', ['isForm' => true])
            </form>
        </div>
    </div>
@endsection

