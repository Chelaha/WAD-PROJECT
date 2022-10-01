<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_theaventuras");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$AID = mysqli_real_escape_string($db, $_POST['AID']);
	$Aname = mysqli_real_escape_string($db, $_POST['Aname']);
	$Description = mysqli_real_escape_string($db, $_POST['Description']);
	$Guidelines = mysqli_real_escape_string($db, $_POST['Guidelines']);
	$place = mysqli_real_escape_string($db, $_POST['place']);
	$price = mysqli_real_escape_string($db, $_POST['price']);
	$start = mysqli_real_escape_string($db, $_POST['start']);
	$end = mysqli_real_escape_string($db, $_POST['end']);

  	// image file directory
  	$target = "WAD Project/images/".basename($image);

  	$sql = "INSERT INTO adventure (AID, Aname,Image,Description,Guidelines,Place,Price,StartTime,EndtTime) VALUES ('$AID','$Aname','$image', '$Description','$Guidelines','$place','$price','$start','$end')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
	  echo "<h1>$msg</h1>";
  }

 
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Adventure  Upload</title>

		<style type="text/css">
			#content{
   				width: 50%;
   				margin: 100px auto;
   				border: 1px solid #cbcbcb;
				background-image:url(AdventureInsert.jpg);
				   
   				}
				

		    #form{
				margin:45px;
				display:block;
				

				
			}

			#table{
				margin-left:0px;
				margin-right:0px;
				font-size:20px;
				display:flex;
				
			}

			#a{
				margin:10px;
				margin-left:30px;
				margin-right:30px;
				background-color:none;
				width:200px;
				text-align:center;
				opacity:0.8;

			}

			#b{
				margin:10px;
				margin-left:30px;
				margin-right:30px;
				width:200px;
			}

			.container-btn1{
                text-align: center;
                margin-top: 0px;
                margin-right: 20px;
				

                }
            .btn{
                border: 0px solid #3498db;
                background: none;
                padding: 7px 7px;
                font-size: 20px;
                font-family: "montserrat";
                cursor: pointer;
                margin: 0px;
                margin-right: 0px;
                margin-top: 5px;;
                margin-left: 20px;
				margin-bottom:20px;
                transition: 0.8s;
                position:relative;
                overflow: hidden;
                width: 150;
				
                }
            
            
            .btn1{
                color: #fff;
                }

            .btn1:hover{
                color: #3498db;
                }
            .btn::before{
                content: "";
                position: absolute;
                left: 0;
                width: 100%;
                height: 0%;
                background: #3498db;
                z-index: -1;
                transition: 0.8s;
                }

            .btn1::before{
                top: 0;
                border-radius: 0 0 50% 50%;
                }

            .btn1::before{
                height: 180%;
                }

            .btn1:hover::before{
                height: 0%;
                }

			#button{
				margin-left:400px;
				margin-top:20px;
				position: absolute;
			}
		

			
   			
		</style>

	</head>

<body>

<div id="content">
  



<form method="POST" action="AdventureInsert.php" enctype="multipart/form-data">
  			<input type="hidden" name="size" value="1000000">
	

	
	<div id="form">
	           
		<div id="table">
		
    		<div id="a" ><label for="AID">Adventure ID</label></div>
			<div id="b" ><input type="text" id="AID" name="AID"></div>
		</div>	
		
		<div id="table">
			<div id="a" ><label for="Aname">Adventure Name</label></div>
			<div id="b" ><input type="text" id="Aname" name="Aname"> </div>	
		</div>

		<div id="table">
			<div id="b" ></div>
			<div id="b" ><input type="file" name="image"></div>
		</div>
		

		<div id="table">
			<div id="b" ></div>
			<div id="b"><textarea id="text" cols="40" rows="4" name="Description" placeholder="Add Description here..."></textarea></div>
		</div>

		<div id="table">
			<div id="b" ></div>
			<div id="b"><textarea id="text" cols="40" rows="4" name="Guidelines" placeholder="Add Guidelines here..."></textarea></div>
		</div>

		<div id="table">
			<div id="a" ><label for="place">Place</label></div>
			<div id="b" ><input type="text" id="place" name="place"> </div>
		</div>

		<div id="table">
			<div id="a" ><label for="price">Price</label></div>
			<div id="b" ><input type="text" id="price" name="price"> </div>
		</div id="table">
    
		<div id="table">
			<div id="a" ><label for="start">Start Time</label></div>
			<div id="b" ><input type="time" id="start" name="start"></div>
		</div>

		<div id="table">
			<div id="a" ><label for="end">End Time</label></div>
			<div id="b" ><input type="time" id="end" name="end"></div>
		</div>
	</div>

    <div id="button">
	<button class="btn btn1"  type="submit" name="upload">SUBMIT</button>
	<button class="btn btn1"  type="reset" name="cancel">CANCEL</button>
	<div>
  		
</form>



  		


</div>
		
		</body>
</html>