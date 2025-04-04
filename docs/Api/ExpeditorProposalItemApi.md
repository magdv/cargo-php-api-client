# MagDv\Cargomart\ExpeditorProposalItemApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorEcnGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorEcnGet) | **GET** /api/v2/expeditor-ecn | Получение списка ЭТрН
[**apiV2ExpeditorProposalIdDenyBankingDetailsPost()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdDenyBankingDetailsPost) | **POST** /api/v2/expeditor-proposal/{id}/deny-banking-details | Пометить банковские реквизиты ошибочными.
[**apiV2ExpeditorProposalIdGet()**](ExpeditorProposalItemApi.md#apiV2ExpeditorProposalIdGet) | **GET** /api/v2/expeditor-proposal/{id} | Получение информации для карточки заказа Экспедитора.


## `apiV2ExpeditorEcnGet()`

```php
apiV2ExpeditorEcnGet($filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $page, $per_page): \MagDv\Cargomart\Dto\OrderEcnListResponse
```

Получение списка ЭТрН

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_index_from = 56; // int | Индекс пункта откуда.
$filter_index_to = 56; // int | Индекс пункта куда.
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnType(); // \MagDv\Cargomart\Dto\EcnType | Тип ТРН.
$filter_status_group = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatusGroup(); // \MagDv\Cargomart\Dto\EcnStatusGroup | Обобщенный статус ТРН.
$filter_status = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\EcnStatus(); // \MagDv\Cargomart\Dto\EcnStatus | Статус ТРН.
$page = 1; // int | Номер страницы для постраничной навигации
$per_page = 20; // int | Количество элементов на страницу

try {
    $result = $apiInstance->apiV2ExpeditorEcnGet($filter_index_from, $filter_index_to, $filter_type, $filter_status_group, $filter_status, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorEcnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_index_from** | **int**| Индекс пункта откуда. | [optional]
 **filter_index_to** | **int**| Индекс пункта куда. | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\EcnType**](../Model/.md)| Тип ТРН. | [optional]
 **filter_status_group** | [**\MagDv\Cargomart\Dto\EcnStatusGroup**](../Model/.md)| Обобщенный статус ТРН. | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\EcnStatus**](../Model/.md)| Статус ТРН. | [optional]
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

## `apiV2ExpeditorProposalIdDenyBankingDetailsPost()`

```php
apiV2ExpeditorProposalIdDenyBankingDetailsPost($id, $deny_banking_details_request)
```

Пометить банковские реквизиты ошибочными.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.
$deny_banking_details_request = new \MagDv\Cargomart\Dto\DenyBankingDetailsRequest(); // \MagDv\Cargomart\Dto\DenyBankingDetailsRequest

try {
    $apiInstance->apiV2ExpeditorProposalIdDenyBankingDetailsPost($id, $deny_banking_details_request);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdDenyBankingDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |
 **deny_banking_details_request** | [**\MagDv\Cargomart\Dto\DenyBankingDetailsRequest**](../Model/DenyBankingDetailsRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorProposalIdGet()`

```php
apiV2ExpeditorProposalIdGet($id): \MagDv\Cargomart\Dto\ProposalCardResponse
```

Получение информации для карточки заказа Экспедитора.

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorProposalItemApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор заказа Экспедитора.

try {
    $result = $apiInstance->apiV2ExpeditorProposalIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorProposalItemApi->apiV2ExpeditorProposalIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор заказа Экспедитора. |

### Return type

[**\MagDv\Cargomart\Dto\ProposalCardResponse**](../Model/ProposalCardResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
