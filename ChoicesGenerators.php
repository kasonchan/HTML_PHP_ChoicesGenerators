<?php
/**
 * File: ChoicesGenerator.php
 * Status: Completed
 * Created Date: June 19, 2013
 * Last Modified Date: June 19, 2013
 * Programmer: Ka-Son Chan
 * Description: This file contains radioButtons and picklist function to build
 * them easily.
 */ 

  /**
   * Generates radio buttons
   * @param $valName name of the set of radio buttons to be generated
   * @param $numArray choices of the radio buttons to be generated
   * @param $default_button default buttons to be chosen
   */
  function radioButtons($valName, $numArray, $default_button="") {
    echo "<p>";
    if(is_array($numArray)) {
      foreach ($numArray as $value) {
        if ($value != $default_button) {
          echo "<input type=\"radio\" value=\"$value\" name=\"$valName\" />";
          echo "$value\n";
        }
        else {
          echo "<input type=\"radio\" value=\"$value\" name=\"$valName\" checked/>";
          echo "$value\n";
        }
      }
    }
    else if(!is_array($numArray))
      echo '<span style="color:red;">' . 'radioButtons(): No array of button values specified' . '</span>' . "</br>\n";
    if(!is_scalar($default_button))
      echo '<span style="color:red;">' . 'radioButtons(): Default value not a scalar value' . '</span>' . "</br>\n";
    echo "</p>\n";
  }

  /**
   * Generates a picklist
   * @param $valName name of the pick list to be generated
   * @param $numArray choices of the radio buttons to be generated
   * @param $default_value default values to be selected
   * @param $size size of the pick list to be displayed
   */
  function picklist($valName,$numArray,$default_value=array(''),$size=1) {
    echo "<p>\n";
    if(!is_array($numArray))
      echo '<span style="color:red;">' . 'picklist(): No array of picklist values specified' . '</span>' . "</br>\n";
    if(!is_int($size))
      echo '<span style="color:red;">' . 'picklist(): Size not a valid numeric value' . '</span>' . "</br>\n";
    else {
      echo "<select name=\"$valName\" size=\"$size\">\n";
      foreach($numArray as $value) {
        if($value != $default_value)
          echo "<option value=\"$value\">$value</option>" . "</br>\n";
        else
          echo "<option value=\"$value\" selected>$value</option>" . "</br>\n";
      }
      echo "</select>\n";
      echo "</p>\n";
    }
  }

?>