<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Address;
use Cargomart\ApiClient\Entity\Base\AddressInfo;
use Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointEmailContact;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper;

/**
 * Структура тела запроса на добавление/редактирование пункта погрузки
 * source: storage-point/requests/sp-point.json
 *
 * @property string $title
 * @property string $code
 * @property string $address
 * @property AddressInfo $addressInfo
 * @property Address $addressObject
 * @property WorkSchedule $workSchedule
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
 * @property string $contractNumber
 * @property string $contractDate
 * @property string $storageType
 * @property bool $isOwnerPointShipper
 * @property PointShipper $owner
 */
final class SpPoint extends AbstractEntity
{
    protected static $types = [
        'title' => ['string'],
        'code' => ['string'],
        'address' => ['string'],
        'addressInfo' => ['Cargomart\ApiClient\Entity\Base\AddressInfo'],
        'addressObject' => ['Cargomart\ApiClient\Entity\Base\Address'],
        'workSchedule' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule'],
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
        'contractNumber' => ['string'],
        'contractDate' => ['string'],
        'storageType' => ['string'],
        'isOwnerPointShipper' => ['bool'],
        'owner' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
    ];

    protected static $nullables = [
        'title' => false,
        'code' => false,
        'address' => false,
        'addressInfo' => false,
        'addressObject' => false,
        'workSchedule' => false,
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
        'contractNumber' => false,
        'contractDate' => false,
        'storageType' => false,
        'isOwnerPointShipper' => false,
        'owner' => false,
    ];
}
