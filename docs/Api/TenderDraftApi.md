# MagDv\Cargomart\TenderDraftApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2TenderDraftDraftIdDelete()**](TenderDraftApi.md#apiV2TenderDraftDraftIdDelete) | **DELETE** /api/v2/tender/draft/{draftId} | Удаление черновика тендера
[**apiV2TenderDraftDraftIdGet()**](TenderDraftApi.md#apiV2TenderDraftDraftIdGet) | **GET** /api/v2/tender/draft/{draftId} | Получение черновика тендера
[**apiV2TenderDraftDraftIdPublishPost()**](TenderDraftApi.md#apiV2TenderDraftDraftIdPublishPost) | **POST** /api/v2/tender/draft/{draftId}/publish | Публикация черновика
[**apiV2TenderDraftDraftIdPut()**](TenderDraftApi.md#apiV2TenderDraftDraftIdPut) | **PUT** /api/v2/tender/draft/{draftId} | Сохранение черновика тендера
[**apiV2TenderDraftGet()**](TenderDraftApi.md#apiV2TenderDraftGet) | **GET** /api/v2/tender/draft | Получение списка черновиков тендера
[**apiV2TenderDraftPost()**](TenderDraftApi.md#apiV2TenderDraftPost) | **POST** /api/v2/tender/draft | Создание черновика тендера


## `apiV2TenderDraftDraftIdDelete()`

```php
apiV2TenderDraftDraftIdDelete($draft_id)
```

Удаление черновика тендера

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


$apiInstance = new MagDv\Cargomart\Api\TenderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика тендера.

try {
    $apiInstance->apiV2TenderDraftDraftIdDelete($draft_id);
} catch (Exception $e) {
    echo 'Exception when calling TenderDraftApi->apiV2TenderDraftDraftIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика тендера. |

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderDraftDraftIdGet()`

```php
apiV2TenderDraftDraftIdGet($draft_id): \MagDv\Cargomart\Dto\TenderDraftItemResponse
```

Получение черновика тендера

Получение черновика тендера

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


$apiInstance = new MagDv\Cargomart\Api\TenderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика тендера.

try {
    $result = $apiInstance->apiV2TenderDraftDraftIdGet($draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderDraftApi->apiV2TenderDraftDraftIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика тендера. |

### Return type

[**\MagDv\Cargomart\Dto\TenderDraftItemResponse**](../Model/TenderDraftItemResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderDraftDraftIdPublishPost()`

```php
apiV2TenderDraftDraftIdPublishPost($draft_id): \MagDv\Cargomart\Dto\TenderDraftRequestResponse
```

Публикация черновика

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


$apiInstance = new MagDv\Cargomart\Api\TenderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика тендера.

try {
    $result = $apiInstance->apiV2TenderDraftDraftIdPublishPost($draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderDraftApi->apiV2TenderDraftDraftIdPublishPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика тендера. |

### Return type

[**\MagDv\Cargomart\Dto\TenderDraftRequestResponse**](../Model/TenderDraftRequestResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderDraftDraftIdPut()`

```php
apiV2TenderDraftDraftIdPut($draft_id, $tender_draft_update_request): \MagDv\Cargomart\Dto\TenderDraftItemResponse
```

Сохранение черновика тендера

Сохранение черновика тендера

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


$apiInstance = new MagDv\Cargomart\Api\TenderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$draft_id = 'draft_id_example'; // string | Идентификатор черновика тендера.
$tender_draft_update_request = new \MagDv\Cargomart\Dto\TenderDraftUpdateRequest(); // \MagDv\Cargomart\Dto\TenderDraftUpdateRequest

try {
    $result = $apiInstance->apiV2TenderDraftDraftIdPut($draft_id, $tender_draft_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderDraftApi->apiV2TenderDraftDraftIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **string**| Идентификатор черновика тендера. |
 **tender_draft_update_request** | [**\MagDv\Cargomart\Dto\TenderDraftUpdateRequest**](../Model/TenderDraftUpdateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\TenderDraftItemResponse**](../Model/TenderDraftItemResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderDraftGet()`

```php
apiV2TenderDraftGet($page, $per_page): \MagDv\Cargomart\Dto\TenderDraftListResponse
```

Получение списка черновиков тендера

Получение списка черновиков тендера

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


$apiInstance = new MagDv\Cargomart\Api\TenderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2TenderDraftGet($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderDraftApi->apiV2TenderDraftGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Номер страницы для постраничной навигации | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]

### Return type

[**\MagDv\Cargomart\Dto\TenderDraftListResponse**](../Model/TenderDraftListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TenderDraftPost()`

```php
apiV2TenderDraftPost($tender_draft_update_request): \MagDv\Cargomart\Dto\TenderDraftItemResponse
```

Создание черновика тендера

Создание черновика тендера

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


$apiInstance = new MagDv\Cargomart\Api\TenderDraftApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$tender_draft_update_request = new \MagDv\Cargomart\Dto\TenderDraftUpdateRequest(); // \MagDv\Cargomart\Dto\TenderDraftUpdateRequest

try {
    $result = $apiInstance->apiV2TenderDraftPost($tender_draft_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenderDraftApi->apiV2TenderDraftPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tender_draft_update_request** | [**\MagDv\Cargomart\Dto\TenderDraftUpdateRequest**](../Model/TenderDraftUpdateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\TenderDraftItemResponse**](../Model/TenderDraftItemResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
