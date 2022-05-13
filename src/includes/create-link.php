<?php

/**
 * 
 */
function create_link($link) { return APPPATH . "/" . $link; }

/**
 * 
 */
function load_file($file) { return $_SERVER['DOCUMENT_ROOT'] . load_asset($file); }

/**
 * 
 */
function load_asset_v($file) { return load_asset($file) . '?v=' . VERSION; }

/**
 * 
 */
function load_asset($file) { return brand_asset_exists($file) ? APPPATH . "/application/" . BRAND . "/" . $file : APPPATH . "/src/" . $file; }

/**
 * 
 */
function brand_asset_exists($file) { return file_exists($_SERVER['DOCUMENT_ROOT'] . APPPATH . "/application/" . BRAND . "/" . $file); }