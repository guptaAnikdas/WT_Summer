<?php
//For first name 
$name=$_REQUEST["fName"];
$namee=$_REQUEST["lName"];
$Designation="";
$JAVA = $PHP = $c = "";


if(empty(strlen($name)>4))
{
    echo"Your first name should be more then 4 character";
}

else
{
    echo"Your name is ".$name;
}

//For last name 

if(empty(strlen($namee)>4))
{
    echo"<br> Your last name should be more then 4 character";
}

else
{
    echo"Your name is ".$namee;
}


//For Radio Button
if(isset($_REQUEST["Designation"]))
{
    $Designation=$_REQUEST["Designation"];
    echo"<br>Your Designation is ".$Designation;
}
else{
    echo"<br>Put your Designation ";
}


if(isset($_REQUEST["JAVA"])||($_REQUEST["PHP"])||($_REQUEST["c"]))
{
    if(isset($_REQUEST["JAVA"]) && isset($_REQUEST["PHP"] ) && isset($_REQUEST["c"] ))
  { echo"You have select both ".$_REQUEST["JAVA"]. "and" .$_REQUEST["PHP"]. "and" .$_REQUEST["c"];
}

    elseif (isset($_REQUEST["JAVA"])) {
        echo"You have select ".$_REQUEST["JAVA"];
    }

    elseif (isset($_REQUEST["PHP"]))
    {
        echo"You have select ".$_REQUEST["PHP"];  
    }
    else
    {
        echo"You have select ".$_REQUEST["c"];
    }
}
else
{
    echo"Pleace select a checkbox";
}

?>