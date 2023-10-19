<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Тип события элемента роадмап. unknown - Не определен, order-publish - Заявка размещена, order-signed - Заявка подписана, order-signed-carrier - Заявка подписана перевозчиком, order-proxy-truck-signed - Подписана доверенность на машину, order-proxy-truck-update - Обновлена доверенность на машину, order-proxy-expeditor-signed - Доверенность подписана экспедитором, winner-by-search - Есть победитель по поиску, found-carrier - Найден перевозчик, truck-driver-attached - Назначена машина, truck-driver-search - Поиск машины, order-performing - Перевозка, order-patch-truck-driver-update - Запрошено изменение водителя и машины, order-patch-truck-driver-update-reject - Замена водителя и машины отклонена, order-patch-truck-driver-confirm - Заявка на рассмотрение автомобиля в процеессе, order-patch-approve-by-carrier - Изменения приняты перевозчиком, order-patch-reject-by-consignor - Изменения отменены клиентом, order-patch-approve-by-consignor - Изменения приняты клиентом, order-patch-refuse-revert-consignor - Заказчик предлагает вернуть заявку в работу, order-revert-to-job - Заявка возвращена в работу, order-patch-reject-revert-consignor - Перевозчик отклонил возврат заявки в работу, order-refuse-carrier - Отказ перевозчика, order-refuse-consignor - Отказ заказчика, order-refuse-expeditor - Отказ экспедитора, order-patch-create - Запрошено изменение заявки, order-patch-reject-by-carrier - Изменения отменены перевозчиком, cargo-delivered - Груз доставлен, scans-accepted - Подтверждено сканами, scans-carrier-accepted - Сканы перевозчика приняты, scans-carrier-reject - Сканы перевозчика отклонены, originals-accepted - Подтверждено оригиналами, originals-carrier-accepted - Оригиналы перевозчика приняты, originals-carrier-reject - Оригиналы перевозчика отклонены, payment-made - Оплата произведена, payment-carrier - Оплачено пеервозчику, payment-expeditor - Оплачено экспедитору, payment-consignor - Оплачено клиентом, order-finished - Заявка выполнена
 * source: order/enums/order-roadmap-type.json
 */
final class OrderRoadmapType extends AbstractEntity
{
    protected static $types = [];
    protected static $nullables = [];
}
