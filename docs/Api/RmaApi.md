# GeminiCommerce\Rma\RmaApi

All URIs are relative to https://rma.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNote()**](RmaApi.md#addNote) | **POST** /rma.Rma/AddNote | Add a note to an RMA |
| [**approveReturn()**](RmaApi.md#approveReturn) | **POST** /rma.Rma/ApproveReturn | Approve a return |
| [**cancelReturn()**](RmaApi.md#cancelReturn) | **POST** /rma.Rma/CancelReturn | Cancel a return |
| [**confirmReturnApproveItems()**](RmaApi.md#confirmReturnApproveItems) | **POST** /rma.Rma/ConfirmReturnApproveItems | Confirm return approve items |
| [**createReturn()**](RmaApi.md#createReturn) | **POST** /rma.Rma/CreateReturn | Create a return |
| [**deleteNote()**](RmaApi.md#deleteNote) | **POST** /rma.Rma/DeleteNote | Delete a note from an RMA |
| [**editNote()**](RmaApi.md#editNote) | **POST** /rma.Rma/EditNote | Edit a note on an RMA |
| [**getReturn()**](RmaApi.md#getReturn) | **POST** /rma.Rma/GetReturn | Get a return |
| [**listNotesByReturnId()**](RmaApi.md#listNotesByReturnId) | **POST** /rma.Rma/ListNotesByReturnId | List notes by return id |
| [**listReturns()**](RmaApi.md#listReturns) | **POST** /rma.Rma/ListReturns | List returns |
| [**refundReturn()**](RmaApi.md#refundReturn) | **POST** /rma.Rma/RefundReturn | Refund a return |
| [**rejectReturn()**](RmaApi.md#rejectReturn) | **POST** /rma.Rma/RejectReturn | Reject a return |
| [**setReceivedItems()**](RmaApi.md#setReceivedItems) | **POST** /rma.Rma/SetReceivedItems | Set received items |
| [**skipReturnStatus()**](RmaApi.md#skipReturnStatus) | **POST** /rma.Rma/SkipReturnStatus | Skip a return status |


## `addNote()`

```php
addNote($body): \GeminiCommerce\Rma\Model\RmaNoteResponse
```

Add a note to an RMA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaAddNoteRequest(); // \GeminiCommerce\Rma\Model\RmaAddNoteRequest

try {
    $result = $apiInstance->addNote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->addNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaAddNoteRequest**](../Model/RmaAddNoteRequest.md)|  | |

### Return type

[**\GeminiCommerce\Rma\Model\RmaNoteResponse**](../Model/RmaNoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveReturn()`

```php
approveReturn($body): \GeminiCommerce\Rma\Model\RpcStatus
```

Approve a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaApproveReturnRequest(); // \GeminiCommerce\Rma\Model\RmaApproveReturnRequest

try {
    $result = $apiInstance->approveReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->approveReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaApproveReturnRequest**](../Model/RmaApproveReturnRequest.md)|  | |

### Return type

[**\GeminiCommerce\Rma\Model\RpcStatus**](../Model/RpcStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelReturn()`

```php
cancelReturn($body): object
```

Cancel a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaCancelReturnRequest(); // \GeminiCommerce\Rma\Model\RmaCancelReturnRequest

try {
    $result = $apiInstance->cancelReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->cancelReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaCancelReturnRequest**](../Model/RmaCancelReturnRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmReturnApproveItems()`

```php
confirmReturnApproveItems($body): object
```

Confirm return approve items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaConfirmReturnApproveItemsRequest(); // \GeminiCommerce\Rma\Model\RmaConfirmReturnApproveItemsRequest

try {
    $result = $apiInstance->confirmReturnApproveItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->confirmReturnApproveItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaConfirmReturnApproveItemsRequest**](../Model/RmaConfirmReturnApproveItemsRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReturn()`

```php
createReturn($body): \GeminiCommerce\Rma\Model\RmaReturnResponse
```

Create a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaCreateReturnRequest(); // \GeminiCommerce\Rma\Model\RmaCreateReturnRequest

try {
    $result = $apiInstance->createReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->createReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaCreateReturnRequest**](../Model/RmaCreateReturnRequest.md)|  | |

### Return type

[**\GeminiCommerce\Rma\Model\RmaReturnResponse**](../Model/RmaReturnResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNote()`

```php
deleteNote($body): object
```

Delete a note from an RMA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaDeleteNoteRequest(); // \GeminiCommerce\Rma\Model\RmaDeleteNoteRequest

try {
    $result = $apiInstance->deleteNote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->deleteNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaDeleteNoteRequest**](../Model/RmaDeleteNoteRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editNote()`

```php
editNote($body): \GeminiCommerce\Rma\Model\RmaNoteResponse
```

Edit a note on an RMA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaEditNoteRequest(); // \GeminiCommerce\Rma\Model\RmaEditNoteRequest

try {
    $result = $apiInstance->editNote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->editNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaEditNoteRequest**](../Model/RmaEditNoteRequest.md)|  | |

### Return type

[**\GeminiCommerce\Rma\Model\RmaNoteResponse**](../Model/RmaNoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturn()`

```php
getReturn($body): \GeminiCommerce\Rma\Model\RmaReturnResponse
```

Get a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaGetReturnRequest(); // \GeminiCommerce\Rma\Model\RmaGetReturnRequest

try {
    $result = $apiInstance->getReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaGetReturnRequest**](../Model/RmaGetReturnRequest.md)|  | |

### Return type

[**\GeminiCommerce\Rma\Model\RmaReturnResponse**](../Model/RmaReturnResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNotesByReturnId()`

```php
listNotesByReturnId($body): \GeminiCommerce\Rma\Model\RmaListNotesByReturnIdResponse
```

List notes by return id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaListNotesByReturnIdRequest(); // \GeminiCommerce\Rma\Model\RmaListNotesByReturnIdRequest

try {
    $result = $apiInstance->listNotesByReturnId($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->listNotesByReturnId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaListNotesByReturnIdRequest**](../Model/RmaListNotesByReturnIdRequest.md)|  | |

### Return type

[**\GeminiCommerce\Rma\Model\RmaListNotesByReturnIdResponse**](../Model/RmaListNotesByReturnIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReturns()`

```php
listReturns($body): \GeminiCommerce\Rma\Model\RmaListReturnsResponse
```

List returns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaListReturnsRequest(); // \GeminiCommerce\Rma\Model\RmaListReturnsRequest

try {
    $result = $apiInstance->listReturns($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->listReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaListReturnsRequest**](../Model/RmaListReturnsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Rma\Model\RmaListReturnsResponse**](../Model/RmaListReturnsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundReturn()`

```php
refundReturn($body): object
```

Refund a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaRefundReturnRequest(); // \GeminiCommerce\Rma\Model\RmaRefundReturnRequest

try {
    $result = $apiInstance->refundReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->refundReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaRefundReturnRequest**](../Model/RmaRefundReturnRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectReturn()`

```php
rejectReturn($body): object
```

Reject a return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaRejectReturnRequest(); // \GeminiCommerce\Rma\Model\RmaRejectReturnRequest

try {
    $result = $apiInstance->rejectReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->rejectReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaRejectReturnRequest**](../Model/RmaRejectReturnRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setReceivedItems()`

```php
setReceivedItems($body): object
```

Set received items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaSetReceivedItemsRequest(); // \GeminiCommerce\Rma\Model\RmaSetReceivedItemsRequest

try {
    $result = $apiInstance->setReceivedItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->setReceivedItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaSetReceivedItemsRequest**](../Model/RmaSetReceivedItemsRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `skipReturnStatus()`

```php
skipReturnStatus($body): object
```

Skip a return status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Rma\Api\RmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Rma\Model\RmaSkipReturnStatusRequest(); // \GeminiCommerce\Rma\Model\RmaSkipReturnStatusRequest

try {
    $result = $apiInstance->skipReturnStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaApi->skipReturnStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Rma\Model\RmaSkipReturnStatusRequest**](../Model/RmaSkipReturnStatusRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
