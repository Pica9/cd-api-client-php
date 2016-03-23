<?php
/**
 * Error
 *
 * PHP version 5
 *
 * @category Class
 * @package  Pica9\CampaignDrive\ApiClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
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

namespace Pica9\CampaignDrive\ApiClient\Model;

use \ArrayAccess;
/**
 * Error Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Pica9\CampaignDrive\ApiClient
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
        'reason_phrase' => 'string',
        'status_code' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'reason_phrase' => 'reason_phrase',
        'status_code' => 'status_code'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'reason_phrase' => 'setReasonPhrase',
        'status_code' => 'setStatusCode'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'reason_phrase' => 'getReasonPhrase',
        'status_code' => 'getStatusCode'
    );
  
    
    /**
      * $reason_phrase Detail of error
      * @var string
      */
    protected $reason_phrase;
    
    /**
      * $status_code Error code
      * @var int
      */
    protected $status_code;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->reason_phrase = $data["reason_phrase"];
            $this->status_code = $data["status_code"];
        }
    }
    
    /**
     * Gets reason_phrase
     * @return string
     */
    public function getReasonPhrase()
    {
        return $this->reason_phrase;
    }
  
    /**
     * Sets reason_phrase
     * @param string $reason_phrase Detail of error
     * @return $this
     */
    public function setReasonPhrase($reason_phrase)
    {
        
        $this->reason_phrase = $reason_phrase;
        return $this;
    }
    
    /**
     * Gets status_code
     * @return int
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }
  
    /**
     * Sets status_code
     * @param int $status_code Error code
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        
        $this->status_code = $status_code;
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
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}