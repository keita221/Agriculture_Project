@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            ID :</strong>
            {{$detaille->id}}
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{$detaille->name}}
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{$detaille->email}}
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Profile:</strong>
            {{$detaille->profile}}
        </div>

    </div>
    <a href="{{route('home')}}" class="btn btn-info">Acceuil</a>
</div>
@endsection