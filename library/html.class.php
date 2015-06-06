<?php

class HTML {
	private $js = array();

	function shortenUrls($data) {
		$data = preg_replace_callback('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', array(get_class($this), '_fetchTinyUrl'), $data);
		return $data;
	}

	function sanitize($data) {
		return mysql_real_escape_string($data);
	}

	function link($text,$path,$prompt = null,$confirmMessage = "Are you sure?") {
		$path = str_replace(' ','-',$path);
		if ($prompt) {
			$data = '<a href="javascript:void(0);" onclick="javascript:jumpTo(\''.BASE_PATH.'/'.$path.'\',\''.$confirmMessage.'\')">'.$text.'</a>';
		} else {
			$data = '<a href="'.BASE_PATH.'/'.$path.'">'.$text.'</a>';	
		}
		return $data;
	}

	function includeJs($fileName) {
		$data = '<script src="/javascripts/'.$fileName.'.js"></script>' . PHP_EOL;
		return $data;
	}

	function includeCss($fileName) {
		$data = '<link href="/stylesheets/'.$fileName.'.css" rel="stylesheet">' . PHP_EOL;
		return $data;
	}
}