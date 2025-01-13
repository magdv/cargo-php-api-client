# MagDv\Cargomart\DriverAppApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2DriverAppDetailGet()**](DriverAppApi.md#apiV2DriverAppDetailGet) | **GET** /api/v2/driver-app/detail | Получить по группе номеров телефона информацию о статусе установки &#39;приложения водителя&#39;.
[**apiV2DriverAppInvitePost()**](DriverAppApi.md#apiV2DriverAppInvitePost) | **POST** /api/v2/driver-app/invite | Отправить на номер телефона водителя приглашение на установку &#39;приложения водителя&#39;.


## `apiV2DriverAppDetailGet()`

```php
apiV2DriverAppDetailGet($phones): \MagDv\Cargomart\Dto\DriverAppPhoneListResponse
```

Получить по группе номеров телефона информацию о статусе установки 'приложения водителя'.

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


$apiInstance = new MagDv\Cargomart\Api\DriverAppApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$phones = array('phones_example'); // string[] | Номера телефонов

try {
    $result = $apiInstance->apiV2DriverAppDetailGet($phones);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverAppApi->apiV2DriverAppDetailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phones** | [**string[]**](../Model/string.md)| Номера телефонов |

### Return type

[**\MagDv\Cargomart\Dto\DriverAppPhoneListResponse**](../Model/DriverAppPhoneListResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2DriverAppInvitePost()`

```php
apiV2DriverAppInvitePost($driver_app_invite_post_request): \MagDv\Cargomart\Dto\DriverAppPhoneItemResponse
```

Отправить на номер телефона водителя приглашение на установку 'приложения водителя'.

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


$apiInstance = new MagDv\Cargomart\Api\DriverAppApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$driver_app_invite_post_request = new \MagDv\Cargomart\Dto\DriverAppInvitePostRequest(); // \MagDv\Cargomart\Dto\DriverAppInvitePostRequest

try {
    $result = $apiInstance->apiV2DriverAppInvitePost($driver_app_invite_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverAppApi->apiV2DriverAppInvitePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_app_invite_post_request** | [**\MagDv\Cargomart\Dto\DriverAppInvitePostRequest**](../Model/DriverAppInvitePostRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\DriverAppPhoneItemResponse**](../Model/DriverAppPhoneItemResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
