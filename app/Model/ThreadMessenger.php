<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class ThreadMessenger extends Model
{

	protected $table = 'messenger_threads';

	protected $fillable = [
		'user_student','user_teacher','user_company'
	];

}

?>