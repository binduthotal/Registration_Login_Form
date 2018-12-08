<html>

<head>
    <title>Home Page</title>
    <style type="text/css">
    @font-face
    {
    font-family:My Font; 
    src: url(fonts/Titillium-Bold.otf)
    }
    body 
    {
    background-color: aliceblue;
    margin : auto;
    font-family: "My Font";
    }
    h1,h2,h3
    {
        position: relative;
        top:20%;
        left:40%;
    }
</style>
    <meta charset="UTF-8">
    <meta name="description" content="Learning Objective Registration Page ">
    <meta name="author" content="Amr Elzawawy">
    <meta name="keywords" content="HTML, CSS, XML, JavaScript,PHP,Learning,Database">   
</head>

<script src="script.js"></script>

<body>
    <h1><?php include("backend.php");echo $_SESSION['success'];?></h1>
    <h2>Welcome <?php echo $_SESSION['username'];?>!</h2>
    <h3><a href="login.html">Logout.</a></h3>
</body>



</html>