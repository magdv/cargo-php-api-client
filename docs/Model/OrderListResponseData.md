# # OrderListResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order** | [**\MagDv\Cargomart\Dto\OrderShortListItem[]**](OrderShortListItem.md) | Order data list |
**company** | [**\MagDv\Cargomart\Dto\CompanyShort[]**](CompanyShort.md) |  | [optional]
**company_branch** | [**\MagDv\Cargomart\Dto\CompanyBranch[]**](CompanyBranch.md) | Список дочерних компаний | [optional]
**contact** | [**\MagDv\Cargomart\Dto\UserContactShort[]**](UserContactShort.md) | Список контактов | [optional]
**truck_type** | [**\MagDv\Cargomart\Dto\TruckType[]**](TruckType.md) |  | [optional]
**driver** | [**\MagDv\Cargomart\Dto\DriverOld[]**](DriverOld.md) | @deprecated в пользу order[].driver (Список водителей, назначенных на заказы) | [optional]
**truck** | [**\MagDv\Cargomart\Dto\TruckOld[]**](TruckOld.md) | @deprecated в пользу order[].truck (Транспортные средства, назначеные на заказы) | [optional]
**device** | [**\MagDv\Cargomart\Dto\TruckDevice[]**](TruckDevice.md) | Список доп оборудования заказа | [optional]
**condition** | [**\MagDv\Cargomart\Dto\OrderCondition[]**](OrderCondition.md) | Список условий заказа | [optional]
**loading_type** | [**\MagDv\Cargomart\Dto\LoadingType[]**](LoadingType.md) | Список типов погрузки | [optional]
**pagination** | [**\MagDv\Cargomart\Dto\Pagination**](Pagination.md) | Пагинатор |
**server_time** | **string** | Время сервера | [optional]
**status** | [**\MagDv\Cargomart\Dto\OrderStatus[]**](OrderStatus.md) |  | [optional]
**currency** | [**\MagDv\Cargomart\Dto\Currency[]**](Currency.md) |  | [optional]
**locality** | [**\MagDv\Cargomart\Dto\Locality[]**](Locality.md) |  | [optional]
**proxy** | [**\MagDv\Cargomart\Dto\Document[]**](Document.md) | Доверенности заказов | [optional]
**document** | [**\MagDv\Cargomart\Dto\Document[]**](Document.md) | Документы заказа | [optional]
**general_partner_contract** | [**\MagDv\Cargomart\Dto\GeneralPartnerContract[]**](GeneralPartnerContract.md) | Список условий договора с ГП | [optional]
**monitoring** | [**\MagDv\Cargomart\Dto\MonitoringItem[]**](MonitoringItem.md) | Список ссылок на GPS/Глонасс мониторинг | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
