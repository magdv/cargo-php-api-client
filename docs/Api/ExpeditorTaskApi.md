# MagDv\Cargomart\ExpeditorTaskApi

All URIs are relative to https://cargomart.ru.

Method | HTTP request | Description
------------- | ------------- | -------------
[**freezeExpeditorTask()**](ExpeditorTaskApi.md#freezeExpeditorTask) | **POST** /api/v2/expeditor-task/{taskId}/freeze | Откладывание задачи
[**getExpeditorTask()**](ExpeditorTaskApi.md#getExpeditorTask) | **GET** /api/v2/expeditor-task/{taskId} | Получение информации о задаче
[**getExpeditorTaskList()**](ExpeditorTaskApi.md#getExpeditorTaskList) | **GET** /api/v2/expeditor-task | Получение списка задач
[**selfAssignExpeditorTask()**](ExpeditorTaskApi.md#selfAssignExpeditorTask) | **POST** /api/v2/expeditor-task/{taskId}/self-assign | Прикрепление задачи к себе
[**sendExpeditorTaskResolution()**](ExpeditorTaskApi.md#sendExpeditorTaskResolution) | **POST** /api/v2/expeditor-task/{taskId}/resolution | Отправка резолюции
[**unassignExpeditorTask()**](ExpeditorTaskApi.md#unassignExpeditorTask) | **POST** /api/v2/expeditor-task/{taskId}/unassign | Открепление задачи от себя


## `freezeExpeditorTask()`

```php
freezeExpeditorTask($task_id, $expeditor_task_freeze_request): \MagDv\Cargomart\Dto\ExpeditorTaskResponse
```

Откладывание задачи

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorTaskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | Идентификатор задачи
$expeditor_task_freeze_request = new \MagDv\Cargomart\Dto\ExpeditorTaskFreezeRequest(); // \MagDv\Cargomart\Dto\ExpeditorTaskFreezeRequest

try {
    $result = $apiInstance->freezeExpeditorTask($task_id, $expeditor_task_freeze_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorTaskApi->freezeExpeditorTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Идентификатор задачи |
 **expeditor_task_freeze_request** | [**\MagDv\Cargomart\Dto\ExpeditorTaskFreezeRequest**](../Model/ExpeditorTaskFreezeRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorTaskResponse**](../Model/ExpeditorTaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpeditorTask()`

```php
getExpeditorTask($task_id): \MagDv\Cargomart\Dto\ExpeditorTaskResponse
```

Получение информации о задаче

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorTaskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | Идентификатор задачи

try {
    $result = $apiInstance->getExpeditorTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorTaskApi->getExpeditorTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Идентификатор задачи |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorTaskResponse**](../Model/ExpeditorTaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpeditorTaskList()`

```php
getExpeditorTaskList($page, $per_page, $filter_order_id, $filter_locality_name, $filter_type, $filter_loading_from, $filter_loading_to, $filter_driver_name, $filter_worker_id): \MagDv\Cargomart\Dto\ExpeditorTaskListResponse
```

Получение списка задач

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorTaskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$page = 1; // int | Номер страницы
$per_page = 20; // int | Количество элементов на страницу
$filter_order_id = 56; // int | Поиск по номеру заявки
$filter_locality_name = 'filter_locality_name_example'; // string | Поиск по точке погрузки
$filter_type = new \MagDv\Cargomart\Dto\\MagDv\Cargomart\Dto\ExpeditorTaskTypeEnum(); // \MagDv\Cargomart\Dto\ExpeditorTaskTypeEnum | Поиск по типу задачи
$filter_loading_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ОТ
$filter_loading_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Дата погрузки ДО
$filter_driver_name = 'filter_driver_name_example'; // string | Поиск по водителю
$filter_worker_id = 56; // int | Поиск по исполнителю

try {
    $result = $apiInstance->getExpeditorTaskList($page, $per_page, $filter_order_id, $filter_locality_name, $filter_type, $filter_loading_from, $filter_loading_to, $filter_driver_name, $filter_worker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorTaskApi->getExpeditorTaskList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Номер страницы | [optional] [default to 1]
 **per_page** | **int**| Количество элементов на страницу | [optional] [default to 20]
 **filter_order_id** | **int**| Поиск по номеру заявки | [optional]
 **filter_locality_name** | **string**| Поиск по точке погрузки | [optional]
 **filter_type** | [**\MagDv\Cargomart\Dto\ExpeditorTaskTypeEnum**](../Model/.md)| Поиск по типу задачи | [optional]
 **filter_loading_from** | **\DateTime**| Дата погрузки ОТ | [optional]
 **filter_loading_to** | **\DateTime**| Дата погрузки ДО | [optional]
 **filter_driver_name** | **string**| Поиск по водителю | [optional]
 **filter_worker_id** | **int**| Поиск по исполнителю | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorTaskListResponse**](../Model/ExpeditorTaskListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selfAssignExpeditorTask()`

```php
selfAssignExpeditorTask($task_id): \MagDv\Cargomart\Dto\ExpeditorTaskResponse
```

Прикрепление задачи к себе

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorTaskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | Идентификатор задачи

try {
    $result = $apiInstance->selfAssignExpeditorTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorTaskApi->selfAssignExpeditorTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Идентификатор задачи |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorTaskResponse**](../Model/ExpeditorTaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendExpeditorTaskResolution()`

```php
sendExpeditorTaskResolution($task_id, $expeditor_task_resolution_request): \MagDv\Cargomart\Dto\ExpeditorTaskResponse
```

Отправка резолюции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorTaskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | Идентификатор задачи
$expeditor_task_resolution_request = new \MagDv\Cargomart\Dto\ExpeditorTaskResolutionRequest(); // \MagDv\Cargomart\Dto\ExpeditorTaskResolutionRequest

try {
    $result = $apiInstance->sendExpeditorTaskResolution($task_id, $expeditor_task_resolution_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorTaskApi->sendExpeditorTaskResolution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Идентификатор задачи |
 **expeditor_task_resolution_request** | [**\MagDv\Cargomart\Dto\ExpeditorTaskResolutionRequest**](../Model/ExpeditorTaskResolutionRequest.md)|  | [optional]

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorTaskResponse**](../Model/ExpeditorTaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unassignExpeditorTask()`

```php
unassignExpeditorTask($task_id): \MagDv\Cargomart\Dto\ExpeditorTaskResponse
```

Открепление задачи от себя

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MagDv\Cargomart\Api\ExpeditorTaskApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | Идентификатор задачи

try {
    $result = $apiInstance->unassignExpeditorTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpeditorTaskApi->unassignExpeditorTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Идентификатор задачи |

### Return type

[**\MagDv\Cargomart\Dto\ExpeditorTaskResponse**](../Model/ExpeditorTaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
