#TableTool

###What is it?
TableTool is a php class that  assists in the creation and rendering of html tables.

###How do I use it?
Once you have installed it using composer you can use it like so:

```php
//default table with no attributes
$table = new Table();

//define the table's class (in this case, a bootstrap table)
$table = new Table(
  array(
      "class" => "table table-bordered table-rounded"
    )
 );
 
//add a row to the table
$table->addRow(array('Gecko', 'Firefox 1.0', 'Win 98+ / OSX.2+',  '1.7', 'A'));

//add a header row to the table
$table->addRow(array('Engine','Browser','User Agent','version', 'CSS Grade'),null,'head');

//the null parameter above can be used in the same was as the table constructor to pass attributes to the row
$table->addRow(array('Engine','Browser','User Agent','version', 'CSS Grade'),array("style" => "background:red;"),'head');
//or on a body row
$table->addRow(array('Engine','Browser','User Agent','version', 'CSS Grade'),array("style" => "background:red;"));

//output the table to the page
echo $table->render();

```

###Why is the outputted html all on one line?
The `render()` method does not care about witespace between elements, indenting, or anything else like that. It will output valid html but it will not try to make it pretty.