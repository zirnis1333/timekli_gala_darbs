@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{$title}}</h4></div>

                    <div class="panel-body">
                        @foreach ( $raksti as $raksts )
                            <div class="list-item-with-icon row">

                                <h4 align="center"> {{ $raksts['nosaukums'] }}</h4>
                                <div class="col-md-12">
                                    <div> <p>{{ $raksts['noskelts'] }} <a href="/">Lasīt tālāk</a></p> </div>

                                    <div>Tagi: {{ $raksts['id'] }} </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection