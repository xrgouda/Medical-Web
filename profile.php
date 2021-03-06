<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medical Profile Assistant </title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">MAP</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo_transparent.png" alt="#" width="380" height="60" />
                     
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#service">Service</a></li>
				<li><a href="#doctor">Doctors</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Medical Profile Assistant </h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
					</div>						
					</div>
					<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>Profile <small></small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="final.php" method="post">
                                        <div class="col-xs-12 col-sm-12 col-md-12">	
													<h1>1.Personal Information</h1>
											</div>
                                          <div class="">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="first_name" id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name="last_name" id="last_name" class="form-control input-md">
												</div>
											</div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Mobile</label>
													<input type="text" name="Mobile" id="Mobile" class="form-control input-md">
												</div>
											</div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Age</label>
                                                    <input type="date" name="Age"  id="Age"  class="form-control input-md">
												</div>
											</div>
                                              <div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Jop</label>
													<input type="text" name="Jop" id="Jop" class="form-control input-md">
												</div>
											</div>
										</div>

										<div class="">
                                            <div class="col-xs-12 col-sm-12 col-md-12">	
													<h1>2.Medical information</h1>
											</div>	 
											
                                            <div class="col-xs-12 col-sm-12 col-md-12"> <br/>
												<div class="form-group">
                                                    
                                            <select class="select" name="Blood">
                                              <option disabled selected >Choose Your Blood Type</option>
                                              <option value="B">B</option>
                                              <option value="A+">A+</option>
                                              <option value="B+">B+</option>
                                                <option value="C+">C+</option>
                                            </select>
												</div>
											</div>
                                               <div class="col-xs-12 col-sm-12 col-md-12"> <br/>
												<div class="form-group">
                                                    
                                            <select class="select" name="Gender">
                                              <option disabled selected >Choose Your Gender</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                              <option value="other">other</option>
                                            </select>
												</div>
											</div>
                                        
                                            <div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													<label>Diseases</label>
													<input type="text" name="Diseases" placeholder="if you have any diseases" id="Diseases" class="form-control input-md">
												</div>
											</div>
                                            <div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													<label>Surgeies</label>
													<input type="text" name="Surgeies" placeholder="if you had any surgeies" id="Surgeies" class="form-control input-md">
												</div>
											</div>
                                            <div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
													<label>Medications</label>
													<input type="text" name="Medication" placeholder="if you take any medications" id="Medication" class="form-control input-md">
												</div>
											</div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">	
													<h1>3.Call For Help</h1>
											</div>
                                             <div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
												    <label>Reatives Mobile Number</label>
													<input type="text" name="Reatives-no" id="Reatives" class="form-control input-md">
												</div>
											</div>
                                               <div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
												    <label>Doctor's Name</label>
													<input type="text" name="dr-name" id="Doctor" class="form-control input-md">
												</div>
											</div>
                                               <div class="col-xs-8 col-sm-8 col-md-8">
												<div class="form-group">
												    <label>Doctor's Address</label>
													<input type="text" name="dr-address" id="DAddress" class="form-control input-md">
												</div>
											</div>
										</div>

                                        <?php
                                         $id = $_GET['id'];

                                        ?>


                                        <input type="hidden" name="id" value="<?php echo $id?> ">

                                        <input type="submit" value="submit"  class="btn btn-skin btn-block btn-lg">


									</form>


								</div>
							</div>				
						
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
    
    <section id="boxes" class="home-section paddingtop-80">
	
	<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<a href="file:///E:/finally/medical%20assistant%20profile/medical%20assistant%20profile2/What%20is%20the%20Medical%20Profile%20Assistant.html"><h4 class="h-bold">What is the Medical  Profile Assistant ?</h4></a>
							<p>
							
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Working group</h4>
							<p>
						
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    
    
	

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

</body>
</html>
