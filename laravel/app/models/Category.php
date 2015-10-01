<?php

class Category extends Eloquent {

	use SoftDeletingTrait;

	protected $fillable = array('type'); 
	// protected $table = 'category'; for your own design
	public function notes(){
		return $this->belongsToMany('Notes' , 'id');
	}
}