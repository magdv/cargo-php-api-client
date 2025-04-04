# # ProposalCardFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор |
**has_expeditor_sign** | **bool** | Доверенность подписана экспедитором | [optional] [default to false]
**truck_search_time_end** | **\DateTime** | Крайняя дата назначения машины | [optional]
**winner_date** | **\DateTime** | Дата и время когда был определен победитель | [optional]
**serial_id** | **int** | Порядковый номер |
**serial_number_and_version** | **string** | Порядковый номер с версией |
**customer_id** | **string** | Id клиента |
**curators** | **int[]** | Список идентифкаторов контактных лиц |
**expeditor_id** | **string** | Идентификатор экспедитора | [optional]
**price** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Цена | [optional]
**carrier_price** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Цена | [optional]
**winner_price** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Цена перевозчика-победителя | [optional]
**status** | [**\MagDv\Cargomart\Dto\ProposalStatusEnum**](ProposalStatusEnum.md) | Статус |
**search_range** | [**\MagDv\Cargomart\Dto\DateTimeRange**](DateTimeRange.md) | Диапазон дат сбора заявок |
**period_range** | [**\MagDv\Cargomart\Dto\DateRange**](DateRange.md) | Диапазон дат исполнения грузоперевозки | [optional]
**cargo** | [**\MagDv\Cargomart\Dto\ProposalCargo**](ProposalCargo.md) | Груз |
**carrier** | [**\MagDv\Cargomart\Dto\ProposalCarrier**](ProposalCarrier.md) | Перевозчик | [optional]
**route** | [**\MagDv\Cargomart\Dto\ProposalPoint[]**](ProposalPoint.md) |  |
**expeditor_contract** | [**\MagDv\Cargomart\Dto\ExpeditorContract**](ExpeditorContract.md) | Данные договора | [optional]
**patch** | [**\MagDv\Cargomart\Dto\OrderPatchLastItem**](OrderPatchLastItem.md) | Запрос на изменение заказа | [optional]
**last_patch** | [**\MagDv\Cargomart\Dto\OrderPatchLastItem**](OrderPatchLastItem.md) | @deprecated Запрос на изменение заказа от экспедитора (использовать patch) | [optional]
**truck_driver_patch** | [**\MagDv\Cargomart\Dto\OrderPatchLastItem**](OrderPatchLastItem.md) | @deprecated Запрос на изменение машины и водителя в заказе (использовать patch) | [optional]
**external_id** | **string** | Внешний идентификатор | [optional]
**external_id_label** | **string** | Наименование внешнего идентификатора заказа | [optional]
**customer_branch_id** | **int** | Идентификатор дочерней компании отправителя | [optional]
**distance** | **int** | Общее расстояние по заказу (м) | [optional]
**details** | [**\MagDv\Cargomart\Dto\OrderDetails[]**](OrderDetails.md) | Список деталей/комментариев/описаний заказа | [optional]
**refuses** | [**\MagDv\Cargomart\Dto\ProposalRefuse[]**](ProposalRefuse.md) | Отказы от заказа Экспедитора | [optional]
**tag** | **string[]** | Тэги заказа | [optional]
**view_count** | **float** | Количество просмотров | [optional]
**pin_count** | **float** | Количество сохранений | [optional]
**additional_consignor_price** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Дополнительная надбавка для цены отправителя | [optional]
**additional_carrier_price** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Дополнительная надбавка для цены перевозчика | [optional]
**access** | [**\MagDv\Cargomart\Dto\ProposalAccess**](ProposalAccess.md) | Описание доступных действий по объекту. |
**proxy** | [**\MagDv\Cargomart\Dto\ProposalProxy**](ProposalProxy.md) |  | [optional]
**price_strategy_type** | [**\MagDv\Cargomart\Dto\OrderPriceStrategyType**](OrderPriceStrategyType.md) |  | [optional]
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  | [optional]
**bidding** | [**\MagDv\Cargomart\Dto\OrderDraftExpeditorBidding**](OrderDraftExpeditorBidding.md) | Настройки торгов | [optional]
**bid_count** | **int** | Количество ставок на заказ | [optional]
**carrier_asks_count** | **int** | Количество оставленных ставок перевозчиков по заявке | [optional]
**has_carrier_sign** | **bool** | Подписана заявка перевозчиком-победителем | [optional] [default to false]
**payment_invoice_status** | [**\MagDv\Cargomart\Dto\PaymentInvoiceStatus[]**](PaymentInvoiceStatus.md) |  | [optional]
**roadmap_events_count** | **int** | Количество событий требующих действия |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
