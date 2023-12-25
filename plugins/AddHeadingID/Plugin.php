<?php
/**
 * Add Heading ID for article
 *
 * @package AddHeadingID
 * @author layton
 * @version 1.0.0
 * @link
 */
class AddHeadingId_Plugin implements Typecho_Plugin_Interface
{
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Abstract_Contents')->contentEx = array('AddHeadingId_Plugin', 'addHeadingId');
    }

    public static function deactivate() {}

    public static function config(Typecho_Widget_Helper_Form $form) {}

    public static function personalConfig(Typecho_Widget_Helper_Form $form) {}

    public static function addHeadingId($content, $widget, $lastResult)
    {
        // 添加 ID 到 h1-h6 标题
        $content = preg_replace_callback('/<h([1-6])>(.*?)<\/h[1-6]>/i', function($matches) {
            $headingLevel = $matches[1];
            $headingText = strip_tags($matches[2]);
            $headingId = strtolower(str_replace(' ', '-', $headingText));
            return "<h$headingLevel id=\"$headingId\">$headingText</h$headingLevel>";
        }, $content);

        return $content;
    }
}

