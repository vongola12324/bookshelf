<?php

use App\Constants\BookLocale;
use App\Constants\BookStatus;
use App\Constants\BookType;

return [
    'book-type'   => [
        BookType::LNOVEL     => 'Light Novel',
        BookType::MANGA      => 'Comic',
        BookType::NOVEL      => 'Novel',
        BookType::COLLECTION => 'Collection',
        BookType::MAGAZINE   => 'Magazine',
        BookType::DOUJINSHI  => 'Doujinshi',
    ],
    'book-status' => [
        BookStatus::READY   => 'On the Shelf',
        BookStatus::BORROW  => 'Loaned out',
        BookStatus::MISSING => 'Missing',
    ],
    'book-locale' => [
        BookLocale::ZH_TW => '中文(繁體)',
        BookLocale::JA_JP => '日本語',
        BookLocale::ZH_CN => '中文(简体)',
        BookLocale::EN_US => 'English(US)',
    ],
];
