# Kisphp Calendar Bundle

![example workflow](https://github.com/kisphp//form-extensions-bundle/actions/workflows/testing.yml/badge.svg)

## Installation

```bash
composer require kisphp/form-extensions-bundle
```

To enable the bundle register it  inside your kernel class `app/AppKernel.php`

```php
<?php

public function registerBundles()
{
    // ...
    new \Kisphp\FormExtensionBundle\FormExtensionBundle(),
    // ...
}
```

Register new template in `app/config/config.yml`:
```yaml
twig:
    form_themes:
        - "bootstrap_3_horizontal_layout.html.twig"
        - "@FormExtension/Form/field_type_help.html.twig"
```

## Usage

Add help option to form element:

```php
->add('description', TextareaType::class, [
    // ...
    'help' => 'This is my help message',
])
```

> You also may use translation for the message
