# Kisphp Calendar Bundle

[![Build Status](https://travis-ci.org/kisphp/form-extensions-bundle.svg?branch=master)](https://travis-ci.org/kisphp/form-extensions-bundle)

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

## Usage

Register new template in `app/config/config.yml`:
```yaml
twig:
    form_themes:
        - "bootstrap_3_horizontal_layout.html.twig"
        - "@FormExtension/Form/field_type_help.html.twig"
```

