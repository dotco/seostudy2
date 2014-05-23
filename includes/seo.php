<?php
//todo: make these come from expedrion db
$seo_live = false;
$seo_title = "Yellow Hibiscus Flowers";
$seo_description = "description here.";
if($seo_live !== true){
    header("X-Robots-Tag: noindex, nofollow", true);
}
