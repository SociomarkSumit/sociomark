	</div>
	<!-- End Wrapper-->

<div class="loader_overlay">
    <div class="loader_container">
        <div class="loader_img">
            <img src="images/loader.png" width="48" height="48">
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

<!--Textarea Toolbar-->
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	tinymce.init({
		selector: "textarea.toolbar",
		menubar:false,
		statusbar: false,
		theme: "modern",
		height: 200,
		relative_urls : true,
		remove_script_host : false,
		convert_urls : false,
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor"
		],
		content_css: "css/content.css",
		toolbar: "insertfile undo redo | styleselect | bold italic | bullist numlist | link image code | forecolor backcolor",
		style_formats: [
			{title: 'Bold text', inline: 'b'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		]
	});
</script>

<!--Start calender -->
<script src="js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">  
  $('.datepicker').datetimepicker({
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0,
    format: 'yyyy-mm-dd'
  });
  
</script>
<!-- End calender -->
</body>

</html>
