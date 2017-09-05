<!DOCTYPE html>
<html>
<head>
	<title>E-le2Rn</title>
    <link rel="stylesheet" type="text/css" href="resources/css/Head_Foot.css">
    <link rel="stylesheet" type="text/css" href="resources/css/eslam-css.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="navigation-bar">
                <a href="home.php">
                    <img src="resources/img/logo.png" style="height: 100%; margin-left:20px;">
                </a>
                <form method="GET" action="books.php" style="display: inline-block;">
                    <span id="search" style="display: inline-block; float: left;">
                        <label style="padding-left: 20px;">
                            <input type="search" name="key" style="height: 50%;border-radius: 10px; margin-bottom: 5px; display: inline-block; padding: 5px;">
                            <button style="cursor: pointer;padding: 0px;margin: 0px;">
                                <img src="resources/img/search-icon.png" style="width: 30px; height: 30px;">
                            </button>
                        </label>
                    </span>
                </form>
                <span id="container-of-menu">
                    <ul class="list-menu">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="home.php#Service">Services</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li>
                            <?php
                                session_start();
                                if(isset($_SESSION['email'])) { ?>
                                    <a href="logout.php" id="logout">Logout</a> <?php
                                }else { ?>
                                    <a href="login.php">Login</a> <?php
                                }
                            ?>
                        </li>
                    </ul>   
                </span>         
            </div>		
			<div id="header-img">
				
			</div>
		</div>
