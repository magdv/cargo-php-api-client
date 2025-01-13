# MagDv\Cargomart\UserApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2UserCountActiveGet()**](UserApi.md#apiV2UserCountActiveGet) | **GET** /api/v2/user/count-active | Количество активных пользователей
[**apiV2UserLoginPost()**](UserApi.md#apiV2UserLoginPost) | **POST** /api/v2/user/login | Авторизация пользователя и выдача токена.
[**apiV2UserLogoutPost()**](UserApi.md#apiV2UserLogoutPost) | **POST** /api/v2/user/logout | Завершение сеанса работы.
[**apiV2UserRecoveryIdConfirmPost()**](UserApi.md#apiV2UserRecoveryIdConfirmPost) | **POST** /api/v2/user/recovery/{id}/confirm | Подтверждение восстановления/ввод проверочного кода.
[**apiV2UserRecoveryIdGet()**](UserApi.md#apiV2UserRecoveryIdGet) | **GET** /api/v2/user/recovery/{id} | Получение процесса восстановления пароля.
[**apiV2UserRecoveryIdResendCodePost()**](UserApi.md#apiV2UserRecoveryIdResendCodePost) | **POST** /api/v2/user/recovery/{id}/resend-code | Повторная отправка проверочного кода.
[**apiV2UserRecoveryPost()**](UserApi.md#apiV2UserRecoveryPost) | **POST** /api/v2/user/recovery | Запрос на восстановление пароля.
[**apiV2UserSelfCertificateGet()**](UserApi.md#apiV2UserSelfCertificateGet) | **GET** /api/v2/user/self/certificate | Получить список сертификатов текущего пользователя
[**apiV2UserSelfContactEmailConfirmPost()**](UserApi.md#apiV2UserSelfContactEmailConfirmPost) | **POST** /api/v2/user/self/contact-email-confirm | Подтерждение контактного email.
[**apiV2UserSelfContactEmailDelete()**](UserApi.md#apiV2UserSelfContactEmailDelete) | **DELETE** /api/v2/user/self/contact-email | Удаление контактного email.
[**apiV2UserSelfContactEmailPost()**](UserApi.md#apiV2UserSelfContactEmailPost) | **POST** /api/v2/user/self/contact-email | Создание контактного email.
[**apiV2UserSelfContactEmailResendPost()**](UserApi.md#apiV2UserSelfContactEmailResendPost) | **POST** /api/v2/user/self/contact-email-resend | Запрос на повторную отправку кода.
[**apiV2UserSelfDelete()**](UserApi.md#apiV2UserSelfDelete) | **DELETE** /api/v2/user/self | Удаление пользователя самим собой.
[**apiV2UserSelfDsPhoneVerificationCodePost()**](UserApi.md#apiV2UserSelfDsPhoneVerificationCodePost) | **POST** /api/v2/user/self/ds-phone-verification-code | deprecated! Выслать код для подтверждения
[**apiV2UserSelfEmailChangeDelete()**](UserApi.md#apiV2UserSelfEmailChangeDelete) | **DELETE** /api/v2/user/self/email-change | Отмена запроса на изменение почты.
[**apiV2UserSelfEmailChangePost()**](UserApi.md#apiV2UserSelfEmailChangePost) | **POST** /api/v2/user/self/email-change | Посылает email на подтверждение почты.
[**apiV2UserSelfEmailCodeConfirmPost()**](UserApi.md#apiV2UserSelfEmailCodeConfirmPost) | **POST** /api/v2/user/self/email-code-confirm | Подтверждение телефона по коду из email.
[**apiV2UserSelfEmailCodeSendPost()**](UserApi.md#apiV2UserSelfEmailCodeSendPost) | **POST** /api/v2/user/self/email-code-send | Посылает повторные email с кодом подтверждения.
[**apiV2UserSelfGet()**](UserApi.md#apiV2UserSelfGet) | **GET** /api/v2/user/self | Возвращает реквизиты своей организации.
[**apiV2UserSelfPasswordChangePut()**](UserApi.md#apiV2UserSelfPasswordChangePut) | **PUT** /api/v2/user/self/password-change | Меняет пароль пользователю.
[**apiV2UserSelfPhoneChangeDelete()**](UserApi.md#apiV2UserSelfPhoneChangeDelete) | **DELETE** /api/v2/user/self/phone-change | Отменяет запроса на изменение телефона.
[**apiV2UserSelfPhoneChangePost()**](UserApi.md#apiV2UserSelfPhoneChangePost) | **POST** /api/v2/user/self/phone-change | Запрос на изменение телефона.
[**apiV2UserSelfPut()**](UserApi.md#apiV2UserSelfPut) | **PUT** /api/v2/user/self | Сохраняет данные пользователя.
[**apiV2UserSelfSmsCodeConfirmPost()**](UserApi.md#apiV2UserSelfSmsCodeConfirmPost) | **POST** /api/v2/user/self/sms-code-confirm | Подтверждение телефона по коду из смс.
[**apiV2UserSelfSmsCodeSendPost()**](UserApi.md#apiV2UserSelfSmsCodeSendPost) | **POST** /api/v2/user/self/sms-code-send | Посылает повторную смс.
[**apiV2UserSelfTokenPost()**](UserApi.md#apiV2UserSelfTokenPost) | **POST** /api/v2/user/self/token | Создание одноразового токена
[**apiV2UserSelfUsedeskTokenPut()**](UserApi.md#apiV2UserSelfUsedeskTokenPut) | **PUT** /api/v2/user/self/usedesk-token | Обновляет токен с useDesk.


## `apiV2UserCountActiveGet()`

```php
apiV2UserCountActiveGet(): \MagDv\Cargomart\Dto\UserCountActive
```

Количество активных пользователей

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
    $result = $apiInstance->apiV2UserCountActiveGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserCountActiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\UserCountActive**](../Model/UserCountActive.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `apiV2UserRecoveryIdConfirmPost()`

```php
apiV2UserRecoveryIdConfirmPost($id, $user_recovery_confirm_request): \MagDv\Cargomart\Dto\UserRecoveryResponse
```

Подтверждение восстановления/ввод проверочного кода.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор процесса восстановления пароля.
$user_recovery_confirm_request = new \MagDv\Cargomart\Dto\UserRecoveryConfirmRequest(); // \MagDv\Cargomart\Dto\UserRecoveryConfirmRequest

try {
    $result = $apiInstance->apiV2UserRecoveryIdConfirmPost($id, $user_recovery_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserRecoveryIdConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор процесса восстановления пароля. |
 **user_recovery_confirm_request** | [**\MagDv\Cargomart\Dto\UserRecoveryConfirmRequest**](../Model/UserRecoveryConfirmRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\UserRecoveryResponse**](../Model/UserRecoveryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserRecoveryIdGet()`

```php
apiV2UserRecoveryIdGet($id): \MagDv\Cargomart\Dto\UserRecoveryResponse
```

Получение процесса восстановления пароля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор процесса восстановления пароля.

try {
    $result = $apiInstance->apiV2UserRecoveryIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserRecoveryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор процесса восстановления пароля. |

### Return type

[**\MagDv\Cargomart\Dto\UserRecoveryResponse**](../Model/UserRecoveryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserRecoveryIdResendCodePost()`

```php
apiV2UserRecoveryIdResendCodePost($id): \MagDv\Cargomart\Dto\UserRecoveryResponse
```

Повторная отправка проверочного кода.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Идентификатор процесса  восстановления пароля.

try {
    $result = $apiInstance->apiV2UserRecoveryIdResendCodePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserRecoveryIdResendCodePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор процесса  восстановления пароля. |

### Return type

[**\MagDv\Cargomart\Dto\UserRecoveryResponse**](../Model/UserRecoveryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserRecoveryPost()`

```php
apiV2UserRecoveryPost($user_recovery_create_request): \MagDv\Cargomart\Dto\UserRecoveryResponse
```

Запрос на восстановление пароля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$user_recovery_create_request = new \MagDv\Cargomart\Dto\UserRecoveryCreateRequest(); // \MagDv\Cargomart\Dto\UserRecoveryCreateRequest

try {
    $result = $apiInstance->apiV2UserRecoveryPost($user_recovery_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserRecoveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_recovery_create_request** | [**\MagDv\Cargomart\Dto\UserRecoveryCreateRequest**](../Model/UserRecoveryCreateRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\UserRecoveryResponse**](../Model/UserRecoveryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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

## `apiV2UserSelfContactEmailConfirmPost()`

```php
apiV2UserSelfContactEmailConfirmPost($code): \MagDv\Cargomart\Dto\UserFullResponse
```

Подтерждение контактного email.

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
$code = new \MagDv\Cargomart\Dto\UserContactEmailConfirmRequest(); // \MagDv\Cargomart\Dto\UserContactEmailConfirmRequest

try {
    $result = $apiInstance->apiV2UserSelfContactEmailConfirmPost($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfContactEmailConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | [**\MagDv\Cargomart\Dto\UserContactEmailConfirmRequest**](../Model/UserContactEmailConfirmRequest.md)|  |

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

## `apiV2UserSelfContactEmailDelete()`

```php
apiV2UserSelfContactEmailDelete(): \MagDv\Cargomart\Dto\UserFullResponse
```

Удаление контактного email.

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
    $result = $apiInstance->apiV2UserSelfContactEmailDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfContactEmailDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2UserSelfContactEmailPost()`

```php
apiV2UserSelfContactEmailPost($contact_email): \MagDv\Cargomart\Dto\UserFullResponse
```

Создание контактного email.

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
$contact_email = new \MagDv\Cargomart\Dto\UserContactEmailRequest(); // \MagDv\Cargomart\Dto\UserContactEmailRequest

try {
    $result = $apiInstance->apiV2UserSelfContactEmailPost($contact_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfContactEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_email** | [**\MagDv\Cargomart\Dto\UserContactEmailRequest**](../Model/UserContactEmailRequest.md)|  |

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

## `apiV2UserSelfContactEmailResendPost()`

```php
apiV2UserSelfContactEmailResendPost(): \MagDv\Cargomart\Dto\UserFullResponse
```

Запрос на повторную отправку кода.

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
    $result = $apiInstance->apiV2UserSelfContactEmailResendPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfContactEmailResendPost: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new MagDv\Cargomart\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2UserSelfDsPhoneVerificationCodePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfDsPhoneVerificationCodePost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2UserSelfEmailChangeDelete()`

```php
apiV2UserSelfEmailChangeDelete(): \MagDv\Cargomart\Dto\UserFullResponse
```

Отмена запроса на изменение почты.

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
    $result = $apiInstance->apiV2UserSelfEmailChangeDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfEmailChangeDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2UserSelfEmailChangePost()`

```php
apiV2UserSelfEmailChangePost($user_email_change_request): \MagDv\Cargomart\Dto\UserFullResponse
```

Посылает email на подтверждение почты.

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
$user_email_change_request = new \MagDv\Cargomart\Dto\UserEmailChangeRequest(); // \MagDv\Cargomart\Dto\UserEmailChangeRequest

try {
    $result = $apiInstance->apiV2UserSelfEmailChangePost($user_email_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfEmailChangePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_email_change_request** | [**\MagDv\Cargomart\Dto\UserEmailChangeRequest**](../Model/UserEmailChangeRequest.md)|  |

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

## `apiV2UserSelfEmailCodeConfirmPost()`

```php
apiV2UserSelfEmailCodeConfirmPost($user_confirm_email_request): \MagDv\Cargomart\Dto\UserFullResponse
```

Подтверждение телефона по коду из email.

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
$user_confirm_email_request = new \MagDv\Cargomart\Dto\UserConfirmEmailRequest(); // \MagDv\Cargomart\Dto\UserConfirmEmailRequest

try {
    $result = $apiInstance->apiV2UserSelfEmailCodeConfirmPost($user_confirm_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfEmailCodeConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_confirm_email_request** | [**\MagDv\Cargomart\Dto\UserConfirmEmailRequest**](../Model/UserConfirmEmailRequest.md)|  |

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

## `apiV2UserSelfEmailCodeSendPost()`

```php
apiV2UserSelfEmailCodeSendPost(): \MagDv\Cargomart\Dto\UserFullResponse
```

Посылает повторные email с кодом подтверждения.

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
    $result = $apiInstance->apiV2UserSelfEmailCodeSendPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfEmailCodeSendPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2UserSelfPasswordChangePut()`

```php
apiV2UserSelfPasswordChangePut($user_password_change_request): \MagDv\Cargomart\Dto\UserFullResponse
```

Меняет пароль пользователю.

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
$user_password_change_request = new \MagDv\Cargomart\Dto\UserPasswordChangeRequest(); // \MagDv\Cargomart\Dto\UserPasswordChangeRequest

try {
    $result = $apiInstance->apiV2UserSelfPasswordChangePut($user_password_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfPasswordChangePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_password_change_request** | [**\MagDv\Cargomart\Dto\UserPasswordChangeRequest**](../Model/UserPasswordChangeRequest.md)|  |

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

## `apiV2UserSelfPhoneChangeDelete()`

```php
apiV2UserSelfPhoneChangeDelete(): \MagDv\Cargomart\Dto\UserFullResponse
```

Отменяет запроса на изменение телефона.

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
    $result = $apiInstance->apiV2UserSelfPhoneChangeDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfPhoneChangeDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2UserSelfPhoneChangePost()`

```php
apiV2UserSelfPhoneChangePost($user_phone_change_request): \MagDv\Cargomart\Dto\UserFullResponse
```

Запрос на изменение телефона.

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
$user_phone_change_request = new \MagDv\Cargomart\Dto\UserPhoneChangeRequest(); // \MagDv\Cargomart\Dto\UserPhoneChangeRequest

try {
    $result = $apiInstance->apiV2UserSelfPhoneChangePost($user_phone_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfPhoneChangePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_phone_change_request** | [**\MagDv\Cargomart\Dto\UserPhoneChangeRequest**](../Model/UserPhoneChangeRequest.md)|  |

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

## `apiV2UserSelfSmsCodeConfirmPost()`

```php
apiV2UserSelfSmsCodeConfirmPost($user_confirm_phone_request): \MagDv\Cargomart\Dto\UserCodeSuccessResponse
```

Подтверждение телефона по коду из смс.

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
$user_confirm_phone_request = new \MagDv\Cargomart\Dto\UserConfirmPhoneRequest(); // \MagDv\Cargomart\Dto\UserConfirmPhoneRequest

try {
    $result = $apiInstance->apiV2UserSelfSmsCodeConfirmPost($user_confirm_phone_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfSmsCodeConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_confirm_phone_request** | [**\MagDv\Cargomart\Dto\UserConfirmPhoneRequest**](../Model/UserConfirmPhoneRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\UserCodeSuccessResponse**](../Model/UserCodeSuccessResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserSelfSmsCodeSendPost()`

```php
apiV2UserSelfSmsCodeSendPost(): \MagDv\Cargomart\Dto\UserFullResponse
```

Посылает повторную смс.

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
    $result = $apiInstance->apiV2UserSelfSmsCodeSendPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfSmsCodeSendPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2UserSelfTokenPost()`

```php
apiV2UserSelfTokenPost(): \MagDv\Cargomart\Dto\UserOneTimeTokenResponse
```

Создание одноразового токена

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
    $result = $apiInstance->apiV2UserSelfTokenPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MagDv\Cargomart\Dto\UserOneTimeTokenResponse**](../Model/UserOneTimeTokenResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2UserSelfUsedeskTokenPut()`

```php
apiV2UserSelfUsedeskTokenPut($usedesk_token_request): \MagDv\Cargomart\Dto\UseDeskTokenResponse
```

Обновляет токен с useDesk.

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
$usedesk_token_request = new \MagDv\Cargomart\Dto\UsedeskTokenRequest(); // \MagDv\Cargomart\Dto\UsedeskTokenRequest

try {
    $result = $apiInstance->apiV2UserSelfUsedeskTokenPut($usedesk_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiV2UserSelfUsedeskTokenPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usedesk_token_request** | [**\MagDv\Cargomart\Dto\UsedeskTokenRequest**](../Model/UsedeskTokenRequest.md)|  |

### Return type

[**\MagDv\Cargomart\Dto\UseDeskTokenResponse**](../Model/UseDeskTokenResponse.md)

### Authorization

[CookieTokenAuth](../../README.md#CookieTokenAuth), [HeaderAuthorizationAuth](../../README.md#HeaderAuthorizationAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
