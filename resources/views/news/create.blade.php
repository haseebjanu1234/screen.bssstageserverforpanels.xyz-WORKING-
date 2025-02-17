@extends('layout_for_markaz.admin')
@section('title', 'Markaz Admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">News</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">News </h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger alert-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('news.store') }}" method="POST">
                @csrf
                <div class="form-group row">

                    <div class="col-md-4">
                        <label for="">News: 1 </label>
                        <input type="text" class="form-control" name="newi" value="{{ old('newsi') }}">
                    </div>
                        <div class="col-md-4">
                        <label for="">News: 2</label>
                        <input type="text" class="form-control" name="newii" value="{{ old('newsii') }}">
                    </div>
                        <div class="col-md-4">
                        <label for="">News: 3</label>
                        <input type="text" class="form-control" name="newiii" value="{{ old('newsii') }}">
                    </div>
            </div>
                <div class="form-group row">

                    <div class="col-md-4">
                        <label for="">News: 4 </label>
                        <input type="text" class="form-control" name="newiv" value="{{ old('newsiv') }}">
                    </div>
                        <div class="col-md-4">
                        <label for="">News: 5</label>
                        <input type="text" class="form-control" name="newv" value="{{ old('newsv') }}">
                    </div>

            </div>
                 <div class="col-md-4 pt-2">
                <input type="submit" value="Submit" class="btn btn-primary btn-block mt-4">
            </div>
            </form>
        </div>
</div>
@endsection
