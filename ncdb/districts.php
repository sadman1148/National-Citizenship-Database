<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Districts</title>
</head>
<style>
    ul{
        margin:0px;
        padding:30px 20px;
        list-style-type: none;
        text-align: right;
    }
    li{
        display: inline;
        margin-left:20px;
        font-size: 30px;
    }
    a{
        color:rgb(28, 154, 228);
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        font-family: Arial, Helvetica, sans-serif;
    }
    A:hover {
        COLOR: rgb(19, 239, 255); TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 15px rgb(56, 255, 255); 
    }
    .burn:hover {
        COLOR: red; TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 20px #ff5e18;
    }
    body{
        background-image: url("welcome1.jpg");
        -moz-background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    h1{
        color:white;
        text-align: center;
        font-size: 30px;
        font-family: Arial, Helvetica, sans-serif;
        text-shadow:0 0 25px rgb(56, 255, 255);
        margin-top: 50px;
        background: -webkit-linear-gradient(#33ccff, white);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    button{
        border-radius: 20px;
        font-size: 20px;
        background:black;
        padding: 10px;
        border-style: dotted; 
        color: rgb(44, 178, 255);
        margin-left: 10px;
        transition: all 0.3s ease-in-out;
    }
    .tab:hover{
        box-shadow: 0 0 20px white;
    }
    .but:hover {
        color: rgba(255, 255, 255, 1);
        box-shadow: 0 0 10px white;
    }
    p{
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        text-align: center;
        margin-top:90px;
        text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
    }

    table,th,td{
        padding:10px;
        font-size: 20px;
        background: white;
        border: 1px solid black;
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif;
        transition: all 0.3s ease-in-out;
    }
    
</style>
<body>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="citizens.php">Citizens</a></li>
        <li><a href="vehicles.php">Vehicles</a></li>
        <li><a href="districts.php">Districts</a></li>
        <li><a href="jobs.php">Jobs</a></li>
        <li><a href="custom.php">Query</a></li>
        <li><a href="index.php" class="burn">Logout</a></li>
    </ul>
    <button style="margin-left:39%;" class="but" onclick="window.location.href='addd.php';">Add District</button>
    <button class="but" onclick="window.location.href='removed.php';">Remove District</button>
    <button class="but" onclick="window.location.href='editd.php';">Edit District</button>
    <h1>
        Districts listed within the database:
    </h1>
    <?php
    require_once("dbconnect.php");
    $sql = "SELECT * FROM districts";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)!=0){
        ?>
        <table align="center" class=tab>
        <tr style="color: rgb(107, 196, 255)">
            <th>Name</th>
            <th>Postal Code</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
        </tr>
    <?php
        }
    }
    ?>
    </table>
</body>
</html>