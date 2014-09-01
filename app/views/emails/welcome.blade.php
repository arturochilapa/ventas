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
            <p>{{link_to('/confirm/mail/'.$hash, trans('email.confirmmail'))}}</p>
        </div> 
	</body>
</html>