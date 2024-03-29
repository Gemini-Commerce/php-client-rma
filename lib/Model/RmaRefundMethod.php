<?php
/**
 * RmaRefundMethod
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Rma
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
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Rma\Model;
use \GeminiCommerce\Rma\ObjectSerializer;

/**
 * RmaRefundMethod Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Rma
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RmaRefundMethod
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'REFUND_METHOD_UNKNOWN';

    public const OFFLINE = 'REFUND_METHOD_OFFLINE';

    public const COUPON = 'REFUND_METHOD_COUPON';

    public const SAME_AS_PAYMENT = 'REFUND_METHOD_SAME_AS_PAYMENT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::OFFLINE,
            self::COUPON,
            self::SAME_AS_PAYMENT
        ];
    }
}


