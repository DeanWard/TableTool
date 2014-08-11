<?php namespace DeanWard\TableTool;

class HtmlElement {

  function attributes() {

    $attrs = '';

    foreach($this->attributes as $key => $arg) {
      $attrs .= ' ' . $key . '= "' . $arg . '" ';
    }    
    return $attrs;

  }
}