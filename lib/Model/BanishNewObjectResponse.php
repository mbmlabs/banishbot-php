<?php
/**
 * BanishNewObjectResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  BanishBot
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
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

namespace BanishBot\Model;

use \ArrayAccess;
/**
 * BanishNewObjectResponse Class Doc Comment
 *
 * @category    Class
 * @description Model for BanishNewObjectResponse
 * @package     BanishBot
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BanishNewObjectResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'banished' => 'bool',
        'banished_item' => 'string',
        'code' => 'int',
        'username' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'banished' => 'Banished',
        'banished_item' => 'BanishedItem',
        'code' => 'Code',
        'username' => 'Username'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'banished' => 'setBanished',
        'banished_item' => 'setBanishedItem',
        'code' => 'setCode',
        'username' => 'setUsername'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'banished' => 'getBanished',
        'banished_item' => 'getBanishedItem',
        'code' => 'getCode',
        'username' => 'getUsername'
    );
  
    
    /**
      * $banished 
      * @var bool
      */
    protected $banished;
    
    /**
      * $banished_item 
      * @var string
      */
    protected $banished_item;
    
    /**
      * $code 
      * @var int
      */
    protected $code;
    
    /**
      * $username 
      * @var string
      */
    protected $username;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->banished = $data["banished"];
            $this->banished_item = $data["banished_item"];
            $this->code = $data["code"];
            $this->username = $data["username"];
        }
    }
    
    /**
     * Gets banished
     * @return bool
     */
    public function getBanished()
    {
        return $this->banished;
    }
  
    /**
     * Sets banished
     * @param bool $banished 
     * @return $this
     */
    public function setBanished($banished)
    {
        
        $this->banished = $banished;
        return $this;
    }
    
    /**
     * Gets banished_item
     * @return string
     */
    public function getBanishedItem()
    {
        return $this->banished_item;
    }
  
    /**
     * Sets banished_item
     * @param string $banished_item 
     * @return $this
     */
    public function setBanishedItem($banished_item)
    {
        
        $this->banished_item = $banished_item;
        return $this;
    }
    
    /**
     * Gets code
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }
  
    /**
     * Sets code
     * @param int $code 
     * @return $this
     */
    public function setCode($code)
    {
        
        $this->code = $code;
        return $this;
    }
    
    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
  
    /**
     * Sets username
     * @param string $username 
     * @return $this
     */
    public function setUsername($username)
    {
        
        $this->username = $username;
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
            return json_encode(\BanishBot\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\BanishBot\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
