<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute 欄位應該被確認。',
    'accepted_if' => '當 :other 欄位是 :value 的時候，:attribute 欄位應該被確認。',
    'active_url' => ':attribute 不是一個合法的網址。',
    'after' => ':attribute 必須晚於 :date。',
    'after_or_equal' => ':attribute 必須晚於或等於 :date。',
    'alpha' => ':attribute 只能有英文字母。',
    'alpha_dash' => ':attribute 只能有英文字母、數字、底線和連接號。',
    'alpha_num' => ':attribute 只能有英文字母和數字。',
    'array' => ':attribute 必須是陣列。',
    'before' => ':attribute 必須早於 :date。',
    'before_or_equal' => ':attribute 必須早於或等於 :date。',
    'between' => [
        'numeric' => ':attribute 必須介於 :min 和 :max 之間。',
        'file' => ':attribute 必須介於 :min 和 :max KB 之間。',
        'string' => ':attribute 必須介於 :min 和 :max 個字之間。',
        'array' => ':attribute 必須介於 :min 和 :max KB 個項目之間。',
    ],
    'boolean' => ':attribute 必須是真(True)或假(False)。',
    'confirmed' => ':attribute 和其確認欄位不相符。',
    'current_password' => 'The password is incorrect.',
    'date' => ':attribute 不是一個有效的日期。',
    'date_equals' => ':attribute 必須等於 :date。',
    'date_format' => ':attribute 的格式與 :format 不符。',
    'different' => ':attribute 和 :other 必須不同。',
    'digits' => ':attribute 必須要是 :digits 個數字。',
    'digits_between' => ':attribute 必須介於 :min 和 :max 個數字之間。',
    'dimensions' => ':attribute 包含一個無效的圖片。',
    'distinct' => ':attribute 包含一個重複的值。',
    'email' => ':attribute 必須是一個有效的地址。',
    'ends_with' => ':attribute 必須以 :values 作為結尾。',
    'exists' => '選擇的 :attribute 是無效的。',
    'file' => ':attribute 必須是一個檔案。',
    'filled' => '必須填寫 :attribute 欄位。',
    'gt' => [
        'numeric' => ':attribute 必須大於 :value。',
        'file' => ':attribute 必須大於 :value KB。',
        'string' => ':attribute 必須大於 :value 個字。',
        'array' => ':attribute 必須大於 :value 個項目。',
    ],
    'gte' => [
        'numeric' => ':attribute 必須大於或等於 :value。',
        'file' => ':attribute 必須大於或等於 :value KB。',
        'string' => ':attribute 必須大於或等於 :value 個字。',
        'array' => ':attribute 必須大於或等於 :value 個項目。',
    ],
    'image' => ':attribute 必須是一個圖片。',
    'in' => '選擇的 :attribute 是無效的。',
    'in_array' => ':attribute 不存在於 :other。',
    'integer' => ':attribute 必須是一個整數。',
    'ip' => ':attribute 必須是一個有效的 IP 地址。',
    'ipv4' => ':attribute 必須是一個有效的 IPv4 地址。',
    'ipv6' => ':attribute 必須是一個有效的 IPv6 地址。',
    'json' => ':attribute 必須是一個有效的 JSON 字串。',
    'lt' => [
        'numeric' => ':attribute 必須小於 :value。',
        'file' => ':attribute 必須小於 :value KB。',
        'string' => ':attribute 必須小於 :value 個字。',
        'array' => ':attribute 必須小於 :value 個項目。',
    ],
    'lte' => [
        'numeric' => ':attribute 必須小於或等於 :value。',
        'file' => ':attribute 必須小於或等於 :value KB。',
        'string' => ':attribute 必須小於或等於 :value 個字。',
        'array' => ':attribute 必須小於或等於 :value 個項目。',
    ],
    'max' => [
        'numeric' => ':attribute 不可以大於 :max。',
        'file' => ':attribute 不可以大於 :max KB。',
        'string' => ':attribute 不可以大於 :max 個字。',
        'array' => 'T:attribute 不可以大於 :max 個項目。',
    ],
    'mimes' => ':attribute 必須是以下檔案格式：:values。',
    'mimetypes' => ':attribute 必須是以下檔案格式：:values。',
    'min' => [
        'numeric' => ':attribute 不可以小於 :max。',
        'file' => ':attribute 不可以小於 :max KB。',
        'string' => ':attribute 不可以小於 :max 個字。',
        'array' => 'T:attribute 不可以小於 :max 個項目。',
    ],
    'multiple_of' => ':attribute 應該是 :value 的倍數。',
    'not_in' => '選擇的 :attribute 是無效的。',
    'not_regex' => ':attribute 格式無效。',
    'numeric' => ':attribute 必須是一個數字。',
    'password' => '密碼錯誤。',
    'present' => '必須提供 :attribute 欄位。',
    'regex' => ':attribute 格式無效。',
    'required' => '必須提供 :attribute 欄位。',
    'required_if' => '當 :other 欄位是 :value 時，必須提供 :attribute 欄位。',
    'required_unless' => '當 :other 欄位不是 :value 時，必須提供 :attribute 欄位。',
    'required_with' => '如果有 :other 欄位時，必須提供 :attribute 欄位。',
    'required_with_all' => '如果有 :other 欄位時，必須提供 :attribute 欄位。',
    'required_without' => '如果沒有 :other 欄位時，必須提供 :attribute 欄位。',
    'required_without_all' => '如果沒有 :other 欄位時，必須提供 :attribute 欄位。',
    'prohibited' => '不得存在 :attribute 欄位。',
    'prohibited_if' => '當 :other 欄位是 :value 時，不得存在 :attribute 欄位。',
    'prohibited_unless' => '當 :other 欄位不是 :value 時，不得存在 :attribute 欄位。',
    'same' => ':attribute 必須和 :other 一致。',
    'size' => [
        'numeric' => ':attribute 必須是 :size。',
        'file' => ':attribute 必須是 :size KB。',
        'string' => ':attribute 必須是 :size 個字。',
        'array' => ':attribute 必須是 :size 個項目。',
    ],
    'starts_with' => ':attribute 必須以 :values 作為開頭。',
    'string' => ':attribute 必須是字串。',
    'timezone' => ':attribute 必須是有效的字串。',
    'unique' => ':attribute 已經被用過了。',
    'uploaded' => ':attribute 上傳失敗。',
    'url' => ':attribute 不是一個有效的網址。',
    'uuid' => ':attribute 必須是一個有效的 UUID。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
