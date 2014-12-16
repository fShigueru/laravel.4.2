<?php
namespace Admin;

class HomeController extends BaseController {


	private $alias  = "home";

    /**
     * Description
     * @return type
     */
	public function getIndex()
	{
		$this->layout->content = \View::make($this->prefixo . '/home/hello');
	}

}
