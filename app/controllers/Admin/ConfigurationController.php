<?php
namespace Admin;

class ConfigurationController extends BaseController {

	private $alias  = "configuration";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$configurations = \Configuration::all();

		$this->layout->content = \View::make($this->prefixo . '/' . $this->alias . '/index')->with('configurations', $configurations);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$configuration = \Configuration::find($id);

		if(empty($configuration)){

			return \Redirect::to($this->prefixo . '/' . $this->alias);

		}

		$this->layout->content = \View::make($this->prefixo . '/' . $this->alias . '/show')->with('configuration', $configuration);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		dd($id);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
