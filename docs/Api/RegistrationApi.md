# MagDv\Cargomart\RegistrationApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2RegistrationIdConfirmPost()**](RegistrationApi.md#apiV2RegistrationIdConfirmPost) | **POST** /api/v2/registration/{id}/confirm | Подтверждение регистрации/ввод проверочного кода.


## `apiV2RegistrationIdConfirmPost()`

```php
apiV2RegistrationIdConfirmPost($id, $registration_confirm_request): \MagDv\Cargomart\Dto\Reg
```

Подтверждение регистрации/ввод проверочного кода.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор процесса регистрации.
$registration_confirm_request = new \MagDv\Cargomart\Dto\RegistrationConfirmRequest(); // \MagDv\Cargomart\Dto\RegistrationConfirmRequest

try {
    $result = $apiInstance->apiV2RegistrationIdConfirmPost($id, $registration_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->apiV2RegistrationIdConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор процесса регистрации. |
 **registration_confirm_request** | [**\MagDv\Cargomart\Dto\RegistrationConfirmRequest**](../Model/RegistrationConfirmRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\Reg**](../Model/Reg.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
