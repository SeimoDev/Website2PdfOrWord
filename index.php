<!DOCTYPE html>
<html>
<head>
	<title>网页转换工具</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f1f1f1;
		}
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
		}
		.form {
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			border-radius: 10px;
			max-width: 500px;
			width: 100%;
		}
		input[type="text"] {
			padding: 10px;
			margin: 10px;
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 16px;
		}
		button[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px;
			margin: 10px;
			cursor: pointer;
			font-size: 16px;
		}
		label {
			font-size: 16px;
			margin: 10px;
		}
	</style>
</head>
<body>

<div class="container">
	<form class="form" method="post" action="convert.php">
		<h2>网页转换工具</h2>
		<input type="text" name="url" placeholder="请输入链接">
		<label for="pdf">转PDF</label>
		<input type="radio" name="format" id="pdf" value="pdf" checked>
		<label for="word">转Word</label>
		<input type="radio" name="format" id="word" value="word">
		<button type="submit">确认</button>
	</form>
</div>

</body>
</html>
