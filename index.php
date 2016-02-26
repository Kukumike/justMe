<?php
?>
<html>
    <head>
        <title>michael</title>
        <link href="resource/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="resource/css/myStyles.css" rel="stylesheet" type="text/css"/>
        <script src="resource/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="resource/js/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="container-fluid" style="background-color: #fff;">
                <div class="navbar-header">
                    <a href="#home"><img src='resource/images/About.png' id="my_logo" alt="About"/></a>
                </div>
            </div>
            <hr>
            <!--contact form-->
            <div class="contact">
                <div class="container">
                    <h1>Contact Me</h1>
                    <div class="col-md-7">
                        <img src="resource/images/geek.png" alt="geek" class="img-responsive pull-left"/>
                        <div>
                            <h3><u>E-mail Address</u></h3>
                            <p>michaelolukaka@gmail.com</p>
                            <p>kuku_mike@yahoo.com</p>
                        </div>
                        <div>
                            <h3><u>Social</u></h3>
                            <ul class="social">
                                <li>Facebook<a href="#"></a></li>
                                <li>Twitter<a href="#"></a></li>
                                <li>Instagram<a href="#"></a></li>
				<li>Google+<a href="#"></a></li>
				<li>Blog<a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h3>Messsage</h3>
                        <form class="form-horizontal">
                            <div class="form-group"><input type="text"  class="col-sm-8" placeholder="Name"></div>
                            <div class="form-group"><input type="text"  class="col-sm-8"  placeholder="Email"></div>
                            <div class="form-group"><textarea  class="col-sm-8"   placeholder="Message" ></textarea></div>
                            <div class="form-group"><button class="btn btn-sm btn-success btn-md btn-block">Comment</button></div>
                            
                        </form>
                    </div>
                        <div class="clearfix"> </div>
                </div>
            </div>
        <!--end contact form-->
            <?php
            
            $conn =  mysql_connect("localhost", "root", "") or trigger_error(mysql_error(),E_USER_ERROR);
            //to be continued
            
               ?>
            <div class="row" style="height:200px;background-color: #262626;color: whitesmoke;">
       
                <div class="col-lg-4 col-md-4">
                    <div class="subcribe_form">
                        <h3>Subscribe For a NewsLetter</h3>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div> 
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-default">Subcribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="footer">
            <div class="footer-bottom">
                <div style="text-align: center;">
                    <p >Copyright &copy; 2016 mukolwekuku.co.ke | All Rights Reserved  </p>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="resource/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
