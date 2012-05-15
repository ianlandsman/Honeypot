<style type="text/css">
#{{ Config::get('honeypot::default.honeypot_field') }}_wrap
{
	display: none !important;
}
</style>

<div id="{{ Config::get('honeypot::default.honeypot_field') }}_wrap">
	{{ Form::text(Config::get('honeypot::default.honeypot_field'), '', array('id' => Config::get('honeypot::default.honeypot_field'))) }}
	{{ Form::hidden(Config::get('honeypot::default.honeypot_field').'_time', time()) }}
</div>