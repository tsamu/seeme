<?php
namespace SeeMe;

class SeeMeGatewayException extends Exception
{
    public function __construct($response,$errorCode)
    {
        $this->response = $response;
        $this->errorCode = $errorCode;
        parent::__construct( $response, $errorCode );
    }
    public function __toString()
    {
        return __CLASS__ . ": SEEME_GATEWAY_ERROR #{$this->errorCode}, {$this->response}\n";
    }
}
