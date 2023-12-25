<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main>
    <div class="archive-title">
        <!-- archive title -->
            <?php $this->archiveTitle([
                'category' => _t('category: %s'),
                'search'   => _t('keyword: %s'),
                'tag'      => _t('label: %s'),
                'author'   => _t('author: %s')
            ], '', ''); ?>
    </div>
    
    <?php if ($this->have()): ?>
        <?php while ($this->next()): ?>
            <article class="post-abstract" itemscope itemtype="http://schema.org/BlogPosting">
                <div class="post-abstract-title">
                    <a itemprop="url" href="<?php $this->permalink() ?>">
                        <?php $this->title() ?>
                    </a>
                </div>
                
                <div class="post-abstract-content">
                    <?php
                    $content = $this->content;
                    $excerpt = substr($content, 0, strpos($content, '<!--more-->') ?: 300);
                    echo $excerpt;
                    ?>
                    <a href="<?php $this->permalink() ?>" class="post-abstract-content">阅读更多...</a>
                </div>
                <div class="post-abstract-meta">
                    <ul>
                        <li>
                            <i class="fa-regular fa-calendar-days">
                                <?php $this->date('Y-m-d'); ?>
                            </i>              
                        </li>
                        <?php if ($this->category): ?>
                            <!-- 若存在文章分类，显示文章分类 -->
                            <li>
                                <i class="fa-solid fa-layer-group">
                                    <?php $this->category(','); ?>
                                </i>
                            </li>
                        <?php endif; ?>
                        
                        <?php if ($this->tags): ?>
                            <!-- 若存在文章标签，显示标签 -->
                            <li>
                                <i class="fa-solid fa-tag">
                                    <?php $this->tags(','); ?>
                                </i>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
        <article class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </article>
    <?php endif; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</main>

<?php $this->need('footer.php'); ?>
