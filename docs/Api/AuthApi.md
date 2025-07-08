# MagDv\Cargomart\AuthApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2AuthLoginPost()**](AuthApi.md#apiV2AuthLoginPost) | **POST** /api/v2/auth/login | Аутентификация пользователя
[**apiV2AuthLogoutPost()**](AuthApi.md#apiV2AuthLogoutPost) | **POST** /api/v2/auth/logout | Удаление текущего токена
[**apiV2AuthRefreshTokenPost()**](AuthApi.md#apiV2AuthRefreshTokenPost) | **POST** /api/v2/auth/refresh-token | Обновление токенов пользователя


## `apiV2AuthLoginPost()`

```php
apiV2AuthLoginPost($login_password_request): \MagDv\Cargomart\Dto\AuthTokenResponse
```

Аутентификация пользователя

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$login_password_request = new \MagDv\Cargomart\Dto\LoginPasswordRequest(); // \MagDv\Cargomart\Dto\LoginPasswordRequest

try {
    $result = $apiInstance->apiV2AuthLoginPost($login_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->apiV2AuthLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_password_request** | [**\MagDv\Cargomart\Dto\LoginPasswordRequest**](../Model/LoginPasswordRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\AuthTokenResponse**](../Model/AuthTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2AuthLogoutPost()`

```php
apiV2AuthLogoutPost($logout_request): \MagDv\Cargomart\Dto\BaseMessageResponse
```

Удаление текущего токена

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$logout_request = new \MagDv\Cargomart\Dto\LogoutRequest(); // \MagDv\Cargomart\Dto\LogoutRequest

try {
    $result = $apiInstance->apiV2AuthLogoutPost($logout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->apiV2AuthLogoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logout_request** | [**\MagDv\Cargomart\Dto\LogoutRequest**](../Model/LogoutRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\BaseMessageResponse**](../Model/BaseMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2AuthRefreshTokenPost()`

```php
apiV2AuthRefreshTokenPost($refresh_token_request): \MagDv\Cargomart\Dto\AuthTokenResponse
```

Обновление токенов пользователя

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$refresh_token_request = new \MagDv\Cargomart\Dto\RefreshTokenRequest(); // \MagDv\Cargomart\Dto\RefreshTokenRequest

try {
    $result = $apiInstance->apiV2AuthRefreshTokenPost($refresh_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->apiV2AuthRefreshTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token_request** | [**\MagDv\Cargomart\Dto\RefreshTokenRequest**](../Model/RefreshTokenRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\AuthTokenResponse**](../Model/AuthTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
