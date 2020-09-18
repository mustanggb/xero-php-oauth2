<?php
/**
 * Employment
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
 *
 * OpenAPI spec version: 2.3.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Employment Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Employment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Employment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payroll_calendar_id' => 'string',
        'start_date' => '\DateTime',
        'employee_number' => 'string',
        'ni_category' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payroll_calendar_id' => 'uuid',
        'start_date' => 'date',
        'employee_number' => null,
        'ni_category' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payroll_calendar_id' => 'payrollCalendarID',
        'start_date' => 'startDate',
        'employee_number' => 'employeeNumber',
        'ni_category' => 'niCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payroll_calendar_id' => 'setPayrollCalendarId',
        'start_date' => 'setStartDate',
        'employee_number' => 'setEmployeeNumber',
        'ni_category' => 'setNiCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payroll_calendar_id' => 'getPayrollCalendarId',
        'start_date' => 'getStartDate',
        'employee_number' => 'getEmployeeNumber',
        'ni_category' => 'getNiCategory'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const NI_CATEGORY_A = 'A';
    const NI_CATEGORY_B = 'B';
    const NI_CATEGORY_C = 'C';
    const NI_CATEGORY_H = 'H';
    const NI_CATEGORY_J = 'J';
    const NI_CATEGORY_M = 'M';
    const NI_CATEGORY_Z = 'Z';
    const NI_CATEGORY_X = 'X';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNiCategoryAllowableValues()
    {
        return [
            self::NI_CATEGORY_A,
            self::NI_CATEGORY_B,
            self::NI_CATEGORY_C,
            self::NI_CATEGORY_H,
            self::NI_CATEGORY_J,
            self::NI_CATEGORY_M,
            self::NI_CATEGORY_Z,
            self::NI_CATEGORY_X,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['payroll_calendar_id'] = isset($data['payroll_calendar_id']) ? $data['payroll_calendar_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['employee_number'] = isset($data['employee_number']) ? $data['employee_number'] : null;
        $this->container['ni_category'] = isset($data['ni_category']) ? $data['ni_category'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNiCategoryAllowableValues();
        if (!is_null($this->container['ni_category']) && !in_array($this->container['ni_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ni_category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets payroll_calendar_id
     *
     * @return string|null
     */
    public function getPayrollCalendarId()
    {
        return $this->container['payroll_calendar_id'];
    }

    /**
     * Sets payroll_calendar_id
     *
     * @param string|null $payroll_calendar_id Xero unique identifier for the payroll calendar of the employee
     *
     * @return $this
     */
    public function setPayrollCalendarId($payroll_calendar_id)
    {

        $this->container['payroll_calendar_id'] = $payroll_calendar_id;

        return $this;
    }



    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Start date of the employment (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {

        $this->container['start_date'] = $start_date;

        return $this;
    }



    /**
     * Gets employee_number
     *
     * @return string|null
     */
    public function getEmployeeNumber()
    {
        return $this->container['employee_number'];
    }

    /**
     * Sets employee_number
     *
     * @param string|null $employee_number The employment number of the employee
     *
     * @return $this
     */
    public function setEmployeeNumber($employee_number)
    {

        $this->container['employee_number'] = $employee_number;

        return $this;
    }



    /**
     * Gets ni_category
     *
     * @return string|null
     */
    public function getNiCategory()
    {
        return $this->container['ni_category'];
    }

    /**
     * Sets ni_category
     *
     * @param string|null $ni_category The NI Category of the employee
     *
     * @return $this
     */
    public function setNiCategory($ni_category)
    {
        $allowedValues = $this->getNiCategoryAllowableValues();
        if (!is_null($ni_category) && !in_array($ni_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ni_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['ni_category'] = $ni_category;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


