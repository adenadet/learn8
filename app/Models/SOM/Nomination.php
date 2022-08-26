<?php

namespace App\Models\SOM;

use App\Models\Structure;
//use Illuminate\Database\Eloquent\Model;

class Nomination extends Structure
{
    protected $primaryKey = 'id';
    protected $table = 'staff_month_nominations';
    protected $fillable = array('user_id', 'description', 'month', 'created_by', 'updated_by', 'deleted_by', 'deleted_at');

    public function nominee(){
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
	}
}
