<?php
/**
 * OrderDataSubtotalCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * RMA Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrderDataSubtotalCode Class Doc Comment
 *
 * @category Class
 * @description - ITEMS: gross discount items amount.  - ITEMS_DISCOUNTED: discounted items amount.  - DISCOUNT: discount amount. It is a NEGATIVE amount.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderDataSubtotalCode
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'UNKNOWN';

    public const PAYMENT = 'PAYMENT';

    public const SHIPMENT = 'SHIPMENT';

    public const TAX = 'TAX';

    public const ITEMS = 'ITEMS';

    public const ITEMS_DISCOUNTED = 'ITEMS_DISCOUNTED';

    public const DISCOUNT = 'DISCOUNT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PAYMENT,
            self::SHIPMENT,
            self::TAX,
            self::ITEMS,
            self::ITEMS_DISCOUNTED,
            self::DISCOUNT
        ];
    }
}


