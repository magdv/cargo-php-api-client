# # ShortListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор заказа |
**serial_id** | **int** | Порядковый номер заказа | [optional]
**serial_number_and_version** | **string** | Порядковый номер с версией | [optional]
**status** | [**\MagDv\Cargomart\Dto\ProposalStatusEnum**](ProposalStatusEnum.md) | Статус |
**customer_id** | **string** | Хэш отправителя |
**search_range** | [**\MagDv\Cargomart\Dto\DateTimeRange**](DateTimeRange.md) | Диапазон дат сбора заявок |
**curators** | **int[]** | Список идентифкаторов контактных лиц | [optional]
**price** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Цена заказчика | [optional]
**carrier_price** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Цена перевозчика | [optional]
**winner_price** | [**\MagDv\Cargomart\Dto\PriceValue**](PriceValue.md) | Цена перевозчика-победителя | [optional]
**route** | [**\MagDv\Cargomart\Dto\ProposalPoint[]**](ProposalPoint.md) |  |
**cargo** | [**\MagDv\Cargomart\Dto\ProposalCargo**](ProposalCargo.md) | Груз |
**external_id** | **string** | Внешний идентификатор | [optional]
**period_range** | [**\MagDv\Cargomart\Dto\DateRange**](DateRange.md) | Диапазон дат исполнения грузоперевозки | [optional]
**distance** | **int** | Общее расстояние по заказу (м) | [optional]
**truck_search_time_end** | **string** | Крайняя дата назначения машины | [optional]
**carrier** | [**\MagDv\Cargomart\Dto\ProposalCarrier**](ProposalCarrier.md) | Перевозчик | [optional]
**proxy** | [**\MagDv\Cargomart\Dto\ProposalProxy**](ProposalProxy.md) |  | [optional]
**refuses** | [**\MagDv\Cargomart\Dto\ProposalRefuse[]**](ProposalRefuse.md) | Отказы от заказа Экспедитора | [optional]
**patch** | [**\MagDv\Cargomart\Dto\OrderPatchLastItem**](OrderPatchLastItem.md) | Запрос на изменение заказа | [optional]
**access** | [**\MagDv\Cargomart\Dto\ProposalAccess**](ProposalAccess.md) | Описание доступных действий по объекту. |
**paid_expeditor_payment_date** | **\DateTime** | Дата оплаты заказа перевозчику | [optional]
**price_strategy_type** | [**\MagDv\Cargomart\Dto\OrderPriceStrategyType**](OrderPriceStrategyType.md) |  | [optional]
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  | [optional]
**bidding** | [**\MagDv\Cargomart\Dto\OrderDraftExpeditorBidding**](OrderDraftExpeditorBidding.md) | Настройки торгов | [optional]
**bid_count** | **int** | Количество ставок на заказ | [optional]
**carrier_asks_count** | **int** | Количество оставленных ставок перевозчиков по заявке | [optional]
**has_carrier_sign** | **bool** | Подписана заявка перевозчиком-победителем | [optional] [default to false]
**roadmap_events_count** | **int** | Количество событий требующих действия | [optional]
**payment_invoice_status** | [**\MagDv\Cargomart\Dto\PaymentInvoiceStatus[]**](PaymentInvoiceStatus.md) |  | [optional]
**winner_date** | **\DateTime** | Дата и время когда был определен победитель | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
