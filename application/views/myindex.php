<html>
<head>
	<title>我講的 是個夢想</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="<?=base_url()?>assets/js/jquery/jquery-1.7.2.js"></script>
	<script src="<?=base_url()?>assets/js/jquery/jquery-ui-1.8.18.custom.min.js"></script>
	<script src="<?=base_url()?>_js/global.js"></script>
	<style type="text/css">
		.screen_input {
			background-color: #000000;					   
			width:382px;
			height: 244px;
  			overflow:hidden;
  			position:relative;
  			display:table-cell;
  			text-align:center;
  			vertical-align:middle;
			}
		.apple_logo {
			opacity: 0.0;
			position:static;
  			+position:relative;
  			top:-50%;
  			left:-50%;
		}
	</style>
	<script>
    $("#progressbar1").progressbar({value:37});
	
	$(function(){
		$(".screen_input").animate({
			backgroundColor: "#FFFFFF",
			},1500);
		$(".apple_logo").animate({
			 opacity: 1.0,
			}, 3000 );
		$(".apple_logo").animate({
		    opacity: 0.0,
		},{ 
			duration:4000 ,
		 	step: function(now, fx) {
			},
			complete:function(){
				$(".screen_input").css("backgroundColor","#000000");
				$(".screen_input").html("<div id='welcome_content'></div>");}
		});		
	});
	</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (index.psd) -->
<div align="center" style=" height:100%;background-color:#630">
<table id="Table_01" width="1100" height="650" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="<?=base_url()?>_images/index/index_01.gif" width="1100" height="243" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="<?=base_url()?>_images/index/index_02.gif" width="615" height="407" alt=""></td>
		<td>
			<div class="screen_input">
				<img class="apple_logo" src="<?=base_url()?>_images/index/apple_logo.png" width="46" alt="">
			</div>
		</td>
		<td rowspan="2">
			<img src="<?=base_url()?>_images/index/index_04.gif" width="103" height="407" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?=base_url()?>_images/index/index_05.gif" width="382" height="163" alt=""></td>
	</tr>
</table>
</div>
<!-- End Save for Web Slices -->
</body>
</html>