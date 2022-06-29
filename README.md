
# Laravel Package Skelton

## Clone this Skelton
```
git clone https://github.com/JhomeWu/laravel-package-skeleton.git package_slug
cd package_slug
```

## Replace slug to cusomerize your package

Relpace `:vendor_slug` with your vendor\
Relpace `:package_slug` with your package_slug\
Relpace `:VendorName` with your VendorName\
Relpace `:PackageName` with your PackageName\
Relpace `YourGithubAccount` with your github account\

## Run below to push to your github repo

```bash
mv config/config.php.stub config/:package_slug.php
mv routes/routes.php.stub routes/:package_slug.php
mv README.md.stab README.md
git remote set-url origin git@github.com:YourGithubAccount/:package_slug.git
git add ./
git cim "Init to :package_slug base on laravel-package-skeleton"
git push --set-upstream origin master
```
