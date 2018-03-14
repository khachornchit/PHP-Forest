<?php
class Content {
	private $json;
	private $name;
	public function __construct($name, $content, $enc = true) {
		if ($enc)
			$content = json_encode ( $content );
		$error = json_last_error ();
		if ($error != JSON_ERROR_NONE) {
			switch (json_last_error ()) {
				case JSON_ERROR_DEPTH :
					$errorMessage = '"Maximum stack depth exceeded"';
					break;
				case JSON_ERROR_STATE_MISMATCH :
					$errorMessage = '"Underflow or the modes mismatch"';
					break;
				case JSON_ERROR_CTRL_CHAR :
					$errorMessage = '"Unexpected control character found"';
					break;
				case JSON_ERROR_SYNTAX :
					$errorMessage = '"Syntax error, malformed JSON"';
					break;
				case JSON_ERROR_UTF8 :
					$errorMessage = '"Malformed UTF-8 characters, possibly incorrectly encoded"';
					break;
				default :
					$errorMessage = '"Unknown error"';
					break;
			}
			$this->json = $errorMessage;
			$this->name = $name;
		} else {
			$this->json = $content;
			$this->name = $name;
		}
	}
	
	/**
	 *
	 * @return string
	 */
	public function get() {
		return "\"{$this->name}\": {$this->json},";
	}
	
	/**
	 *
	 * @return string
	 */
	public function get_array() {
		return "{$this->json},";
	}
}
class Json {
	private $type;
	private $callback;
	private $contents = array ();
	public function __construct($type = 'raw', $callback = 'none') {
		if (! ($type == 'callback' or $type == 'var'))
			$type = 'raw';
		$this->type = $type;
		$this->callback = $callback;
	}
	
	/**
	 *
	 * @param
	 *        	name string
	 * @param
	 *        	content object|String|null|array|bool
	 * @param
	 *        	enc bool
	 */
	public function add($name = 'message', $content = true, $enc = true) {
		$dum = new Content ( $name, $content, $enc );
		array_push ( $this->contents, $dum );
		return true;
	}
	
	/**
	 *
	 * @return string
	 */
	public function make($array = false) {
		$jsonText = "";
		
		if ($this->type == 'var')
			$jsonText .= "var {$this->callback} = ";
		elseif ($this->type == 'callback')
			$jsonText .= "{$this->callback}(";
		$jsonText .= '{';
		if (is_array ( $this->contents )) {
			foreach ( $this->contents as $content ) {
				$jsonText .= $content->get ();
			}
		}
		
		$jsonText = trim ( $jsonText, ', ' );
		
		$jsonText .= '}';
		// End of encapsulate JSON
		if ($this->type == 'var')
			$jsonText .= ';';
		elseif ($this->type == 'callback')
			$jsonText .= ');';
		
		return $jsonText;
	}
	
	/**
	 *
	 * @return string
	 */
	public function make_array() {
		$jsonText = "";
		
		if ($this->type == 'var')
			$jsonText .= "var {$this->callback} = ";
		elseif ($this->type == 'callback')
			$jsonText .= "{$this->callback}(";
		$jsonText .= '[';
		if (is_array ( $this->contents )) {
			foreach ( $this->contents as $content ) {
				$jsonText .= $content->get_array ();
			}
		}
		
		$jsonText = trim ( $jsonText, ', ' );
		
		$jsonText .= ']';
		// End of encapsulate JSON
		if ($this->type == 'var')
			$jsonText .= ';';
		elseif ($this->type == 'callback')
			$jsonText .= ');';
		
		return $jsonText;
	}
	public function send() {
		header ( 'Cache-Control: no-cache, must-revalidate' );
		header ( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
		header ( 'Content-type: application/json' );
		print $this->make ();
	}
	public function send_array() {
		header ( 'Cache-Control: no-cache, must-revalidate' );
		header ( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
		header ( 'Content-type: application/json' );
		print $this->make_array ();
	}
}
class ResponseCodeConfig {
	private $json;
	protected $code;
	protected $message;
	function __construct() {
		$this->json = new Json ();
		if (! function_exists ( 'http_response_code' )) {
			function http_response_code($code = NULL) {
				switch ($code) {
					case 100 :
						$text = 'Continue';
						break;
					case 101 :
						$text = 'Switching Protocols';
						break;
					case 200 :
						$text = 'OK';
						break;
					case 201 :
						$text = 'Created';
						break;
					case 202 :
						$text = 'Accepted';
						break;
					case 203 :
						$text = 'Non-Authoritative Information';
						break;
					case 204 :
						$text = 'No Content';
						break;
					case 205 :
						$text = 'Reset Content';
						break;
					case 206 :
						$text = 'Partial Content';
						break;
					case 300 :
						$text = 'Multiple Choices';
						break;
					case 301 :
						$text = 'Moved Permanently';
						break;
					case 302 :
						$text = 'Moved Temporarily';
						break;
					case 303 :
						$text = 'See Other';
						break;
					case 304 :
						$text = 'Not Modified';
						break;
					case 305 :
						$text = 'Use Proxy';
						break;
					case 400 :
						$text = 'Bad Request';
						break;
					case 401 :
						$text = 'Unauthorized';
						break;
					case 402 :
						$text = 'Payment Required';
						break;
					case 403 :
						$text = 'Forbidden';
						break;
					case 404 :
						$text = 'Not Found';
						break;
					case 405 :
						$text = 'Method Not Allowed';
						break;
					case 406 :
						$text = 'Not Acceptable';
						break;
					case 407 :
						$text = 'Proxy Authentication Required';
						break;
					case 408 :
						$text = 'Request Time-out';
						break;
					case 409 :
						$text = 'Conflict';
						break;
					case 410 :
						$text = 'Gone';
						break;
					case 411 :
						$text = 'Length Required';
						break;
					case 412 :
						$text = 'Precondition Failed';
						break;
					case 413 :
						$text = 'Request Entity Too Large';
						break;
					case 414 :
						$text = 'Request-URI Too Large';
						break;
					case 415 :
						$text = 'Unsupported Media Type';
						break;
					case 500 :
						$text = 'Internal Server Error';
						break;
					case 501 :
						$text = 'Not Implemented';
						break;
					case 502 :
						$text = 'Bad Gateway';
						break;
					case 503 :
						$text = 'Service Unavailable';
						break;
					case 504 :
						$text = 'Gateway Time-out';
						break;
					case 505 :
						$text = 'HTTP Version not supported';
						break;
					default :
						$text = 'Unknown http status code "' . htmlentities ( $code ) . '"';
						exit ( 'Unknown http status code "' . htmlentities ( $code ) . '"' );
						break;
				}
				
				$protocol = (isset ( $_SERVER ['SERVER_PROTOCOL'] ) ? $_SERVER ['SERVER_PROTOCOL'] : 'HTTP/1.0');
				header ( $protocol . ' ' . $code . ' ' . $text );
				$GLOBALS ['http_response_code'] = $code;
			}
		} else {
			$this->code = (isset ( $GLOBALS ['http_response_code'] ) ? $GLOBALS ['http_response_code'] : 200);
		}
	}
	private function GetMessage() {
		if ($this->code !== NULL) {
			switch ($this->code) {
				case 100 :
					return 'Continue';
				case 101 :
					return 'Switching Protocols';
				case 200 :
					return 'OK';
				case 201 :
					return 'Created';
				case 202 :
					return 'Accepted';
				case 203 :
					return 'Non-Authoritative Information';
				case 204 :
					$text = 'No Content';
					break;
				case 205 :
					return 'Reset Content';
				case 206 :
					return 'Partial Content';
				case 300 :
					return 'Multiple Choices';
				case 301 :
					return 'Moved Permanently';
				case 302 :
					return 'Moved Temporarily';
				case 303 :
					return 'See Other';
				case 304 :
					return 'Not Modified';
				case 305 :
					return 'Use Proxy';
				case 400 :
					return 'Bad Request';
				case 401 :
					return 'Unauthorized';
				case 402 :
					return 'Payment Required';
				case 403 :
					return 'Forbidden';
				case 404 :
					return 'Not Found';
				case 405 :
					return 'Method Not Allowed';
				case 406 :
					return 'Not Acceptable';
				case 407 :
					return 'Proxy Authentication Required';
				case 408 :
					return 'Request Time-out';
				case 409 :
					return 'Conflict';
				case 410 :
					return 'Gone';
				case 411 :
					return 'Length Required';
				case 412 :
					return 'Precondition Failed';
				case 413 :
					return 'Request Entity Too Large';
				case 414 :
					return 'Request-URI Too Large';
				case 415 :
					return 'Unsupported Media Type';
				case 500 :
					return 'Internal Server Error';
				case 501 :
					return 'Not Implemented';
				case 502 :
					return 'Bad Gateway';
				case 503 :
					return 'Service Unavailable';
				case 504 :
					return 'Gateway Time-out';
				case 505 :
					return 'HTTP Version not supported';
				default :
					return 'Unknown http status code "' . htmlentities ( $code ) . '"';
			}
		}
	}
	protected function ImplementCodeJson($code) {
		$this->ImplementCode ($code);
		$this->ImplementJson ();
	}
	protected function ImplementCode($code) {
		$this->code = $code;
		http_response_code ( $this->code );
		$this->message = $this->GetMessage ();
	}
	private function ImplementJson() {
		$this->json->add ( 'code', $this->code );
		$this->json->add ( 'message', $this->message );
		$this->json->send ();
	}
}
?>