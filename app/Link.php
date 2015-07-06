<?php
namespace Shorty;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	// Guard i.d so it's not fillable on mass assignment
	protected $guarded = ['id'];

	// Relationship 
	public function location()
	{
		return $this->hasOne('Shorty\Location');
	}

	
}
