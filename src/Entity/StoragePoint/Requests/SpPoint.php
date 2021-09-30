<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointEmailContact;

/**
 * Структура тела запроса на добавление/редактирование пункта погрузки
 * source: storage-point/requests/sp-point.json
 *
 * @property string $title
 * @property string $code
 * @property string $address
 * @property string $house
 * @property string $comment
 * @property float $latitude
 * @property float $longitude
 * @property int[] $fileIds
 * @property SpContact[] $contact
 * @property float $legalStatus
 * @property string $legalName
 * @property string $externalId
 * @property PointEmailContact[] $emailList
 */
final class SpPoint extends AbstractEntity
{
    protected static $types = [
        'title' => ['string'],
        'code' => ['string'],
        'address' => ['string'],
        'house' => ['string'],
        'comment' => ['string'],
        'latitude' => ['float'],
        'longitude' => ['float'],
        'fileIds' => ['array', 'int'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Requests\SpContact'],
        'legalStatus' => ['float'],
        'legalName' => ['string'],
        'externalId' => ['string'],
        'emailList' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\PointEmailContact'],
    ];

    protected static $nullables = [
        'title' => false,
        'code' => false,
        'address' => false,
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
    ];
}
