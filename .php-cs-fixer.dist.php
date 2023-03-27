<?php

declare(strict_types=1);

return (new PhpCsFixer\Config)
    ->setRules([
        '@PER' => true,
    ])
    ->setRiskyAllowed(false)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude(['runtime', 'vendor'])
            ->in(__DIR__)
    )
;
