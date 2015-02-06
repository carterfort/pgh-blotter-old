<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	//

    protected $fillable = [
        'address',
        'neighborhood',
        'zone'
    ];

    public function incidents()
    {
        return $this->hasMany('Incident');
    }

}
