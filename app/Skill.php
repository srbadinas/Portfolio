<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //

    public function skill_type() {
        return $this->belongsTo('App\SkillType', 'skill_type_id');
    }
}
