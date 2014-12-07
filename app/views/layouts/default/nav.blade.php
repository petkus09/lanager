<?php

echo Navbar::withBrand('<img src="' . asset('img/logo.png') .'" width="82" height="29" alt="LANager Logo">')
			->withContent(
				Navigation::links(
					[
						[
							'title' => 'Shouts',
							'link' => URL::route('shouts.index'),
						],
						[
							'title' => 'Events',
							'link' => URL::route('events.index'),
						],
						[
							'title' => 'Users',
							'link' => URL::route('users.index'),
						],
						[
                            'title' => 'Teams',
                            'link' => URL::route('teams.index'),
                        ],
						[
							'title' => 'Games',
							'link' => URL::route('usage.show', 'applications'),
						],
						[
							'title' => 'Servers',
							'link' => URL::route('usage.show', 'servers'),
						],
						[
							'title' => 'Playlists',
							'link' => URL::route('playlists.index'),
						],
						[
							'Info',
							$info,
						],
						[
							'Links',
							$links,
						],
					]
				)
			)
			->withContent(View::make('layouts/default/auth'));
