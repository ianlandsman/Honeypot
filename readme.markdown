## Honeypot - Form Defender

Honeypot is a Laravel framework bundle that uses the honeypot techinque to defend web forms. We put a fake form field in the form (hidden) with a common name which spam bots think is real. They fill it out and we check to see if it's filled in. If it is, we know a bot filled out the form.

We also include a second defence mechanism using a timestamp. If the form takes less that 5 seconds to fill in (you can configure the speed) we'll figure it's spam.

## Installation

In your applications bundles.php put:

	return array(
		'honeypot' => array('auto' => true),
	);

Add the Honeypot fields to your form

	{{ Form::open('save') }}

		{{ Form::honeypot() }}
		....
	{{ Form::close() }}

Then use Honeypot's custom form validators to check your form date. For example:

	$honeyfield = Config::get('honeypot::default.honeypot_field');
	$honeytime	= Config::get('honeypot::default.honeypot_field').'_time';

	$rules = array(
		'email' 	=> "required|email",
		$honeyfield => 'honeypot',
		$honeytime	=> 'honeytime|required'
	);

	$validator = Validator::make(Input::get(), $rules);

## Configuration

You'll find a config file in the config folder that lets you set the name of the honeypot field as well as set the speed check seconds value.