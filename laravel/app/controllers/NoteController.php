<?php

class NoteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$notes1 = Note::all();
		return View::make('notes.index')->with('notes' , $notes1);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('notes.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$notes = new Note;
		$notes->name = Input::get('name');
		$notes->text = Input::get('text');
		$notes->save();

		return Redirect::to('notes');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$notes2 = Note::find($id);
		return View::make('notes.show')->with('notes' , $notes2);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$noteedit = Note::find($id);
		return View::make('notes.edit')->with('notes' , $noteedit);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$notes = Note::find($id);
		$notes->name = Input::get('name');
		$notes->text = Input::get('text');
		$notes->save();

		return Redirect::to('notes');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$note = Note::find($id);
		$note->delete();

		Session::flash('message', 'Successfully deleted the Note you have selected!');
		return Redirect::to('notes');
	}


}
