<?php
/**
 * Brand
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
 * Brand Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Pica9\CampaignDrive\ApiClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Brand implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'kind' => 'string',
        'brand_id' => 'int',
        'name' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'kind' => 'kind',
        'brand_id' => 'brand_id',
        'name' => 'name'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'kind' => 'setKind',
        'brand_id' => 'setBrandId',
        'name' => 'setName'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'kind' => 'getKind',
        'brand_id' => 'getBrandId',
        'name' => 'getName'
    );
  
    
    /**
      * $kind Will always be set to \"brand\"
      * @var string
      */
    protected $kind;
    
    /**
      * $brand_id Unique ID of the brand
      * @var int
      */
    protected $brand_id;
    
    /**
      * $name Name of brand
      * @var string
      */
    protected $name;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->kind = $data["kind"];
            $this->brand_id = $data["brand_id"];
            $this->name = $data["name"];
        }
    }
    
    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
  
    /**
     * Sets kind
     * @param string $kind Will always be set to \"brand\"
     * @return $this
     */
    public function setKind($kind)
    {
        
        $this->kind = $kind;
        return $this;
    }
    
    /**
     * Gets brand_id
     * @return int
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }
  
    /**
     * Sets brand_id
     * @param int $brand_id Unique ID of the brand
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        
        $this->brand_id = $brand_id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name Name of brand
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
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