<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/requests/sp-point.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointEmailContact;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper;

/**
 * Структура тела запроса на добавление/редактирование пункта погрузки
 * source: storage-point/requests/sp-point.json
 *
 * @property string $title
 * @property string $code
 * @property string $address
 * @property \stdClass $addressObject
 * @property string $house
 * @property string $comment
 * @property float $latitude
 * @property float $longitude
 * @property int[] $fileIds
 * @property SpContact[] $contact
 * @property int $legalStatus
 * @property string $legalName
 * @property string $externalId
 * @property PointEmailContact[] $emailList
 * @property bool $isEdm
 * @property PointShipper $pointShipper
 */
final class SpPoint extends AbstractEntity
{
    protected static $types = [
        'title' => ['string'],
        'code' => ['string'],
        'address' => ['string'],
        'addressObject' => ['\stdClass'],
        'house' => ['string'],
        'comment' => ['string'],
        'latitude' => ['float'],
        'longitude' => ['float'],
        'fileIds' => ['array', 'int'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Requests\SpContact'],
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'externalId' => ['string'],
        'emailList' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\PointEmailContact'],
        'isEdm' => ['bool'],
        'pointShipper' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
    ];

    protected static $nullables = [
        'title' => false,
        'code' => false,
        'address' => false,
        'addressObject' => true,
        'house' => false,
        'comment' => false,
        'latitude' => false,
        'longitude' => false,
        'fileIds' => false,
        'contact' => false,
        'legalStatus' => false,
        'legalName' => false,
        'externalId' => false,
        'emailList' => false,
        'isEdm' => false,
        'pointShipper' => false,
    ];
}
