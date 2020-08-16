<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class FK_Skill extends Model
{

    protected $table = 'fk_skill';

    protected $fillable = [
        'student_id','company_id','teacher_id','skill_id'
    ];

}

?>