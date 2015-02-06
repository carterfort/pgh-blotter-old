<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	//
    protected $fillable = [
        'incident_id',
        'sex',
        'age'
    ];

    public function incident()
    {
        return $this->belongsTo('Incident');
    }

}
