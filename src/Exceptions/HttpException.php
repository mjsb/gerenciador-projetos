<?php

namespace Gerenciador\Exceptions;

class HttpException extends \Exception
{
    public function __constuct($message, $code, \Exception $previous = null)
    {
        http_response_code($code);
        parent::__constuct($message, $code, $previous);
    }
}
