# MagDv\Cargomart\RegistrationApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2RegistrationIdConfirmPost()**](RegistrationApi.md#apiV2RegistrationIdConfirmPost) | **POST** /api/v2/registration/{id}/confirm | Подтверждение регистрации/ввод проверочного кода.
[**apiV2RegistrationIdGet()**](RegistrationApi.md#apiV2RegistrationIdGet) | **GET** /api/v2/registration/{id} | Получение процесса регистрации.
[**apiV2RegistrationIdResendCodePost()**](RegistrationApi.md#apiV2RegistrationIdResendCodePost) | **POST** /api/v2/registration/{id}/resend-code | Повторная отправка проверочного кода.
[**apiV2RegistrationPost()**](RegistrationApi.md#apiV2RegistrationPost) | **POST** /api/v2/registration | Задание логина пользователя/начало процесса регистрации.


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

## `apiV2RegistrationIdGet()`

```php
apiV2RegistrationIdGet($id): \MagDv\Cargomart\Dto\Reg
```

Получение процесса регистрации.

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

try {
    $result = $apiInstance->apiV2RegistrationIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->apiV2RegistrationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор процесса регистрации. |

### Return type

[**\MagDv\Cargomart\Dto\Reg**](../Model/Reg.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2RegistrationIdResendCodePost()`

```php
apiV2RegistrationIdResendCodePost($id): \MagDv\Cargomart\Dto\Reg
```

Повторная отправка проверочного кода.

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

try {
    $result = $apiInstance->apiV2RegistrationIdResendCodePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->apiV2RegistrationIdResendCodePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор процесса регистрации. |

### Return type

[**\MagDv\Cargomart\Dto\Reg**](../Model/Reg.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2RegistrationPost()`

```php
apiV2RegistrationPost($registration_base_request): \MagDv\Cargomart\Dto\Reg
```

Задание логина пользователя/начало процесса регистрации.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$registration_base_request = new \MagDv\Cargomart\Dto\RegistrationBaseRequest(); // \MagDv\Cargomart\Dto\RegistrationBaseRequest

try {
    $result = $apiInstance->apiV2RegistrationPost($registration_base_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->apiV2RegistrationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_base_request** | [**\MagDv\Cargomart\Dto\RegistrationBaseRequest**](../Model/RegistrationBaseRequest.md)|  |

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
