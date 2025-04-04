# MagDv\Cargomart\OrderEcnApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrderEcnIdCancelPost()**](OrderEcnApi.md#apiV2OrderEcnIdCancelPost) | **POST** /api/v2/order-ecn/{id}/cancel | Отмена ЭТрН
[**apiV2OrderEcnIdGet()**](OrderEcnApi.md#apiV2OrderEcnIdGet) | **GET** /api/v2/order-ecn/{id} | Получение объекта ЭТрН
[**apiV2OrderOrderIdCheckDigitalEcnAccessGet()**](OrderEcnApi.md#apiV2OrderOrderIdCheckDigitalEcnAccessGet) | **GET** /api/v2/order/{orderId}/check-digital-ecn-access | Проверка доступа к созданию Электронной ТРН.
[**apiV2OrderOrderIdEcnGet()**](OrderEcnApi.md#apiV2OrderOrderIdEcnGet) | **GET** /api/v2/order/{orderId}/ecn | Получение списка ЭТрН у заказа
[**apiV2OrderOrderIdEcnPost()**](OrderEcnApi.md#apiV2OrderOrderIdEcnPost) | **POST** /api/v2/order/{orderId}/ecn | Создание ЭТрН для заказа.
[**apiV2OrderOrderIdEcnTemplateGet()**](OrderEcnApi.md#apiV2OrderOrderIdEcnTemplateGet) | **GET** /api/v2/order/{orderId}/ecn-template | Скачать транспортную накладную (подготовить ссылку на скачивание)
[**apiV2OrderOrderIdValidateEcnDataPost()**](OrderEcnApi.md#apiV2OrderOrderIdValidateEcnDataPost) | **POST** /api/v2/order/{orderId}/validate-ecn-data | Проверка данных ЭТрН заказа перед созданием.


## `apiV2OrderEcnIdCancelPost()`

```php
apiV2OrderEcnIdCancelPost($id): \MagDv\Cargomart\Dto\OrderEcnResponse
```

Отмена ЭТрН

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderEcnApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор Этрн.

try {
    $result = $apiInstance->apiV2OrderEcnIdCancelPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderEcnApi->apiV2OrderEcnIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор Этрн. |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnResponse**](../Model/OrderEcnResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderEcnIdGet()`

```php
apiV2OrderEcnIdGet($id): \MagDv\Cargomart\Dto\OrderEcnResponse
```

Получение объекта ЭТрН

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderEcnApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор Этрн.

try {
    $result = $apiInstance->apiV2OrderEcnIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderEcnApi->apiV2OrderEcnIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор Этрн. |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnResponse**](../Model/OrderEcnResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdCheckDigitalEcnAccessGet()`

```php
apiV2OrderOrderIdCheckDigitalEcnAccessGet($order_id, $point_index_from, $point_index_to): \MagDv\Cargomart\Dto\OrderEcnCheckAccessResponse
```

Проверка доступа к созданию Электронной ТРН.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderEcnApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$point_index_from = 56; // int | Индекс пункта погрузки из маршрута.
$point_index_to = 56; // int | Индекс пункта выгрузки из маршрута.

try {
    $result = $apiInstance->apiV2OrderOrderIdCheckDigitalEcnAccessGet($order_id, $point_index_from, $point_index_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderEcnApi->apiV2OrderOrderIdCheckDigitalEcnAccessGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **point_index_from** | **int**| Индекс пункта погрузки из маршрута. |
 **point_index_to** | **int**| Индекс пункта выгрузки из маршрута. |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnCheckAccessResponse**](../Model/OrderEcnCheckAccessResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdEcnGet()`

```php
apiV2OrderOrderIdEcnGet($order_id, $filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $filter_is_active, $page, $per_page): \MagDv\Cargomart\Dto\OrderEcnListResponse
```

Получение списка ЭТрН у заказа

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderEcnApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор шаблона или базового заказа.
$filter_index_from = 56; // int | Индекс пункта откуда.
$filter_index_to = 56; // int | Индекс пункта куда.
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnType(); // \MagDv\Cargomart\Dto\EcnType | Тип ТРН.
$filter_status_group = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatusGroup(); // \MagDv\Cargomart\Dto\EcnStatusGroup | Обобщенный статус ТРН.
$filter_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatus(); // \MagDv\Cargomart\Dto\EcnStatus | Статус ТРН.
$filter_is_active = True; // bool | Выбрать только активные.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2OrderOrderIdEcnGet($order_id, $filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $filter_is_active, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderEcnApi->apiV2OrderOrderIdEcnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор шаблона или базового заказа. |
 **filter_index_from** | **int**| Индекс пункта откуда. | [optional]
 **filter_index_to** | **int**| Индекс пункта куда. | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\EcnType**](../Model/.md)| Тип ТРН. | [optional]
 **filter_status_group** | [**\MagDv\Cargomart\Dto\EcnStatusGroup**](../Model/.md)| Обобщенный статус ТРН. | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\EcnStatus**](../Model/.md)| Статус ТРН. | [optional]
 **filter_is_active** | **bool**| Выбрать только активные. | [optional]
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnListResponse**](../Model/OrderEcnListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdEcnPost()`

```php
apiV2OrderOrderIdEcnPost($order_id, $ecn_additional_data): \MagDv\Cargomart\Dto\OrderEcnResponse
```

Создание ЭТрН для заказа.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderEcnApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$ecn_additional_data = new \MagDv\Cargomart\Dto\EcnAdditionalData(); // \MagDv\Cargomart\Dto\EcnAdditionalData

try {
    $result = $apiInstance->apiV2OrderOrderIdEcnPost($order_id, $ecn_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderEcnApi->apiV2OrderOrderIdEcnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **ecn_additional_data** | [**\MagDv\Cargomart\Dto\EcnAdditionalData**](../Model/EcnAdditionalData.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\OrderEcnResponse**](../Model/OrderEcnResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdEcnTemplateGet()`

```php
apiV2OrderOrderIdEcnTemplateGet($order_id, $format, $point_index): \MagDv\Cargomart\Dto\FileLinkResponse
```

Скачать транспортную накладную (подготовить ссылку на скачивание)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderEcnApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$format = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnTemplateFormatEnum(); // \MagDv\Cargomart\Dto\EcnTemplateFormatEnum | Формат формирования накладной.
$point_index = array(56); // int[] | Индексы точек погрузки, которые указать в ТН, 2-шт

try {
    $result = $apiInstance->apiV2OrderOrderIdEcnTemplateGet($order_id, $format, $point_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderEcnApi->apiV2OrderOrderIdEcnTemplateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **format** | [**\MagDv\Cargomart\Dto\EcnTemplateFormatEnum**](../Model/.md)| Формат формирования накладной. | [optional]
 **point_index** | [**int[]**](../Model/int.md)| Индексы точек погрузки, которые указать в ТН, 2-шт | [optional]

### Return type

[**\MagDv\Cargomart\Dto\FileLinkResponse**](../Model/FileLinkResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2OrderOrderIdValidateEcnDataPost()`

```php
apiV2OrderOrderIdValidateEcnDataPost($order_id, $ecn_additional_data): \MagDv\Cargomart\Dto\BaseMessageResponse
```

Проверка данных ЭТрН заказа перед созданием.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CookieTokenAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure API key authorization: HeaderAuthorizationAuth
$config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MagDv\Cargomart\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MagDv\Cargomart\Api\OrderEcnApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Идентификатор заказа.
$ecn_additional_data = new \MagDv\Cargomart\Dto\EcnAdditionalData(); // \MagDv\Cargomart\Dto\EcnAdditionalData

try {
    $result = $apiInstance->apiV2OrderOrderIdValidateEcnDataPost($order_id, $ecn_additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderEcnApi->apiV2OrderOrderIdValidateEcnDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Идентификатор заказа. |
 **ecn_additional_data** | [**\MagDv\Cargomart\Dto\EcnAdditionalData**](../Model/EcnAdditionalData.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\BaseMessageResponse**](../Model/BaseMessageResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
