


@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>{{$title}}</h4></div>

                    <div class="panel-body">

                        <div class="list-item-with-icon row">

                            <h4 style="text-align:center;"> {{ $raksts['nosaukums'] }}.</h4>
                            <div class="col-md-12">
                                <form  method="post">
                                    <input type="hidden" name="id" value="{{$raksts->id}}">
                                    <div class=" col-md-12 form-group{{ $errors->has('nosaukums') ? ' has-error' : '' }}">
                                        {!! Form::label('nosaukums', trans('custom.name'), ['class' => 'col-md-4 control-label']) !!}
                                        <div class="col-md-6">
                                            {!! Form::text('nosaukums',   $raksts['nosaukums'] , ['class' => 'form-control']) !!}
                                            @if ($errors->has('nosaukums'))
                                                <span class="help-block">
                            <strong>{{ $errors->first('nosaukums') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group col-md-12">

                                        <textarea name="saturs" class="form-control my-editor">
                                            {!!$raksts['saturs']  !!}

                                        </textarea>
                                    </div>
                                    {{ csrf_field() }}




                                    @if($create)
                                        <div class="form-group{{ $errors->has('tip') ? ' has-error' : '' }}">
                                            <div class="col-md-offset-6 col-md-6">
                                                <p class="col-md-12" style= 'text-align:center;'>{{ trans('custom.tip')}}</p>
                                            </div>

                                    </div>

                                    <div class=" col-md-12 form-group{{ $errors->has('tagi') ? ' has-error' : '' }}">
                                        {!! Form::label('tagi', trans('custom.tags'), ['class' => 'col-md-4 control-label']) !!}
                                        <div class="col-md-6">
                                            {!! Form::text('tagi',   $tagi, ['class' => 'form-control']) !!}
                                            @if ($errors->has('tagi'))
                                                <span class="help-block">
                            <strong>{{ $errors->first('tagi') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                    @if(!$create)
                                        <div> {{trans('custom.tags')}}: {{$tagi}}</div>
                                    @endif






                                    <button type="submit"> {{trans('custom.save')}}</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/src/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection