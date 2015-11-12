<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="teste"></div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
$.ajax({
    url: "geo.php",
    type: 'POST',
    data: ({ init:'onload'}),
    success:function(data) {
        $('.teste').html(data);
    }
});

</script>
</body>
</html>