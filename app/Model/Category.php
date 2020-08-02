<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Category extends 	Model
{

	protected $table = 'category';

	protected $fillable = [
		'name',
	];

}

?>