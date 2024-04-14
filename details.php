<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		table, th, td {
	  		border: 1px solid;
		}
	</style>
</head>
<body>

	<table id="result">
	</table>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		
		displayroles();

		function displayroles(){
			var handle = $("#result");
			handle.html("");

			$.ajax({
				type: "POST",
				url : "server/server_retrieve.php",
				data: "",
				success:function(result){
					var handler = JSON.parse(result);
					$.each(handler,function(key,val){
						var row = $("<tr>");
						row.html("<td>" + val.first_name + "</td>" + "<td>" + val.nick_name + "</td>" + "<td>" + val.last_name + "</td>" + "<td>" + val.gender + "</td>");
						handle.append(row);
					});
				}
			});
		}
	
	</script>

</body>
</html>
