<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $table = 'articles';

	protected $fillable = [
		"title",
		"body",
		"published_at",
		"slug",
		"category",
	];

	protected $dates = ['published_at'];

	// scopes
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}

	// mutators
	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::parse($date);
	}

}
