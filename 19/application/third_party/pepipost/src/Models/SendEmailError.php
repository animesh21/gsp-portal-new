<?php
/*
 * PepipostAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PepipostAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class SendEmailError implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps error_message
     * @var string $errorMessage public property
     */
    public $errorMessage;

    /**
     * @todo Write general description for this property
     * @required
     * @maps error_code
     * @var integer $errorCode public property
     */
    public $errorCode;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $errorMessage Initialization value for $this->errorMessage
     * @param integer $errorCode    Initialization value for $this->errorCode
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->errorMessage = func_get_arg(0);
            $this->errorCode    = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['error_message'] = $this->errorMessage;
        $json['error_code']    = $this->errorCode;

        return $json;
    }
}