<?php
setcookie("name","aslam",time()+86400,"/","",0);//in this way the cookies are creating and the expair date is 1 day
echo "cookies are been set for one day ";
echo "<br>";
echo $_COOKIE["name"];// in this way the cookies are displaying (used to display onr field only)
echo "<br>";
print_r($_COOKIE);//  this way is used to display the entair cookies  
if(isset($_COOKIE["name"]))// isset() is used to check if the value is assinged to name or the location is set  
{
    echo "<br> cookies are set & the value is assingned ";
}
else
{
    echo "<br> cookies are not set & value is not assingned ";
}



setcookie("name","aslam",time()-60,"/","",0); // in this way the cokkies are deleting(time is set as an previous one )  


?>