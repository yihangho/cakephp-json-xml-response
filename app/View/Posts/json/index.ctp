<?php
for ($i=0; $i<count($posts); $i++)
{
	unset($posts[$i]["Post"]["created"]);
	unset($posts[$i]["Post"]["modified"]);
}
echo json_encode($posts, JSON_PRETTY_PRINT);
?>