<!DOCTYPE html>
<html>
	<head>
		<title>JSONP Examples</title>
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#jsonp1').bind('click', function() {
					$.getJSON(
						'http://jsonp2/index.php?callback=?',
						{
							'method':'used getJSONP'
						},
						function (data) {
							alert(data.field);
						}
					);
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#jsonp2').bind('click', function() {
					$.ajax({
						url:"http://jsonp2",
						data:({
							'method':'ajax and data type jsonp'
						}),
						dataType:"jsonp",
						success: function (data) {
							alert(data.field);
						}
					});
				});
			});
		</script>
	</head>
	<body>
		<input id="jsonp1" type="button" value="getJSON method" />
		<input id="jsonp2" type="button" value="AJAX method" />
	</body>
</html>