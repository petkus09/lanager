<?php namespace Zeropingheroes\Lanager\Seeds;

use Zeropingheroes\Lanager\Pages\Page;
use Illuminate\Database\Seeder,
	Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		if ( DB::table('pages')->count() ) return; // don't seed if table is not empty

		$pages = 
			[
				[
					'title' => 'Example',
					'content' =>  'This is an example page.'
				]
			];
		foreach($pages as $page)
		{
			Page::create($page);
		}
	}
}