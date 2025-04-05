<html>
<head>
	<link href="<?php echo base_url() ?>static/css/bootstrap.min.css" rel="stylesheet">
	<title>Terminator Movie Lookup</title>
</head>
<body style="padding:20px">
	<h2>Lookup Terminator Movies</h2>
<div class="container">
<div class="row">
<div class="col-md-12">
		Release year
		<input type=text placeholder="Release year" id="yearinput"/>
		<button class="btn btn-default" id="yearbtn">Get movie data</button>
		<button class="btn btn-warning" id="clearbtn">Clear result</button>
		<div class="radio">
			<label>
			<input type="radio" name="movieFormat" value="xml" checked> XML
		</label>
		</div>
		<div class="radio">
		<label>
			<input type="radio" name="movieFormat" value="json"> JSON
		</label>
		</div>
		<div>
			<div id="title"></div>
		</div>
</div>
</div>
</div>
<script src="<?php echo base_url() ?>static/js/jquery.min.js" language="javascript"></script>
<script language="javascript">
	$(document).ready(function () {
		// remove result from title div
		$('#clearbtn').click(function () {
			$('#title').html('');
		});

		$('#yearbtn').click(function () {
			var format = $('input[name=movieFormat]:checked').val()
			if (format == 'xml') {
				get_xml();
			}
			else {
				get_json();
			}
		})
	})

	function get_xml() {
		$.ajax({
				url : "<?php echo base_url() ?>index.php/movies/getmovies_xml",
				data : {'year' : $('#yearinput').val() },
				// dataType: 'json'
				dataType: 'xml',
				method : 'GET'
			}).done(function (data) {
				var title = $('title',data).text();
				var img = $('film',data).attr('img');
				alert(img);
				$('#title').html('Title: ' + title);
				$('#title').append("<img src='<?php echo base_url()?>static/imgs/" + img + "'/>");
			})
	}

	function get_json() {
		var ajaxobj = $.ajax({
			url : "<?php echo base_url() ?>index.php/movies/getmovies_json",
			data : {'year' : $('#yearinput').val() },
			dataType: 'json',
			method : 'GET'
		}).done(function (data) {
				var title = data.title;
				$('#title').html('Title: ' + title);
		}).fail(function(jqXHR,textstatus) {
			alert('JSON parsing failed : ' + textstatus)
		});
	}
</script>
</body>
</html>


