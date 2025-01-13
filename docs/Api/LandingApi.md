# MagDv\Cargomart\LandingApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2LandingSendEmailPost()**](LandingApi.md#apiV2LandingSendEmailPost) | **POST** /api/v2/landing/send-email | Отправка email.


## `apiV2LandingSendEmailPost()`

```php
apiV2LandingSendEmailPost($send_email_request): \MagDv\Cargomart\Dto\BaseMessageResponse
```

Отправка email.

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


$apiInstance = new MagDv\Cargomart\Api\LandingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$send_email_request = new \MagDv\Cargomart\Dto\SendEmailRequest(); // \MagDv\Cargomart\Dto\SendEmailRequest

try {
    $result = $apiInstance->apiV2LandingSendEmailPost($send_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingApi->apiV2LandingSendEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_email_request** | [**\MagDv\Cargomart\Dto\SendEmailRequest**](../Model/SendEmailRequest.md)|  | [optional]

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
