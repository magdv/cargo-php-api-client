<?php

return (new PhpCsFixer\Config)
    ->setRules([
        // PSR-12 подобный конфиг.
        '@PSR2' => true,
        'blank_line_after_opening_tag' => true,
        'braces' => ['allow_single_line_closure' => true],
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'one'],
        'declare_equal_normalize' => ['space' => 'none'],
        'function_typehint_space' => true,
        // Обязательно скобки после создания класса.
        'new_with_braces' => true,
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'no_empty_statement' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_whitespace_in_blank_line' => true,
        'return_type_declaration' => ['space_before' => 'none'],
        'single_trait_insert_per_statement' => true,

        // Наши доработки
        // при приведении типов не отделять пробел.
        'cast_spaces' => ['space' => 'none'],
        // Настройка выравнивания операторов. Без выравнивания - по одному пробелу перед оператором и после.
        'binary_operator_spaces' => [
            'default' => 'single_space',
            'operators' => [],
        ],
        // Пустая строка после первого тэга.
        'linebreak_after_opening_tag' => true,
        // Между докблоком и элементом не должно быть разрыва.
        'no_blank_lines_after_phpdoc' => true,
        // Нет пустым комментариям.
        'no_empty_comment' => true,
        // Нет пустым докблокам.
        'no_empty_phpdoc' => true,
        // Не удалять не описанные phpdoc которые не не несут доп информации.
        'no_superfluous_phpdoc_tags' => false,
        // Убирать лишние отбивы.
        'no_extra_blank_lines' => ['extra'],
        // Не юзать хак с !! для приведения к булеву.
        'no_short_bool_cast' => true,
        // Удалять не используемые импорты.
        'no_unused_imports' => true,
        // Всегда ставить пробел после '!'.
        'not_operator_with_successor_space' => true,
        // Затычка для юнитов, чтобы не фиксал старые юниты.
        'php_unit_test_class_requires_covers' => false,
        // Добавлять пропущенные описания параметров в докблоке.
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
        // Убирать аннотации в phpdoc.
        'general_phpdoc_annotation_remove' => ['skip'],
    ])
    ->setRiskyAllowed(false)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude(['runtime', 'vendor'])
            ->in(__DIR__)
    )
;
