# # ExpeditorTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id задачи |
**activate_date** | **\DateTime** | Дата и время активации задачи |
**expire_date** | **\DateTime** | Дата и время протухания задачи |
**freeze_till_date** | **\DateTime** | Дата и время, до которого задача заморожена | [optional]
**worker** | [**\MagDv\Cargomart\Dto\IdIntName**](IdIntName.md) | Менеджер (Id - ФИО) | [optional]
**type** | [**\MagDv\Cargomart\Dto\ExpeditorTaskTypeEnum**](ExpeditorTaskTypeEnum.md) | Тип задачи |
**status** | [**\MagDv\Cargomart\Dto\ExpeditorTaskStatusEnum**](ExpeditorTaskStatusEnum.md) | Статус задачи |
**order_id** | **string** | Заказ перевозчика |
**serial_id** | **int** | Порядковый номер заказа |
**driver** | [**\MagDv\Cargomart\Dto\OrderDriver**](OrderDriver.md) | Информация о водителе | [optional]
**route_point** | [**\MagDv\Cargomart\Dto\OrderRoutePoint**](OrderRoutePoint.md) | Маршрутная точка заказа |
**chat_id** | **string** | Идентификатор чат-лога | [optional]
**access** | [**\MagDv\Cargomart\Dto\ExpeditorTaskAccess**](ExpeditorTaskAccess.md) | Описание доступных действий | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
