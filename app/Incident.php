<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model {

	//

    protected $fillable = [
        'location_id',
        'occurred_at',
        'report_name',
        'crime_report_number',
        'section',
        'description'
    ];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function person()
    {
        return $this->hasOne('App\Person');
    }

}
