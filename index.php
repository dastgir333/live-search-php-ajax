<!DOCTYPE html>
<html>
<head>
	<title>live search with php with ajax!</title>
</head>
<body bgcolor="orange">

	<div class="container">
		<div class="form-group">
			<div class="form-input">
				<label class="form-input-addon">Search</label>
				<input type="text" name="text-search" id="text-search" class="form-control">
			</div>
			
		</div>

		<div id="data-table"></div>
	</div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			loadData();
			function loadData(query){
				$.ajax({
					url:"fetch.php",
					method:"POST",
					data:{query:query},
					success:function(data){
						$("#data-table").html(data);
					}

				});
			}

			$("#text-search").keyup(function(){
				var search = $(this).val();

				if(search !='')
				{
					loadData(search);

				}else{

					loadData();


				}

			});

		});
	</script>

</body>
</html>