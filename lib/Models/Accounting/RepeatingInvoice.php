<?php
/**
 * RepeatingInvoice
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.0.2
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;

/**
 * RepeatingInvoice Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RepeatingInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RepeatingInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'contact' => '\XeroAPI\XeroPHP\Models\Accounting\Contact',
        'schedule' => '\XeroAPI\XeroPHP\Models\Accounting\Schedule',
        'line_items' => '\XeroAPI\XeroPHP\Models\Accounting\LineItem[]',
        'line_amount_types' => '\XeroAPI\XeroPHP\Models\Accounting\LineAmountTypes',
        'reference' => 'string',
        'branding_theme_id' => 'string',
        'currency_code' => '\XeroAPI\XeroPHP\Models\Accounting\CurrencyCode',
        'status' => 'string',
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'repeating_invoice_id' => 'string',
        'id' => 'string',
        'has_attachments' => 'bool',
        'attachments' => '\XeroAPI\XeroPHP\Models\Accounting\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'contact' => null,
        'schedule' => null,
        'line_items' => null,
        'line_amount_types' => null,
        'reference' => null,
        'branding_theme_id' => 'uuid',
        'currency_code' => null,
        'status' => null,
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'repeating_invoice_id' => 'uuid',
        'id' => 'uuid',
        'has_attachments' => null,
        'attachments' => null
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
        'type' => 'Type',
        'contact' => 'Contact',
        'schedule' => 'Schedule',
        'line_items' => 'LineItems',
        'line_amount_types' => 'LineAmountTypes',
        'reference' => 'Reference',
        'branding_theme_id' => 'BrandingThemeID',
        'currency_code' => 'CurrencyCode',
        'status' => 'Status',
        'sub_total' => 'SubTotal',
        'total_tax' => 'TotalTax',
        'total' => 'Total',
        'repeating_invoice_id' => 'RepeatingInvoiceID',
        'id' => 'ID',
        'has_attachments' => 'HasAttachments',
        'attachments' => 'Attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'contact' => 'setContact',
        'schedule' => 'setSchedule',
        'line_items' => 'setLineItems',
        'line_amount_types' => 'setLineAmountTypes',
        'reference' => 'setReference',
        'branding_theme_id' => 'setBrandingThemeId',
        'currency_code' => 'setCurrencyCode',
        'status' => 'setStatus',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'total' => 'setTotal',
        'repeating_invoice_id' => 'setRepeatingInvoiceId',
        'id' => 'setId',
        'has_attachments' => 'setHasAttachments',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'contact' => 'getContact',
        'schedule' => 'getSchedule',
        'line_items' => 'getLineItems',
        'line_amount_types' => 'getLineAmountTypes',
        'reference' => 'getReference',
        'branding_theme_id' => 'getBrandingThemeId',
        'currency_code' => 'getCurrencyCode',
        'status' => 'getStatus',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'total' => 'getTotal',
        'repeating_invoice_id' => 'getRepeatingInvoiceId',
        'id' => 'getId',
        'has_attachments' => 'getHasAttachments',
        'attachments' => 'getAttachments'
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

    const TYPE_ACCPAY = 'ACCPAY';
    const TYPE_ACCREC = 'ACCREC';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_DELETED = 'DELETED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ACCPAY,
            self::TYPE_ACCREC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_AUTHORISED,
            self::STATUS_DELETED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['line_amount_types'] = isset($data['line_amount_types']) ? $data['line_amount_types'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['branding_theme_id'] = isset($data['branding_theme_id']) ? $data['branding_theme_id'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['repeating_invoice_id'] = isset($data['repeating_invoice_id']) ? $data['repeating_invoice_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['has_attachments'] = isset($data['has_attachments']) ? $data['has_attachments'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type See Invoice Types
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Contact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Contact|null $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Schedule|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Schedule|null $schedule schedule
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\LineItem[]|null $line_items See LineItems
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets line_amount_types
     *
     * @return string|null
     */
    public function getLineAmountTypes()
    {
        return $this->container['line_amount_types'];
    }

    /**
     * Sets line_amount_types
     *
     * @param string|null $line_amount_types line_amount_types
     *
     * @return $this
     */
    public function setLineAmountTypes($line_amount_types)
    {
        $this->container['line_amount_types'] = $line_amount_types;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference ACCREC only – additional reference number
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets branding_theme_id
     *
     * @return string|null
     */
    public function getBrandingThemeId()
    {
        return $this->container['branding_theme_id'];
    }

    /**
     * Sets branding_theme_id
     *
     * @param string|null $branding_theme_id See BrandingThemes
     *
     * @return $this
     */
    public function setBrandingThemeId($branding_theme_id)
    {
        $this->container['branding_theme_id'] = $branding_theme_id;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status One of the following - DRAFT or AUTHORISED – See Invoice Status Codes
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return double|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param double|null $sub_total Total of invoice excluding taxes
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return double|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param double|null $total_tax Total tax on invoice
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets repeating_invoice_id
     *
     * @return string|null
     */
    public function getRepeatingInvoiceId()
    {
        return $this->container['repeating_invoice_id'];
    }

    /**
     * Sets repeating_invoice_id
     *
     * @param string|null $repeating_invoice_id Xero generated unique identifier for repeating invoice template
     *
     * @return $this
     */
    public function setRepeatingInvoiceId($repeating_invoice_id)
    {
        $this->container['repeating_invoice_id'] = $repeating_invoice_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Xero generated unique identifier for repeating invoice template
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets has_attachments
     *
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->container['has_attachments'];
    }

    /**
     * Sets has_attachments
     *
     * @param bool|null $has_attachments boolean to indicate if an invoice has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($has_attachments)
    {
        $this->container['has_attachments'] = $has_attachments;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Attachment[]|null $attachments Displays array of attachments from the API
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


