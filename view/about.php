<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 8/24/2019
 * Time: 11:09 AM
 */
<!DOCTYPE html>
<html>
<head>
	<title>Sahayogi Haat/About Us</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style type="text/css">
	.bg
	{
		background-color:lightgrey;

	}
	 .foot
    {
      background-color: lightgrey; 
      margin-top: 160px;
      padding: 100px;
      position: fixed;
    }
    .bottom-footer
    {
      border-top:1px solid red;
      margin-top: 40px;
      padding-top: 40px;
      color: red;   
    }
    .footer-nav
    {
      text-align: right;
      list-style: none;

    }
    .footer-nav li
    {
      display: inline;
      
    }
    .footer-nav li:not(:first-child):before
    {
      content: '|';
      padding:0px 10px; 
    }
    .footer-nav a
    {
      color:red;
    }
    .footer-nav a:hover
    {
      color:white;
      text-decoration: none;
    }
	</style>
</head>
<body class="bg">
<div class="container-fluid "> 
	<div class="row">
		<div class="container">
    <a href="homepage.php"><button>home</button></a>
			<h1 class="text-center">About Us</h1>
			<p><h4 class="text-justify">KTM-Mart is a revolutionary online groceries mart that is aimed for the people willing to buy the grocery items online because of their busy schedule. It is a one stop online grocery store that provides all the needed grocery items for our day to day life. Life is healthy if you consume the healthy food. It provides every single kitchen needed items from rice to lentils to biscuits to drinks to fruits to vegetables. These are the kind of food that we intake in our daily life in order to be healthy. People having very busy schedule doesn’t have enough time to find all groceries in the near market so they be lazy and keep on having the junk foods instead of the healthy meal. They do have a little spare time for cooking but when it comes to going to the market and keep finding groceries for hours is not something they like to do. So, they can buy the genuine grocery items in the much affordable price from our online mart. It can be like a boon in their busy schedule. So like there are many people living around the suburbs who doesn’t have quick reach to the market so for such people also it can be a very great service as our mart has its own delivery service at the specific time when the customers ask. We provide delivery service 24/7. The customer can pay the amount shown in the website can be paid at the time of delivery.
</h4>
</p>
		</div>
	</div>
</div>
<footer class="foot">
<div class="container">
<div class="row">
  </div>
  <div class="bottom-footer">
  <div class="col-md-5">Copyright KTMMart 2017</div>
  <div class="col-md-7">
  <ul class="footer-nav">
  <li><a href="about.php">AboutUs</a></li>
  <li><a href="contact.php">ContactUs</a></li>
  </ul>
  </div>
  </div>
  </div>
  </footer>
</body>
</html>