<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Skill extends Model
{

    protected $table = 'skill';

    protected $fillable = [
        'name',
    ];

}

?>