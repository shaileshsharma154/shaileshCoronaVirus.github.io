<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<center><h2 style="background-color:green;"> Live Corona Case Report By <span style="color:white;">Shailesh Sharma </span><?=date("d-m-Y");?></h2></center>
<hr >
<h1 style="text-align:center;color:red;">All world covid-19 Cases</h1>
<table>
  <tr style="background-color:yellow;">
    <th>Case</th>
    <th>Count</th>    
  </tr>
  <tbody id="global-data">
  </tbody>
</table>

<table>
  <tr style="background-color:pink;">
    <th>Sr No</th>
	<th>country name</th>
    <th>NewConfirmed</th> 
	<th>NewDeaths</th> 
	<th>NewRecovered</th> 
	<th>TotalDeaths</th> 	
	<th>TotalRecovered</th> 	
  </tr>
  <tbody id="countryWise-data">
  </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
	$.ajax({
		url:'https://api.covid19api.com/summary',
		get:'GET',
		dataType:'json',
		success:function(data){
			//console.log(data);
			//console.log(data.Countries);
			$.each(data.Global,function(key, value){
				$.each(function(key, value){
					$("#dataId").append()
				});
				
				$("#global-data").append("<tr><td>"+ key+"</td><td>"+value+"</td></tr> ");
			});
			var x=0;
			$.each(data.Countries,function(key, value){
			x++;	
			$("#countryWise-data").append("<tr><td>"+ x +"</td>"+
				"<td>"+ value.Country +
				"</td> <td>"+ value.NewConfirmed+
				"</td> <td>"+ value.NewDeaths+
				"</td> <td>"+ value.NewRecovered+
				"</td> <td>"+ value.TotalDeaths+
				"</td> <td>"+ value.TotalRecovered+
				"</td></tr>");
			 
			});
			
		
	}
});
	
});
</script>

</body>
</html>
