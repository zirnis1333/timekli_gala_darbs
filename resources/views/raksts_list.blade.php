@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{$title}}</h4></div>

                    <div class="panel-body">
                        <table  class="table table-bordered  table-condensed" >
                            <thead>
                            <tr>
                                <th>{{trans('custom.name')}}</th>
                                <th>{{trans('custom.created')}}</th>
                                <th>{{trans('custom.updated')}}</th>
                                <th>{{trans('custom.accepted')}}</th>

                                @if( Auth::user()->isAdmin())
                                    <th>{{trans('custom.author')}}</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($raksti as $raksts)

                                <tr class='clickable-row' data-href=/raksts/{{$raksts->id}}>

                                    <td>{{$raksts->nosaukums}}</td>
                                    <td>{{$raksts->izveidots}}</td>
                                    <td>{{$raksts->atjaunots}}</td>
                                    <td>
                                        {!! Form::open([  'class' => 'form-horizontal']) !!}
                                        <input type="hidden" name="id" value={{$raksts->id}}
                                        ><br>
                                        <input class="accepted
 @if(!Auth::user()->isAdmin())
                                                 disabled
@endif
" type="checkbox" name="accepted" value={{$raksts->akceptets}}
                                        @if( $raksts->akceptets==1)
                                                checked
                                                @endif
                                        ><br>
                                        {!! Form::close() !!}
                                    </td>
                                    <td><a href="/raksts/delete/{{$raksts->id}}">{{trans('custom.delete')}}</a></td>


                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script >

        jQuery(document).ready(function($) {

            $(document.getElementsByClassName("accepted")).each(function( index,object ) {

                $(object).click(function(object,index)
                {
                    if(!$(this).hasClass("disabled"))
                    {
                        event.stopImmediatePropagation()
                        if($(this).hasClass("checked"))
                        {
                            $(this).removeClass("checked");

                            this.value=0;
                        }
                        else
                        {
                            $(this).addClass("checked");

                            this.value=1;
                        }
                        $(this.parentNode ).submit();
                    }

                });
            });
            $(".clickable-row").click(function()
            {
                window.location = $(this).data("href");
            });
        });

    </script>
@endsection
