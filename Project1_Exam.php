 <?php
$servername = 'localhost:3306';
$username = 'Reinard';
$password = 'Waterberg2020!';
$dbname = 'Project1';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <title>Project 1 Exam</title>
    <meta charset = "UTF-8" />
  </head>
	
	 
  <body style="background-color:lightblue;" >
    <center><h1>Project 1 Second Exam</h1></center>
	<center><h2> This page will be used to ask the user for the start time for each process as well as how long each process should execute. </h2></center>
   
    <form name="theform" method="post" action="">
      <fieldset>
	
        <p>
          <label>What is your name:</label>
			 <input type="text" name="Process_Name"/>
		
        </p>
		
		<p>
          <label>What is the arrival time of the process: </label>
          <input	type = "time" name="Arrival_time"/>
        </p>
		
		<p>
			<label> What is the Burst time for the process: </label>
			<input type="text" name="Burst_Time" />
		</p>
		<button type = "submit" >Add a nother process to the queue</button> 
		  <br><strong>(Process will be saved into table)</strong>
        
		<button type="button" >Next</button>

      </fieldset>
    </form>
    <?php
      if(isset($_POST['Process_Name']))
      {
          $stime = $_POST['Process_Name'];
          $ptime = $_POST['Arrival_time'];
          $ltime = $_POST['Burst_Time'];
          
          $sql = "INSERT INTO MyGuests ". "(pro_id,t_start, t_exec, 
               t_left) ". "VALUES('null','$stime',$ptime, 'ltime')";
          
          mysqli_query($conn, $sql);
      }
    ?>
  </body>
</html>
