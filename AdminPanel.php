<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
</head>
<style type="text/css">
    *{
        text-decoration: none;
    }
body{
    background-color: lightblue;
}
.navbar{
    background: white;
   overflow: auto;
}

.navbar{
    padding-left:500px ;
    padding-right: 200px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 10px 10px 60px black;
    border-radius: 20px;
    margin: auto;
    width: auto;
}
.logo{
   
 
   
    height: 100px;
    border-radius: 200px;
   padding-left: 190px;
   padding-right: 190px;
   margin: auto;

}
li{
    list-style: none;
    display: inline;
margin: auto;
}
li a{
    float: left;
  text-align: center;
  padding: 12px;
  color: black;
  text-decoration: none;
  font-size: 17px
  
}
#logout{
color: red;
}

</style>
<body>
    <nav class="navbar">
<div class="navdiv">
<img class="logo" src="kk.png" alt="logo">
    <ul>
        
  <li><a href="#home" id="home">Home</a></li>
  <li><a href="#add" id="add">add product</a></li>
  <li><a href="#manage" id="manage">manage users</a></li>
  <li> <a href="#logout" id="logout">log out</a></li>
</nav>    
</ul>
</div>



    <?php


    ?>
</body>
</html>