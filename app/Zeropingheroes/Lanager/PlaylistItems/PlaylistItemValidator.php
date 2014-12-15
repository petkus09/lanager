<?php namespace Zeropingheroes\Lanager\PlaylistItems;

use Fadion\ValidatorAssistant\ValidatorAssistant;
use Zeropingheroes\Lanager\Playlists\Playlist;
use Duration;

class PlaylistItemValidator extends ValidatorAssistant {

	protected $rules = [
		'playlist_id'	=> 'required|exists:playlists,id',
		'user_id'		=> 'required|exists:users,id',
		'url'			=> 'required|url|unique:playlist_items,url,{id},id,playlist_id,{playlist_id}',
		'title'			=> 'required|max:255',
		'duration'		=> 'required|numeric|min:1|max:{duration.max}',
		'playback_state'=> 'in:0,1,2',
	];

	protected $messages = [
		'url.unique'	=> 'The item has already been added to this playlist',
	];

	protected function before()
	{
		// Bind item id and playlist id for use in rules
		if( isset($this->inputs['id']) ) $this->bind('id', $this->inputs['id']);
		$this->bind('playlist_id', $this->inputs['playlist_id']);
		
		// Bind the maximum permitted item duration for use in rules
		$playlist = Playlist::findOrFail( $this->inputs['playlist_id'] );
		$this->bind('duration.max', $playlist->max_item_duration);
		$this->messages['duration.max'] = 'The item\'s duration must not exceed ' . Duration::longFormat($playlist->max_item_duration);

	}
}