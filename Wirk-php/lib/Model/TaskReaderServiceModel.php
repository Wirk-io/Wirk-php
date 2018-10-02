<?php
/**
 * TaskReaderServiceModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Wirk
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

namespace Wirk\Model;

use \ArrayAccess;
/**
 * TaskReaderServiceModel Class Doc Comment
 *
 * @category    Class
 * @description Model for TaskReaderServiceModel
 * @package     Wirk
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaskReaderServiceModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id_task' => 'int',
        'outputs' => '\Wirk\Model\Outputs',
        'update_date' => '\DateTime'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id_task' => 'IdTask',
        'outputs' => 'Outputs',
        'update_date' => 'UpdateDate'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id_task' => 'setIdTask',
        'outputs' => 'setOutputs',
        'update_date' => 'setUpdateDate'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id_task' => 'getIdTask',
        'outputs' => 'getOutputs',
        'update_date' => 'getUpdateDate'
    );
  
    
    /**
      * $id_task 
      * @var int
      */
    protected $id_task;
    
    /**
      * $outputs 
      * @var \Wirk\Model\Outputs
      */
    protected $outputs;
    
    /**
      * $update_date 
      * @var \DateTime
      */
    protected $update_date;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id_task = $data["id_task"];
            $this->outputs = $data["outputs"];
            $this->update_date = $data["update_date"];
        }
    }
    
    /**
     * Gets id_task
     * @return int
     */
    public function getIdTask()
    {
        return $this->id_task;
    }
  
    /**
     * Sets id_task
     * @param int $id_task 
     * @return $this
     */
    public function setIdTask($id_task)
    {
        
        $this->id_task = $id_task;
        return $this;
    }
    
    /**
     * Gets outputs
     * @return \Wirk\Model\Outputs
     */
    public function getOutputs()
    {
        return $this->outputs;
    }
  
    /**
     * Sets outputs
     * @param \Wirk\Model\Outputs $outputs 
     * @return $this
     */
    public function setOutputs($outputs)
    {
        
        $this->outputs = $outputs;
        return $this;
    }
    
    /**
     * Gets update_date
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }
  
    /**
     * Sets update_date
     * @param \DateTime $update_date 
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        
        $this->update_date = $update_date;
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
            return json_encode(\Wirk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Wirk\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
