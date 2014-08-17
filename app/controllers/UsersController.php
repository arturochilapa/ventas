<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Confirmar Usuarios Registrados.
	 *
	 * @return Response
	 */
	public function confirm()
	{
	   return View::make('users.confirm');
    }
        
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        
		return View::make('users.register');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	   $rules = array(
            'email'         => 'required|email|unique:users',
            'firstname'     => 'required',
            'midlename'     => 'required',
            'password'     => 'required|min:6',
            'birthdate'     => 'required|date',
       );
       $validator = Validator::make(Input::all(), $rules);
       if ($validator->fails()) {
            return Redirect::to('/register')->withErrors($validator);
        } else {
            $users = new User;
            $password = Hash::make(Input::get('password'));
            $users->email = Input::get('email');
            $users->alias = Input::get('email');
            $users->password = $password;
            $users->firstname = Input::get('firstname');
            $users->middlename = Input::get('midlename');
            $users->lastname = Input::get('lastname');
            $users->birthdate = Input::get('birthdate');
            $users->save();
            Session::flash('message', trans('users.user_created'));
            
            
        }
	   
		return View::make('users.store');
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
