# # ApiV2OrderExcelPostRequestFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\MagDv\Cargomart\Dto\OrderFilterPortStateEnum**](OrderFilterPortStateEnum.md) |  | [optional]
**order_type** | [**\MagDv\Cargomart\Dto\OrderFilterPortOrderTypeEnum[]**](OrderFilterPortOrderTypeEnum.md) |  | [optional]
**belong** | [**\MagDv\Cargomart\Dto\OrderFilterBelongEnum**](OrderFilterBelongEnum.md) |  | [optional]
**serial** | **string** | Порядковый номер заказа. | [optional]
**departure** | **string** | Код кладр пункта отправления. | [optional]
**departure_radius** | **int** | Радиус точки отправления. | [optional]
**destination** | **string** | Код кладр пункта назначения. | [optional]
**destination_radius** | **int** | Радиус точки назначения. | [optional]
**tag** | **string[]** | Массив тэгов, только для отправителя. | [optional]
**loading_from** | **\DateTime** | Дата погрузки ОТ. | [optional]
**loading_to** | **\DateTime** | Дата погрузки ДО. | [optional]
**start_from** | **\DateTime** | Дата начала розыгрыша ОТ. | [optional]
**start_to** | **\DateTime** | Дата начала розыгрыша ДО. | [optional]
**worker** | **int** | Идентификатор сотрудника создателя для отправителя и сотрудника закрепителя для перевозчика. | [optional]
**truck_type** | **int[]** | Список идентификаторов типов ТС. | [optional]
**weight_from** | **int** | Вес груза в ОТ, кг. | [optional]
**weight_to** | **int** | Вес груза в ДО, кг. | [optional]
**capacity_from** | **int** | Объём груза в ОТ, м3. | [optional]
**capacity_to** | **int** | Объём груза в ДО, м3. | [optional]
**price_from** | **int** | Текущая цена заказа ОТ. | [optional]
**price_to** | **int** | Текущая цена заказа ДО. | [optional]
**status** | **int[]** | Массив id статусов заказов. | [optional]
**carrier** | **string** | Хэш код компании победителя. | [optional]
**consignor** | **string** | Хэш код компании отправителя. | [optional]
**order** | **string[]** | Массив id хэшей заказов. | [optional]
**create_from** | **\DateTime** | Дата создания заказа ОТ. | [optional]
**create_to** | **\DateTime** | Дата создания заказа ДО. | [optional]
**available** | **bool** | Только доступные мне заказы. Только для перевозчика. | [optional]
**kind** | [**\MagDv\Cargomart\Dto\OrderFilterPortKindEnum[]**](OrderFilterPortKindEnum.md) |  | [optional]
**is_general_partner** | **bool** | Фильтр по статусу генерального партнера. | [optional]
**is_truck** | **bool** | Только заказы в которых прикреплен водитель/машина. | [optional]
**is_carrier_document** | **bool** | Только заказы в которых перевозчик прикрепил документы. | [optional]
**is_general_partner_document** | **bool** | Только заказы в которых ГП прикрепил документы. | [optional]
**branch_id** | **int** | Заказы дочерней компании. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
