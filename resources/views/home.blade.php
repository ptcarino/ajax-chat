@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div id="chats" class="container">

                    </div>

                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="chatbody" type="text" class="form-control" />
                            <input type="hidden" id="users_id" name="users_id" value="{{ Auth::user()->id }}" />
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Send</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
