<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статус события в системе ЭДО Контур.Логистика (
 *
 *  Unknown - Неизвестно,
 *
 *  WaybillDeliverySignatureReject - Отказ в подписи на выгрузке,
 *
 * NewTransportation - Создается на сервере,
 *
 * RequestingMintransId - Обработка ФГИС Минтранс,
 *
 * WaybillReceptionWaitConsignorSignature - На подписи Грузоотправителя,
 *
 * WaybillReceptionWaitConsignorSignatureDelivery - Обработка подписи грузоотправителя,
 *
 * WaybillReceptionWaitDriverConfirmation - На подтверждении водителем,
 *
 * WaybillReceptionWaitConsignorConfirmation - На подтверждении Кладовщиком,
 *
 * WaybillReceptionWaitCarrierSignature - На подписи Перевозчика,
 *
 * WaybillReceptionWaitCarrierSignatureDelivery - Обработка подписи Перевозчика,
 *
 * OnTheWay - В пути,
 *
 * WaybillDeliveryWaitDriverConfirmation - На подтверждении Водителем,
 *
 * WaybillDeliveryWaitConsigneeConfirmation - На подтверждении Кладовщиком (выгрузка),
 *
 * WaybillDeliveryWaitConsigneeSignature - На подписи Грузополучателя,
 *
 * WaybillDeliveryWaitConsigneeSignatureDelivery - Обработка подписи Грузополучателя,
 *
 * WaybillDeliveryWaitCarrierSignature - На подписи Перевозчика (выгрузка),
 *
 * WaybillDeliveryWaitCarrierSignatureDelivery - Обработка подписи Перевозчика,
 *
 * Completed - Завершен,
 *
 * Revoked - Аннулирован,
 *
 * WaybillReceptionSignatureReject - Отказ в подписи на погрузке,
 *
 * Archived - В архиве,
 *
 * TransferredToAnotherDriver - Передано другому водителю,
 *
 * TransferredToAnotherConsignee - Передано другому Получателю,
 *
 * WaitCarrierCostSignatureDelivery - Ожидание подписи COST накладная доставки перевозчика,
 *
 * WaitConsignorCostSignature - Ожидание подписи COST накладная отправителя,
 *
 * WaitConsignorCostSignatureDelivery - Ожидание подписи COST накладная доставки отправителя,
 *
 * WaybillConsignorCostSignatureReject - Отклонена COST накладная отправителя,
 *
 * Invalid - Ошибка в ТРН,
 *
 * CarrierWaitingForWaybillReceptionSigned - Перевозчик ожидает подписи выписки накладной,
 *
 * CarrierWaitingForWaybillDeliverySigned - Перевозчик ожидает подписи накладной)
 * source: order/enums/ecn-logistics-status.json
 */
final class EcnLogisticsStatus extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
