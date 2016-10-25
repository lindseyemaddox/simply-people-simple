<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<div id="opacity">

<div id="subHead">

    <div class="inner">

        <h1>Contact Us</h1>

    </div><!--inner-->

</div><!--subHead-->

<section class="white">

    <div class="inner">

    	<div class="info">

    		<h2>Precision Metalwork, Inc.</h2>
			<h3><a href="https://goo.gl/maps/ddNh56LfhPH2" target="_blank" rel="nofollow">1016 Slaters Creek Rd. <br/>
			Goodlettsville, TN 37072</a></h3>

			<h3><a href="tel:16158594461">(615) 859-4461</a></h3>

			<div class="socials">

				<a href="mailto:info@precisionmetalwork.com" target="_blank"><span class="icon-email"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></a>

				<a href="tel:16158594461"><span class="icon-phone"><span class="path1"></span><span class="path2"></span></span></a>

				<a href="https://goo.gl/maps/ddNh56LfhPH2" target="_blank" rel="nofollow"><span class="icon-pin"><span class="path1"></span><span class="path2"></span></span></a>

				<a href="https://plus.google.com/u/0/b/109446182773391448329/109446182773391448329/about/p/pub" target="_blank"><span class="icon-google"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></a>

			</div><!--socials-->

    	</div><!--info-->
		
		<div class="formContainer">

		    <?php
		        $name_first = $_REQUEST['name_first'] ;
		        $name_last = $_REQUEST['name_last'] ;
		        $email = $_REQUEST['email'] ;
		        $phone = $_REQUEST['phone'] ;
		        $desc = $_REQUEST['desc'] ;
		        if (isset($_POST['submit'])) {
		          $to = 'info@precisionmetalwork.com';
		          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		          $headers .= "MIME-Version: 1.0\r\n";
		          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		          $message = '<html><body>';
		          $message .= 'Name: '.$name_first.' '.$name_last.'<br>';
		          $message .= 'Email: '.$email.'<br>';
		          $message .= 'Phone: '.$phone.'<br>';
		          $message .= 'How May We Help You: '.$desc.'<br>';
		          $message .= '</body></html>';
		          $subject = 'new form submission';

		    mail($to, $subject, $message, $headers);
		    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center;'><label>Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
		  }
		else
		  { echo "
		        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
		        <div class='left'>
			        <label for='name_first'>First Name (required)</label><input type='text' required name='name_first' id='name_first' size='10'>
			        <label for='phone'>Phone (required)</label><input type='text' required name='phone' id='phone' size='10'>
		    	</div><!--left-->
		        <div class='right'>
			        <label for='name_last'>Last Name (required)</label><input type='text' required name='name_last' id='name_last' size='10'>
			        <label for='email'>Email</label><input type='text' name='email' id='email' size='10'>
		    	</div><!--right-->
		    	<div class='full'>
		    		<label for='desc'>How May We Help You?</label>
			        <textarea name='desc' id='desc' size='10'></textarea>
			        <button class='submit btn' type='submit' name='submit'>Send Form</button>
				</div><!--full-->
		      </form>";
		      }
		    ?>

		</div><!--form-->

    </div><!--inner-->

</section><!--white-->

<section class="fixed trubend"></section>

</div><!--opacity-->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>