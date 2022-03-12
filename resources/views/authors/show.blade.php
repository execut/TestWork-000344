@extends('layouts.app')
@section('header')
Show Author
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('authors.index') }}"> << Back</a>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author name:</strong>
            {{ $author->name }}
        </div>
    </div>
</div>
@endsection
