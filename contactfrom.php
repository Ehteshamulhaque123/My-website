<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
<script type="text/javascript" src="js/custom.js"></script>  
</head>
<body>
    <div class="contact-form">
<div class="background">       
 <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
<h1 class="logo me-auto"><a href="main.html"><img src="assets2/img/logo.png" alt=""></a></h1>
<h1>Please enter your information and we will get back to you soon</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="name"   class="form-control" placeholder="Enter Your Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Your email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Your Mobile Number"> <br> 
           <input type="text" name="budget"  class="form-control" placeholder="Mention Your Budget"> <br>
           <input type="text" name="service"  class="form-control" placeholder="Mention Your Service"> <br>
           <input type="text" name="requirement"  class="form-control" placeholder="Mention Your Requirement"> <br>
           <input type="text" name="description"  class="form-control" placeholder="Mention Your Description"> <br>
          
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>
<!-- ChatBot -->
<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">

      <select data-conv-question="Hello! How can I help you" name="category">
        <option value="AppDevelopment">App Development ?</option>
        <option value="DigitalMarketing">Digital Marketing ?</option>
       
</select>

      <div data-conv-fork="category">
        <div data-conv-case="AppDevelopment">
          <input type="text" name="phoneName"data-conv-question="Please, tell me your phone name">
        </div>
        <div data-conv-case="DigitalMarketing" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="Please, enter your company name"> 
        </div>
      </div>

      <input type="text" name="name" data-conv-question="Please, Enter your name">

      <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

      <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">

      <select data-conv-question="Please Confirm">
        <option value="Yes">Confirm</option>
      </select>

  	</form>
	</div>
</div>
<!-- ChatBot end -->

</body>
</html>