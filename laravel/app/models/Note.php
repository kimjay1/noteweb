<?php

class Note extends Eloquent{

		use SoftDeletingTrait;

		protected $fillable = array('name' , 'text');

		public function category(){
			return $this->belongsToMany('Category' , 'id');
		}


}