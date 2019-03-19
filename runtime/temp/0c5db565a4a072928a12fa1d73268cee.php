<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"F:\wamp64\www\tp5\public/../application/index\view\index\index.html";i:1545210689;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<script type="text/javascript">
	
</script>
<style>
	
</style>

</head>
	<body>
		<table border="1" width="500px" align="center">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>password</th>

			</tr>
			<?php foreach($data as $v): ?>
				<tr>
					<td><?php echo $v['id']; ?></td>
					<td><?php echo $v['admin']; ?></td>
					<td><?php echo $v['password']; ?></td>
				</tr>
			<?php endforeach; ?>

		</table>
	</body> 
</html>	