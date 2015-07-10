<html>
	<head>
		<title>Ini template DEFAULT dalam CMS</title>
		<link type='text/css' rel='stylesheet' href='<?php echo $this->getCurrentTemplatePath();?>css/style.css'/>
	</head>
	<body>
		<div class="wrapper">
			<div class="header"><?php $this->widgetOutput('logoPosition');?></div>
			<div class="clear"></div>
			<div class="sidebar"><?php $this->widgetOutput('sidebarPosition');?><br><br></div>
			<div class="content">Disini terletak bagian utama dari halaman web ini<br><br></div>
			<?php echo $this -> appOutput();
			?>
			<div class="clear"></div>
			<div class="footer">teks bagian footer</div>
		</div>
	</body>
</html>