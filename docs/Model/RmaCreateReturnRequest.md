# # RmaCreateReturnRequest


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**order_grn**| **string** |   |
**products**| [**\OpenAPI\Client\Model\CreateReturnRequestProduct[]**](CreateReturnRequestProduct.md) |   |
**preferred_refund_method**| [**\OpenAPI\Client\Model\RmaRefundMethod**](RmaRefundMethod.md) |  for more information please, see Model/RmaRefundMethod.php  |
**refund_shipping_cost**| **bool** |   | [optional]
**refund_payment_cost**| **bool** |   | [optional]
**customer_info**| [**\OpenAPI\Client\Model\RmaCustomerInfo**](RmaCustomerInfo.md) |   | [optional]
**return_address**| [**\OpenAPI\Client\Model\RmaPostalAddress**](RmaPostalAddress.md) |   | [optional]
**note**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

