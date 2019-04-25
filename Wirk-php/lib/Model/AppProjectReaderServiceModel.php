<?php
/**
 * AppProjectReaderServiceModel
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
 * AppProjectReaderServiceModel Class Doc Comment
 *
 * @category    Class
 * @description Model for AppProject Get
 * @package     Wirk
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AppProjectReaderServiceModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'app_name' => 'string',
        'app_project_state' => 'string',
        'creation_date' => '\DateTime',
        'credit' => 'int',
        'id_app' => 'int',
        'id_app_project' => 'int',
        'id_quality' => 'int',
        'instruction' => 'string',
        'nb_task_closed' => 'int',
        'nb_total_task' => 'int',
        'quality_name' => 'string',
        'question_options' => 'string[]',
        'title' => 'string',
        'url_notification' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'app_name' => 'AppName',
        'app_project_state' => 'AppProjectState',
        'creation_date' => 'CreationDate',
        'credit' => 'Credit',
        'id_app' => 'IdApp',
        'id_app_project' => 'IdAppProject',
        'id_quality' => 'IdQuality',
        'instruction' => 'Instruction',
        'nb_task_closed' => 'NbTaskClosed',
        'nb_total_task' => 'NbTotalTask',
        'quality_name' => 'QualityName',
        'question_options' => 'QuestionOptions',
        'title' => 'Title',
        'url_notification' => 'UrlNotification'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'app_name' => 'setAppName',
        'app_project_state' => 'setAppProjectState',
        'creation_date' => 'setCreationDate',
        'credit' => 'setCredit',
        'id_app' => 'setIdApp',
        'id_app_project' => 'setIdAppProject',
        'id_quality' => 'setIdQuality',
        'instruction' => 'setInstruction',
        'nb_task_closed' => 'setNbTaskClosed',
        'nb_total_task' => 'setNbTotalTask',
        'quality_name' => 'setQualityName',
        'question_options' => 'setQuestionOptions',
        'title' => 'setTitle',
        'url_notification' => 'setUrlNotification'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'app_name' => 'getAppName',
        'app_project_state' => 'getAppProjectState',
        'creation_date' => 'getCreationDate',
        'credit' => 'getCredit',
        'id_app' => 'getIdApp',
        'id_app_project' => 'getIdAppProject',
        'id_quality' => 'getIdQuality',
        'instruction' => 'getInstruction',
        'nb_task_closed' => 'getNbTaskClosed',
        'nb_total_task' => 'getNbTotalTask',
        'quality_name' => 'getQualityName',
        'question_options' => 'getQuestionOptions',
        'title' => 'getTitle',
        'url_notification' => 'getUrlNotification'
    );
  
    
    /**
      * $app_name 
      * @var string
      */
    protected $app_name;
    
    /**
      * $app_project_state 
      * @var string
      */
    protected $app_project_state;
    
    /**
      * $creation_date 
      * @var \DateTime
      */
    protected $creation_date;
    
    /**
      * $credit 
      * @var int
      */
    protected $credit;
    
    /**
      * $id_app 
      * @var int
      */
    protected $id_app;
    
    /**
      * $id_app_project 
      * @var int
      */
    protected $id_app_project;
    
    /**
      * $id_quality 
      * @var int
      */
    protected $id_quality;
    
    /**
      * $instruction 
      * @var string
      */
    protected $instruction;
    
    /**
      * $nb_task_closed 
      * @var int
      */
    protected $nb_task_closed;
    
    /**
      * $nb_total_task 
      * @var int
      */
    protected $nb_total_task;
    
    /**
      * $quality_name 
      * @var string
      */
    protected $quality_name;
    
    /**
      * $question_options 
      * @var string[]
      */
    protected $question_options;
    
    /**
      * $title 
      * @var string
      */
    protected $title;
    
    /**
      * $url_notification 
      * @var string
      */
    protected $url_notification;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->app_name = $data["app_name"];
            $this->app_project_state = $data["app_project_state"];
            $this->creation_date = $data["creation_date"];
            $this->credit = $data["credit"];
            $this->id_app = $data["id_app"];
            $this->id_app_project = $data["id_app_project"];
            $this->id_quality = $data["id_quality"];
            $this->instruction = $data["instruction"];
            $this->nb_task_closed = $data["nb_task_closed"];
            $this->nb_total_task = $data["nb_total_task"];
            $this->quality_name = $data["quality_name"];
            $this->question_options = $data["question_options"];
            $this->title = $data["title"];
            $this->url_notification = $data["url_notification"];
        }
    }
    
    /**
     * Gets app_name
     * @return string
     */
    public function getAppName()
    {
        return $this->app_name;
    }
  
    /**
     * Sets app_name
     * @param string $app_name 
     * @return $this
     */
    public function setAppName($app_name)
    {
        
        $this->app_name = $app_name;
        return $this;
    }
    
    /**
     * Gets app_project_state
     * @return string
     */
    public function getAppProjectState()
    {
        return $this->app_project_state;
    }
  
    /**
     * Sets app_project_state
     * @param string $app_project_state 
     * @return $this
     */
    public function setAppProjectState($app_project_state)
    {
        
        $this->app_project_state = $app_project_state;
        return $this;
    }
    
    /**
     * Gets creation_date
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }
  
    /**
     * Sets creation_date
     * @param \DateTime $creation_date 
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        
        $this->creation_date = $creation_date;
        return $this;
    }
    
    /**
     * Gets credit
     * @return int
     */
    public function getCredit()
    {
        return $this->credit;
    }
  
    /**
     * Sets credit
     * @param int $credit 
     * @return $this
     */
    public function setCredit($credit)
    {
        
        $this->credit = $credit;
        return $this;
    }
    
    /**
     * Gets id_app
     * @return int
     */
    public function getIdApp()
    {
        return $this->id_app;
    }
  
    /**
     * Sets id_app
     * @param int $id_app 
     * @return $this
     */
    public function setIdApp($id_app)
    {
        
        $this->id_app = $id_app;
        return $this;
    }
    
    /**
     * Gets id_app_project
     * @return int
     */
    public function getIdAppProject()
    {
        return $this->id_app_project;
    }
  
    /**
     * Sets id_app_project
     * @param int $id_app_project 
     * @return $this
     */
    public function setIdAppProject($id_app_project)
    {
        
        $this->id_app_project = $id_app_project;
        return $this;
    }
    
    /**
     * Gets id_quality
     * @return int
     */
    public function getIdQuality()
    {
        return $this->id_quality;
    }
  
    /**
     * Sets id_quality
     * @param int $id_quality 
     * @return $this
     */
    public function setIdQuality($id_quality)
    {
        
        $this->id_quality = $id_quality;
        return $this;
    }
    
    /**
     * Gets instruction
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }
  
    /**
     * Sets instruction
     * @param string $instruction 
     * @return $this
     */
    public function setInstruction($instruction)
    {
        
        $this->instruction = $instruction;
        return $this;
    }
    
    /**
     * Gets nb_task_closed
     * @return int
     */
    public function getNbTaskClosed()
    {
        return $this->nb_task_closed;
    }
  
    /**
     * Sets nb_task_closed
     * @param int $nb_task_closed 
     * @return $this
     */
    public function setNbTaskClosed($nb_task_closed)
    {
        
        $this->nb_task_closed = $nb_task_closed;
        return $this;
    }
    
    /**
     * Gets nb_total_task
     * @return int
     */
    public function getNbTotalTask()
    {
        return $this->nb_total_task;
    }
  
    /**
     * Sets nb_total_task
     * @param int $nb_total_task 
     * @return $this
     */
    public function setNbTotalTask($nb_total_task)
    {
        
        $this->nb_total_task = $nb_total_task;
        return $this;
    }
    
    /**
     * Gets quality_name
     * @return string
     */
    public function getQualityName()
    {
        return $this->quality_name;
    }
  
    /**
     * Sets quality_name
     * @param string $quality_name 
     * @return $this
     */
    public function setQualityName($quality_name)
    {
        
        $this->quality_name = $quality_name;
        return $this;
    }
    
    /**
     * Gets question_options
     * @return string[]
     */
    public function getQuestionOptions()
    {
        return $this->question_options;
    }
  
    /**
     * Sets question_options
     * @param string[] $question_options 
     * @return $this
     */
    public function setQuestionOptions($question_options)
    {
        
        $this->question_options = $question_options;
        return $this;
    }
    
    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
  
    /**
     * Sets title
     * @param string $title 
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;
        return $this;
    }
    
    /**
     * Gets url_notification
     * @return string
     */
    public function getUrlNotification()
    {
        return $this->url_notification;
    }
  
    /**
     * Sets url_notification
     * @param string $url_notification 
     * @return $this
     */
    public function setUrlNotification($url_notification)
    {
        
        $this->url_notification = $url_notification;
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
