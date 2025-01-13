# MagDv\Cargomart\DigitalSignatureApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2UserCertificateCertificateIdApprovePost()**](DigitalSignatureApi.md#apiV2UserCertificateCertificateIdApprovePost) | **POST** /api/v2/user-certificate/{certificateId}/approve | Подтвердить сертификат.
[**apiV2UserCertificateCertificateIdCancelPost()**](DigitalSignatureApi.md#apiV2UserCertificateCertificateIdCancelPost) | **POST** /api/v2/user-certificate/{certificateId}/cancel | Отмена выдачи сертификата.
[**apiV2UserCertificateCertificateIdGet()**](DigitalSignatureApi.md#apiV2UserCertificateCertificateIdGet) | **GET** /api/v2/user-certificate/{certificateId} | Просмотреть информацию о сертификате
[**apiV2UserCertificateCertificateIdPut()**](DigitalSignatureApi.md#apiV2UserCertificateCertificateIdPut) | **PUT** /api/v2/user-certificate/{certificateId} | Обновление данных сертификата.
[**apiV2UserCertificateCertificateIdRejectPost()**](DigitalSignatureApi.md#apiV2UserCertificateCertificateIdRejectPost) | **POST** /api/v2/user-certificate/{certificateId}/reject | Сообщить об ошибке в сертификате.
[**apiV2UserCertificateCertificateIdRevokePost()**](DigitalSignatureApi.md#apiV2UserCertificateCertificateIdRevokePost) | **POST** /api/v2/user-certificate/{certificateId}/revoke | Отозвать сертификат.
[**apiV2UserCertificateCertificateIdSendPost()**](DigitalSignatureApi.md#apiV2UserCertificateCertificateIdSendPost) | **POST** /api/v2/user-certificate/{certificateId}/send | Отправить смс для подвтерждения сертификата.
[**apiV2UserSelfCertificateGet()**](DigitalSignatureApi.md#apiV2UserSelfCertificateGet) | **GET** /api/v2/user/self/certificate | Получить список сертификатов текущего пользователя
[**apiV2UserSelfDsPhoneVerificationCodePost()**](DigitalSignatureApi.md#apiV2UserSelfDsPhoneVerificationCodePost) | **POST** /api/v2/user/self/ds-phone-verification-code | deprecated! Выслать код для подтверждения
[**apiV2WorkerIdCertificateGet()**](DigitalSignatureApi.md#apiV2WorkerIdCertificateGet) | **GET** /api/v2/worker/{id}/certificate | Получить список сертификатов пользователя
[**apiV2WorkerIdCertificatePost()**](DigitalSignatureApi.md#apiV2WorkerIdCertificatePost) | **POST** /api/v2/worker/{id}/certificate | Выдача сертификата пользователю
[**apiV2WorkerIdChatGet()**](DigitalSignatureApi.md#apiV2WorkerIdChatGet) | **GET** /api/v2/worker/{id}/chat | Получение списка комнат сотрудника.


## `apiV2UserCertificateCertificateIdApprovePost()`

```php
apiV2UserCertificateCertificateIdApprovePost($certificate_id, $user_certificate_issue_approve_request): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Подтвердить сертификат.

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string | Идентификатор сертификата
$user_certificate_issue_approve_request = new \MagDv\Cargomart\Dto\UserCertificateIssueApproveRequest(); // \MagDv\Cargomart\Dto\UserCertificateIssueApproveRequest

try {
    $result = $apiInstance->apiV2UserCertificateCertificateIdApprovePost($certificate_id, $user_certificate_issue_approve_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserCertificateCertificateIdApprovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**| Идентификатор сертификата |
 **user_certificate_issue_approve_request** | [**\MagDv\Cargomart\Dto\UserCertificateIssueApproveRequest**](../Model/UserCertificateIssueApproveRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserCertificateCertificateIdCancelPost()`

```php
apiV2UserCertificateCertificateIdCancelPost($certificate_id, $user_certificate_issue_reject_request): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Отмена выдачи сертификата.

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string | Идентификатор сертификата
$user_certificate_issue_reject_request = new \MagDv\Cargomart\Dto\UserCertificateIssueRejectRequest(); // \MagDv\Cargomart\Dto\UserCertificateIssueRejectRequest

try {
    $result = $apiInstance->apiV2UserCertificateCertificateIdCancelPost($certificate_id, $user_certificate_issue_reject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserCertificateCertificateIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**| Идентификатор сертификата |
 **user_certificate_issue_reject_request** | [**\MagDv\Cargomart\Dto\UserCertificateIssueRejectRequest**](../Model/UserCertificateIssueRejectRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserCertificateCertificateIdGet()`

```php
apiV2UserCertificateCertificateIdGet($certificate_id): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Просмотреть информацию о сертификате

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string | Идентификатор сертификата

try {
    $result = $apiInstance->apiV2UserCertificateCertificateIdGet($certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserCertificateCertificateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**| Идентификатор сертификата |

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserCertificateCertificateIdPut()`

```php
apiV2UserCertificateCertificateIdPut($certificate_id, $user_certificate_update_request): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Обновление данных сертификата.

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string | Идентификатор сертификата
$user_certificate_update_request = new \MagDv\Cargomart\Dto\UserCertificateUpdateRequest(); // \MagDv\Cargomart\Dto\UserCertificateUpdateRequest

try {
    $result = $apiInstance->apiV2UserCertificateCertificateIdPut($certificate_id, $user_certificate_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserCertificateCertificateIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**| Идентификатор сертификата |
 **user_certificate_update_request** | [**\MagDv\Cargomart\Dto\UserCertificateUpdateRequest**](../Model/UserCertificateUpdateRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserCertificateCertificateIdRejectPost()`

```php
apiV2UserCertificateCertificateIdRejectPost($certificate_id, $user_certificate_issue_reject_request): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Сообщить об ошибке в сертификате.

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string | Идентификатор сертификата
$user_certificate_issue_reject_request = new \MagDv\Cargomart\Dto\UserCertificateIssueRejectRequest(); // \MagDv\Cargomart\Dto\UserCertificateIssueRejectRequest

try {
    $result = $apiInstance->apiV2UserCertificateCertificateIdRejectPost($certificate_id, $user_certificate_issue_reject_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserCertificateCertificateIdRejectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**| Идентификатор сертификата |
 **user_certificate_issue_reject_request** | [**\MagDv\Cargomart\Dto\UserCertificateIssueRejectRequest**](../Model/UserCertificateIssueRejectRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserCertificateCertificateIdRevokePost()`

```php
apiV2UserCertificateCertificateIdRevokePost($certificate_id, $user_certificate_revoke_request): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Отозвать сертификат.

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string | Идентификатор сертификата
$user_certificate_revoke_request = new \MagDv\Cargomart\Dto\UserCertificateRevokeRequest(); // \MagDv\Cargomart\Dto\UserCertificateRevokeRequest

try {
    $result = $apiInstance->apiV2UserCertificateCertificateIdRevokePost($certificate_id, $user_certificate_revoke_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserCertificateCertificateIdRevokePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**| Идентификатор сертификата |
 **user_certificate_revoke_request** | [**\MagDv\Cargomart\Dto\UserCertificateRevokeRequest**](../Model/UserCertificateRevokeRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserCertificateCertificateIdSendPost()`

```php
apiV2UserCertificateCertificateIdSendPost($certificate_id): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Отправить смс для подвтерждения сертификата.

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string | Идентификатор сертификата

try {
    $result = $apiInstance->apiV2UserCertificateCertificateIdSendPost($certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserCertificateCertificateIdSendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**| Идентификатор сертификата |

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserSelfCertificateGet()`

```php
apiV2UserSelfCertificateGet($filter_proxy_type, $filter_status): \MagDv\Cargomart\Dto\UserCertificateListResponse
```

Получить список сертификатов текущего пользователя

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filter_proxy_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\UserCertificateProxyTypeEnum(); // \MagDv\Cargomart\Dto\UserCertificateProxyTypeEnum | Тип доверенности.
$filter_status = array(new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\UserCertificateStatusEnum()); // \MagDv\Cargomart\Dto\UserCertificateStatusEnum[] | Статус сертификата.

try {
    $result = $apiInstance->apiV2UserSelfCertificateGet($filter_proxy_type, $filter_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserSelfCertificateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_proxy_type** | [**\MagDv\Cargomart\Dto\UserCertificateProxyTypeEnum**](../Model/.md)| Тип доверенности. | [optional]
 **filter_status** | [**\MagDv\Cargomart\Dto\UserCertificateStatusEnum[]**](../Model/\MagDv\Cargomart\Dto\UserCertificateStatusEnum.md)| Статус сертификата. | [optional]

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateListResponse**](../Model/UserCertificateListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserSelfDsPhoneVerificationCodePost()`

```php
apiV2UserSelfDsPhoneVerificationCodePost(): \MagDv\Cargomart\Dto\UserFullResponse
```

deprecated! Выслать код для подтверждения

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2UserSelfDsPhoneVerificationCodePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2UserSelfDsPhoneVerificationCodePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\UserFullResponse**](../Model/UserFullResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdCertificateGet()`

```php
apiV2WorkerIdCertificateGet($id): \MagDv\Cargomart\Dto\UserCertificateListResponse
```

Получить список сертификатов пользователя

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор сотрудника в компании пользователя.

try {
    $result = $apiInstance->apiV2WorkerIdCertificateGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2WorkerIdCertificateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор сотрудника в компании пользователя. |

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateListResponse**](../Model/UserCertificateListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdCertificatePost()`

```php
apiV2WorkerIdCertificatePost($id, $worker_certificate_create_request): \MagDv\Cargomart\Dto\UserCertificateResponse
```

Выдача сертификата пользователю

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор сотрудника в компании пользователя.
$worker_certificate_create_request = new \MagDv\Cargomart\Dto\WorkerCertificateCreateRequest(); // \MagDv\Cargomart\Dto\WorkerCertificateCreateRequest

try {
    $result = $apiInstance->apiV2WorkerIdCertificatePost($id, $worker_certificate_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2WorkerIdCertificatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор сотрудника в компании пользователя. |
 **worker_certificate_create_request** | [**\MagDv\Cargomart\Dto\WorkerCertificateCreateRequest**](../Model/WorkerCertificateCreateRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\UserCertificateResponse**](../Model/UserCertificateResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2WorkerIdChatGet()`

```php
apiV2WorkerIdChatGet($id): \MagDv\Cargomart\Dto\ChatListResponse
```

Получение списка комнат сотрудника.

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


$apiInstance = new MagDv\Cargomart\Api\DigitalSignatureApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Идентификатор сотрудника в компании пользователя.

try {
    $result = $apiInstance->apiV2WorkerIdChatGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureApi->apiV2WorkerIdChatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор сотрудника в компании пользователя. |

### Return type

[**\MagDv\Cargomart\Dto\ChatListResponse**](../Model/ChatListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
