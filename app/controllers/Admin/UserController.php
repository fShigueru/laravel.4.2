<?php
namespace Admin;

class UserController extends BaseController {


	function __construct() {

		//Se for um post envia uma key
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	/**
	 * redireciona para o login, se estiver logado envia para a página principal
	 * @return view
	 */
	public function getIndex() {

		if(\Auth::check())
			return \Redirect::to($this->prefixo);

		$this->layout->content = \View::make($this->prefixo . '/user/login');

	}
	/**
	 * Tenta realizar o login
	 * @return view
	 */

	public function postLogin() {


		try {

			$validacao = \Validator::make(\Input::all(), \User::$rules);

			//se validação falhar, se não passar na validação
			if($validacao->fails())
				return \Redirect::to($this->prefixo . '/user/login')->withInput()->withErrors($validacao);

			$data = \Input::all();

		} catch (Exception $e) {
			return \Redirect::to($this->prefixo . '/user/login')->withInput()->withErrors($validacao);
		}

		try {

			unset($data['_token']);

			if(\Auth::attempt($data)) {

				return \Redirect::to($this->prefixo);

			} else {
			    return \Redirect::to($this->prefixo . '/user/login')->withInput()->withErrors("Usuário ou senha incorretors");
			}

		} catch (Exception $e) {
			 return \Redirect::to($this->prefixo . '/user/login')->withInput()->withErrors($validacao);
		}

	}

	public function getLogout() {

		try {
			\Auth::logout();
			return \Redirect::to($this->prefixo . '/user/login');
		} catch (Exception $e) {
			throw new Exception("Não foi possivel fazer o logout", 1);
		}
	}

}