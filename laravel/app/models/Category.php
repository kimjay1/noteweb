<?php

class Category extends Eloquent 
{
	protected $fillable = array('type'); 

	public function notes()
	{
		return $this->hasMany('Notes' , 'id');
	}
}