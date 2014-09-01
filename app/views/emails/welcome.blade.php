<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		{{ HTML::style('/assets/mail.css') }}
	</head>
	<body>
        <div id="box">
            <h2>{{trans('email.hello')}} {{$name}},</h2>
            <p>{{trans('email.thanks')}}</p>
            <p><a href="{{link_to('/confirm/mail/'.$hasg)}}">{{trans('email.confirmmail')}}</a></p>
        </div> 
	</body>
</html>