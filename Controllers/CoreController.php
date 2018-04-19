<?php

/*
 * core class
 * Cretes url and loads core controller
 * url formate /controller/method/parameters
 */
Class CoreController
{
    protected $currentController = 'HomeController';
    protected $currentMethode = 'index';
    protected $params = [];


	public  function __construct()
	{
		
		$url = $this->getUrl();
		if(file_exists('./Controllers/'. ucwords($url[0]). '.php'))
		{
			$this->currentController = ucwords($url[0]);
			unset($url[0]);
		}

		require_once $this->currentController.'.php';

		$this->currentController = new $this->currentController();
		if (isset($url[1]))
		{
			if (method_exists($this->currentController,$url[1]))
			{
				$this->currentMethode = $url[1];
                unset($url[1]);
			}
		}
	
		$this->params = $url ? array_values($url):[];
		call_user_func_array([$this->currentController,$this->currentMethode],$this->params);
	}

    public function getUrl()
    {
		
        if(isset($_GET['url']))
        {
            //this will trim the forward slasch from url at the end
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;


        }
    }
}