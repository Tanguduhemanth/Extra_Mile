<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

    *{
      box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    .sel 
	{
		font-weight: bold;
		font-size: 28px;
		
	}
    body{
        width: auto;
        font-size: large;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        /* background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("https://i.ibb.co/0fgzqHq/about-mech.jpg") ;  */
        text-align: center;
        background-size:100% 12%;
        background-repeat: no-repeat;

    }
    .img img{
        height:200px;
        width: 200px;
        padding-right: 1000px;
        padding-top: -10px;
    }
    /*.img a{height: 200px;
    width: 200px;}*/
    h1,h2,p{
        text-align:left;
        color: whitesmoke;
        padding-left: 10rem;
    }
    footer-distributed{
  background-color: black;
  box-sizing: border-box;
  widows: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 50px 50px 60px 50px;
  margin-top: 80px;
}
h3{
   width:28%;
}
.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}
.footer-distributed .footer-left{
  width: 30%;
}
.footer-distributed h3{
  color: #fff;
  font: normal 36px 'cookie',cursive;
  margin:0;
}
.footer-distributed h3 span{
  color:#009688;
}
.footer-distributed .footer-links{
  color:#fff;
  margin: 20px 0 12px;
}
.footer-distributed .footer-links a{
  display: inline-block;
  line-height:1.8;
  text-decoration: none;
  color: inherit;
}
.footer-distributed .footer-company-name{
  color:#fff;
  font-size: 14px;
  font-weight: normal;
  margin: 0;

}
.footer-distributed .footer-center{
  width: 35%;
}
.footer-distributed .footer-center i{
  background-color:#33383b;
  color:#fff;
  font-size: 25px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}
.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  list-style: 38px;
}
.footer-distributed .footer-center p{
  display: inline-block;
  color: #fff;
  vertical-align: middle;
  margin: 0;
}
.footer-distributed .footer-center p span{
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}
.footer-distributed .footer-center p a{
  color:#009688;
  text-decoration: none;
}
.footer-distributed .footer-right{
  width:30%;
}
.footer-distributed .footer-company-about{
  line-height: 20px;
  color:#fff;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}
.footer-distributed .footer-company-about span{
  display: block;
  color:#fff;
  font-size:18px;
  font-weight:bold;
  margin-bottom: 20px;
}
.footer-company-name .footer-icons{
  margin-top:25px;

}
.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 3px;
  margin-bottom: 5px;
}
.footer-distributed .footer-icons a:hover{
  background-color: #3f71ea;
}
.footer-links a:hover{
  color: #3f71ea;
}
@media(max-width: 880px){
  .footer-distributed .footer-links, .footer-distributed .footer-center, .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }
}
.footer-distributed .footer-center i{
  margin-left: 0;
}
.sec{
    width:auto;
    height: 650px;
}
.a{
    display: flex;
    flex-direction: row;
    width: auto;
     height: 200px;
     justify-content: space-around;
     /* background-color: #212121; */
}
.one img{
  
  width: 100%;
  height: 350px;
  margin-left: 0rem;
  /* opacity: 0.5;  */
}
.im{
  position: relative;
  margin-top: -18rem;
}
.im img{
  height: 100px;
  width: 200px;
  float: left;
  margin-top: -5rem;
}
.b ul{
  display: flex;
  list-style: none;
  justify-content: space-around;
}
footer{
  background-color: #212121;
}
.navbar{
    width: 85%;
    margin: auto;
    padding-left: 1000px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .logo{
     width: 200px;
    /* height: 50px; */
     cursor: pointer;
    }
    .navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
    }
    .navbar ul li a{
    text-decoration: none;
    color: whitesmoke;
    text-transform: uppercase;
   
    }
    .navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
    }
    .navbar ul li:hover::after{
    width: 100%;
    }
    .content{
    width: 1200px;
    height: auto;
     margin:auto;
    color: #fff;
    position: relative;}
    .content h3 {
     color:#009688;
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 40px;
     margin-top: 80px;
    letter-spacing: 2px;
    border-radius: 50%;
    }
</style>
<body>

   <div class="one">

    <img src="https://i.ibb.co/8jQ2Mx3/Whats-App-Image-2023-10-16-at-11-05-08.jpg" alt="" sizes="" srcset="" style=" background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)); ">

   
    <div class="im">

    <div class="navbar" >
       <ul>
       <li style="color: #000;"><a href="index.php">Home</a></li>
       </ul>
       </div>
 <img src="https://i.ibb.co/J32W5QH/exm-dribbble-4x-removebg-preview-1.png" alt="" srcset=""/>
  <!-- <div class="navbar" id = "navBar" data-sel='about'>	</div> -->
  <h1>About us</h1>
  <h2>extramile aims to be the best of both worlds - Reliable and Cost-effective mechanic Services</h2>
  <p>
      mechanic Services  of bikes and Cars repairs and cleaning - we are your one-stop solution for all things.
 
      An idea of 4 friends - Vasuta,Hemanth,Ruthvika,Ojeshwar of ExtraMile is a network of technology-enabled  service centres, offering a seamless  service experience at the convenience of a tap. With our highly skilled technicians, manufacturer recommended procedures and the promise of genuine spare parts we are your best bet.
 
      Stay in the comforts of your home or office and make the most of our complimentary pick-up and drop-in service. Count on us to be your personal vehicle care expert, advisor and  mechanic.
  </p></div>
   </div>
    <br>
    <br>
    <br>
    <br>
    <br>  
    <br>  
    <h3>
        Core Team<br>
        People behind your services :
    </h3>
    <br>
    <br>
    <div class="a">
        <img  src="https://i.ibb.co/k95Gpv0/IMG-20231010-144443.jpg"alt="ExtraMile Founder Hemanth"/>
      
        <img  src="https://i.ibb.co/6t11KfN/IMG-20231010-144531.jpg" alt="ExtraMile Co-Founder Vasuta"/>
      
        <img  src="https://i.ibb.co/SytZCXG/IMG-20231008-WA0012.jpg" alt="ExtraMile Co-Founder Ruthvika"/>
        
        <img  src="https://i.ibb.co/fHc0Chz/IMG-20231010-WA0004.jpg" alt="ExtraMile Co-Founder Ojeshwar"/>
    </div>
    <div class="b">
<ul>
  <li>Founder<br>Hemanth</li>
  <li>Co-Founder<br>Vasuta</li>
  <li>Co-Founder<br>Ruthvika</li>
  <li>Co-Founder<br>Ojeshwar</li>
</ul>
    </div>
    <section class="footer">
        <footer class="footer-distributed">
            <div class="footer-left">
                <h3>Extra <span>Mile</span></h3>

                <p class="footer-links">
						
						<a href="index.php">Home</a>
						|
                                                <a href="service.php">Services</a>
						|
						<a href="about.php">About</a>
			
					</p>

                <p class="footer-company-name">Copyright @ 2023 <strong>Extra Mail</strong>
                All right reserved</p>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Visakhapatnam</span>Andhra Pradesh</p>	
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p><span>+91 9391230151</span></p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#"><span>extramile@gmail.com</span></a></p>
                </div>
            </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                        <span>About the company</span>
                        <strong>Extra Mile</strong>This is a car and bike services providing company .we can have expect mechanics 
                    </p><br>
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                        
                    
                </div>
        </footer>
       </section>
       <script src="./navScript.js"></script>
</body>
</html>