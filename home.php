<?php require "header.php" ?>
<link rel="stylesheet" type="text/css" href="resources/css/styles.css">
<link rel="stylesheet" type="text/css" href="resources/css/books.css">

		<div id="content">
			<div id="info">
                <div class=info>
                    <h3>What's Information Technology ?</h3><br>
                    <p style="margin-bottom: 50px">Information technology (IT) is the application of computers to store
                    , study, retrieve, transmit, and manipulate data,[1] or information
                    , often in the context of a business or other enterprise..</p>
                    <br>
                    <form action="WhatIT.html" method="post">
                    <input class="maxim" type="submit" value="READ MORE" />
                    </form>
                </div>
                <div class=info>
                    <h3>Why Study IT !!!? ?</h3><br>
                    <p>Help Individuals, Organizations, and
                    Communities Achieve More In today's society, information and
                    information technology are ubiquitous  ..</p>
                    <br><br>
                    <form action="whyIT.html" method="post">
                    <input class="maxim" type="submit" value="READ MORE"/>
                    </form>
                </div>
                <div class=info>
                    <h3>How To start Information Technology ?</h3>
                    <p>"Where do I start?" That's an obvious question when you're considering a technology career. Should you get a technical certification? Learn a programming language? ..</p>
                    <br>
                    <form action="howIT.html" method="post">
                    <input class="maxim" type="submit" value="READ MORE" />
                    </form>
                </div>
            </div>
            <div id="Service">
                <h2>Our Services</h2>
                
                <div id="fir_Services3" >
                    <div class=servleft>
                    <form action="web.php" method="post">
                        <img src="images/web.jpg" alt="" title=""  width="300px" height="150px" /><br>
                        <button>Web</button></form>
                    
                    </div>
                    <div class=servcenter>
                    <form action="Computer Programming.html" method="post">
                        <img src="images/computer-programming.jpg" alt="" title=""   width="300px" height="150px"  /><br>
                        <button>Computer Programming</button></form>
                    </div>
                
                    <div class=servright>
                    
                        <form action="Computer Network.html" method="post">
                        <img src="images/computer-network.jpg" alt="" title=""  width="300px" height="150px"   /><br>
                        <button>Computer Network</button></form>
                    </div>
                </div>
                <div id="sec_services3">
                    <div class=servleft>
                    <form action="Network Security.html" method="post">
                        <img src="images/Network-Security.jpg" alt="" title=""  width="300px" height="150px"   /><br>
                        <button>Network Security</button></form>
                    
                    </div>
                    <div class=servcenter>
                    <form action="Cloud Computing.html" method="post">
                        <img src="images/cloud computing.jpg" alt="" title=""   width="300px" height="150px"  /><br>
                        <button>Cloud Computing</button></form>
                    </div>
                
                    <div class=servright>
                    <form action="Android.html" method="post">
                        <img src="images/android.jpg" alt="" title=""  width="300px" height="150px"   /><br>
                        <button>Android</button></form>
                    </div>
                    
                </div>

            </div>
		
            <div class="books">
                <script type="text/javascript">
                    var img = document.querySelector("#header-img>img");
                    var imgArray = ["resources/img/books/Advanced php progrmming.jpg",
                                    "resources/img/books/Apress Expert MySQL.jpg",
                                    "resources/img/books/Beginning MySQL.jpg",
                                    "resources/img/books/Beginning PHP 5 and MySQL 5 - From Novice to Professional.jpg",
                                    "resources/img/books/Build Your Own Database Driven Web Site Using PHP & MySQL 4th Edition July 2009.jpg",
                                    "resources/img/books/CSharp.4.0.The.Complete.Reference.Apr.2010.jpg",
                                    "resources/img/books/HTML and CSS, Design and Build Websites by Jon Duckett (514 pages, 2011).jpg",
                                    "resources/img/books/JavaScript.jpg"];

                    var start = setInterval(function () {
                        changeImage();
                        } , 3000);
                    var index = 0;
                    var changeImage = function () {
                        console.log(imgArray[index]);
                        //img.src = imgArray[index];
                        document.querySelector("#slider>.image-slider").src = imgArray[index];
                        index++;
                        if(index == imgArray.length) {
                            index = 0;
                        }
                    }
                </script>
                <div id="slider">
                    <img class="image-slider" src="resources/img/books/1.jpg">
                </div>
                <div class="book-intro">
                    <center>
                    <h1>All books that you can needed from one place</h1>
                    <h4>Free Dowmload, enjoy</h4>
                    <a href="books.php">GO</a>
                    </center>
                </div>
            </div>

        </div>
		
<?php require "footer.php" ?>