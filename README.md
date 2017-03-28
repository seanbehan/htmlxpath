
# About

HTMLXPath is a small utility for consuming HTML web pages and querying using XPath.

# Install

`composer require htmlxpath/htmlxpath`

# Usage

```<?php

foreach(HTMLXPath\xpath('http://www.seanbehan.com', '//a/text()') as $node)
  echo $node->nodeValue;

foreach(HTMLXPath\html(file_get_contents('https://seanbehan.com')) as $doc)
  foreach(HTMLXPath\query($doc, '//a/text()') as $node)
    echo $node->nodeValue;

```
