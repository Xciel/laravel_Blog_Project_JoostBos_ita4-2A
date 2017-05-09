@extends('main')

@section('title', '| Homepage')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welkom op mijn blog!</h1>
                <p>Leuk dat je komt kijken wat ik uitspook</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Populaire post</a></p>
            </div>
        </div>
    </div> <!-- einde van de header .row -->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post titel</h3>
                <p>text in de post</p>
                <a href="#" class="btn btn-primary">Lees verder</a>
            </div>

        <hr>
            <div class="post">
                <h3>Post titel</h3>
                <p>text in de post</p>
                <a href="#" class="btn btn-primary">Lees verder</a>
            </div>

        <hr>
            <div class="post">
                <h3>Post titel</h3>
                <p>text in de post</p>
                <a href="#" class="btn btn-primary">Lees verder</a>
            </div>

        <hr>
            <div class="post">
                <h3>Post titel</h3>
                <p>text in de post</p>
                <a href="#" class="btn btn-primary">Lees verder</a>
            </div>

        <hr>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
    </div>
@endsection