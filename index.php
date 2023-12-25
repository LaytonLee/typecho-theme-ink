<?php
/**
 * typecho theme ink
 *
 * @package Typecho Theme Ink
 * @author layton
 * @version 1.0.0
 * @link 
 */

// header
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); 
?>

<!-- content -->
<main>
    <?php while ($this->next()): ?>
        <article class="post-abstract" itemscope itemtype="http://schema.org/BlogPosting">
            <a itemprop="url" href="<?php $this->permalink() ?>">
                <p class="post-abstract-title" style="margin: 0">
                    <?php $this->title() ?>
                </p>
            </a>
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
                        <!-- 发布时间 -->
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

    <!-- 分页 -->
    <div class="pagination">
        <?php $this->pageNav(); ?>
    </div>
</main>

<!-- footer -->
<?php $this->need('footer.php'); ?>

