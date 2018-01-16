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
                                <th>  {{trans('custom.tag')}}</th>
                                <th>  {{trans('custom.created')}}</th>
                                <th>  {{trans('custom.uses')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tagi as $tags)

                                <tr class='clickable-row' data-href=/Tags/Edit/{{$tags->id}}>

                                    <td>{{$tags->tags}}</td>
                                    <td>{{$tags->izveidots}}</td>
                                    <td>{{count($tags->raksti)}}</td>


                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        jQuery(document).ready(function($) {

            $(document.getElementsByClassName("accepted")).each(function( index,object ) {

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
