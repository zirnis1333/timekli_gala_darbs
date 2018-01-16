@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{trans('custom.adminPanel')}}</div>
                    <div class="panel-body">
                        @if(session()->has('message'))
                            {{ session()->get('message') }}
                        @endif
                        <ul class="list">
                            <li><a href="{{ url('Tags/list') }}">{{trans('custom.allTags')}}</a></li>
                            <li><a href="{{ url('Tags/create') }}">{{trans('custom.newTag')}}</a></li>
                            <li><a href="{{ url('Admin/Raksti/visi') }}">{{trans('custom.allPosts')}}</a></li>
                            <li><a href="{{ url('Admin/Raksti/neapstiprinati') }}">{{trans('custom.allUnacceptedPosts')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

