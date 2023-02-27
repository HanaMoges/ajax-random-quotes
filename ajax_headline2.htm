<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ajax_headline2.htm</title>
    
<script type="text/javascript">
var xmlHttp;
//assign 'doStart()' AJAX function to begin when page first loads - same as onload attribute of body tag
//note the absence of parens, as we don't want the function to fire off, just be referenced by the onload event
window.onload = doStart; 
function createXMLHttpRequest() {
    if (window.ActiveXObject) {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    } 
    else if (window.XMLHttpRequest) {
        xmlHttp = new XMLHttpRequest();
    }
}
    
function doStart() {
    createXMLHttpRequest();
    myObj = document.getElementById("newsFlash");  //grab div via DOM
    myObj.innerHTML = '<div align="center"><img src="images/loading.gif" /></div>';  //write 'loading' gif to div
    url = "ajax_headline.php?h=yes" + "&ts=" + new Date().getTime();
    xmlHttp.open("GET",url, true);
    xmlHttp.onreadystatechange = pollServer;
    xmlHttp.send(null);
}
    
function pollServer() {
    if(xmlHttp.readyState == 4) {
        if(xmlHttp.status == 200) {
            myObj = document.getElementById("newsFlash");
            ajaxNews = '<div style="border:1 red dashed;" align="center"><b>News FLASH: (';
            ajaxNews += new Date().toLocaleString() + ')<font color="red" size="+2"><br />'; 
            ajaxNews += xmlHttp.responseText;
            ajaxNews += '</font></b></div>';
            myObj.innerHTML = ajaxNews;  //overwrite current contents of div with new formatted headline
            setTimeout("doStart()", 10000);  //set AJAX function to run again in 10 seconds 
        }
    }
}
</script>
</head>

<body>
<h1 align="center">ajax_headline2.htm</h1>
<p>Random headline refreshes from server via XMLHTTPRequest Object (AJAX)</p>
<p>This page contacts a PHP page named ajax_headline.php every 10 seconds to retrieve a random headline.</p>
<p>Uses a 'loading' animated GIF to hypnotize user.  Get one free from <a href="http://www.ajaxload.info/">http://www.ajaxload.info</a>!</p>
<span id="newsFlash" align="right">&nbsp;</span>  
</body>
</html>
