<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Contact Form</h3></div>
                                    <div class="card-body">
                                        <div class="alert alert-success " style="display: none;" id="success">
                                            <strong>Success!</strong> Enquiry submitted successfully
                                          </div>
                                        <form method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">First Name</label><input class="form-control py-4" name="inputFirstName" id="inputFirstName" type="text" placeholder="Enter First Name" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Last Name</label><input class="form-control py-4" name="inputLastName"  id="inputLastName" type="text" placeholder="Enter Last Name" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4"  name="inputEmailAddress"  id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter Email Address" /></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputContact">Contact Number</label><input class="form-control py-4" name="inputContact"  id="inputContact" type="text" placeholder="Contact Number" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputMessage">Message</label><input class="form-control py-4" name="inputMessage"  id="inputMessage" type="text" placeholder="Message" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
<!--                                                <button class="btn btn-primary btn-block" id="button1">
							<span>
								Submit
							
							</span>
						</button>-->

                                            <button type="button" class="btn btn-primary btn-block">Submit</button>
<!--                                                <input type="submit"id="submit" name="submit" value="Submit" class="btn btn-primary btn-block"></div>-->
                                        
                                    </div>
                                            </form>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="table.php">Go to the Dashboard</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <div id="dropDownSelect1"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
   
    var name="kk";
    
    
    var inputFirstName = $("#inputFirstName").val();
    var inputLastName = $("#inputLastName").val();
    var inputEmailAddress = $("#inputEmailAddress").val();
    var inputContact = $("#inputContact").val();
    var inputMessage = $("#inputMessage").val();

     $.ajax({

            type:"POST",
            url: "success.php",
            data:{inputFirstName:inputFirstName,inputLastName:inputLastName,inputEmailAddress:inputEmailAddress,inputContact:inputContact,inputMessage:inputMessage},
            success: function(result){
                
                $("#success").css("display","block");
                $("#success").html(result);
            }
        });
  });
});
</script>

    </body>
</html>