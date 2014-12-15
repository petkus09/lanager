<?php namespace Zeropingheroes\Lanager\Events;

use Fadion\ValidatorAssistant\ValidatorAssistant;

class EventValidator extends ValidatorAssistant {

	protected $rules = [
		'name'			=> 'required|max:255',
		'start'			=> 'required|date_format:Y-m-d H:i:s|before:end',
		'end'			=> 'required|date_format:Y-m-d H:i:s|after:start',
		'signup_opens'	=> 'date_format:Y-m-d H:i:s|before:signup_closes|before:end',
		'signup_closes'	=> 'date_format:Y-m-d H:i:s|after:signup_opens',
		'event_type_id'	=> 'numeric|exists:event_types,id',
	];

}