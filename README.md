# piwik-linker

![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/exinfinite/piwik-linker)
![GitHub release (latest SemVer)](https://img.shields.io/github/v/release/exinfinite/piwik-linker)
![Packagist Version](https://img.shields.io/packagist/v/exinfinite/piwik-linker)
![Packagist Downloads](https://img.shields.io/packagist/dt/exinfinite/piwik-linker)
![GitHub](https://img.shields.io/github/license/exinfinite/piwik-linker)

### 安裝

```php
composer require exinfinite/piwik-linker
```

### 建立設定

```php
$config = new \Exinfinite\PiwikLinker\Config('piwik_url', 'site_id', 'auth_token');
```

### 引用模組

```php
$live = new \Exinfinite\PiwikLinker\Modules\Live($config);
```

### 串接Piwik API

```php
$json = $live->getLastVisitsDetails('day', 'today');//回傳json
```

### 自訂輸出欄位

```php
$formater = function ($visitor) {
    return [
        'title' => $visitor['exitPageTitle'],
        'url' => $visitor['exitPageUrl']
    ];
};
echo \Exinfinite\PiwikLinker\Parser\Parser::jsonCollectionTransform($json, $formater);
```

輸出結果
```json
{
    "data": [
        {
            "title": "page title",
            "url": "page url"
        }
    ]
}
```