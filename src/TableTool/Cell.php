<?php namespace DeanWard\TableTool;

class Cell extends HtmlElement{

  function __construct($contents,$attributes = array()) {
    $this->contents = $contents;
    $this->attributes = $attributes;
  }

  function getContents() {
    return $this->contents;
  }
}
