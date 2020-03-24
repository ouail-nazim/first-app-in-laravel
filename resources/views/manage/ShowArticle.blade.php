@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">titel</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $art)
                <tr >
                    <td>{{$art->id}} </td>
                    <td>{{$art->title}}</td>
                    <td><a class="nav-link " href="{{"/read/".$art->id}}">{{'go to this article'}}</a> </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{url('/add')}}"> add new article</a>
    </div>




@endsection