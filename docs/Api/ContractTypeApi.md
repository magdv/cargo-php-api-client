# MagDv\Cargomart\ContractTypeApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ContractTypeGet()**](ContractTypeApi.md#apiV2ContractTypeGet) | **GET** /api/v2/contract-type | Получение списка типов договоров.
[**apiV2ContractTypeIdDelete()**](ContractTypeApi.md#apiV2ContractTypeIdDelete) | **DELETE** /api/v2/contract-type/{id} | Удаление типа договора.
[**apiV2ContractTypeIdGet()**](ContractTypeApi.md#apiV2ContractTypeIdGet) | **GET** /api/v2/contract-type/{id} | Получение конкретного типа договора.
[**apiV2ContractTypeIdPatch()**](ContractTypeApi.md#apiV2ContractTypeIdPatch) | **PATCH** /api/v2/contract-type/{id} | Изменение типа договора.
[**apiV2ContractTypePost()**](ContractTypeApi.md#apiV2ContractTypePost) | **POST** /api/v2/contract-type | Создание типа договора.


## `apiV2ContractTypeGet()`

```php
apiV2ContractTypeGet(): \MagDv\Cargomart\Dto\ContractTypeList
```

Получение списка типов договоров.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV2ContractTypeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->apiV2ContractTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\ContractTypeList**](../Model/ContractTypeList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ContractTypeIdDelete()`

```php
apiV2ContractTypeIdDelete($id): \MagDv\Cargomart\Dto\EmptyDataResponse
```

Удаление типа договора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 56; // int | Идентификатор типа договора

try {
    $result = $apiInstance->apiV2ContractTypeIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->apiV2ContractTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор типа договора |

### Return type

[**\MagDv\Cargomart\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ContractTypeIdGet()`

```php
apiV2ContractTypeIdGet($id): \MagDv\Cargomart\Dto\ContractTypeItem
```

Получение конкретного типа договора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 56; // int | Идентификатор типа договора

try {
    $result = $apiInstance->apiV2ContractTypeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->apiV2ContractTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор типа договора |

### Return type

[**\MagDv\Cargomart\Dto\ContractTypeItem**](../Model/ContractTypeItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ContractTypeIdPatch()`

```php
apiV2ContractTypeIdPatch($id, $contract_type_request): \MagDv\Cargomart\Dto\ContractTypeItem
```

Изменение типа договора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 56; // int | Идентификатор типа договора
$contract_type_request = new \MagDv\Cargomart\Dto\ContractTypeRequest(); // \MagDv\Cargomart\Dto\ContractTypeRequest

try {
    $result = $apiInstance->apiV2ContractTypeIdPatch($id, $contract_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->apiV2ContractTypeIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор типа договора |
 **contract_type_request** | [**\MagDv\Cargomart\Dto\ContractTypeRequest**](../Model/ContractTypeRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ContractTypeItem**](../Model/ContractTypeItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ContractTypePost()`

```php
apiV2ContractTypePost($contract_type_request): \MagDv\Cargomart\Dto\ContractTypeItem
```

Создание типа договора.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$contract_type_request = new \MagDv\Cargomart\Dto\ContractTypeRequest(); // \MagDv\Cargomart\Dto\ContractTypeRequest

try {
    $result = $apiInstance->apiV2ContractTypePost($contract_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->apiV2ContractTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_type_request** | [**\MagDv\Cargomart\Dto\ContractTypeRequest**](../Model/ContractTypeRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\ContractTypeItem**](../Model/ContractTypeItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
