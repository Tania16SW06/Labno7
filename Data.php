<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body bgcolor="white">
<form action="Receive.php" method="post">
	<h1 title="Heading" style="color: blue">BioData</h1>
	<p> <b>Name:</b> <input type="text" name="name" placeholder="Kashmala khan" required="">  <b>Date of birth:</b> <input type="date" name="text3" placeholder="12/01/1997"> <img src="https://media1.picsearch.com/is?RH2zNk852bDELO1DAvYN_Q4da4eWQhsRDMptdw8BaMY&height=226" align="right" width="150" height="200" border="3" alt="Picture not found"> </p>
	<p> <b>Father's name:</b> <input type="text" required="" name="f_name" placeholder="Sajjad Ahmed"> <b>Surname:</b> <input type="text" name="text4" placeholder="Khanzada"> </p>
	<p> <b>Email:</b> <input type="Email" required="" name="email" placeholder="Kashmalakhan544@yahoo.com"> <b>Contact#</b> <input type="number" required="" name="ph_no" placeholder="03003032075"> </p>
    <p><b>Gender:</b>Female <input type="radio" required="" name="r1" value="Female">Male <input type="radio" name="r1" value="Male"></p>
	    <p><b>Favourite color:</b></p>
	<select name="Color">
		<option >Green</option>
        		<option>Gray</option>
		<option>Red</option>
		<option>Pink</option>
		<option>Brown</option>
		<option>Black</option>
				<option>Blue</option>
	</select>
	 <p ><b>Blood Group:</b></p>
	 <select name="Group">
		<option>A+</option>
        <option>B+</option>
		<option>O+</option>
		<option>O-</option>
		<option>AB+</option>
	</select>
	<p><b>CNIC:</b> <input type="number" placeholder="5678-67-78899-188" required="true" autofocus="true" name="CNIC"></p>

	<p><b>Address:</b> <input type="text" placeholder="H#92 Mircolony Tandojam" name="Address"></p>
	<p><b>Favourite book:</b> <input type="text" placeholder="A guide to a good life" name="book"></p>
	 <p><b>Hobbies:</b></p>
	<UL type="square">
		<li>Novels</li>
		<li>Movies</li>
		<li>Books</li>
		<li>Outdoor activities</li>
	</UL>
	<a href="MAIL TO:Kashmalakhan544@yahoo.com">Click here</a>
	<p><input type="SUBMIT" value="Submit Form" style="align-items: center;" ></p>
</form>
</body>
</html>