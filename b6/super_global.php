<!DOCTYPE html>
<html>
<body>

<?php 
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];


echo "<br>";
echo $_SERVER['PHP_SELF'];	//Returns the filename of the currently executing script
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];	//Returns the version of the Common Gateway Interface (CGI) the server is using
echo "<br>";
echo $_SERVER['SERVER_ADDR']; //	Returns the IP address of the host server
echo "<br>";
echo $_SERVER['SERVER_NAME']	//Returns the name of the host server (such as www.w3schools.com)

echo "<br>";
echo $_SERVER['SERVER_SOFTWARE']; //Returns the server identification string (such as Apache/2.2.24)

echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];	//Returns the name and revision of the information protocol (such  
 										// as  HTTP/1.1)

echo "<br>"; 

echo $_SERVER['REQUEST_METHOD'];	//Returns the request method used to access the page (such as POST)

echo "<br>";
echo $_SERVER['REQUEST_TIME'];	//Returns the timestamp of the start of the request (such as 1377687496)

echo "<br>";
echo $_SERVER['QUERY_STRING'];	//Returns the query string if the page is accessed via a query string

echo "<br>";
echo $_SERVER['HTTP_ACCEPT'];	//Returns the Accept header from the current request

echo "<br>";
echo $_SERVER['HTTP_ACCEPT_CHARSET'];	//Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)

echo "<br>";
echo $_SERVER['HTTP_HOST']	//Returns the Host header from the current request

echo "<br>";
echo $_SERVER['HTTP_REFERER'];	//Returns the complete URL of the page from which the current page was called

echo "<br>";
echo $_SERVER['HTTPS']	//Is the script queried through a secure HTTP protocol

echo "<br>";
echo $_SERVER['REMOTE_ADDR'];	//Returns the IP address from where the user is viewing the current page

echo "<br>";
echo $_SERVER['REMOTE_HOST'];	//Returns the Host name from where the user is viewing the current page

echo "<br>";
echo $_SERVER['REMOTE_PORT'];	//Returns the port being used on the user's machine to communicate with the web server

echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];	//Returns the absolute pathname of the currently executing script

echo "<br>";
echo $_SERVER['SERVER_ADMIN'];	//Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)

echo "<br>";
echo $_SERVER['SERVER_PORT'];	//Returns the port on the server machine being used by the web server for communication (such as 80)

echo "<br>";
echo $_SERVER['SERVER_SIGNATURE'];	//Returns the server version and virtual host name which are added to server-generated pages

echo "<br>";
echo $_SERVER['PATH_TRANSLATED'];	//Returns the file system based path to the current script

echo "<br>";
echo $_SERVER['SCRIPT_NAME'];	//Returns the path of the current script

echo "<br>";
echo $_SERVER['SCRIPT_URI'];   //Returns the URI of the current page

?>

</body>
</html>