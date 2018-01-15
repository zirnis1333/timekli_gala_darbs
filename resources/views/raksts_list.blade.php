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
                                <th>Nosaukums</th>
                                <th>Izveidots</th>
                                <th>Pēdējā atjaunošna</th>
                                <th>Akceptēts</th>

                                @if( Auth::user()->isAdmin() && isset($admin))
                                    <th>Autors</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($raksti as $raksts)

                                <tr class='clickable-row' data-href=/raksts/{{$raksts->id}}>

                                    <td>{{$raksts->nosaukums}}</td>
                                    <td>{{$raksts->izveidots}}</td>
                                    <td>{{$raksts->atjaunots}}</td>
                                    <td>{{$raksts->akceptets}}</td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        jQuery(document).ready(function($) {

            $(document.getElementsByClassName("paid")).each(function( index,object ) {

                $(object).click(function(object,index)
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
                });
            });
            $(".clickable-row").click(function()
            {
                window.location = $(this).data("href");
            });
        });

    </script>
@endsection
