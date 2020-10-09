<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("ahome").className="active";
</script>

<div style="margin-left:35%;margin-top:25%;color:red; font-size:40px;">Welcome Admin...</div>

<?php require("footer.php");?>