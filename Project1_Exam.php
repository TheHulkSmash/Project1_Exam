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
          <label>What is your name:</label>
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
		<button type="button" >Next</button>
      </fieldset>
    </form>
    
  </body>
</html>