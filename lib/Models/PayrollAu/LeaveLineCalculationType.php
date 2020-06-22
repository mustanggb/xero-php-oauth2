<?php
/**
 * LeaveLineCalculationType
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
 * OpenAPI spec version: 2.2.3
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
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * LeaveLineCalculationType Class Doc Comment
 *
 * @category Class
 * @description Calculation type for leave line for Opening Balance on Employee
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LeaveLineCalculationType
{
    /**
     * Possible values of this enum
     */
    const NOCALCULATIONREQUIRED = 'NOCALCULATIONREQUIRED';
    const FIXEDAMOUNTEACHPERIOD = 'FIXEDAMOUNTEACHPERIOD';
    const ENTERRATEINPAYTEMPLATE = 'ENTERRATEINPAYTEMPLATE';
    const BASEDONORDINARYEARNINGS = 'BASEDONORDINARYEARNINGS';
    const EMPTY = '';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOCALCULATIONREQUIRED,
            self::FIXEDAMOUNTEACHPERIOD,
            self::ENTERRATEINPAYTEMPLATE,
            self::BASEDONORDINARYEARNINGS,
            self::EMPTY,
        ];
    }
}


