<?php

class Note extends Eloquent{

		protected $fillable = array('name' , 'text');

		public function category(){
			return $this->belongsToMany('Category' , 'id');
		}




}