# # RmaReturnResponse


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id**| **string** |   | [optional]
**grn**| **string** |   | [optional]
**order_grn**| **string** |   | [optional]
**status**| **string** |   | [optional]
**products**| [**\GeminiCommerce\Rma\Model\RmaReturnProduct[]**](RmaReturnProduct.md) |   | [optional]
**preferred_refund_method**| [**\GeminiCommerce\Rma\Model\RmaRefundMethod**](RmaRefundMethod.md) |  for more information please, see Model/RmaRefundMethod.php  | [optional]
**refund_shipping_cost**| **bool** |   | [optional]
**refund_payment_cost**| **bool** |   | [optional]
**customer_info**| [**\GeminiCommerce\Rma\Model\RmaCustomerInfo**](RmaCustomerInfo.md) |   | [optional]
**return_address**| [**\GeminiCommerce\Rma\Model\RmaPostalAddress**](RmaPostalAddress.md) |   | [optional]
**note**| **string** |   | [optional]
**history**| [**\GeminiCommerce\Rma\Model\RmaReturnHistory[]**](RmaReturnHistory.md) |   | [optional]
**created_at**| **\DateTime** |   | [optional]
**updated_at**| **\DateTime** |   | [optional]
**order_data**| [**\GeminiCommerce\Rma\Model\RmaOrderData**](RmaOrderData.md) |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)