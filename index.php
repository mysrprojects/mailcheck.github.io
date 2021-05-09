<!DOCTYPE html>
<html>
<head>
	<title>Incubil Service Pvt Ltd</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="contactdesign.css">
	<link rel="stylesheet" type="text/css" href="header.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- FONT//// -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300&family=Vidaloka&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="script.js"></script>

</head>
<body>
<section class="container-fluid sec2">
	<div class="row">
		<div class="col-md-12 sec2right">

			<form method="post" class="contactform"  id="formdata" name="forrst" action="contactform.php">
        <label for="name">Name : </label><br>
        <input type="text" id="name" name="name" placeholder="Name" required><br>

        <label for="mobile">Phone No : </label><br>
        <input type="tel" id="mobile" name="mobile" placeholder="1234567890" maxlength="10" required><br>

        <label for="email">E-Mail : </label><br>
        <input type="email" id="email" name="email" placeholder="abc@xyz.com" required=""><br>

        <label for="subject">Subject : </label><br>
        <input type="text" id="subject" name="subject" placeholder="Subject" required><br>

        <label for="message">Message : </label><br>
        <textarea id="message" name="message" rows="2" cols="50"  placeholder="How Can We Help You" required></textarea><br>
        
        <button type="submit" name="submit" id="onformsubmit">Submit</button> <span id="msg"></span>
      </form>
		</div>
	</div>
</section>

<!-- section 2 -->
<!-- 
<script type="text/JavaScript">

  $("#onformsubmit").click(function() {

    var url = "contactform.php"; // the script where you handle the form input.
     document.getElementById('onformsubmit').innerHTML= "Please Wait..";
     document.getElementById('onformsubmit').disabled = true;

    $.ajax({
           type: "POST",
           url: url,
           data: $("#formdata").serialize(), // serializes the form's elements.
           success: function(data)
           { 
              document.getElementsByName('forrst')[0].reset();
              document.getElementById('msg').innerHTML = data;
                document.getElementById('onformsubmit').innerHTML= "Submit";
          document.getElementById('onformsubmit').disabled = false;
              // show response from the php script.
           }
         });

    return false; // avoid to execute the actual submit of the form.
});
</script> -->
</body>
</html>