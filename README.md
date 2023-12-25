# typecho-theme-ink

## Intro

一个自定义的typecho ink 主题，实现了以下功能：

- 明暗主题切换
- 站内检索
- 文章目录导航

## Deploy

1. 下载 [typecho-theme-ink](https://github.com/LaytonLee/typecho-theme-ink) 主题，将 `typecho-theme-ink` 复制到 `path/to/typecho/usr/themes/` 下
2. 将 `typecho-theme-ink/plugins/AddHeadingID` 移动到 `path/to/typecho/usr/plugins/` 下
3. 补全 `typecho-theme-ink/assets/js/site-info.js` 中的配置项

- `logo`: 网站logo的相对路径，建议放在 `typecho-theme-ink/assets/img/` 下
- `siteName`: 网站名称
- `githubUrl`: 用户的 github 链接
- `copyright`: 版权声明

4. 下载 [font-awesome](https://fontawesome.com/) 并将其移动到 `typecho-theme-ink/assets/font/` 下，修改 `typecho-theme-ink/header.php` 中的 font-awesome href路径为你实际的 font-awesome 路径：

```php
<!-- replace the href path to your font-awesome icon path -->
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/font/fontawesome-free-6.5.1-web/css/all.min.css'); ?>" />
```

修改完以上内容后，刷新页面即可



