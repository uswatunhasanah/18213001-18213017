<?php

if (isset($_GET["action"]) && isset($_GET["id"]) && isset($_GET["action"]) == "get_info") {
	$info = file_get_contents('http://localhost/RestApi.php?action=get_info&id=' . $_GET["id"]);
	$info = json_decode($info,true);
}

?>

<table>
<tr> 
	<td> ID </td>
	<td> <?php echo $info["ID"] ?> </td>
</tr>
<tr> 
	<td> Nama </td>
	<td> <?php echo $info["Nama"] ?> </td>
</tr>
<tr> 
	<td> Telepon </td>
	<td> <?php echo $info["Telepon"] ?> </td>
</tr>
</table>
