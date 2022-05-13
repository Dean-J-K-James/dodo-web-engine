<?php
$pardown = new Parsedown();
$content = $pardown->text(file_get_contents(load_file('contents/' . $data['slug'] . '/article.md')));
echo str_replace('%CNTNT%', load_asset('contents/' . $data['slug']), $content);
