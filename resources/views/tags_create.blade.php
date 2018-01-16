


@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{$title}}</h4></div>

                    <div class="panel-body">

                        <div class="list-item-with-icon row">

                            <h4 style="text-align:center;"> {{ $tags['tags'] }}.</h4>
                            <div class="col-md-12">
                                <form  method="post">
                                    <input type="hidden" name="id" value="{{$tags->id}}">
                                    <div class=" col-md-12 form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                                        {!! Form::label('tags', trans('custom.tag'), ['class' => 'col-md-4 control-label']) !!}
                                        <div class="col-md-6">
                                            {!! Form::text('tags',   $tags['tags'] , ['class' => 'form-control']) !!}
                                            @if ($errors->has('tags'))
                                                <span class="help-block">
                            <strong>{{ $errors->first('tags') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    {{ csrf_field() }}
                                    <button type="submit">{{trans('custom.save')}}</button>
                                </form>




                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection