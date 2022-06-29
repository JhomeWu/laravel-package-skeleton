
# Laravel Package Skelton


Relpace `:vendor_slug` with your vendor\
Relpace `:package_slug` with your package_slug\
Relpace `:VendorName` with your VendorName\
Relpace `:PackageName` with your PackageName\
```bash
cp config/config.php.stub config/package_slug
cp routes/routes.php.stub routes/routes.php.stub
```

## Installation Package locally

You can install the package via composer:
Create Package in your project to store package locally
```bash
mkdir -p ./packages/:vendor_slug
cd ./packages/:vendor_slug
git clone git@github.com:Account/:package_slug.git ./packages/:vendor_slug/:package_slug
```
Set composer to get package locally
```
composer config repositories.:package_slug '{"type": "path", "url": "./packages/:vendor_slug/:package_slug"}' --file composer.json
composer require :vendor_slug/:package_slug
php artisan migrate
```
## Format

```bash
composer format
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.
