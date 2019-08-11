
	
<?php


/**
 * 
 */
class notif
{
	
	// function __construct()
	// {
	// 	$this->notif;
	// }

	public function berhasil($message = ""){
		if($message == ""){?>
			 <script type="text/javascript">success();</script>
		<?}else{?>
			 <script type="text/javascript">success("<?=$message;?>");</script>
		<?}
	}


	public function gagal($message = ""){
		if($message == ""){?>
			 <script type="text/javascript">error();</script>
		<?}else{?>
			 <script type="text/javascript">error("<?=$message;?>");</script>
		<?}
	}



	public function peringatan($message = ""){
		if($message == ""){?>
			 <script type="text/javascript">warning();</script>
		<?}else{?>
			 <script type="text/javascript">warning("<?=$message;?>");</script>
		<?}
	}

	

	
}



