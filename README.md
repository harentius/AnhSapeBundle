# AnhSapeBundle

Bundle provides symfony integration for sape.ru

## Installation

Install via composer with command:

```bash
$ php composer.phar require 'anh/sape-bundle:~1.0'
```

Enable bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Anh\SapeBundle\AnhSapeBundle()
    );

    // ...
}
```

## Configuration

```yaml
parameters:
    anh_sape.sape_user: '...' # your sape user id (f.e. 80e20e4a72a1d09895763b4b1bc98e63)
    anh_sape.options.sape_client: { charset: 'utf8' } # options for SAPE_client
```

## Usage

Twig functions:

```
{{ sape_return_links() }}
{{ sape_return_block_links() }}
```

### Notes

Currently implemented only `SAPE_client` class