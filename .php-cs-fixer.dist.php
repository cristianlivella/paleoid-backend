<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->exclude('tests/Fixtures')
    ->in(__DIR__)
    ->append([
        __DIR__ . '/dev-tools/doc.php',
        // __DIR__.'/php-cs-fixer', disabled, as we want to be able to run bootstrap file even on lower PHP version, to show nice message
    ]);

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        'blank_line_before_statement' => ['statements' => [
            'continue',
            'declare',
            'return',
            'throw',
            'try',
        ]],
        'cast_spaces' => ['space' => 'none'],
        'concat_space' => ['spacing' => 'one'],
        'increment_style' => ['style' => 'post'],
        'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
        'no_leading_import_slash' => true,
        'no_superfluous_phpdoc_tags' => false,
        'ordered_class_elements' => false,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_to_comment' => false,
        'yoda_style' => false,
        'no_alias_functions' => true,
        'non_printable_character' => ['use_escape_sequences_in_strings' => true],
        'no_unused_imports' => true,
        'php_unit_test_class_requires_covers' => false,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('tests/Fixtures')
            ->in(__DIR__)
    )
    ->setUsingCache(false);

return $config;
