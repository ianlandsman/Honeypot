<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Main field name
	|--------------------------------------------------------------------------
	|
	| The name of the field we're hoping spam bots enter info into. Be tricky,
	| we want them to not be able to guess it's a honeypot easily.
	|
	*/

	'honeypot_field' => 'first_name',		

	/*
	|--------------------------------------------------------------------------
	| Time restriction
	|--------------------------------------------------------------------------
	|
	| We also make sure the form isn't being filled out too fast. Set this to
	| the minumum number of seconds it should take for a human to complete the form.
	| If it takes less than this we'll consider it no good.
	|
	*/

	'honeypot_speed' => 5,	
);