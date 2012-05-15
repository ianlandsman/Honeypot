<div id="{{ $honey_name }}_wrap" style="display:none;">
	{{ Form::text($honey_name, '', array('id' => $honey_name)) }}
	{{ Form::hidden($honey_time, Crypter::encrypt(time())) }}
</div>