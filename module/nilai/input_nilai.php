<?php
if($_GET['act']=="input"){
	?>


    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    
<div class="container">
        <h1>Input Nilai Siswa</h1> 
        <br/>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab">Home</a></li>
            <li><a data-toggle="tab" href="?#menu1">Menu 1</a></li>
            <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        </ul>
        
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                
            <?php


if(isset($_GET['nip'])){
    
    $nip=$_GET['nip'];
    $id_kelas=$_GET['id_kelas'];
    $id_mapel=$_GET['id_mapel'];
    
    $query=mysql_query("select * from tbl_nilai where nip='$nip' and id_kelas='$id_kelas' and id_mapel='$id_mapel'");
    $cek=mysql_num_rows($query);
    
    if($cek=='0'){
        //kalo belum ada mode input
        ?><script language="javascript">document.location.href="?page=nilai_uh_input&nip=<?php echo $nip;?>&id_mapel=<?php echo $id_mapel;?>&id_kelas=<?php echo $id_kelas;?>";</script><?php
    }else{
        //kalo sudah ada mode update
        ?><script language="javascript">document.location.href="?page=nilai_uh_update&nip=<?php echo $nip;?>&id_mapel=<?php echo $id_mapel;?>&id_kelas=<?php echo $id_kelas;?>";</script><?php
    }

}else{
    unset($_POST['nip']);
}

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Input Nilai Ulangan Harian</h1>
</div>
<!-- end page-heading -->



<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>   
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
    <td id="tbl-border-left"></td>
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
            
            

        <!--  start product-table ..................................................................................... -->
        
        <!--  start step-holder -->
        <div id="step-holder">
            <div class="step-no">1</div>
            <div class="step-dark-left">Pilih Mata Pelajaran</div>
            <div class="step-dark-right">&nbsp;</div>
            <div class="step-no-off">2</div>
            <div class="step-light-left">Input Nilai Siswa</div>
            <div class="step-light-right">&nbsp;</div>
             <div class="step-no-off">3</div>
            <div class="step-light-left">Selesai</div>
            <div class="step-light-round">&nbsp;</div>
            <div class="clear"></div>
        </div>
        <!--  end step-holder -->
    
        
        
        <form id="mainform" action="">
        <table border="0" width="48%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a>   </th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Mata Pelajaran</a></th>
            <th width="15%" class="table-header-repeat line-left minwidth-1"><a href="">Kelas</a></th>
            <th width="15%" class="table-header-repeat line-left minwidth-1"><a href="">Laporan</a></th>
        </tr>
        
        
        <?php
        $nip=$_SESSION['nip'];
        $view=mysql_query("select * from tbl_mapel mapel, tbl_kelas kelas where mapel.id_kelas=kelas.id_kelas and mapel.nip='$nip' order by id_mapel asc");
        
        $no=0;
        while($row=mysql_fetch_array($view)){
        ?>  
        <tr>
            <td><?php echo $no=$no+1;?></td>
            <td><a href="?page=nilai_uh&nip=<?php echo $nip;?>&id_mapel=<?php echo $row['id_mapel'];?>&id_kelas=<?php echo $row['id_kelas'];?>" style="text-decoration:underline" title="Pilih Mata Pelajaran"><?php echo $row['nama_mapel'];?></a></td>
            <td><?php echo $row['nama_kelas'];?></td>
            <td><a href="?page=laporan_uh&nip=<?php echo $nip;?>&id_mapel=<?php echo $row['id_mapel'];?>&id_kelas=<?php echo $row['id_kelas'];?>" style="color:#0000CC; text-decoration:underline" title="Lihat laporan">Lihat</a></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <!--  end product-table................................... --> 
        </form>  
        
        
        
    <div class="clear"></div>
     
    </div>
    <!--  end content-table-inner ............................................END  -->
    </td>
    <td id="tbl-border-right"></td>
</tr>
<tr>
    <th class="sized bottomleft"></th>
    <td id="tbl-border-bottom">&nbsp;</td>
    <th class="sized bottomright"></th>
</tr>
</table>

            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Tutorial pemrograman web, mobile dan design</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Membuat navigasi tabs dan pills bootstrap.</p>
            </div>
        </div>
    </div>
            <!-- /.row -->
            <?php } ?>
             