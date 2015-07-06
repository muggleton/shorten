<?php
namespace Shorty;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	// Protect i.d to allow for mass assignment
	protected $guarded = ['id'];

	// Disable timestamps
	public $timestamps = false;

	// Relationship
	public function links()
	{
		return $this->hasMany('Shorty\Link');
	}
}
