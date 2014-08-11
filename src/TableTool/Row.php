<?php namespace DeanWard\TableTool;

class Row extends HtmlElement{

  function __construct($attributes = array()) {
    $this->attributes = $attributes;
    $this->type = "body";
  }

  function addCell($contents,$attributes = array()) {
      $this->cells[] = new Cell($contents,$attributes);
  }

  function fill($cells) {
    foreach($cells as $cell) {
      if(is_array($cell)) {
        $this->addCell($cell[0],$cell[1]);
      }
      else {
        $this->addCell($cell);
      }
    } 

    return $this;   
  }

  function getCells() {
    return $this->cells;
  }
}