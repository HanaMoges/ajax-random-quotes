<?php
/**
 * ajax_headline.php along with ajax_headline1.htm or 
 ajax_headline2.htm to demonstrate simple event based AJAX 
 * 
 * @package WEB150
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.0 2009/10/06
 * @link http://www.billnsara.com/js/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see ajax_headline1.htm
 * @see ajax_headline2.htm 
 * @todo none
 */

//if letter "h" is sent via GET, print a random headline 
if(isset($_GET["h"])){$myTest = $_GET["h"];}else{$myTest = "";}

if($myTest == "yes")
{//get headline!
	$aHeadline = array();
    $quotes[0] = "If you don't have time to read, you don't have the time (or the tools) to write. Simple as that.--Stephen King";
    $quotes[1] = "Inspiration does exist, but it must find you working.";
    $quotes[2] = "We write to taste life twice, in the moment and in retrospect. --Anaïs Nin";
    $quotes[3] = "If there's a book that you want to read, but it hasn't been written yet, then you must write it. --Toni Morrison";
    $quotes[4] = "One day I will find the right words, and they will be simple.--Jack Kerouac, The Dharma Bums";
    $quotes[5] ="Either write something worth reading or do something worth writing.--Benjamin Franklin";
    $quotes[6] = "You must stay drunk on writing so reality cannot destroy you.--Ray Bradbury";
    $quotes[7] = "A word after a word after a word is power.--Margaret Atwood";
    $quotes[8] = "To survive, you must tell stories.--Umberto Eco";
    $quotes[9] = "I write to discover what I know.--Flannery O'Connor";
	srand(time());
	$random = (rand()%9);
	print $aHeadline[$random];
}else{
	print "This is an AJAX page, and you didn't say the magic word!";	
}	
?>
