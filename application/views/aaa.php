<html>
<head>
<meta charset="utf-8">
<title>Aplikasi Ujian Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">

</head>
<body>


<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Aplikasi Ujian Online</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  <a class="navbar-brand">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  
	  <ul class="nav navbar-nav navbar-right">
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" onclick="return rubah_password();">Ubah Password</a></li>
            <li><a href="<?php echo base_url(); ?>adm/logout" onclick="return confirm('keluar..?');">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        
    </div>
  </div>
</nav>

<?php 
$sess_level = $this->session->userdata('admin_level');
$uri2 = $this->uri->segment(2);

$menu = array();

if ($sess_level == "guru") {
  $menu = array(
            array("icon"=>"menu-up", "url"=>"", "text"=>"Home"),
            array("icon"=>"copyright-mark", "url"=>"m_soal", "text"=>"Soal"),
            array("icon"=>"star", "url"=>"m_ujian", "text"=>"Ujian"),
            array("icon"=>"file", "url"=>"h_ujian", "text"=>"Hasil Ujian"),
			array("icon"=>"asterisk", "url"=>"logout", "text"=>"Logout"),
          );
} else if ($sess_level == "siswa") {
  $menu = array(
            array("icon"=>"menu-up", "url"=>"", "text"=>"Home"),
            array("icon"=>"star", "url"=>"ikuti_ujian", "text"=>"Ujian"),
			array("icon"=>"asterisk", "url"=>"logout", "text"=>"Logout"),
          );
} else if ($sess_level == "admin") {
  $menu = array(
            array("icon"=>"menu-up", "url"=>"", "text"=>"Home"),
            array("icon"=>"import", "url"=>"m_siswa", "text"=>"Data Siswa"),
            array("icon"=>"export", "url"=>"m_guru", "text"=>"Data Guru"),
            array("icon"=>"list-alt", "url"=>"m_mapel", "text"=>"Data Mapel-Kategori"),
            array("icon"=>"copyright-mark", "url"=>"m_soal", "text"=>"Soal"),
            array("icon"=>"file", "url"=>"h_ujian", "text"=>"Hasil Ujian"),
			array("icon"=>"asterisk", "url"=>"logout", "text"=>"Logout"),
          );
} else {
  $menu = array(
            array("icon"=>"dashboard", "url"=>"", "text"=>"Dashboard")
          );
}

?>

<nav class="navbar navbar-findcond navbar-fixed-top" style="margin-top:53px; background:#2c82c9;z-index:10;">
    <div class="container">
    <?php 
    foreach ($menu as $m) {
        if ($uri2 == $m['url']) {
          echo '<a href="'.base_url().'adm/'.$m['url'].'" class="btn btn-flat menu-top btn-warning"><i class="glyphicon glyphicon-'.$m['icon'].'"></i> '.$m['text'].' </a>';
        } else {
          echo '<a href="'.base_url().'adm/'.$m['url'].'" class="btn btn-flat menu-top"><i class="glyphicon glyphicon-'.$m['icon'].'"></i> '.$m['text'].' </a>';
        }
    }
    ?>
    </div>
</nav>
<div class="container" style="margin-top: 120px">

<?php echo $this->load->view($p); ?>




<div id="tampilkan_modal"></div>

</div>






<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/ajaxFileUpload.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>

<script type="text/javascript">
var base_url = "<?php echo base_url(); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 

</body>
</html>
