@extends('layouts.app')

@section('content')
    <div class="container">
        <form  method="POST" action="add">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">title :</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="">
            </div>
            <div class="form-group">
                <label for="body">body :</label>
                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
            </div>
            <input type="submit" value="ADD NEW ARTICLE " class="btn btn-primary">
        </form>
    </div>


@endsection
