<html>
<head>
	<meta charset="UTF-8">
	<title> Your Order </title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script>
	function deleteFun(id){	
	var x = new XMLHttpRequest();
	x.open("GET","delete.php?id="+id,true);  //async request
	x.send();

	x.onreadystatechange= function(){	
	if(x.status==200&&x.readyState==4){
		document.getElementById("ajax_ASync_response").innerHTML=x.responseText;
	}
	};
}

</script>
</head>

<body id="home">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a href="main.html" class="navbar-brand">
                <h3 class="d-inline align-middle"> Auto Motors </h3>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="main.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="showroom.html" class="nav-link">Cars Details</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="showcase" class="py-5">
    <div >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center offset-lg-3">
                    <h3 class="display-4 mt-5 pt-5">
                      Your Order
                    </h3>
					<?php 
                    
					$con = new mysqli("localhost","root","","order") ; 
					$q = " select * from orderdetails" ; 
					$rs = $con->query($q) ;
                    echo ' <table class="table h-30" id="studentTable" border = 1> ' ; 
					echo " <tr>" ; 
					
						echo " <th> Id </th> " ; 
						echo " <th> First Name </th> " ;
						echo " <th> Car Model </th> " ;
						echo " <th> Action </th> " ;
					echo " </tr>" ; 
					 

					while ( $r = $rs->fetch_assoc())
					{
						echo " <tr>" ;
						$id=$r['id'];
							echo " <td> " .$r["id"] . "</td>" ;
							echo " <td> " .$r["firstname"] . "</td>" ;
							echo " <td> " .$r["model"] . "</td>" ;
							// echo " <td> <a href ='delete.php?id=".$r["id"] . " '>Delete </a></td> " ;
							echo"<td><a href='#' onclick='deleteFun($id);'>Delete</a> </td> " ; 
						echo " </tr>" ;
					}
					$con->close();
					echo " </table> " ; 
					?>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="main-footer" class="py-5  text-white" >
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 ml-auto">
                <p class="lead">Copyright &copy; 2018</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
</body>
</html>