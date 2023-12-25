<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main>
    <!-- 文章目录（3级） -->
    <div id="post-catelog" class="post-catelog">
        <div id="post-catelog-title" class="post-catelog-title">
            目录
        </div>
        <div id="post-catelog-content" class="post-catelog-content">
        </div> 
    </div>
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <!-- title -->
        <h1 class="post-title" style="text-align:center">
            <?php $this->title() ?>
        </h1>
        <!-- meta info -->
        <div class="post-meta">
            <ul>
                <li>
                    <!-- publish date -->
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
        

        <!-- content -->
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>

        <!-- <div class="post-near">
        </div> -->
    </article>
</main>

<!-- footer -->
<?php $this->need('footer.php'); ?>
