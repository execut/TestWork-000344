@extends('layouts.app')
@section('header')
Authors list
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('authors.create') }}" title="Create a author"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>
<br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
    </tr>
    @foreach ($authors as $author)
    <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>
        <td>
            <a href="{{ url('authors/' . $author->id) }}" title="show">
                <i class="fas fa-eye text-success  fa-lg"></i>
            </a>
            <a href="{{ url('authors/' . $author->id . '/edit') }}">
                <i class="fas fa-edit  fa-lg"></i>
            </a>
            <form action="{{ url('authors/' . $author->id) }}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $authors->links() !!}

@endsection
