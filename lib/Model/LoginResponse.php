<?php
/**
 * LoginResponse
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
 * LoginResponse Class Doc Comment
 *
 * @category    Class
 * @description Model for LoginResponse
 * @package     BanishBot
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoginResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'expires_in' => 'int',
        'id_token' => 'string',
        'refresh_token' => 'string',
        'success' => 'bool',
        'token_type' => 'string',
        'username' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'expires_in' => 'expiresIn',
        'id_token' => 'idToken',
        'refresh_token' => 'refreshToken',
        'success' => 'success',
        'token_type' => 'tokenType',
        'username' => 'username'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'expires_in' => 'setExpiresIn',
        'id_token' => 'setIdToken',
        'refresh_token' => 'setRefreshToken',
        'success' => 'setSuccess',
        'token_type' => 'setTokenType',
        'username' => 'setUsername'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'expires_in' => 'getExpiresIn',
        'id_token' => 'getIdToken',
        'refresh_token' => 'getRefreshToken',
        'success' => 'getSuccess',
        'token_type' => 'getTokenType',
        'username' => 'getUsername'
    );
  
    
    /**
      * $expires_in 
      * @var int
      */
    protected $expires_in;
    
    /**
      * $id_token 
      * @var string
      */
    protected $id_token;
    
    /**
      * $refresh_token 
      * @var string
      */
    protected $refresh_token;
    
    /**
      * $success 
      * @var bool
      */
    protected $success;
    
    /**
      * $token_type 
      * @var string
      */
    protected $token_type;
    
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
            $this->expires_in = $data["expires_in"];
            $this->id_token = $data["id_token"];
            $this->refresh_token = $data["refresh_token"];
            $this->success = $data["success"];
            $this->token_type = $data["token_type"];
            $this->username = $data["username"];
        }
    }
    
    /**
     * Gets expires_in
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }
  
    /**
     * Sets expires_in
     * @param int $expires_in 
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        
        $this->expires_in = $expires_in;
        return $this;
    }
    
    /**
     * Gets id_token
     * @return string
     */
    public function getIdToken()
    {
        return $this->id_token;
    }
  
    /**
     * Sets id_token
     * @param string $id_token 
     * @return $this
     */
    public function setIdToken($id_token)
    {
        
        $this->id_token = $id_token;
        return $this;
    }
    
    /**
     * Gets refresh_token
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }
  
    /**
     * Sets refresh_token
     * @param string $refresh_token 
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        
        $this->refresh_token = $refresh_token;
        return $this;
    }
    
    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }
  
    /**
     * Sets success
     * @param bool $success 
     * @return $this
     */
    public function setSuccess($success)
    {
        
        $this->success = $success;
        return $this;
    }
    
    /**
     * Gets token_type
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }
  
    /**
     * Sets token_type
     * @param string $token_type 
     * @return $this
     */
    public function setTokenType($token_type)
    {
        
        $this->token_type = $token_type;
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
