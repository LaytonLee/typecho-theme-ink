<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php $this->archiveTitle([
            'category' => _t('%s'),'search' => _t('搜索结果：%s'),
            'tag' => _t('标签：%s'),'author' => _t('作者：%s')
        ], '', ' - '); ?>
        <?php $this->options->title(); ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/header.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/common.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/archive.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/post.css'); ?>" />

    <!-- replace the href path to your font-awesome icon path -->
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/font/fontawesome-free-6.5.1-web/css/all.min.css'); ?>" />

    <script defer src="<?php $this->options->themeUrl('assets/js/site-info.js'); ?>"></script>
    <script defer src="<?php $this->options->themeUrl('assets/js/theme-mode.js'); ?>"></script>

    <?php if ($this->is('post')): ?>
        <!-- 仅在post.php页面加载页面目录 -->
        <script defer src="<?php $this->options->themeUrl('assets/js/post-nav.js'); ?>"></script>
    <?php endif; ?>

    <?php $this->header(); ?>
</head>

<!-- 仅用于js获取theme url，无其他用处 -->
<a id="themeUrl" hidden href="<?php $this->options->themeUrl(); ?>">仅用于js获取theme url，无其他用处</a>

<header>
    <!-- site info -->
    <div class="site-info">
        <div class="profile-img">
            <a id="logo">
                <!-- site avatar image -->
                <img id="site-logo" src="<?php $this->options->themeUrl('assets/img/avatar.png'); ?>" alt="profile-img">
            </a>
        </div>
        <div class="site-name">
            <a id="site-name" href="<?php $this->options->siteUrl(); ?>">
            </a>
        </div>
    </div>

    <!-- 头部导航栏 -->
    <div class="nav">
        <ul>
            <li>
                <!-- home -->
                <a<?php if ($this->is('index')): ?> class="current"<?php endif; ?>
                    href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?>
                </a>
            </li>
        
            <?php $this->widget('Widget_Metas_Category_List')
                    ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
        </ul>
    </div>

    
    <div class="func">
        <div class="theme-switch">
            <button id="themeSwitch">
                <i class="fa-solid fa-circle-half-stroke"></i>
            </button>
        </div>

        <!-- 相关链接: github, rss -->
        <div class="link">
            <ul>
                <!-- github -->
                <li>
                    <a id="githubLink">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
                <!-- rss -->
                <li>
                    <a href="<?php $this->options->feedUrl(); ?>">
                        <i class="fa-solid fa-square-rss"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- 站内索引 -->
        <div class="search">
            <form id="search" class="search-form" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <input type="text" id="s" name="s" placeholder="输入关键字搜索"/>
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>
</header>