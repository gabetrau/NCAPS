<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<body>

<!--header-->
<header class="w3-container w3-padding-16 w3-center w3-black w3-xlarge">
  <p class="w3-medium">
    Welcome <?php echo $_POST["name"]; ?><br>
	Your phone number is: <?php echo $_POST["phn"]; ?>
  </p>
</header>

<center>
<p class="question-1" style="font-size:300%;">
	Did you check-in online before arriving?
</p>
</center>

<script>
function goNextYes()
{
alert("you said yes!");
}
</script>

<script>
function goNextNo()
{
alert("you said no!");
}
</script>

<style>
input {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	background-color: #47844f;
	border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	float: center;
	width: 75%;
	cursor: pointer;
	font-family: "Times New Roman", Times, serif;
}

input:hover {
    background-color: #4CAF50; /* Green */
    color: white;
}	
</style>

<center>
<form action="question_tree2a.php" id="yee">
  <button>Yes</button></a>
</form>
</center>

<center>
<form action="question_tree2b.php" id="nah">
  <button>No</button></a>
</form>
</center>

</body>
</html>