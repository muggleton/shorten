<?php
namespace Shorty;

use Illuminate\Database\Eloquent\Model;
// Soft deletes
use Illuminate\Database\Eloquent\SoftDeletes;

// Use the base encoding class
use Shorty\Library\Base;

class Link extends Model
{

	use SoftDeletes;
	
	// Guard i.d so it's not fillable on mass assignment
	protected $guarded = ['id'];
	// Register custom attributes
	protected $appends = ['short', 'long'];
	// Only show short and long
	protected $visible = ['id', 'short', 'long', 'created_at'];

	// Relationship 
	public function location()
	{
		return $this->hasOne('Shorty\Location', 'id', 'location_id');
	}

	
	public function getShortAttribute()
	{
		return config('app.url') . Base::encode($this->id);
	}

	public function getLongAttribute()
	{
		return $this->location->url;
	}
}
