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
        if (Auth::check()){
            return Redirect::to('profile');
        }else{
            return View::make('users.register');
        }
		
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
            
            $hashActivate = md5(rand(1, 999999999));                                    
            $users = new User;
            $password = Hash::make(Input::get('password'));
            $users->email = Input::get('email');
            $users->alias = Input::get('email');
            $users->password = $password;
            $users->firstname = Input::get('firstname');
            $users->middlename = Input::get('midlename');
            $users->lastname = Input::get('lastname');
            $users->birthdate = Input::get('birthdate');
            $users->sex = Input::get('sex');
            $users->status = 'inactive';
            $users->hash = $hashActivate;            
            $users->save();
            Session::flash('message', trans('users.user_created'));
            $data = array("hash" => $hashActivate);
            $data = array(
                "email"     => Input::get('email'),
                "name"      => Input::get('firstname'),
                "hash"      => $hashActivate
            );
            Mail::send('emails.welcome', $data, function($message)
            {
                $message->from('postmaster@eprestamos.com.mx', 'Ventas');
                $message->to(Input::get('email'), Input::get('firstname').' '.Input::get('midlename'))->subject('Welcome!');
            });          
            return View::make('users.store');
            
        }
	   
		
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

	/**
	* Valida el Hash en la confirmacion de mail
	* @param string $hash
	* @return Confirmacion
	*/
	public function hashValidation($hash){
		$user = User::where('hash', '=', $hash)
		->get();
		print_r($user);
		#$users = User::where('votes', '>', 100)->take(10)->get();

	}


}
