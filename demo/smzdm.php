<?php
ini_set("memory_limit", "1024M");
require dirname(__FILE__).'/../core/init.php';

/* Do NOT delete this comment */
/* 不要删除这段注释 */

$url = "http://faxian.smzdm.com/hot_24hours/";
$html = requests::get($url);

// 抽取文章标题
$selector = "/html/body/section/ul[2]/li[1]/div[2]/h2/a/span[1]";
$title = selector::select($html, $selector);
// 检查是否抽取到标题
echo $title;exit;
echo $title;exit;



//$data = array(
//    'title' => $title,
//    'author' => $author,
//    'content' => $content,
//);3

// 查看数据是否正确
//print_r($data);

// 入库
//db::insert("content", $data);