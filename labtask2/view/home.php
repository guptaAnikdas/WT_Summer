<html>
<head>
    
    <title>My Home</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="../control/process.php" method="REQUEST">

    <table>
    <tr>
       <td> First Name :</td>
       <td><input type="text"  name="fName"></td>
    </tr>
    <tr>
       <td> Last Name :</td>
       <td><input type="text"  name="lName"></td>
    </tr>

    <tr>
       <td> Age:</td>
       <td><input type="text"  name="lName"></td>
    </tr>

    <tr>
        <td>Designation:</td>
        <td
        ><input type="radio" name="Designation" value="Junior Programme">Junior Programmer
        <input type="radio" name="Designation" value="Senior Programmer">Senior Programmer
        <input type="radio" name="Designation" value="Project Leader">Project Leader</td>
        
    </tr>

    <tr>
        <td>Preferred Language</td>
       <td> <input type="checkbox" name="JAVA" value="JAVA">JAVA
        <input type="checkbox" name="PHP" value="PHP">PHP
        <input type="checkbox" name="c" value="c">C++</td>
    </tr>
       
    <tr>
        <td> E-mail:</td>
        <td><input type="mail" name="mail"></td>
    </tr>

    <tr>
        <td> password:</td>
        <td><input type="password" name="password"></td>
    </tr>
        
    
        <td>
        Please Choose a file </td> 
        <td><input type="file" id="myfile" name="myfile"></td>
    </tr>
   
        
    <tr>
        <td>
            
        <input type="Submit" name="submit" value="Submit">

    
        <input type="Reset" name="Reset" value="Reset"></td>
        </tr>
    </table>
    

    </form>
</body>
</html>