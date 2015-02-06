<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IncidentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$incidents = Incident::with(['location', 'person']);
		$description = Input::get('description');
		if ($description)
		{
			$incidents->where('description', 'LIKE', "%{$description}%");
		}

		$address = Input::get('address');
		if ($address)
		{
			$incidents->whereHas('location', function($query) use ($address){
				$query->where('address', 'LIKE',"%{$address}%");
			});
		}

		$neighborhood = Input::get('neighborhood');
		if($neighborhood)
		{

		}

		return $incidents->get();
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
