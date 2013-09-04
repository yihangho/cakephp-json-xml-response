<response>
<?php foreach($posts as $post):?>
	<posts>
		<Post>
			<id><?php echo $post["Post"]["id"];?></id>
			<title><?php echo $post["Post"]["title"];?></title>
			<body><?php echo $post["Post"]["body"];?></body>
		</Post>
	</posts>
<?php endforeach;?>
</response>