<?php

// Create a Form macro which generates the fake honeypot field 
// as well as the time check field
Form::macro('honeypot', function()
{
	return View::make("honeypot::fields");
});

// We add a custom validator to validate the honeypot text and time check fields
Validator::register('honeypot', function($attribute, $value, $parameters)
{
	// We want the value to be empty, empty means it wasn't a spammer
    return $value == '';
});

Validator::register('honeytime', function($attribute, $value, $parameters)
{
	// The current time should be greater than the time the form was built + the speed option
    return ( is_numeric($value) && time() > ($value + Config::get('honeypot::default.honeypot_speed')) );
});