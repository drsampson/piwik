<?php
//TODO cache the result of each method as it is supposed to be static and not changing throughout a same page request
class Piwik_Url 
{
	
	static function getArrayFromCurrentQueryString()
	{	
		$queryString = Piwik_Url::getCurrentQueryString();
		$queryString = htmlspecialchars($queryString);
		$urlValues = Piwik_Common::getArrayFromQueryString($queryString);
		return $urlValues;
	}
	static function getCurrentQueryStringWithParametersModified( $params )
	{
		$urlValues = self::getArrayFromCurrentQueryString();
	//	var_dump($urlValues);
		foreach($params as $key => $value)
		{
			$urlValues[$key] = $value;
		}
		
		return '?' . http_build_query($urlValues);
	}
	
	static public function redirectToUrl( $url )
	{
		header("Location: $url");
		exit;
	}
	
	static public function getReferer()
	{
		if(!empty($_SERVER['HTTP_REFERER']))
		{
			return $_SERVER['HTTP_REFERER'];
		}
		return false;
	}

	static public function getCurrentUrl()
	{
		return    self::getCurrentHost()
				. self::getCurrentScriptName() 
				. self::getCurrentQueryString();
	}
	
	static public function getCurrentUrlWithoutQueryString()
	{
		
		return    self::getCurrentHost()
				. self::getCurrentScriptName() ;
	}
	
	/**
	 * Ending with /
	 */
	static public function getCurrentUrlWithoutFileName()
	{
		
		$host = self::getCurrentHost();
		$queryString = self::getCurrentScriptName() ;
		
		//add a fake letter case /test/test2/ returns /test which is not expected
		$urlDir = dirname ($queryString . 'x');
		return $host.$urlDir.'/';
		
	}
	
	static public function getCurrentScriptName()
	{
		$url = '';
		if( !empty($_SERVER['PATH_INFO']) ) 
		{ 
			$url = $_SERVER['PATH_INFO'];
		} 
		else if( !empty($_SERVER['REQUEST_URI']) ) 
		{
			if( ($pos = strpos($_SERVER['REQUEST_URI'], "?")) !== false ) 
			{
				$url = substr($_SERVER['REQUEST_URI'], 0, $pos);
			} 
			else 
			{
				$url = $_SERVER['REQUEST_URI'];
			}
		} 
		
		if(empty($url))
		{
			$url = $_SERVER['SCRIPT_NAME'];
		}
		return $url;
	}
	
	static public function getCurrentHost()
	{
		if(isset($_SERVER['HTTPS'])
			&& ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == true)
			)
		{
			$url = 'https';
		}
		else
		{
			$url = 'http';
		}
		
		$url .= '://' . $_SERVER['HTTP_HOST'];
		return $url;
	}
		
	
	static public function getCurrentQueryString()
	{
		$url = '';	
		if(isset($_SERVER['QUERY_STRING'])
			&& !empty($_SERVER['QUERY_STRING']))
		{
			$url .= "?".$_SERVER['QUERY_STRING'];
		}
		return $url;
	}
}

