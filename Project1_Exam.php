<!DOCTYPE HTML>
<?php
   if(isset($_POST['n1'])){
      $prosesses = $_POST['n1'];
      $conn = new mysqli('localhost','root','12#ForTheHorde','dbtest') or die(mysql_error($conn));
   
      $drop = 'DROP TABLE process';
      $droptbl = mysqli_query($conn, $drop ) or die(mysqli_error($conn));
   
      $create = 'CREATE TABLE process'.'(pro_id SMALLINT UNSIGNED NOT NULL auto_increment,t_start SMALLINT,t_exec SMALLINT,t_left SMALLINT, CONSTRAINT pk_prosesses PRIMARY KEY (pro_id))';
      $c_tbl = mysqli_query($conn, $create) or die(mysqli_error($conn));
   }
   else
   {
      $conn = new mysqli('localhost','root','','testdb') or die(mysql_error($conn));
      $prosesses = $_POST['n2'];
   }
   
   
?>

<html lang = "en">
  <head>
    <title>Project 1 Exam</title>
    <meta charset = "UTF-8" />
  </head>

	<script>
    function incrementValue()
    {
      var value = parseInt(document.getElementById('n2').value, 10);
      if(value>0){
         value--;
         document.getElementById('n2').value = value;
      }
	}
	</script>
   
   <script>
    function redir()
    {
      window.location = "Assignment2_webpage2.php";
    }
	</script>
   
	
  <body style="background-color:lightgreen;" >
    <center><h1>Assignment 2 Page 2</h1></center>
	<center><h2> This page will be used to ask the user for the start time for each process as well as how long each process should execute. </h2></center>
   
    <form name="theform" method="post" action="">
      <fieldset>
        <p>
          
          <label>Processes remaining to enter into queue:</label>
          <input readonly type="text" name="n2" id="n2" value=<?php echo $prosesses ?> /> 

        </p>
        <p>
          <label>Enter the start time for the process:</label>
			 <input type="number" name="start_time" id="start_time" value=1 max=10 min=1 />
		
        </p>
		
        <p>
          <label>How long the process should execute:</label>
          <input	type = "number" name="pro_time" value = 1 min=1 max=10 />
		  <br>
        <br>
		  <button type = "submit" onclick="incrementValue()" >Add a nother process to the queue</button> 
		  <br><strong>(Process will be saved into table)</strong></br>
		  </br>
        </p>
		<button type="button" onclick="redir()" >Next</button>
      </fieldset>
    </form>
    <?php
      if(isset($_POST['start_time']))
      {
          $stime = $_POST['start_time'];
          $ptime = $_POST['pro_time'];
          $ltime = $_POST['pro_time'];
          
          $sql = "INSERT INTO processes ". "(pro_id,t_start, t_exec, 
               t_left) ". "VALUES('null','$stime',$ptime, 'ltime')";
          
          mysqli_query($conn, $sql);
      }
    ?>
    
  </body>
</html>