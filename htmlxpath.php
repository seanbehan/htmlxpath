<?php

namespace HTMLXPath;

use DOMDocument;
use DOMXPath;
use HTMLXPath;

function html($html){
  $doc = new DOMDocument();
  $doc->loadHTML($html);
  $xpath = new DOMXPath($doc);
  yield $xpath;
}

function query($xpath, $expression){
  foreach($xpath->query($expression) as $node){
    yield $node;
  }
}

function xpath($url, $expression){
  $html = file_get_contents($url);
  $doc = new DOMDocument();
  $doc->loadHTML($html);
  $xpath = new DOMXPath($doc);
  foreach($xpath->query($expression) as $node){
    yield $node;
  }
}
