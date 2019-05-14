<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    
    public function Project() {
        return $this->belongsTo('App\Project', 'project_id');
    }
}
