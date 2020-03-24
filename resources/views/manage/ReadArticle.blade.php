@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group">
        <label for="usr">Title :</label>
        {{$article->title}}

    </div>
    <div class="form-group">
        <label for="usr">body :</label>
        {{$article->body}}

    </div>
    <div class="form-group">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">comments</th>
            </tr>
            </thead>
            <tbody>
            @foreach($article->comments as $cm)
                <tr >
                    {{--<td>{{$cm->id}} </td>--}}
                    {{--<td>{{Auth::user()->name}} </td>--}}
                    <td>{{$cm->body}} </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="container">
            <form  method="POST" action="/read/{{$article->id}}">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="comme">your comment :</label>
                    <textarea class="form-control" id="comme" name="comment" rows="3"></textarea>
                </div>
                <input type="submit" value="ADD NEW comment " class="btn btn-primary">
            </form>
        </div>

    </div>

</div>

@endsection