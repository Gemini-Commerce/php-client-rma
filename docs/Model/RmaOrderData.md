# # RmaOrderData


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at**| **\DateTime** |   | [optional]
**updated_at**| **\DateTime** |   | [optional]
**grn**| **string** |   | [optional]
**number**| **string** |   | [optional]
**status**| **string** |   | [optional]
**channel**| **string** |   | [optional]
**market**| **string** |   | [optional]
**items**| [**\GeminiCommerce\Rma\Model\RmaOrderDataItem[]**](RmaOrderDataItem.md) |   | [optional]
**currency**| [**\GeminiCommerce\Rma\Model\RmaCurrency**](RmaCurrency.md) |  for more information please, see Model/RmaCurrency.php  | [optional]
**subtotals**| [**array<string,\GeminiCommerce\Rma\Model\OrderDataSubtotal>**](OrderDataSubtotal.md) |   | [optional]
**totals**| [**array<string,\GeminiCommerce\Rma\Model\OrderDataTotal>**](OrderDataTotal.md) |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)