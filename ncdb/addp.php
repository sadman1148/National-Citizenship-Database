<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connect a family!</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link href="css/animate.min.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
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
        background-image: url("adder.jpg");
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
    .burn:hover {
        COLOR: red; TEXT-DECORATION: none; font-weight: none; text-shadow:0 0 20px #ff5e18;
    }
    button{
        border-radius: 20px;
        font-size: 20px;
        background:black;
        padding: 10px;
        border-style: dotted; 
        color: rgb(44, 178, 255);
        margin-left:20%;
        transition: all 0.3s ease-in-out;
    }
    .tab:hover{
        box-shadow: 0 0 20px white;
    }
    .but:hover {
        color: rgba(255, 255, 255, 1);
        box-shadow: 0 0 10px white;
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
    <h1>
        Connect a family
    </h1>
		<form action="add_parents.php" class="form_design" method="post">
			Child ID: <input type="text" name="nid"><br/><br/>
			Father ID: <input type="text" name="name"><br/><br/>
            Mother ID: <input type="text" name="age"><br/><br/>
			<input style="border-radius: 20px;
            font-size: 20px;
            background:black;
            padding: 10px;
            border-style: dotted; 
            color: rgb(44, 178, 255);
            transition: all 0.3s ease-in-out;" type="submit" value="Add" class="but">
		</form>
    
</body>
</html>