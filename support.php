<!DOCTYPE html>
<html lang="en">
<title>Lugnut's Automotive Parts Supply - Customer Support</title>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="js/ddsmoothmenu.js" type="text/javascript"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>
  <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
    
    <script type="text/javascript">
    ddsmoothmenu.init({
        mainmenuid: "smoothmenu1",
        orientation: 'v', 
        classname: 'mainMenu',
        contentsource: "markup"
    })
    ddsmoothmenu.init({
        mainmenuid: "smoothmenu2",
        orientation: 'v',
        classname: 'mynav',
        contentsource: "markup"
    })
    $(document).ready(function () {
        $('.newproduct li').hover(function () {
            $(".homeDetails", this).stop().animate({ top: '0px', opacity: '.9' }, { queue: false, duration: 200 });
        }, function () {
            $(".homeDetails", this).stop().animate({ top: '133px', opacity: '0' }, { queue: false, duration: 200 });
        });
    });
    $(document).ready(function () {
        $("#featureProducts li").each(function (i, elm) {
            if ($(elm).find(".lazy").attr("src") == "img/grey.gif") {
                $(elm).find(".lazy").attr("src", $(elm).find(".lazy").attr("data-original"));
            }
        });
        $("img.lazy").lazyload({
            effect: "fadeIn",
            skip_invisible: false,
            failure_limit: 20
        });
        $('.slider ul').cycle({
            pager: ".dots",
            timeout: 5000,
            fx: 'scrollHorz',
            next: '#next',
            prev: '#prev'
        });
    });
    </script>
</head>
<body>
<p>
    <script type="text/javascript">
    //<![CDATA[
    function WebForm_OnSubmit() {
    if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
    return true;
    }
    //]]>
    </script>
</p>
<div></div>
<div class="wrapper">
	<div class="header">
		<div class="leftWrap">
			<div class="logoarea">
            	<a href="index.php"><img src="img/NewLogoDesign.png" alt="LAPS" width="235" height="170" /></a>
            </div>
			<div class="mynav" id="smoothmenu2">
                <ul>
                	<li><a href="support.php">Customer Service</a></li>
                </ul>
				<p>Toll Free: 1-555-555-5555</p>
				<div class="clearboth"></div>
			</div>
			<div class="clearboth"></div>
		</div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

		<div class="rightwrap">
			<div class="loginArea">
                                <ul>
                    <li><a id="Login_2_lnkLogin" class="logme" href="login.php">Login/Register</a></li>
                </ul>
                				<div class="clearboth"></div>
			</div>
		</div>
	<div class="clearboth"></div>
	<div class="mainnav">
		<div id="smoothmenu1">
			<span id="menuContainer"></span>
            <ul>
                <li>
                    <a href="category.php?id=1"> Air &amp; Fuel  </a>
                    <ul>
                    	<li><a href="product.php?id=1">Air and Fuel Cooling</a></li><li><a href="product.php?id=2">Air Clearner</a></li><li><a href="product.php?id=3">Air Intake</a></li><li><a href="product.php?id=4">Carburetor</a></li><li><a href="product.php?id=5">Fuel Catalyst</a></li><li><a href="product.php?id=6">Fuel Filter</a></li><li><a href="product.php?id=7">Fuel Injection</a></li><li><a href="product.php?id=8">Nitrous Oxide</a></li><li><a href="product.php?id=9">Propane Injection</a></li>                    </ul>
                </li>
                <li>
                    <a href="category.php?id=2"> Brake Systems  </a>
                    <ul>
                        <li><a href="product.php?id=10">Bias Adjuster</a></li><li><a href="product.php?id=11">Brake Cooling Kit</a></li><li><a href="product.php?id=12">Disc Brakes</a></li><li><a href="product.php?id=13">Drum Brake</a></li><li><a href="product.php?id=14">Emergency/Parking Brake</a></li><li><a href="product.php?id=15">Exhaust Brake</a></li><li><a href="product.php?id=16">Line Break</a></li><li><a href="product.php?id=17">Proportion Valve</a></li><li><a href="product.php?id=18">Vacuum Pump</a></li>                    </ul>
                </li>
                <li>
                    <a href="category.php?id=3"> Chassis  </a>
                    <ul>
                        <li><a href="product.php?id=19">Bushing and Mount</a></li><li><a href="product.php?id=20">Chassis Component</a></li><li><a href="product.php?id=21">Steering Component</a></li><li><a href="product.php?id=22">Suspension Component</a></li>                    </ul>
                </li>
                <li>
                    <a href="category.php?id=4"> Cooling  </a>
                    <ul>
                        <li><a href="product.php?id=23">Air Conditioning</a></li><li><a href="product.php?id=24">Fans</a></li><li><a href="product.php?id=25">Heater Blower Motor</a></li><li><a href="product.php?id=26">Heater Core</a></li><li><a href="product.php?id=27">Water Pump</a></li><li><a href="product.php?id=28">Radiator</a></li><li><a href="product.php?id=29">Oil and Fluid Cooler</a></li><li><a href="product.php?id=30">HVAC Duct</a></li><li><a href="product.php?id=31">Catch Can</a></li>                    </ul>
                </li>
                <li>
                    <a href="category.php?id=5"> Engine  </a>
                    <ul>
                        <li><a href="product.php?id=32">Bearing and Bearing Spacer</a></li><li><a href="product.php?id=33">Belt and Pulley</a></li><li><a href="product.php?id=34">Connecting Rod</a></li><li><a href="product.php?id=35">Oiling System</a></li><li><a href="product.php?id=36">Piston and Piston Rings</a></li><li><a href="product.php?id=37">Camshafts</a></li><li><a href="product.php?id=38">Valve Cover</a></li><li><a href="product.php?id=39">Crankshaft</a></li><li><a href="product.php?id=40">Cylinder Heads</a></li>                    </ul>
                </li>
                <li>
                    <a href="category.php?id=6"> Exhaust  </a>
                    <ul>
                        <li><a href="product.php?id=41">Catalytic Converter</a></li><li><a href="product.php?id=42">Clamp</a></li><li><a href="product.php?id=43">Exhaust Flame Thrower Kit</a></li><li><a href="product.php?id=44">Exhaust Pipe, Flame, and Turndown</a></li><li><a href="product.php?id=45">Exhaust System and Kit</a></li><li><a href="product.php?id=46">Flow Enhancer</a></li><li><a href="product.php?id=47">Header Reducer Extension</a></li><li><a href="product.php?id=48">Headers</a></li><li><a href="product.php?id=49">Side Pipes</a></li>                    </ul>
                </li>
            </ul>
		</div>
		<div class="clearboth"></div>
	</div>
	<div class="clearboth"></div>
</div>
<div class="clearboth"></div>	<div class="heading">
	  
      <div class="featproducts">
      
	<h1>Lugnut's Automotive Parts Supply Contact Form &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
	<div class="clearboth"></div>
	</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
<div id="contact">

			<h1><abbr title="Asynchronous Javascript and XML"></abbr></h1>

			<div id="message"></div>

			<form method="post" action="contact.php" name="contact-form" id="contact-form">

			<fieldset>

			<legend>Contact Us</legend>

			<label for="name" accesskey="U"><span class="required">*</span> Your Name</label>
			<input name="name" type="text" class="form-control" id="name" size="30" value="" />

			<br />
			<label for="email" accesskey="E"><span class="required">*</span> Email</label>
			<input name="email" type="text" class="form-control" id="email" size="30" value="" />

			<br />
			<label for="phone" accesskey="P"><span class="required">*</span> Phone</label>
			<input name="phone" type="text" class="form-control" id="phone" size="30" value="" />

			<br />
			<label for="subject" accesskey="S">Subject</label>
			<select name="subject" id="subject">
			  <option value="An error on our site">About Our Site</option>
              <option value="Billing and Payment Information">Billing</option>
			  <option value="cancelling an order">Order Information</option>
              <option value="Misc Information">Misc</option>
			</select>

			<br />
			<label for="comments" accesskey="C"><span class="required">*</span> Comments</label>
			<textarea name="comments" cols="40" rows="3" class="form-control" id="comments" style="width: 350px;"></textarea><br />
            <label for="verify" accesskey="V">&nbsp;&nbsp;<span class="required">*</span> 9 + 6 =</label>
			<input name="verify" type="text" id="verify" size="4" value="" style="width: 30px;" /><br /><br />

			<input type="submit" class="submit" id="submit" value="Submit" />
			</fieldset>

			</form>

	</div>
    
    <br>
    <br>
    <br>

<div class="clearboth"></div> 
</div>
<script type="text/javascript">
$(function() {
	$(".caraousalmain").jCarouselLite({
		btnNext: ".next",
		btnPrev: ".prev",
		visible: 5
	});
});
</script>
<div class="footerWrap">
    <div class ="categoriesNav">
    	<div class="categories">
    		<h1> Categories </h1>
            <ul>
                <li><a href="category.php?id=1"> Air and Fuel Delivery </a></li>
                <li><a href="category.php?id=2"> Brake Systems </a></li>
                <li><a href="category.php?id=3"> Chassis and Suspension </a></li>
                <li><a href="category.php?id=4"> Cooling and Heating </a></li>
                <li><a href="category.php?id=5"> Engine and Components </a></li>
                <li><a href="category.php?id=6"> Exhaust </a></li>
            </ul>
    	</div>
        <div class="company">
            <h1> Company </h1>
            <ul>
                <li><a href="about.php"> About Us </a></li>
                <li><a href="support.php"> Contact Us </a></li>
                <li><a href="terms.php"> Terms and Conditions </a></li>
                <li><a href="privacy.php"> Privacy Policy </a></li>
            </ul>
        </div>
        <div class="account">
            <h1> Accounts & Orders </h1>
            <ul>
            	<li><a href="cart.php"> My Cart </a></li>
                <li><a href="returns.php"> Return Policy </a></li>
            </ul>
        </div>
        <div class="payments">
            <h1> Payment Methods </h1>
            <ul>
            	<li><img src="img/methods.jpg" alt="payments" /></li>
            </ul>
        </div>
    	<div class="clearboth"></div> 
    </div>
    <div class="copyRights">
    	<p>&copy; 2014 - LAPS | All Rights Reserved | Created by the Web Geeks</p>
    <div class="clearboth"></div>
</div>
<div class="clearboth"></div>
</div>
<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
<script src="js/jquery.lazyload.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.1.pack.js"></script>
</body>
</html>
