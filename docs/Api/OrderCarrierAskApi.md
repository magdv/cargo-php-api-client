# MagDv\Cargomart\OrderCarrierAskApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderOrderIdCarrierAskCarrierAskIdAcceptPost()**](OrderCarrierAskApi.md#apiV2OrderOrderIdCarrierAskCarrierAskIdAcceptPost) | **POST** /api/v2/order/{orderId}/carrier-ask/{carrierAskId}/accept | Принятие заказчиком ставки перевозчика по заявке
[**apiV2OrderOrderIdCarrierAskDelete()**](OrderCarrierAskApi.md#apiV2OrderOrderIdCarrierAskDelete) | **DELETE** /api/v2/order/{orderId}/carrier-ask | Отзыв ставки перевозчиком
[**apiV2OrderOrderIdCarrierAskPost()**](OrderCarrierAskApi.md#apiV2OrderOrderIdCarrierAskPost) | **POST** /api/v2/order/{orderId}/carrier-ask | Создание или замена ставки перевозчика по заявке
[**apiV2OrderOrderIdCarrierAskStatGet()**](OrderCarrierAskApi.md#apiV2OrderOrderIdCarrierAskStatGet) | **GET** /api/v2/order/{orderId}/carrier-ask-stat | Получение информации отправителем информации о текущей минимальной ставке и общей статистики по ставкам


## `apiV2OrderOrderIdCarrierAskCarrierAskIdAcceptPost()`

```php
apiV2OrderOrderIdCarrierAskCarrierAskIdAcceptPost($order_id, $carrier_ask_id, $body): \MagDv\Cargomart\Dto\OrderCardResponse
```

Принятие заказчиком ставки перевозчика по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderCarrierAskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки
$carrier_ask_id = 'carrier_ask_id_example'; // string | Идентификатор ставки перевозчика
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->apiV2OrderOrderIdCarrierAskCarrierAskIdAcceptPost($order_id, $carrier_ask_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderCarrierAskApi->apiV2OrderOrderIdCarrierAskCarrierAskIdAcceptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки |
 **carrier_ask_id** | **string**| Идентификатор ставки перевозчика |
 **body** | **object**|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdCarrierAskDelete()`

```php
apiV2OrderOrderIdCarrierAskDelete($order_id, $body): \MagDv\Cargomart\Dto\OrderCardResponse
```

Отзыв ставки перевозчиком

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderCarrierAskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->apiV2OrderOrderIdCarrierAskDelete($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderCarrierAskApi->apiV2OrderOrderIdCarrierAskDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки |
 **body** | **object**|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdCarrierAskPost()`

```php
apiV2OrderOrderIdCarrierAskPost($order_id, $order_carrier_ask_request): \MagDv\Cargomart\Dto\OrderCardResponse
```

Создание или замена ставки перевозчика по заявке

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderCarrierAskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заявки
$order_carrier_ask_request = new \MagDv\Cargomart\Dto\OrderCarrierAskRequest(); // \MagDv\Cargomart\Dto\OrderCarrierAskRequest

try {
    $result = $apiInstance->apiV2OrderOrderIdCarrierAskPost($order_id, $order_carrier_ask_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderCarrierAskApi->apiV2OrderOrderIdCarrierAskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заявки |
 **order_carrier_ask_request** | [**\MagDv\Cargomart\Dto\OrderCarrierAskRequest**](../Model/OrderCarrierAskRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderCardResponse**](../Model/OrderCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdCarrierAskStatGet()`

```php
apiV2OrderOrderIdCarrierAskStatGet($order_id): \MagDv\Cargomart\Dto\CarrierAskInfoResponse
```

Получение информации отправителем информации о текущей минимальной ставке и общей статистики по ставкам

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderCarrierAskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Идентификатор заказа

try {
    $result = $apiInstance->apiV2OrderOrderIdCarrierAskStatGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderCarrierAskApi->apiV2OrderOrderIdCarrierAskStatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа |

### Return type

[**\MagDv\Cargomart\Dto\CarrierAskInfoResponse**](../Model/CarrierAskInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
