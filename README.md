
# Laravel Package Skelton

## Clone this Skelton
```
git clone https://github.com/JhomeWu/laravel-package-skeleton.git package-slug
cd package-slug
```

## Replace slug to cusomerize your package

Relpace `:vendor_slug` with your vendor-slug\
Relpace `:package_slug` with your package-slug\
Relpace `VendorName` with your VendorSlug\
Relpace `PackageName` with your PackageSlug\
Relpace `YourGithubAccount` with your github account\

## Run below to push to your github repo

```bash
mv config/config.php.stub config/:package_slug.php
mv routes/routes.php.stub routes/:package_slug.php
mv README.md.stab README.md
rm -rf .git
git init
git add ./
git cim "Init to :package_slug base on laravel-package-skeleton"
git branch -M master
git remote add origin git@github.com:YourGithubAccount/:package_slug.git
git push --set-upstream origin master
```
