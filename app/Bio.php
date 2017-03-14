<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model {

	protected $table = 'biographies';

	protected $fillable = [
		"name",
		"photo",
		"title",
		"position",
		"bio",
		"phone",
		"email",
		"linkedin",
	];

}
