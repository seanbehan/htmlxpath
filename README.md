
# About

HTMLXPath is a small utility for consuming HTML web pages and querying using XPath.

# Install

`composer require htmlxpath/htmlxpath`

# Usage

```php
<?php
require 'vendor/autoload.php';

foreach(HTMLXPath\xpath('http://www.seanbehan.com', '//a/text()') as $node)
  echo $node->nodeValue;

// or...
foreach(HTMLXPath\html(file_get_contents('http://seanbehan.com')) as $doc)
  foreach(HTMLXPath\query($doc, '//a/text()') as $node)
    echo $node->nodeValue;

```
