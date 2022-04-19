<html>
<head>
<title>Aplikasi Ujian Online</title>
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
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" onclick="return rubah_password();">Ubah Password</a></li>
            <li><a href="<?php echo base_url(); ?>adm/logout" onclick="return confirm('keluar..?');">Logout</a></li>
          </ul>
        </li>
      </ul>
      

<div class="row col-md-12">
      <div class="alert alert-danger">
        Waktu mengerjakan tinggal : <div id="clock" style="display: inline; font-weight: bold"></div>
      </div>
      <form role="form" name="_form" method="post" id="_form">
      <?php 
      $no = 1;
      $jawaban = array("A","B","C","D","E");
      if (!empty($data)) {
        foreach ($data as $d) { 
            echo '<input type="hidden" name="id_soal_'.$no.'" value="'.$d->id.'">';
            echo '<div class="step well">';
        
            if ($d->gambar == "") {
                echo '<table class="table table-form" style="font-size: 16px">
                <tr><td style="v-align: top">'.$no.'</td><td colspan="2">'.$d->soal.'</td></tr>';
                for ($j=0; $j<sizeof($jawaban);$j++) {
                  $kecil_jawaban = strtolower($jawaban[$j]);
                  $opsyen = "opsi_".$kecil_jawaban;
                  $opsyens = $d->$opsyen;

                  if ($jawaban[$j] == $d->jawaban) {
                    echo '<tr><td width="3%">'.$jawaban[$j].'</td><td width="3%"><input checked type="radio" id="opsi_'.$jawaban[$j].'_'.$d->id.'" name="opsi_'.$no.'" value="'.$jawaban[$j].'"></td><td><label for="opsi_'.$jawaban[$j].'_'.$d->id.'">'.$opsyens.'</label></td></label></tr>';
                  } else {
                    echo '<tr><td width="3%">'.$jawaban[$j].'</td><td width="3%"><input type="radio" id="opsi_'.$jawaban[$j].'_'.$d->id.'" name="opsi_'.$no.'" value="'.$jawaban[$j].'"></td><td><label for="opsi_'.$jawaban[$j].'_'.$d->id.'">'.$opsyens.'</label></td></label></tr>';
                  }
                }
                echo '</table></div>';
            } else {
                echo '<table class="table table-form" style="font-size: 16px">
                <tr><td rowspan="6" width="25%"><img src="'.base_url().'upload/gambar_soal/'.$d->gambar.'" class="polaroid" style="width: 300px; height: 250px"></td>
                <td style="v-align: top">'.$no.'</td><td colspan="2">'.$d->soal.'</td></tr>';
                for ($j=0; $j<sizeof($jawaban);$j++) {
                  $kecil_jawaban = strtolower($jawaban[$j]);
                  $opsyen = "opsi_".$kecil_jawaban;
                  $opsyens = $d->$opsyen;

                  if ($jawaban[$j] == $d->jawaban) {
                    echo '<tr><td width="3%">'.$jawaban[$j].'</td><td width="3%"><input checked type="radio" id="opsi_'.$jawaban[$j].'_'.$d->id.'" name="opsi_'.$no.'" value="'.$jawaban[$j].'"></td><td><label for="opsi_'.$jawaban[$j].'_'.$d->id.'">'.$opsyens.'</label></td></label></tr>';
                  } else {
                    echo '<tr><td width="3%">'.$jawaban[$j].'</td><td width="3%"><input type="radio" id="opsi_'.$jawaban[$j].'_'.$d->id.'" name="opsi_'.$no.'" value="'.$jawaban[$j].'"></td><td><label for="opsi_'.$jawaban[$j].'_'.$d->id.'">'.$opsyens.'</label></td></label></tr>';
                  }
                }
                echo '</table></div>';
            }


            $no++;
        }
      }

      ?>

      <a class="action back btn btn-info btn-lg">Kembali</a>
      <a class="action next btn btn-info btn-lg">Berikutnya</a>
      <a class="action submit btn btn-success btn-lg">Selesai Ujian</a>
      <input type="hidden" name="jml_soal" value="<?php echo $no; ?>">
      </form>
    </div>

<div class="col-md-12" style="border-top: solid 1px #eee; padding-top: 10px; margin-top: 50px; margin-bottom: 20px">
  
</div>




<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>___/js/jquery.countdown.min.js"></script> 
<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 
<script type="text/javascript">     

    $(document).ready(function(){
         var jam_selesai = '<?php echo $detiltes->tgl_selesai; ?>';
         
         $('div#clock').countdown(jam_selesai)
          .on('update.countdown', function (event) { 
            $(this).html(event.strftime('%H:%M:%S'));
          })
          .on('finish.countdown', function (event) {
              alert('Waktu telah selesai....!')
              var f_asal  = $("#_form");
              var form  = getFormData(f_asal);
              simpan_akhir(<?php echo $detiltes->id_tes; ?>);
              window.location.assign("<?php echo base_url(); ?>adm/sudah_selesai_ujian/<?php echo $detiltes->id_tes; ?>"); 
              
              return false;
          });

        var current = 1;
        
        widget      = $(".step");
        btnnext     = $(".next");
        btnback     = $(".back"); 
        btnsubmit   = $(".submit");

       
        widget.not(':eq(0)').hide();
        hideButtons(current);
        
        
        btnnext.click(function(){
          if(current < widget.length){
            widget.show();
            widget.not(':eq('+(current++)+')').hide();
           
            simpan(<?php echo $detiltes->id_tes; ?>);
          }
          hideButtons(current);
        })

       
        btnback.click(function(){
          if(current > 1){
            current = current - 2;
            if(current < widget.length){
              widget.show();
              widget.not(':eq('+(current++)+')').hide();
            }
            hideButtons(current);
          }
          hideButtons(current);
        })  

        btnsubmit.click(function() {
          simpan_akhir(<?php echo $detiltes->id_tes; ?>);
        });

      });

      simpan = function(id){
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);

        $.ajax({    
          type: "POST",
          url: base_url+"adm/ikut_ujian/simpan_satu/"+id,
          data: JSON.stringify(form),
          dataType: 'json',
          contentType: 'application/json; charset=utf-8'
        }).done(function(response) {
         
        });
        return false;
      }

      simpan_akhir = function(id) {
        if (confirm('Anda yakin akan mengakhiri tes ini..?')) {
          var f_asal  = $("#_form");
          var form  = getFormData(f_asal);

          $.ajax({    
            type: "POST",
            url: base_url+"adm/ikut_ujian/simpan_akhir/"+id,
            data: JSON.stringify(form),
            dataType: 'json',
            contentType: 'application/json; charset=utf-8'
          }).done(function(response) {
            if(response.status == "ok") {
              window.location.assign("<?php echo base_url(); ?>adm/sudah_selesai_ujian/"+id); 
            }
          });

          return false;
        }
      }

     
      hideButtons = function(current){
        var limit = parseInt(widget.length); 

        $(".action").hide();

        if(current < limit) btnnext.show();
        if(current > 1) btnback.show();
        if (current == limit) { btnnext.hide(); btnsubmit.show(); }
      }

    </script> 


</body>
</html>
