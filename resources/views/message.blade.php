<!doctype html>
<html>
    <head>
        <title>Send a message</title>
    </head>
    <body>
        <h3>Write the message</h3>
        {!! Form::open(['url' => 'send']) !!}
            {{csrf_field()}}

            {{ Form::label('msg_label', 'message') }}
            <br>
            {{ Form::text('msg_body')}}
            {{ Form::submit('send')}}
        {!! Form::close() !!}
    </body>
</html>