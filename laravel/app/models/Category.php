<?php

class Category extends Eloquent {

	protected $fillable = array('type'); 

	public function notes(){
		return $this->belongsToMany('Notes' , 'id');
	}
}