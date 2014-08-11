<?php namespace DeanWard\TableTool;

class Table extends HtmlElement{

  function __construct($attributes = array()) {
    $this->attributes = $attributes;
  }

  function addRow() {
    
    $input = func_get_args();

    //if the passed data is an array it might contain extra information
    //to be passed to the row
    if(is_array($input[0])) {
      $cells = $input[0];
      
      //make sure we assign any passed row attributes
      if(isset($input[1])) { 
        $row = new Row($input[1]);
       }
       else {
        $row = new Row();
      }

      //make this row a head row if asked
      if(isset($input[2])) {
        $row->type = $input[2];
      }
    }

    //simple job, just create a basic row
    else {
      $row = new Row();
      $cells = $input;
    }

    //fill the cells
    $row->fill($cells);

    $this->rows[$row->type][] = $row;
    unset($row);

    return $this;
  }

  function render($attrs =  array()) {
    $html = "<table ";

    $html .= $this->attributes() . '>';

    if(count($this->rows['head']) > 0) {
      $html .= "<thead>";
      foreach ($this->rows['head'] as $row) {
        $html .= $this->renderRow($row);
      }      
      $html .= "</thead>";
    }
    $html .= "<tbody>";
    foreach ($this->rows['body'] as $row) {
      $html .= $this->renderRow($row);
    }
    $html .= "</tbody>";

    $html .= "</table>";

    return $html;

  }

  function renderRow($row) {
    $html = "";
    if($row->type == "head") {
      $el = "th";
    }
    else {
      $el = "td";
    }

    $html .= "<tr".$row->attributes().">";
    foreach($row->getCells() as $cell) {
      $html .= "<".$el." ".$cell->attributes().">";
      $html .= $cell->getContents();
      $html .= "</".$el.">";
    }
    $html .= "</tr>";
    return $html;
  }

}