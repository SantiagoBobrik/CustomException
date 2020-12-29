<?php

namespace Helper;

class CustomException extends \Exception
{

    private $params;

    public function __construct(
        $code = 0,
        $message = null,
        \Exception $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function setParams($params)
    {

        $this->params = $params;
    }

    public function getParams()
    {
        return $this->params;
    }
}
