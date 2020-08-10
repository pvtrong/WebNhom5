<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Messenger extends Model
{

	protected $table = 'messenger';

	protected $fillable = [
		'fk_user_id','fk_thread_id','message'
	];

}

?>