<?php
/**
 * ajax_test.php along with ajax_test.htm demonstrates simple event based AJAX 
 * via AJAX
 * 
 * AJAX call goes to php page 'dynamic_lists_AJAX.php' which uses a car 'object' to store
 * make model and year data of a selection of cars.
 *
 * When the user selects a make and year from a form, AJAX is used to retrieve an XML snippet 
 * and the code uses JavaScript on the DOM to update a select object with an id of 'modelSelect'.
 *
 * Adapted from demo by Ryan Asleson, 'Foundations Of Ajax', originally written for Java. 
 * Rewritten in PHP by Bill
 * 
 * @package WEB150
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.0 2009/10/06
 * @link http://www.billnsara.com/js/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see ajax_htm.php
 * @todo none
 */
srand(time());  //seed a random number based on current time
$random = (rand()%9);  //generate a random number between 0 and 9
print("ajax_test.php calling: random number is: $random");  //The result of the print statement is returned via AJAX
?>