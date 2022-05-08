<?php
$pardown = new Parsedown();
$content = $pardown->text(file_get_contents(Assets::LoadBrandFile('contents/' . $data['slug'] . '/article.md')));
echo str_replace('%CNTNT%', Assets::LoadAsset('contents/' . $data['slug']), $content);
