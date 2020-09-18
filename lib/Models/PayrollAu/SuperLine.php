<?php
/**
 * SuperLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
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

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * SuperLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SuperLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SuperLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'super_membership_id' => 'string',
        'contribution_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationContributionType',
        'calculation_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationCalculationType',
        'minimum_monthly_earnings' => 'double',
        'expense_account_code' => 'string',
        'liability_account_code' => 'string',
        'percentage' => 'double',
        'amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'super_membership_id' => 'uuid',
        'contribution_type' => null,
        'calculation_type' => null,
        'minimum_monthly_earnings' => 'double',
        'expense_account_code' => null,
        'liability_account_code' => null,
        'percentage' => 'double',
        'amount' => 'double'
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
        'super_membership_id' => 'SuperMembershipID',
        'contribution_type' => 'ContributionType',
        'calculation_type' => 'CalculationType',
        'minimum_monthly_earnings' => 'MinimumMonthlyEarnings',
        'expense_account_code' => 'ExpenseAccountCode',
        'liability_account_code' => 'LiabilityAccountCode',
        'percentage' => 'Percentage',
        'amount' => 'Amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super_membership_id' => 'setSuperMembershipId',
        'contribution_type' => 'setContributionType',
        'calculation_type' => 'setCalculationType',
        'minimum_monthly_earnings' => 'setMinimumMonthlyEarnings',
        'expense_account_code' => 'setExpenseAccountCode',
        'liability_account_code' => 'setLiabilityAccountCode',
        'percentage' => 'setPercentage',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super_membership_id' => 'getSuperMembershipId',
        'contribution_type' => 'getContributionType',
        'calculation_type' => 'getCalculationType',
        'minimum_monthly_earnings' => 'getMinimumMonthlyEarnings',
        'expense_account_code' => 'getExpenseAccountCode',
        'liability_account_code' => 'getLiabilityAccountCode',
        'percentage' => 'getPercentage',
        'amount' => 'getAmount'
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
        $this->container['super_membership_id'] = isset($data['super_membership_id']) ? $data['super_membership_id'] : null;
        $this->container['contribution_type'] = isset($data['contribution_type']) ? $data['contribution_type'] : null;
        $this->container['calculation_type'] = isset($data['calculation_type']) ? $data['calculation_type'] : null;
        $this->container['minimum_monthly_earnings'] = isset($data['minimum_monthly_earnings']) ? $data['minimum_monthly_earnings'] : null;
        $this->container['expense_account_code'] = isset($data['expense_account_code']) ? $data['expense_account_code'] : null;
        $this->container['liability_account_code'] = isset($data['liability_account_code']) ? $data['liability_account_code'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets super_membership_id
     *
     * @return string|null
     */
    public function getSuperMembershipId()
    {
        return $this->container['super_membership_id'];
    }

    /**
     * Sets super_membership_id
     *
     * @param string|null $super_membership_id Xero super membership ID
     *
     * @return $this
     */
    public function setSuperMembershipId($super_membership_id)
    {

        $this->container['super_membership_id'] = $super_membership_id;

        return $this;
    }



    /**
     * Gets contribution_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationContributionType|null
     */
    public function getContributionType()
    {
        return $this->container['contribution_type'];
    }

    /**
     * Sets contribution_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationContributionType|null $contribution_type contribution_type
     *
     * @return $this
     */
    public function setContributionType($contribution_type)
    {

        $this->container['contribution_type'] = $contribution_type;

        return $this;
    }



    /**
     * Gets calculation_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationCalculationType|null
     */
    public function getCalculationType()
    {
        return $this->container['calculation_type'];
    }

    /**
     * Sets calculation_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationCalculationType|null $calculation_type calculation_type
     *
     * @return $this
     */
    public function setCalculationType($calculation_type)
    {

        $this->container['calculation_type'] = $calculation_type;

        return $this;
    }



    /**
     * Gets minimum_monthly_earnings
     *
     * @return double|null
     */
    public function getMinimumMonthlyEarnings()
    {
        return $this->container['minimum_monthly_earnings'];
    }

    /**
     * Sets minimum_monthly_earnings
     *
     * @param double|null $minimum_monthly_earnings amount of mimimum earnings
     *
     * @return $this
     */
    public function setMinimumMonthlyEarnings($minimum_monthly_earnings)
    {

        $this->container['minimum_monthly_earnings'] = $minimum_monthly_earnings;

        return $this;
    }



    /**
     * Gets expense_account_code
     *
     * @return string|null
     */
    public function getExpenseAccountCode()
    {
        return $this->container['expense_account_code'];
    }

    /**
     * Sets expense_account_code
     *
     * @param string|null $expense_account_code expense account code
     *
     * @return $this
     */
    public function setExpenseAccountCode($expense_account_code)
    {

        $this->container['expense_account_code'] = $expense_account_code;

        return $this;
    }



    /**
     * Gets liability_account_code
     *
     * @return string|null
     */
    public function getLiabilityAccountCode()
    {
        return $this->container['liability_account_code'];
    }

    /**
     * Sets liability_account_code
     *
     * @param string|null $liability_account_code liabilty account code
     *
     * @return $this
     */
    public function setLiabilityAccountCode($liability_account_code)
    {

        $this->container['liability_account_code'] = $liability_account_code;

        return $this;
    }



    /**
     * Gets percentage
     *
     * @return double|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param double|null $percentage percentage for super line
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {

        $this->container['percentage'] = $percentage;

        return $this;
    }



    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount Super membership amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


