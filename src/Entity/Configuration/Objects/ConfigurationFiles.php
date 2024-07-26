<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список документов для фронтенда
 * source: configuration/objects/configuration-files.json
 *
 * @property string $antiCorruptionAgreement
 * @property string $confidentialInfo
 * @property string $standardContractBTF
 * @property string $standardContractKDV
 * @property string $standardContractVostokVED
 * @property string $applicationForm
 * @property string $corsaCharterDocs
 * @property string $expeditorConsignorContract
 * @property string $requiredExpeditorConsignorDocs
 * @property string $emailTemplateJoiningEmployee
 * @property string $rules
 * @property string $privacyPolicy
 * @property string $agreement
 * @property string $offer
 */
final class ConfigurationFiles extends AbstractEntity
{
    protected static $types = [
        'antiCorruptionAgreement' => ['string'],
        'confidentialInfo' => ['string'],
        'standardContractBTF' => ['string'],
        'standardContractKDV' => ['string'],
        'standardContractVostokVED' => ['string'],
        'applicationForm' => ['string'],
        'corsaCharterDocs' => ['string'],
        'expeditorConsignorContract' => ['string'],
        'requiredExpeditorConsignorDocs' => ['string'],
        'emailTemplateJoiningEmployee' => ['string'],
        'rules' => ['string'],
        'privacyPolicy' => ['string'],
        'agreement' => ['string'],
        'offer' => ['string'],
    ];

    protected static $nullables = [
        'antiCorruptionAgreement' => false,
        'confidentialInfo' => false,
        'standardContractBTF' => false,
        'standardContractKDV' => false,
        'standardContractVostokVED' => false,
        'applicationForm' => false,
        'corsaCharterDocs' => false,
        'expeditorConsignorContract' => false,
        'requiredExpeditorConsignorDocs' => false,
        'emailTemplateJoiningEmployee' => false,
        'rules' => false,
        'privacyPolicy' => false,
        'agreement' => false,
        'offer' => false,
    ];
}
