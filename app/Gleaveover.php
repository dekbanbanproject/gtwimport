<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gleaveover extends Model
{

     protected $table = 'gleave_over';
     protected $primaryKey = 'ID';
     protected $fillable = [
          'ID','PERSON_ID',
          'DAY_LEAVE_OVER',
          'DATE_TIME',
          'OVER_YEAR_ID',
          'OLDS',
          'DAY_LEAVE_OVER_BEFORE',
          'HR_PERSON_TYPE_ID'
     ];
}
