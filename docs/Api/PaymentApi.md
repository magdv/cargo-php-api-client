# MagDv\Cargomart\PaymentApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdPaymentGet()**](PaymentApi.md#apiV2OrderOrderIdPaymentGet) | **GET** /api/v2/order/{orderId}/payment | Список оплат по счёту


## `apiV2OrderOrderIdPaymentGet()`

```php
apiV2OrderOrderIdPaymentGet($order_id): \MagDv\Cargomart\Dto\OrderPaymentResponse
```

Список оплат по счёту

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заказа

try {
    $result = $apiInstance->apiV2OrderOrderIdPaymentGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV2OrderOrderIdPaymentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |

### Return type

[**\MagDv\Cargomart\Dto\OrderPaymentResponse**](../Model/OrderPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)