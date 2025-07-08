# MagDv\Cargomart\UserApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2UserLoginPost()**](UserApi.md#apiV2UserLoginPost) | **POST** /api/v2/user/login | Авторизация пользователя и выдача токена.
[**apiV2UserLogoutPost()**](UserApi.md#apiV2UserLogoutPost) | **POST** /api/v2/user/logout | Завершение сеанса работы.
[**apiV2UserSelfCertificateGet()**](UserApi.md#apiV2UserSelfCertificateGet) | **GET** /api/v2/user/self/certificate | Получить список сертификатов текущего пользователя
[**apiV2UserSelfDelete()**](UserApi.md#apiV2UserSelfDelete) | **DELETE** /api/v2/user/self | Удаление пользователя самим собой.
[**apiV2UserSelfGet()**](UserApi.md#apiV2UserSelfGet) | **GET** /api/v2/user/self | Возвращает реквизиты своей организации.
[**apiV2UserSelfPut()**](UserApi.md#apiV2UserSelfPut) | **PUT** /api/v2/user/self | Сохраняет данные пользователя.


## `apiV2UserLoginPost()`

```php
apiV2UserLoginPost($user_login_request): \MagDv\Cargomart\Dto\UserLoginResponse
```

Авторизация пользователя и выдача токена.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$user_login_request = new \MagDv\Cargomart\Dto\UserLoginRequest(); // \MagDv\Cargomart\Dto\UserLoginRequest

try {
    $result = $apiInstance->apiV2UserLoginPost($user_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_login_request** | [**\MagDv\Cargomart\Dto\UserLoginRequest**](../Model/UserLoginRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\UserLoginResponse**](../Model/UserLoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserLogoutPost()`

```php
apiV2UserLogoutPost()
```

Завершение сеанса работы.

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


$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2UserLogoutPost();
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserLogoutPost: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

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


$apiInstance = new MagDv\Cargomart\Api\UserApi(
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
    echo 'Exception when calling UserApi->apiV2UserSelfCertificateGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2UserSelfDelete()`

```php
apiV2UserSelfDelete(): \MagDv\Cargomart\Dto\UserFullResponse
```

Удаление пользователя самим собой.

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


$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2UserSelfDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2UserSelfGet()`

```php
apiV2UserSelfGet($with): \MagDv\Cargomart\Dto\UserFullResponse
```

Возвращает реквизиты своей организации.

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


$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$with = array('with_example'); // string[] | Список ключей для раскрытия связей. Доступно: company, personalManager

try {
    $result = $apiInstance->apiV2UserSelfGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**string[]**](../Model/string.md)| Список ключей для раскрытия связей. Доступно: company, personalManager | [optional]

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

## `apiV2UserSelfPut()`

```php
apiV2UserSelfPut($user_profile_request): \MagDv\Cargomart\Dto\UserFullResponse
```

Сохраняет данные пользователя.

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


$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$user_profile_request = new \MagDv\Cargomart\Dto\UserProfileRequest(); // \MagDv\Cargomart\Dto\UserProfileRequest

try {
    $result = $apiInstance->apiV2UserSelfPut($user_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_profile_request** | [**\MagDv\Cargomart\Dto\UserProfileRequest**](../Model/UserProfileRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\UserFullResponse**](../Model/UserFullResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
