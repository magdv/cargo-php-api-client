# MagDv\Cargomart\ExpeditorCarrierContractUpdatesApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createExpeditorContractUpdates()**](ExpeditorCarrierContractUpdatesApi.md#createExpeditorContractUpdates) | **POST** /api/v2/expeditor-contract-updates | Запуск процесса подписания доп. соглашения договора
[**expeditorCarrierContractUpdatesAdditionalAgreementPreview()**](ExpeditorCarrierContractUpdatesApi.md#expeditorCarrierContractUpdatesAdditionalAgreementPreview) | **GET** /api/v2/expeditor-contract-updates/additional-agreement-preview | Предпросмотр файла доп. соглашения
[**expeditorCarrierContractUpdatesSendSms()**](ExpeditorCarrierContractUpdatesApi.md#expeditorCarrierContractUpdatesSendSms) | **POST** /api/v2/expeditor-contract-updates/signer/send-code | Отправка sms для подтверждения подписанта
[**expeditorCarrierContractUpdatesSign()**](ExpeditorCarrierContractUpdatesApi.md#expeditorCarrierContractUpdatesSign) | **POST** /api/v2/expeditor-contract-updates/sign | Подписание доп. соглашения
[**getExpeditorContractUpdates()**](ExpeditorCarrierContractUpdatesApi.md#getExpeditorContractUpdates) | **GET** /api/v2/expeditor-contract-updates | Просмотр текущего состояние обновления договора
[**updateExpeditorCarrierContractCancel()**](ExpeditorCarrierContractUpdatesApi.md#updateExpeditorCarrierContractCancel) | **POST** /api/v2/expeditor-contract-updates/cancel | Отмена обновления договора
[**updateExpeditorCarrierContractCommercialConditions()**](ExpeditorCarrierContractUpdatesApi.md#updateExpeditorCarrierContractCommercialConditions) | **POST** /api/v2/expeditor-contract-updates/commercial-conditions | Коммерческие условия
[**updateExpeditorCarrierContractSigner()**](ExpeditorCarrierContractUpdatesApi.md#updateExpeditorCarrierContractSigner) | **POST** /api/v2/expeditor-contract-updates/signer | Подписант договора


## `createExpeditorContractUpdates()`

```php
createExpeditorContractUpdates(): \MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse
```

Запуск процесса подписания доп. соглашения договора

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorCarrierContractUpdatesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createExpeditorContractUpdates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorCarrierContractUpdatesApi->createExpeditorContractUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse**](../Model/ExpeditorContractUpdatesResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expeditorCarrierContractUpdatesAdditionalAgreementPreview()`

```php
expeditorCarrierContractUpdatesAdditionalAgreementPreview(): \SplFileObject
```

Предпросмотр файла доп. соглашения

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorCarrierContractUpdatesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->expeditorCarrierContractUpdatesAdditionalAgreementPreview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorCarrierContractUpdatesApi->expeditorCarrierContractUpdatesAdditionalAgreementPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expeditorCarrierContractUpdatesSendSms()`

```php
expeditorCarrierContractUpdatesSendSms(): \MagDv\Cargomart\Dto\ExpeditorContractUpdatesSmsResponse
```

Отправка sms для подтверждения подписанта

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorCarrierContractUpdatesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->expeditorCarrierContractUpdatesSendSms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorCarrierContractUpdatesApi->expeditorCarrierContractUpdatesSendSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesSmsResponse**](../Model/ExpeditorContractUpdatesSmsResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expeditorCarrierContractUpdatesSign()`

```php
expeditorCarrierContractUpdatesSign($expeditor_contract_updates_sign_request): \MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse
```

Подписание доп. соглашения

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorCarrierContractUpdatesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_updates_sign_request = new \MagDv\Cargomart\Dto\ExpeditorContractUpdatesSignRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractUpdatesSignRequest

try {
    $result = $apiInstance->expeditorCarrierContractUpdatesSign($expeditor_contract_updates_sign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorCarrierContractUpdatesApi->expeditorCarrierContractUpdatesSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_updates_sign_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesSignRequest**](../Model/ExpeditorContractUpdatesSignRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse**](../Model/ExpeditorContractUpdatesResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpeditorContractUpdates()`

```php
getExpeditorContractUpdates(): \MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse
```

Просмотр текущего состояние обновления договора

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorCarrierContractUpdatesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getExpeditorContractUpdates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorCarrierContractUpdatesApi->getExpeditorContractUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse**](../Model/ExpeditorContractUpdatesResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpeditorCarrierContractCancel()`

```php
updateExpeditorCarrierContractCancel()
```

Отмена обновления договора

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorCarrierContractUpdatesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->updateExpeditorCarrierContractCancel();
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorCarrierContractUpdatesApi->updateExpeditorCarrierContractCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpeditorCarrierContractCommercialConditions()`

```php
updateExpeditorCarrierContractCommercialConditions($expeditor_contract_updates_commercial_conditions_request): \MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse
```

Коммерческие условия

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorCarrierContractUpdatesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_updates_commercial_conditions_request = new \MagDv\Cargomart\Dto\ExpeditorContractUpdatesCommercialConditionsRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractUpdatesCommercialConditionsRequest

try {
    $result = $apiInstance->updateExpeditorCarrierContractCommercialConditions($expeditor_contract_updates_commercial_conditions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorCarrierContractUpdatesApi->updateExpeditorCarrierContractCommercialConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_updates_commercial_conditions_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesCommercialConditionsRequest**](../Model/ExpeditorContractUpdatesCommercialConditionsRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse**](../Model/ExpeditorContractUpdatesResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpeditorCarrierContractSigner()`

```php
updateExpeditorCarrierContractSigner($expeditor_contract_updates_signer_request): \MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse
```

Подписант договора

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


$apiInstance = new MagDv\Cargomart\Api\ExpeditorCarrierContractUpdatesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$expeditor_contract_updates_signer_request = new \MagDv\Cargomart\Dto\ExpeditorContractUpdatesSignerRequest(); // \MagDv\Cargomart\Dto\ExpeditorContractUpdatesSignerRequest

try {
    $result = $apiInstance->updateExpeditorCarrierContractSigner($expeditor_contract_updates_signer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorCarrierContractUpdatesApi->updateExpeditorCarrierContractSigner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expeditor_contract_updates_signer_request** | [**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesSignerRequest**](../Model/ExpeditorContractUpdatesSignerRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorContractUpdatesResponse**](../Model/ExpeditorContractUpdatesResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
