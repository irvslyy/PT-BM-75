<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $table = 'project';
   protected $fillable = [
       'project_category',
       'brand_project',
       'location_project',
       'hold_project',
       'worker_project',
       'revenue_project',
       'deadline_project',
   ];
}
