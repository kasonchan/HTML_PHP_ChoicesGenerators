<?php
/**
 * File: ChoicesGeneratorDemo.php
 * Status: Completed 
 * Created Date: June 19, 2013
 * Last Modified Date: June 19, 2013
 * Programmer: Ka-Son Chan
 * Description: This is a demo of the use of the functions from 
 * ChoicesGenerators.php
 */ 

  echo <<< EOH
  <!DOCTYPE html>
  <html>
    <head>
      <title>ChoicesGeneratorDemo</title>
    </head>
    <body>
EOH;

    echo 'This file was last updated: ' . date('F d Y H:i:s.', getlastmod()) . "\n";

    include("ChoicesGenerators.php");

    // Radio Tests
    echo '<div>';
    echo '<h3>' . 'radioButtons(fieldname,button_values[,default_button])' . '</h3>' . "\n";
   
    echo '$values = array(1,2,3,4,5);' . "</br>\n";
    echo 'radioButtons(\'test\', $values);' . "</br>\n";
    $values = array (1,2,3,4,5);
    radioButtons('test',$values);
    
    echo 'radioButtons(\'Sex\',array(\'Male\',\'Female\'),\'Female\');' . "</br>\n";
    radioButtons('test2',array('Male','Female'),'Female');

    echo '$selections = array(\'Horse\',\'Cow\',\'Pig\',\'Dog\',\'Chicken\');' . "</br>\n";
    echo 'radioButtons(\'Animals\',$selections,\'Cat\');' . "</br>\n";
    $selections = array('Horse','Cow','Pig','Dog','Chicken');
    radioButtons('Animals',$selections,'Cat');

    echo 'radioButtons(\'Error\',\'not an array\',array(1,2));' . "</br>\n";
    radioButtons('err','not array',array(1,2));
    echo "</div>\n";

    echo '<br>';

    // Picklist Tests
    echo '<div>';
    echo '<h3>' . 'picklist(fieldname,option_values[[,default_value(s)][,size]])' . '</h3>' . "\n";

    echo '$values = array(\'aaa\',\'bbb\',\'ccc\',\'ddd\',\'eee\')' . "</br>\n";
    echo 'picklist(\'pick1\',$values);' . "</br>\n";
    $values = array ('aaa','bbb','ccc','ddd','eee');
    picklist('pick1',$values);

    echo 'picklist(\'pick2\',$values,\'ccc\');' . "</br>\n";
    picklist('pick2',$values,'ccc');

    echo 'picklist(\'pick3\',$values,\'bbb\',2);' . "</br>\n";
    picklist('pick3',$values,'bbb',2);

    echo 'picklist(\'pick4\',$values,\'\',5);' . "</br>\n";
    picklist('pick4',$values,'',5);

    echo 'picklist(\'pick5\',$values,array(\'bbb\',\'ddd\'),5);' . "</br>\n";
    picklist('pick5',$values,array('bbb','ddd'),5);

    echo 'picklist(\'Error\',\'not an array\',\'\',x);' . "</br>\n";    
    picklist('Error','not an array','',x);
    echo '</div>';

    echo <<< EOT
    </body>
  </html>
EOT;

?>