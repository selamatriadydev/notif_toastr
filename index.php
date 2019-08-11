
  

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>toastr</title>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="asset/notif.css">
<script type="text/javascript" src="asset/notif.js"></script>
</head>
<body>
	

  <form method="post" action="">
    <input type="text" name="tahun">
    <button type="submit">submit</button>
  </form>

  <?
  include_once 'classes/notif.php';
  $notif = new notif();
if($_POST['tahun']){

  $tahun = $_POST['tahun'];
  if(empty($tahun)) {
    $notif->peringatan("tahun kosong");
  }elseif($tahun != (int) $_POST['tahun'] ) {
    $notif->gagal("isikan tahun");
  }elseif($tahun != "") {
    $notif->berhasil("jos");
  }
}
  ?>
  
</body>


</html>