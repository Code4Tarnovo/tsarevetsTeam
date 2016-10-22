<?php

/** КОНФИГУРАЦИЯ **/

function loadConfigFile($configFile = false) {

	$configOptions = array();

	if ($configFile == false)
		$configFile = 'langConfig';


	if(is_readable("lang/{$configFile}.php")){
		$configOptions = require ("lang/{$configFile}.php");
	}

	return $configOptions;
}

function getConfig($index, $configFile = false) {

	$configOptions = array();
	$configOptions = loadConfigFile($configFile);

	if(strpos($index, '.')){
		$i = $configOptions;
		$parts = explode('.', $index);
            
		foreach($parts as $val){
			if(isset($i[$val]))
				$i = $i[$val];
			else
				break;
		}
            
		return $i;
	}
        
	if(isset($configOptions[$index]))
		return $configOptions[$index];
}

/** END CONFIGURATION **/


/** LANGUAGE **/

function loadLanguage() {

	$languageData = array();

	$currentLanguage = (!isset($_COOKIE['language']))
                            ? getConfig('language.default')
                            : $_COOKIE['language'];
                            
                    
	if(empty($languageData))
		$languageData = require ("lang/{$currentLanguage}.php");
        
	return $languageData;
}

function changeLanguage($language, $uri) {

	if(!isset($_COOKIE['language'])){
	    setcookie('language', $language, 
	                time() + getConfig('cookie.expire'), 
	                getConfig('cookie.path'), 
	                getConfig('cookie.domain'), 
	                getConfig('cookie.secure'), 
	                getConfig('cookie.httponly')
	            );
	}
	else{
	    if(isset($_COOKIE['language']) && $_COOKIE['language'] !== $language){
	        setcookie('language', $language, 
	                	time() + getConfig('cookie.expire'), 
	                    getConfig('cookie.path'), 
	                    getConfig('cookie.domain'), 
	                    getConfig('cookie.secure'), 
	                    getConfig('cookie.httponly')
	                );
	    }
	}

	header('Location: ' . $uri);
}

function getLanguageText($index, $delimeter = ' ') {

	$languageData = array();
	$allIndexes = array();
	$languageData = loadLanguage();
	
	if(is_array($index)) {
		foreach($index as $values) {
			array_push($allIndexes, getLanguageText($values));
		}
		return join($delimeter, $allIndexes);
	}
	
	if (strpos($index, '.')) {
		$data = $languageData;
		$parts = explode('.', $index);

		foreach($parts as $value) {
			if(isset($data[$value]))
				$data = $data[$value];
			else
                break;
        }

		return $data;
	}

	if(isset($languageData[$index]))
		return $languageData[$index];
}