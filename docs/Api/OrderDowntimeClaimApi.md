# MagDv\Cargomart\OrderDowntimeClaimApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveOrderDowntimeClaim()**](OrderDowntimeClaimApi.md#approveOrderDowntimeClaim) | **POST** /api/v2/order/{orderId}/expeditor-downtime-claim-approve | Утверждение Заказчиком претензии Экспедитора о простое
[**cancelOrderDowntimeClaim()**](OrderDowntimeClaimApi.md#cancelOrderDowntimeClaim) | **POST** /api/v2/order/{orderId}/downtime-claim-cancel | Отмена Перевозчиком претензии о простое
[**createOrderDowntimeClaimCalculate()**](OrderDowntimeClaimApi.md#createOrderDowntimeClaimCalculate) | **POST** /api/v2/order/{orderId}/downtime-claim-calculate | Расчёт претензии о простое
[**createOrderDowntimeClaimProof()**](OrderDowntimeClaimApi.md#createOrderDowntimeClaimProof) | **POST** /api/v2/order/{orderId}/downtime-claim-proof | Загрузка подтверждений простоя для претензии о простое
[**getOrderClaim()**](OrderDowntimeClaimApi.md#getOrderClaim) | **GET** /api/v2/order/{orderId}/claim | Получение списка требований по заказу
[**previewOrderDowntimeClaimReject()**](OrderDowntimeClaimApi.md#previewOrderDowntimeClaimReject) | **POST** /api/v2/order/{orderId}/expeditor-downtime-claim-reject-preview | Получить ссылку на превью документа ответа Заказчика в виде отклонения претензии о простое по заявке
[**rejectOrderDowntimeClaim()**](OrderDowntimeClaimApi.md#rejectOrderDowntimeClaim) | **POST** /api/v2/order/{orderId}/expeditor-downtime-claim-reject | Отказ Заказчика в согласовании претензии Экспедитора о простое
[**signOrderDowntimeClaim()**](OrderDowntimeClaimApi.md#signOrderDowntimeClaim) | **POST** /api/v2/order/{orderId}/downtime-claim-sign | Подписание претензии о простое по заявке
[**viewPdfOrderDowntimeClaim()**](OrderDowntimeClaimApi.md#viewPdfOrderDowntimeClaim) | **GET** /api/v2/order/{orderId}/downtime-claim-pdf | Превью документа претензии о простое по заявке
[**viewPdfOrderDowntimeClaimApprove()**](OrderDowntimeClaimApi.md#viewPdfOrderDowntimeClaimApprove) | **GET** /api/v2/order/{orderId}/expeditor-downtime-claim-approve-pdf | Превью документа ответа Заказчика в виде согласования претензии о простое по заявке
[**viewPdfOrderDowntimeClaimReject()**](OrderDowntimeClaimApi.md#viewPdfOrderDowntimeClaimReject) | **GET** /api/v2/order/{orderId}/expeditor-downtime-claim-reject-pdf | Превью документа ответа Заказчика в виде отклонения претензии о простое по заявке


## `approveOrderDowntimeClaim()`

```php
approveOrderDowntimeClaim($order_id, $body): \MagDv\Cargomart\Dto\OrderDowntimeClaimResponse
```

Утверждение Заказчиком претензии Экспедитора о простое

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->approveOrderDowntimeClaim($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->approveOrderDowntimeClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |
 **body** | **object**|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDowntimeClaimResponse**](../Model/OrderDowntimeClaimResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrderDowntimeClaim()`

```php
cancelOrderDowntimeClaim($order_id, $body): \MagDv\Cargomart\Dto\OrderDowntimeClaimResponse
```

Отмена Перевозчиком претензии о простое

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->cancelOrderDowntimeClaim($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->cancelOrderDowntimeClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |
 **body** | **object**|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDowntimeClaimResponse**](../Model/OrderDowntimeClaimResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderDowntimeClaimCalculate()`

```php
createOrderDowntimeClaimCalculate($order_id, $order_downtime_calculate_request): \MagDv\Cargomart\Dto\OrderDowntimeResponse
```

Расчёт претензии о простое

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.
$order_downtime_calculate_request = new \MagDv\Cargomart\Dto\OrderDowntimeCalculateRequest(); // \MagDv\Cargomart\Dto\OrderDowntimeCalculateRequest

try {
    $result = $apiInstance->createOrderDowntimeClaimCalculate($order_id, $order_downtime_calculate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->createOrderDowntimeClaimCalculate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |
 **order_downtime_calculate_request** | [**\MagDv\Cargomart\Dto\OrderDowntimeCalculateRequest**](../Model/OrderDowntimeCalculateRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDowntimeResponse**](../Model/OrderDowntimeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderDowntimeClaimProof()`

```php
createOrderDowntimeClaimProof($order_id, $order_downtime_claim_create_proof_request): \MagDv\Cargomart\Dto\OrderDowntimeClaimResponse
```

Загрузка подтверждений простоя для претензии о простое

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.
$order_downtime_claim_create_proof_request = new \MagDv\Cargomart\Dto\OrderDowntimeClaimCreateProofRequest(); // \MagDv\Cargomart\Dto\OrderDowntimeClaimCreateProofRequest

try {
    $result = $apiInstance->createOrderDowntimeClaimProof($order_id, $order_downtime_claim_create_proof_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->createOrderDowntimeClaimProof: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |
 **order_downtime_claim_create_proof_request** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimCreateProofRequest**](../Model/OrderDowntimeClaimCreateProofRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDowntimeClaimResponse**](../Model/OrderDowntimeClaimResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderClaim()`

```php
getOrderClaim($order_id): \MagDv\Cargomart\Dto\OrderClaimListResponse
```

Получение списка требований по заказу

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.

try {
    $result = $apiInstance->getOrderClaim($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->getOrderClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |

### Return type

[**\MagDv\Cargomart\Dto\OrderClaimListResponse**](../Model/OrderClaimListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewOrderDowntimeClaimReject()`

```php
previewOrderDowntimeClaimReject($order_id, $order_downtime_claim_reject_request): \MagDv\Cargomart\Dto\FileV2Item
```

Получить ссылку на превью документа ответа Заказчика в виде отклонения претензии о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.
$order_downtime_claim_reject_request = new \MagDv\Cargomart\Dto\OrderDowntimeClaimRejectRequest(); // \MagDv\Cargomart\Dto\OrderDowntimeClaimRejectRequest

try {
    $result = $apiInstance->previewOrderDowntimeClaimReject($order_id, $order_downtime_claim_reject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->previewOrderDowntimeClaimReject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |
 **order_downtime_claim_reject_request** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimRejectRequest**](../Model/OrderDowntimeClaimRejectRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\FileV2Item**](../Model/FileV2Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectOrderDowntimeClaim()`

```php
rejectOrderDowntimeClaim($order_id, $order_downtime_claim_reject_request): \MagDv\Cargomart\Dto\OrderDowntimeClaimResponse
```

Отказ Заказчика в согласовании претензии Экспедитора о простое

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.
$order_downtime_claim_reject_request = new \MagDv\Cargomart\Dto\OrderDowntimeClaimRejectRequest(); // \MagDv\Cargomart\Dto\OrderDowntimeClaimRejectRequest

try {
    $result = $apiInstance->rejectOrderDowntimeClaim($order_id, $order_downtime_claim_reject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->rejectOrderDowntimeClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |
 **order_downtime_claim_reject_request** | [**\MagDv\Cargomart\Dto\OrderDowntimeClaimRejectRequest**](../Model/OrderDowntimeClaimRejectRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDowntimeClaimResponse**](../Model/OrderDowntimeClaimResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signOrderDowntimeClaim()`

```php
signOrderDowntimeClaim($order_id, $body): \MagDv\Cargomart\Dto\OrderDowntimeClaimResponse
```

Подписание претензии о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->signOrderDowntimeClaim($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->signOrderDowntimeClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |
 **body** | **object**|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderDowntimeClaimResponse**](../Model/OrderDowntimeClaimResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPdfOrderDowntimeClaim()`

```php
viewPdfOrderDowntimeClaim($order_id): \SplFileObject
```

Превью документа претензии о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.

try {
    $result = $apiInstance->viewPdfOrderDowntimeClaim($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->viewPdfOrderDowntimeClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPdfOrderDowntimeClaimApprove()`

```php
viewPdfOrderDowntimeClaimApprove($order_id): \SplFileObject
```

Превью документа ответа Заказчика в виде согласования претензии о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.

try {
    $result = $apiInstance->viewPdfOrderDowntimeClaimApprove($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->viewPdfOrderDowntimeClaimApprove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPdfOrderDowntimeClaimReject()`

```php
viewPdfOrderDowntimeClaimReject($order_id, $reason): \SplFileObject
```

Превью документа ответа Заказчика в виде отклонения претензии о простое по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderDowntimeClaimApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки.
$reason = 'reason_example'; // string | Причина.

try {
    $result = $apiInstance->viewPdfOrderDowntimeClaimReject($order_id, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDowntimeClaimApi->viewPdfOrderDowntimeClaimReject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки. |
 **reason** | **string**| Причина. |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
