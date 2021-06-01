<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citizens</title>
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
        transition: all 0.3s ease-in-out;
        margin-left:10px;
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
    .burn:hover {
        COLOR: red; TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 20px #ff5e18;
    }
    table,th,td{
        padding:10px;
        font-size: 20px;
        background: white;
        border: 1px solid black;
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif;
        transition: all 0.3s ease-in-out;
        opacity: 0.9;
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
    <button style="margin-left:38%;" class="but" onclick="window.location.href='add.php';">Add Citizen</button>
    <button class="but" onclick="window.location.href='remove.php';">Remove Citizen</button>
    <button class="but" onclick="window.location.href='edit.php';">Edit Citizen</button>
    <h1>
        Citizens listed within the database:
    </h1>
    <?php
    require_once("dbconnect.php");
    $sql = "SELECT * FROM citizens";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)!=0){
        ?>
        <table align="center" class=tab>
        <tr style="color: rgb(107, 196, 255)">
            <th>NID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Date-of-Birth</th>
            <th>Height</th>
            <th>Sex</th>
            <th>Marital Status</th>
            <th>Eye Color</th>
            <th>Blood Group</th>
            <th>Address</th>
            <th>Job</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[5] ?></td>
            <td><?php echo $row[6] ?></td>
            <td><?php echo $row[7] ?></td>
            <td><?php echo $row[8] ?></td>
            <td><?php echo $row[9] ?></td>
            <td><?php echo $row[10] ?></td>
        </tr>
    <?php
        }
    }
    ?>
    </table>
</body>
</html>