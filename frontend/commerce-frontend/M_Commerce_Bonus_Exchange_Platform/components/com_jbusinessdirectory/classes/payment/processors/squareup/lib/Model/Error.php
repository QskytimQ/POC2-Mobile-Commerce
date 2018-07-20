<?php
/**
 * Error
 *
 * PHP version 5
 *
 * @category Class
 * @package  SquareConnect
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 Square, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Error Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     SquareConnect
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Error implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'category' => 'string',
        'code' => 'string',
        'detail' => 'string',
        'field' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'category' => 'category',
        'code' => 'code',
        'detail' => 'detail',
        'field' => 'field'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'category' => 'setCategory',
        'code' => 'setCode',
        'detail' => 'setDetail',
        'field' => 'setField'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'category' => 'getCategory',
        'code' => 'getCode',
        'detail' => 'getDetail',
        'field' => 'getField'
    );
  
    
    /**
      * $category 
      * @var string
      */
    protected $category;
    
    /**
      * $code 
      * @var string
      */
    protected $code;
    
    /**
      * $detail 
      * @var string
      */
    protected $detail;
    
    /**
      * $field 
      * @var string
      */
    protected $field;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->category = $data["category"];
            $this->code = $data["code"];
            $this->detail = $data["detail"];
            $this->field = $data["field"];
        }
    }
    
    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
  
    /**
     * Sets category
     * @param string $category 
     * @return $this
     */
    public function setCategory($category)
    {
        $allowed_values = array("API_ERROR", "AUTHENTICATION_ERROR", "INVALID_REQUEST_ERROR", "RATE_LIMIT_ERROR", "PAYMENT_METHOD_ERROR", "REFUND_ERROR");
        if (!in_array($category, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'category', must be one of 'API_ERROR', 'AUTHENTICATION_ERROR', 'INVALID_REQUEST_ERROR', 'RATE_LIMIT_ERROR', 'PAYMENT_METHOD_ERROR', 'REFUND_ERROR'");
        }
        $this->category = $category;
        return $this;
    }
    
    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
  
    /**
     * Sets code
     * @param string $code 
     * @return $this
     */
    public function setCode($code)
    {
        $allowed_values = array("INTERNAL_SERVER_ERROR", "UNAUTHORIZED", "ACCESS_TOKEN_EXPIRED", "ACCESS_TOKEN_REVOKED", "FORBIDDEN", "INSUFFICIENT_SCOPES", "APPLICATION_DISABLED", "V1_APPLICATION", "V1_ACCESS_TOKEN", "CARD_PROCESSING_NOT_ENABLED", "BAD_REQUEST", "MISSING_REQUIRED_PARAMETER", "INCORRECT_TYPE", "INVALID_TIME", "INVALID_TIME_RANGE", "INVALID_VALUE", "INVALID_CURSOR", "UNKNOWN_QUERY_PARAMETER", "CONFLICTING_PARAMETERS", "EXPECTED_JSON_BODY", "INVALID_SORT_ORDER", "VALUE_TOO_LONG", "VALUE_TOO_LOW", "EXPECTED_BOOLEAN", "EXPECTED_INTEGER", "EXPECTED_FLOAT", "EXPECTED_STRING", "EXPECTED_OBJECT", "EXPECTED_ARRAY", "INVALID_ARRAY_VALUE", "INVALID_ENUM_VALUE", "INVALID_CONTENT_TYPE", "INVALID_FORM_VALUE", "ONE_INSTRUMENT_EXPECTED", "NO_FIELDS_SET", "CARD_DECLINED", "CARD_EXPIRED", "VERIFY_CVV_FAILURE", "VERIFY_AVS_FAILURE", "INVALID_EXPIRATION", "INVALID_EXPIRATION_YEAR", "INVALID_EXPIRATION_DATE", "INVALID_CARD", "DELAYED_TRANSACTION_EXPIRED", "DELAYED_TRANSACTION_CANCELED", "DELAYED_TRANSACTION_CAPTURED", "DELAYED_TRANSACTION_FAILED", "CARD_TOKEN_EXPIRED", "CARD_TOKEN_USED", "AMOUNT_TOO_HIGH", "UNSUPPORTED_INSTRUMENT_TYPE", "REFUND_AMOUNT_INVALID", "REFUND_ALREADY_PENDING", "PAYMENT_NOT_REFUNDABLE", "INVALID_CARD_DATA", "NOT_FOUND", "REQUEST_TIMEOUT", "REQUEST_ENTITY_TOO_LARGE", "UNSUPPORTED_MEDIA_TYPE", "RATE_LIMITED", "NOT_IMPLEMENTED", "SERVICE_UNAVAILABLE");
        if (!in_array($code, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'code', must be one of 'INTERNAL_SERVER_ERROR', 'UNAUTHORIZED', 'ACCESS_TOKEN_EXPIRED', 'ACCESS_TOKEN_REVOKED', 'FORBIDDEN', 'INSUFFICIENT_SCOPES', 'APPLICATION_DISABLED', 'V1_APPLICATION', 'V1_ACCESS_TOKEN', 'CARD_PROCESSING_NOT_ENABLED', 'BAD_REQUEST', 'MISSING_REQUIRED_PARAMETER', 'INCORRECT_TYPE', 'INVALID_TIME', 'INVALID_TIME_RANGE', 'INVALID_VALUE', 'INVALID_CURSOR', 'UNKNOWN_QUERY_PARAMETER', 'CONFLICTING_PARAMETERS', 'EXPECTED_JSON_BODY', 'INVALID_SORT_ORDER', 'VALUE_TOO_LONG', 'VALUE_TOO_LOW', 'EXPECTED_BOOLEAN', 'EXPECTED_INTEGER', 'EXPECTED_FLOAT', 'EXPECTED_STRING', 'EXPECTED_OBJECT', 'EXPECTED_ARRAY', 'INVALID_ARRAY_VALUE', 'INVALID_ENUM_VALUE', 'INVALID_CONTENT_TYPE', 'INVALID_FORM_VALUE', 'ONE_INSTRUMENT_EXPECTED', 'NO_FIELDS_SET', 'CARD_DECLINED', 'CARD_EXPIRED', 'VERIFY_CVV_FAILURE', 'VERIFY_AVS_FAILURE', 'INVALID_EXPIRATION', 'INVALID_EXPIRATION_YEAR', 'INVALID_EXPIRATION_DATE', 'INVALID_CARD', 'DELAYED_TRANSACTION_EXPIRED', 'DELAYED_TRANSACTION_CANCELED', 'DELAYED_TRANSACTION_CAPTURED', 'DELAYED_TRANSACTION_FAILED', 'CARD_TOKEN_EXPIRED', 'CARD_TOKEN_USED', 'AMOUNT_TOO_HIGH', 'UNSUPPORTED_INSTRUMENT_TYPE', 'REFUND_AMOUNT_INVALID', 'REFUND_ALREADY_PENDING', 'PAYMENT_NOT_REFUNDABLE', 'INVALID_CARD_DATA', 'NOT_FOUND', 'REQUEST_TIMEOUT', 'REQUEST_ENTITY_TOO_LARGE', 'UNSUPPORTED_MEDIA_TYPE', 'RATE_LIMITED', 'NOT_IMPLEMENTED', 'SERVICE_UNAVAILABLE'");
        }
        $this->code = $code;
        return $this;
    }
    
    /**
     * Gets detail
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }
  
    /**
     * Sets detail
     * @param string $detail 
     * @return $this
     */
    public function setDetail($detail)
    {
        
        $this->detail = $detail;
        return $this;
    }
    
    /**
     * Gets field
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }
  
    /**
     * Sets field
     * @param string $field 
     * @return $this
     */
    public function setField($field)
    {
        
        $this->field = $field;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}