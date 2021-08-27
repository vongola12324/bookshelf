<?php

use App\Constants\BookLocale;
use App\Constants\BookStatus;
use App\Constants\BookType;

return [
    'book-type'   => [
        BookType::LNOVEL     => '輕小說',
        BookType::MANGA      => '漫畫',
        BookType::NOVEL      => '小說',
        BookType::COLLECTION => '設定集',
        BookType::MAGAZINE   => '雜誌',
        BookType::DOUJINSHI  => '同人誌',
    ],
    'book-status' => [
        BookStatus::READY   => '架上',
        BookStatus::BORROW  => '借出',
        BookStatus::MISSING => '遺失',
    ],
    'book-locale' => [
        BookLocale::ZH_TW => '中文(繁體)',
        BookLocale::JA_JP => '日本語',
        BookLocale::ZH_CN => '中文(简体)',
        BookLocale::EN_US => 'English(US)',
    ],
];
