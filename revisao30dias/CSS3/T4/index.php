<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MENU LATERAL</title>
	<style>
		*
		{
			padding: 0;
			margin: 0;
		}
		#areaButtonMenu
		{
			display: flex;
			justify-content: center;
			align-items: center;
			width:10vw;
			height: 10vw;
			text-align: center;
			background-color: black;
			color: white;
		}
		#buttonMenu__label
		{

		}
		#buttonMenu__input
		{
			display: hidden;
		}
		input[type="checkbox"]:checked ~ #menu
		{
			margin-left: 0vw;
		}
		#menu
		{
			display: flex;
			margin-left: -45vw;
			width: 45vw;
			height: 96vh;
			background: black;
			list-style-type: none;
			align-items: center;
			flex-direction: column;
			padding-top: 4vh;
			transition: 0.3s;
		}
		.menu__a
		{
			display: block;
			text-align: center;
			padding: 10px;
			text-decoration: none;
			color: white;
			font-size: 1.1em;
			width: 45vw;
		}
		.menu__a:hover
		{
			background-color: white;
			color: black;
		}
	</style>
</head>
<body>
		<label id = "buttonMenu__label" for = "buttonMenu__input">*</label>
		<input type = "checkbox" id = "buttonMenu__input">
	<ul id = "menu">
		<li><a class = "menu__a" href = "#">HOME</a></li>
		<li><a class = "menu__a" href = "#">CATEGORIAS</a></li>
		<li><a class = "menu__a" href = "#">BLOG</a></li>
		<li><a class = "menu__a" href = "#">QUEM SOMOS</a></li>
	</ul>
</body>
</html>