# # RmaReturnResponse


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id**| **string** |   | [optional]
**grn**| **string** |   | [optional]
**order_grn**| **string** |   | [optional]
**status**| **string** |   | [optional]
**products**| [**\OpenAPI\Client\Model\RmaReturnProduct[]**](RmaReturnProduct.md) |   | [optional]
**preferred_refund_method**| [**\OpenAPI\Client\Model\RmaRefundMethod**](RmaRefundMethod.md) |  for more information please, see Model/RmaRefundMethod.php  | [optional]
**refund_shipping_cost**| **bool** |   | [optional]
**refund_payment_cost**| **bool** |   | [optional]
**customer_info**| [**\OpenAPI\Client\Model\RmaCustomerInfo**](RmaCustomerInfo.md) |   | [optional]
**return_address**| [**\OpenAPI\Client\Model\RmaPostalAddress**](RmaPostalAddress.md) |   | [optional]
**note**| **string** |   | [optional]
**history**| [**\OpenAPI\Client\Model\RmaReturnHistory[]**](RmaReturnHistory.md) |   | [optional]
**created_at**| **\DateTime** |   | [optional]
**updated_at**| **\DateTime** |   | [optional]
**order_data**| [**\OpenAPI\Client\Model\RmaOrderData**](RmaOrderData.md) |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

