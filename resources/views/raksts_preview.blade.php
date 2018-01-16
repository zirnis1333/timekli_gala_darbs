@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>{{$title}}</h4>
                       
                            @if ( !Auth::guest() )
                        <h3 style="text-align:right">Kartosana</h3>
                        <a  href="/sort/asc/"><h5 style="text-align:right">{{trans('custom.oldest')}}</h5> </a>
                        <a  href="/sort/desc/"><h5  style="text-align:right">{{trans('custom.newest')}}</h5> </a>
                            @endif
                    </div>
                    <div class="panel-body">
                        @foreach ( $raksti as $raksts )
                            <div class="list-item-with-icon row">

                                <h4 style="text-align:center"> {{ $raksts['nosaukums'] }}</h4>

                                <div class="col-md-12">

                                    <div> <p>{!!  $raksts['noskelts'] !!} <a href="/raksts/{{$raksts->id}}">... {{trans('custom.readMore')}}</a></p> </div>

                                    <div> {{trans('custom.tags')}}:
                                    @foreach ( $raksts->tagi as $tags )
                                           {{$tags->tags->tags }} ,
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection