# laravel-scout-opensearch

Laravel Scout 的 阿里云 Open Search 驱动。

## Installation

建议使用 composer 方式安装此包

    composer require ruogoo/laravel-scout-opensearch

## Usage

1. 在阿里云 OpenSearch 控制台配置;

2. Laravel 5.5 以下，`config/app.php`  中添加 `service provider`

        Ruogoo\\OpenSearch\\OpenSearchServiceProvider

    Laravel 5.5 及以上，自动加载 `service provider`，无需手动添加。

3. 修改 `.env` 配置 scout driver

        SCOUT_DRIVER=opensearch

4. artisan 导入数据同官方 scout 一样：@see [Scout Indexing](https://laravel.com/docs/5.5/scout#indexing)

## Issue

此 package 目前主要自用，功能应该是没有问题，抽空会继续完善。有问题就联系我吧

[issue](https://github.com/ruogoo/laravel-scout-opensearch/issues)

[email:hyancat@live.cn](mailto:hyancat@live.cn)

## License

None.
