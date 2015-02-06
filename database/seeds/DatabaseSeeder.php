<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Location;
use App\Incident;
use App\Person;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$location = Location::create([
			'address' => '100 block Rhine Ct',
			'neighborhood' => 'Spring Hill-City View',
			'zone' => 1
		]);

		$time = explode(":", '11:25');
		$occurance = Carbon::now()->setTime($time[0], $time[1]);
		$incident = Incident::create([
			'location_id' => $location->id,
			'occurred_at' => $occurance,
			'report_name' => 'ARREST',
			'crime_report_number' => '15002882',
			'section' => '2701',
			'description' => 'Simple assault.'
		]);

		Person::create([
			'incident_id' => $incident->id,
			'sex' => 'Male',
			'age' => 22
		]);

	}

}
