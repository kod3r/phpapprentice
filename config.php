<?php

use Apprentice\Page;

return [
    /*
     *
     * Directory for SVG icons that can be used in templates
     *
     */
    'icon_dir' => __DIR__ . '/assets/icons',

    /*
     *
     * Directory holding chapter files
     *
     */
    'chapter_dir' => __DIR__ . '/chapters',

    /*
     *
     * Directory to PHP templates used by pages
     *
     */
    'templates_dir' => __DIR__ . '/assets/templates',

    /*
     *
     * Output directory for html files and assets
     *
     */
    'output_dir' => __DIR__ . '/.build',

    /*
     *
     * Static files that should be loaded into output directory
     *
     */
    'files_dir' => __DIR__ . '/assets/files',

    /*
     *
     * Configuration for all pages on the site
     *
     */
    'pages' => [
        Page::create('index', 'index.phtml'),
        Page::create('installing-php', 'installing-php.phtml'),
        Page::create('credits', 'credits.phtml'),
        Page::create('404', '404.phtml'),
        Page::create('basics', null, 'basics.md', [
            'title' => 'Basics',
            'subtitle' => 'Getting started',
            'next' => 'variables',
        ]),
        Page::create('variables', null, 'variables.md', [
            'title' => 'Variables',
            'subtitle' => 'The building blocks of PHP',
            'previous' => 'basics',
            'next' => 'arithmetic',
        ]),
        Page::create('arithmetic', null, 'arithmetic.md', [
            'title' => 'Arithmetic',
            'subtitle' => 'Doing math like a pro',
            'previous' => 'variables',
            'next' => 'strings',
        ]),
        Page::create('strings', null, 'strings.md', [
            'title' => 'Strings',
            'subtitle' => 'Working with text',
            'previous' => 'arithmetic',
            'next' => 'comparisons',
        ]),
        Page::create('comparisons', null, 'comparisons.md', [
            'title' => 'Comparisons',
            'subtitle' => 'Equality checking',
            'previous' => 'strings',
            'next' => 'boolean-logic',
        ]),
        Page::create('boolean-logic', null, 'boolean-logic.md', [
            'title' => 'Boolean Logic',
            'subtitle' => 'Is it a yes or a no?',
            'previous' => 'comparisons',
            'next' => 'conditionals',
        ]),
        Page::create('conditionals', null, 'conditionals.md', [
            'title' => 'Conditionals',
            'subtitle' => 'Checking the if before the what',
            'previous' => 'boolean-logic',
            'next' => 'loops',
        ]),
        Page::create('loops', null, 'loops.md', [
            'title' => 'Loops',
            'subtitle' => 'Increase your repetitions',
            'previous' => 'conditionals',
            'next' => 'arrays',
        ]),
        Page::create('arrays', null, 'arrays.md', [
            'title' => 'Arrays',
            'subtitle' => 'Time to make a list',
            'previous' => 'loops',
            'next' => 'functions',
        ]),
        Page::create('functions', null, 'functions.md', [
            'title' => 'Functions',
            'subtitle' => 'Reusable code',
            'previous' => 'arrays',
            'next' => 'classes',
        ]),
        Page::create('classes', null, 'classes.md', [
            'title' => 'Classes',
            'subtitle' => 'Object-oriented programming',
            'previous' => 'functions',
            'next' => 'classes-inheritance',
        ]),
        Page::create('classes-inheritance', null, 'classes-inheritance.md', [
            'title' => 'Classes: Inheritance',
            'subtitle' => 'Extend your objects',
            'previous' => 'classes',
            'next' => 'classes-visibility',
        ]),
        Page::create('classes-visibility', null, 'classes-visibility.md', [
            'title' => 'Classes: Visibility',
            'subtitle' => 'Privatizing your objects',
            'previous' => 'classes-inheritance',
            'next' => 'classes-constructor',
        ]),
        Page::create('classes-constructor', null, 'classes-constructor.md', [
            'title' => 'Classes: Constructor',
            'subtitle' => 'Construct your objects',
            'previous' => 'classes-visibility',
            'next' => 'static',
        ]),
        Page::create('static', null, 'static.md', [
            'title' => 'Static',
            'subtitle' => 'Class properties and methods',
            'previous' => 'classes-constructor',
            'next' => 'interfaces',
        ]),
        Page::create('interfaces', null, 'interfaces.md', [
            'title' => 'Interfaces',
            'subtitle' => 'Writing code contracts',
            'previous' => 'static',
            'next' => 'abstract',
        ]),
        Page::create('abstract', null, 'abstract.md', [
            'title' => 'Abstract Classes',
            'subtitle' => 'Inheriting an interface',
            'previous' => 'interfaces',
            'next' => 'exceptions',
        ]),
        Page::create('exceptions', null, 'exceptions.md', [
            'title' => 'Exceptions',
            'subtitle' => 'Throwing errors',
            'previous' => 'abstract',
            'next' => '',
        ]),
    ],
];
