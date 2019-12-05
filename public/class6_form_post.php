<html>
	<head>
		<title>PHP POST</title>
	</head>
	<body>
		<?php
			$know = 0;
			$existname = array("ya-chi","kkk","aaa");
			if ($_POST["name"]){
				foreach ($existname as  $value) {
					if ($_POST["name"] == $value) {
						echo "認識你".$value;
						$know = 1;
					}
				}
				if($know == 0){
					echo "不認識你";
				}
			}
					
	               
        ?>
		<form method="post">
            <label>姓名</label>
            <input type="text" name="name"/>
            <input type="submit" name="submit"/>
        </form>
        <style type="text/css">
            @charset "UTF-8";
            * {
            font-family: 微軟正黑體;
            font-weight: bold;
            line-height: 30px;
            }

            html, body {
            background-color: #333;
            padding: 30px;
            color: #fafafa;
            }

            input {
            width: 100px;
            margin-left: 5px;
            color: #333;
            background-color: #fff;
            }
        </style>  

	</body>
</html>