<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--study, bootstrap. http://getbootstrap.com/css/ -->
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Information System for work</title>
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/6.0.0/normalize.css"><!--imporved-cross-browser rendering-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!--http://www.w3school.com, w3.css-->
<link href="/views/css/bootstrap.min.css" rel="stylesheet"><!--basic template, bootstrap-->

<link rel="stylesheet" href="/views/css/styles.css"> 

</head>

<body style="background-color:#2c3e50;">
	<div class="panel panel-default">
			<div class="panel-heading"><h1>Email, Activation.&nbsp;<span class="glyphicon glyphicon-refresh"></span></h1></div>
			<div class="panel-body">
	
	<?php echo form_open('activation/resetting','class="form-horizontal" id="Form"') ?>
			  <p>&nbsp;</p>
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?=$this->session->userdata('useremail') ?>" readonly>
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10" style="height:102px;">
				  <input type="password" name="pw" class="form-control" id="inputPassword3" placeholder="Password">
				  
				</div>
				
				<label for="inputPassword4" class="col-sm-2 control-label"></label>
				<div class="col-sm-10" style="height:102px;">
				  <input type="password" name="pw2" class="form-control" id="inputPassword4" placeholder="Rewrite, Password">
				</div>
			  </div>
			 
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-3">
				  <button type="submit" class="btn btn-default btn-sub">Reset&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>
				  </div>
			  
				
				</div>		
			</form>
	</div>
	<h3>Need Resetting. Please, input a password and name.</h3> 
	</div>
	<div class="title-s">
	  <h1>You are Welcome. <small>For better workplace.</small></h1>
</div>
<div id="status" style="display:none;"></div>
<div style="padding:10px;"></div> 

<div style="padding:10px;"></div>

<div style="padding:10px;"></div>
	<div style="padding:10px;"></div>
<div style="background-color: #25292D;color:white;padding-top:150px;padding-left:10px;">
<p>Desingned and built, <a href="https://twitter.com/eecncn_choi">@eecncn_choi</a>.</p>
<p>Code Licensed, <a href="https://github.com/ee32320/InformationSystem">Github</a>, <a href="https://github.com/ee32320/InformationSystem/blob/master/LICENSE">MIT</a></p>
<p>Docs Licensed, <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a></p>
</div>
<br/><br/><br/> 	



 
<nav class="navbar navbar-default navbar-fixed-bottom"><!--http://getbootstrap.com/components/#navbar-->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Information system for work</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <?php if($this->session->userdata('logged_in')):?>
      <ul class="nav navbar-nav">
        <li class="dropdown active"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome<span class="sr-only">(current)</span><span class="caret"></a>
        <ul class="dropdown-menu">
			<li style="padding: 5px 0px;"><a href="#">Welcome</a></li>
		    <li><a href='/index.php/login/'><?=$this->session->userdata('useremail')?></a></li>
        </ul>
        </li>
        <li><a href="/index.php/whereInformation/">Where information</a></li>
		  <li><a href="/index.php/planning/">Planning</a></li>
     	<li><a href="/index.php/claime/">Claime</a></li>
     	<li><a href="/index.php/diarly/">Diarly</a></li>
      </ul>
   <?php else : ?>
   	  <ul class="nav navbar-nav">
        <li class="dropdown active"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome<span class="sr-only">(current)</span><span class="caret"></a>
        <ul class="dropdown-menu">
			<li style="padding: 5px 0px;"><a href="#">Welcome</a></li>

		    <li><a href='/index.php/login/'>LOG IN</a></li>
		    <li><a href='/index.php/register/'>Registeration</a></li>
        </ul>
        </li>
        <li><a href="/index.php/whereInformation/">Where information</a></li>
		  <li><a href="/index.php/planning/">Planning</a></li>
     	<li><a href="/index.php/claime/">Claime</a></li>
     	<li><a href="/index.php/diarly/">Diarly</a></li>
      </ul>
   <?php endif; ?>
     
       <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><p>This website, Under the Construction. VERSION 17-2.</p></li>
      		<li><a href="https://github.com/ee32320/InformationSystem">Move a github, https://github.com/ee32320/InformationSystem</a></li>
          </ul>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
      
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--basic template -->
<script src="/views/js/bootstrap.min.js"></script>
<script src="/views/js/jquery.validate.js"></script> 
</body>

<script>
	
$(document).on('click','.welcome-menu', function(){
				 // alert($(this).parent('.panel-body').find('.text').text());
	
	 $(this).removeClass('btn-info');
	
	if($(this).hasClass('btn-primary')==false){
		
		
		
		$(document).find('.welcome-menu').each(function(){
		$(this).removeClass('btn-primary').addClass('btn-info');
		});
		$(document).find('.append-btn').each(function(){
			$(this).remove();
		});
	
		$(this).removeClass('btn-info').addClass('btn-primary');
		$('.work-type-des').css('display','block');
		$('.work-type-des').addClass('alert-info');
		$('.work-type-des').find('.text-div').html($(this).parent('.panel-body').find('.text').html());
		//alert($(this).html());
		if($(this).html()=='<h4 style="display: inline-block;">Registration</h4>&nbsp;<span class="glyphicon glyphicon-briefcase"></span>'){
			$('.active-div').append('<button disabled="disabled" class="append-btn btn btn-block btn-success"><h4 style="display: inline-block;">Go on</h4>&nbsp;<span class="glyphicon glyphicon-ok"></span></button>');
		}
		if($(this).html()=='<h4 style="display: inline-block;">LOG IN</h4>&nbsp;<span class="glyphicon glyphicon-log-in"></span>'){
			$('.active-div').append('<button disabled="disabled" class="append-btn btn btn-block btn-success"><h4 style="display: inline-block;">Go on</h4>&nbsp;<span class="glyphicon glyphicon-ok"></span></button>');
			 
		}
	}else{
		$('.work-type-des').css('display','block');
		//$('.work-type-des').removeClass('alert-info');
		$('.work-type-des').find('.text-div').html("&nbsp;");
		$(this).removeClass('btn-primary').addClass('btn-info');
		$(document).find('.append-btn').each(function(){
			$(this).remove();
		});
		$('.active-div').append('<button disabled="disabled" class="append-btn btn btn-block" ><h4>Go on</h4>');
	}
	
});
	
$(document).on('click','.panel',function(){
	
	if($(this).hasClass("panel-info")==false){	
	$(this).addClass("panel-info");
	}
	
	$(this).find(".btn-menu").each(function(){
		if($(this).hasClass("btn-primary")==false){
		$(this).addClass("btn-info");
		}
	});
		
	 

});	
	
$('.panel').hover(function(){
	
	if($(this).hasClass("panel-info")==false){
		$(this).addClass("panel-info");
		
		$(this).find(".btn-menu").each(function(){
		if($(this).hasClass("btn-primary")==false){
		$(this).addClass("btn-info");
		}
	});
		
	}
		$(this).find("#text-box").each(function(){
		$(this).css('display','block');
		$(this).addClass('alert-info');
		});
});
$('.btn-sub').hover(function(){
		$(this).addClass('btn-info');
	});
$('.btn-sub').click(function(){
		$(this).removeClass('btn-info');
		$(this).addClass('btn-primary');
	});
</script>
<script>
	
	$("#Form").validate({
		rules:{
		 
			pw: {
				required: true,
				minlength: 5
			},
			pw2: {
				required: true,
				minlength: 5,
				equalTo: "#inputPassword3"
			}
		},
		messages:{
			
			pw: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long."
			},
			pw2:{
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long.",
				equalTo: "Please enter the same password as above"
			}
		}
	});
</script>
</html>

