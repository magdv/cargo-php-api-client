# MagDv\Cargomart\ExpeditorAnnexToContractApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsApprovePost()**](ExpeditorAnnexToContractApi.md#apiV2ExpeditorAnnexToContractContractUuidBankingDetailsApprovePost) | **POST** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details/approve | Отметка банковских реквизитов, как валидных или невалидных и требующих переподписания
[**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsDelete()**](ExpeditorAnnexToContractApi.md#apiV2ExpeditorAnnexToContractContractUuidBankingDetailsDelete) | **DELETE** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details | Удаление (пометка неактивным) приложения договора с банковскими реквизитами
[**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsGet()**](ExpeditorAnnexToContractApi.md#apiV2ExpeditorAnnexToContractContractUuidBankingDetailsGet) | **GET** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details | Получение банковских реквизитов, как приложения к договору
[**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPost()**](ExpeditorAnnexToContractApi.md#apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPost) | **POST** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details | Создание нового приложения к договору с банковскими реквизитами (+ сразу подписываем)
[**apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPut()**](ExpeditorAnnexToContractApi.md#apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPut) | **PUT** /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details | Обновление приложения к договору с банковскими реквизитами (+ сразу подписываем)


## `apiV2ExpeditorAnnexToContractContractUuidBankingDetailsApprovePost()`

```php
apiV2ExpeditorAnnexToContractContractUuidBankingDetailsApprovePost($contract_uuid, $banking_details_approve_request): \MagDv\Cargomart\Dto\BaseMessageResponse
```

Отметка банковских реквизитов, как валидных или невалидных и требующих переподписания

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorAnnexToContractApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$contract_uuid = 'contract_uuid_example'; // string | УИД контракта, для которого запрашиваются реквизиты
$banking_details_approve_request = new \MagDv\Cargomart\Dto\BankingDetailsApproveRequest(); // \MagDv\Cargomart\Dto\BankingDetailsApproveRequest

try {
    $result = $apiInstance->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsApprovePost($contract_uuid, $banking_details_approve_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorAnnexToContractApi->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsApprovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_uuid** | **string**| УИД контракта, для которого запрашиваются реквизиты |
 **banking_details_approve_request** | [**\MagDv\Cargomart\Dto\BankingDetailsApproveRequest**](../Model/BankingDetailsApproveRequest.md)|  |

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

## `apiV2ExpeditorAnnexToContractContractUuidBankingDetailsDelete()`

```php
apiV2ExpeditorAnnexToContractContractUuidBankingDetailsDelete($contract_uuid): \MagDv\Cargomart\Dto\BaseMessageResponse
```

Удаление (пометка неактивным) приложения договора с банковскими реквизитами

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorAnnexToContractApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$contract_uuid = 'contract_uuid_example'; // string | УИД контракта, для которого запрашиваются реквизиты

try {
    $result = $apiInstance->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsDelete($contract_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorAnnexToContractApi->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_uuid** | **string**| УИД контракта, для которого запрашиваются реквизиты |

### Return type

[**\MagDv\Cargomart\Dto\BaseMessageResponse**](../Model/BaseMessageResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorAnnexToContractContractUuidBankingDetailsGet()`

```php
apiV2ExpeditorAnnexToContractContractUuidBankingDetailsGet($contract_uuid): \MagDv\Cargomart\Dto\BankingDetailsResponse
```

Получение банковских реквизитов, как приложения к договору

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorAnnexToContractApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$contract_uuid = 'contract_uuid_example'; // string | УИД контракта, для которого запрашиваются реквизиты

try {
    $result = $apiInstance->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsGet($contract_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorAnnexToContractApi->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_uuid** | **string**| УИД контракта, для которого запрашиваются реквизиты |

### Return type

[**\MagDv\Cargomart\Dto\BankingDetailsResponse**](../Model/BankingDetailsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPost()`

```php
apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPost($contract_uuid, $banking_details_request): \MagDv\Cargomart\Dto\BankingDetailsResponse
```

Создание нового приложения к договору с банковскими реквизитами (+ сразу подписываем)

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorAnnexToContractApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$contract_uuid = 'contract_uuid_example'; // string | УИД контракта, для которого запрашиваются реквизиты
$banking_details_request = new \MagDv\Cargomart\Dto\BankingDetailsRequest(); // \MagDv\Cargomart\Dto\BankingDetailsRequest

try {
    $result = $apiInstance->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPost($contract_uuid, $banking_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorAnnexToContractApi->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_uuid** | **string**| УИД контракта, для которого запрашиваются реквизиты |
 **banking_details_request** | [**\MagDv\Cargomart\Dto\BankingDetailsRequest**](../Model/BankingDetailsRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\BankingDetailsResponse**](../Model/BankingDetailsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPut()`

```php
apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPut($contract_uuid, $banking_details_update_request): \MagDv\Cargomart\Dto\BankingDetailsResponse
```

Обновление приложения к договору с банковскими реквизитами (+ сразу подписываем)

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorAnnexToContractApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$contract_uuid = 'contract_uuid_example'; // string | УИД контракта, для которого запрашиваются реквизиты
$banking_details_update_request = new \MagDv\Cargomart\Dto\BankingDetailsUpdateRequest(); // \MagDv\Cargomart\Dto\BankingDetailsUpdateRequest

try {
    $result = $apiInstance->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPut($contract_uuid, $banking_details_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorAnnexToContractApi->apiV2ExpeditorAnnexToContractContractUuidBankingDetailsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_uuid** | **string**| УИД контракта, для которого запрашиваются реквизиты |
 **banking_details_update_request** | [**\MagDv\Cargomart\Dto\BankingDetailsUpdateRequest**](../Model/BankingDetailsUpdateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\BankingDetailsResponse**](../Model/BankingDetailsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
