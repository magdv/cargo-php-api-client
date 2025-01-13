# MagDv\Cargomart\OrderActNonDeliveryCarApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderCmUuidActNonDeliveryCarGet()**](OrderActNonDeliveryCarApi.md#apiV2OrderCmUuidActNonDeliveryCarGet) | **GET** /api/v2/order/{cmUuid}/act-non-delivery-car | Скачать акт о неподаче машины на погрузку.
[**cancelDigitalActNonDeliveryCarByUuid()**](OrderActNonDeliveryCarApi.md#cancelDigitalActNonDeliveryCarByUuid) | **POST** /api/v2/act-non-delivery-car/{uuid}/cancel | Отозвать электронный акт о неподаче машины на погрузку по идентификатору
[**createDigitalActNonDeliveryCar()**](OrderActNonDeliveryCarApi.md#createDigitalActNonDeliveryCar) | **POST** /api/v2/order/{cmUuid}/digital-act-non-delivery-car | Создать электронный акт о неподаче машины на погрузку
[**getOrderActNonDeliveryCar()**](OrderActNonDeliveryCarApi.md#getOrderActNonDeliveryCar) | **GET** /api/v2/order/{cmUuid}/digital-act-non-delivery-car | Получить данные электронного акта о неподаче машины на погрузку
[**getOrderActNonDeliveryCarByUuid()**](OrderActNonDeliveryCarApi.md#getOrderActNonDeliveryCarByUuid) | **GET** /api/v2/act-non-delivery-car/{uuid} | Получить данные электронного акта о неподаче машины на погрузку по идентификатору


## `apiV2OrderCmUuidActNonDeliveryCarGet()`

```php
apiV2OrderCmUuidActNonDeliveryCarGet($cm_uuid): \MagDv\Cargomart\Dto\FileLinkResponse
```

Скачать акт о неподаче машины на погрузку.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderActNonDeliveryCarApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$cm_uuid = 'cm_uuid_example'; // string | UUID или хэш объекта

try {
    $result = $apiInstance->apiV2OrderCmUuidActNonDeliveryCarGet($cm_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActNonDeliveryCarApi->apiV2OrderCmUuidActNonDeliveryCarGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cm_uuid** | **string**| UUID или хэш объекта |

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelDigitalActNonDeliveryCarByUuid()`

```php
cancelDigitalActNonDeliveryCarByUuid($uuid, $body): \MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse
```

Отозвать электронный акт о неподаче машины на погрузку по идентификатору

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderActNonDeliveryCarApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID объекта
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->cancelDigitalActNonDeliveryCarByUuid($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActNonDeliveryCarApi->cancelDigitalActNonDeliveryCarByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID объекта |
 **body** | **object**|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse**](../Model/OrderActNonDeliveryCarResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDigitalActNonDeliveryCar()`

```php
createDigitalActNonDeliveryCar($cm_uuid, $digital_act_non_delivery_car_fields): \MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse
```

Создать электронный акт о неподаче машины на погрузку

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderActNonDeliveryCarApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$cm_uuid = 'cm_uuid_example'; // string | UUID или хэш объекта
$digital_act_non_delivery_car_fields = new \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarFields(); // \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarFields

try {
    $result = $apiInstance->createDigitalActNonDeliveryCar($cm_uuid, $digital_act_non_delivery_car_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActNonDeliveryCarApi->createDigitalActNonDeliveryCar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cm_uuid** | **string**| UUID или хэш объекта |
 **digital_act_non_delivery_car_fields** | [**\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarFields**](../Model/DigitalActNonDeliveryCarFields.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse**](../Model/OrderActNonDeliveryCarResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderActNonDeliveryCar()`

```php
getOrderActNonDeliveryCar($cm_uuid): \MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse
```

Получить данные электронного акта о неподаче машины на погрузку

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderActNonDeliveryCarApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$cm_uuid = 'cm_uuid_example'; // string | UUID или хэш объекта

try {
    $result = $apiInstance->getOrderActNonDeliveryCar($cm_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActNonDeliveryCarApi->getOrderActNonDeliveryCar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cm_uuid** | **string**| UUID или хэш объекта |

### Return type

[**\MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse**](../Model/OrderActNonDeliveryCarResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderActNonDeliveryCarByUuid()`

```php
getOrderActNonDeliveryCarByUuid($uuid): \MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse
```

Получить данные электронного акта о неподаче машины на погрузку по идентификатору

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\OrderActNonDeliveryCarApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID объекта

try {
    $result = $apiInstance->getOrderActNonDeliveryCarByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActNonDeliveryCarApi->getOrderActNonDeliveryCarByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID объекта |

### Return type

[**\MagDv\Cargomart\Dto\OrderActNonDeliveryCarResponse**](../Model/OrderActNonDeliveryCarResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
