    <?php include '../conn/koneksi.php'; ?>

    <style>
        .asem{

            padding:5px 20px;
            border:1px solid #ccc;
        }
    </style>

<div class="content-wrapper">
    <div class="container-fluid">
    	<div class="card mb-3">
        	<div class="card-header">
          	<i class="fa fa-area-chart"></i> Area Chart Example
         	</div>
        	 <div class="table_input">
            <table width="100%">
            <tr>
                <td>
                    <img src="../images/avatar5.png">
                </td>
                <td>
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
			<?php
            $judul	= isset($_GET['judul']) ? $_GET['judul'] : "";
			$query=mysql_query("SELECT * FROM tbl_buku WHERE judul='$judul'", $konek);
			$data=mysql_fetch_array($query);
			?>        
            
            <tbody>
            	<tr>
                	<td width="30%" align="right">Judul Buku</td>
                    <td width="2%">:</td>
                    <td><?php echo $data[1]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Pengarang</td>
                    <td>:</td>
                    <td><?php echo $data[2]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Penerbit</td>
                    <td>:</td>
                    <td><?php echo $data[3]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tahun Terbit</td>
                    <td>:</td>
                    <td><?php echo $data[4]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">ISBN</td>
                    <td>:</td>
                    <td><?php echo $data[5]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jumlah Buku</td>
                    <td>:</td>
                    <td><?php echo $data[6]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Lokasi</td>
                    <td>:</td>
                    <td><?php echo $data[7]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Input</td>
                    <td>:</td>
                    <td><?php echo $data[8]; ?></td>
                </tr>
                <tr>
                    <td><a href="?page=buku">Kembali</a></td>
                </tr>
            
            </tbody>
          </table>
            </td>
            </tr>
            <tr>
                <td colspan="2" class="asem">
                    <h3>Keterangan :</h3>
                    <p>
                        heheheheh
                    </p>
                </td>
            </tr>
            </table>
 	      </div>
  
  






        	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      	</div>
    </div>
 </div>   


    <!-- menu tengah
	<div id="menu-tengah">
    	<div id="bg_menu">Data Buku
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Buku Detail</td>
                </tr>
            
            </table>
        	
            
    	</div>
   	    <div class="table_input">
            <table width="100%">
            <tr>
                <td>
                    <img src="../images/avatar5.png">
                </td>
                <td>
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
			<?php
            $judul	= isset($_GET['judul']) ? $_GET['judul'] : "";
			$query=mysql_query("SELECT * FROM tbl_buku WHERE judul='$judul'", $konek);
			$data=mysql_fetch_array($query);
			?>        
            
            <tbody>
            	<tr>
                	<td width="30%" align="right">Judul Buku</td>
                    <td width="2%">:</td>
                    <td><?php echo $data[1]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Pengarang</td>
                    <td>:</td>
                    <td><?php echo $data[2]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Penerbit</td>
                    <td>:</td>
                    <td><?php echo $data[3]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tahun Terbit</td>
                    <td>:</td>
                    <td><?php echo $data[4]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">ISBN</td>
                    <td>:</td>
                    <td><?php echo $data[5]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jumlah Buku</td>
                    <td>:</td>
                    <td><?php echo $data[6]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Lokasi</td>
                    <td>:</td>
                    <td><?php echo $data[7]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Input</td>
                    <td>:</td>
                    <td><?php echo $data[8]; ?></td>
                </tr>
                <tr>
                    <td><a href="?page=buku">Kembali</a></td>
                </tr>
            
            </tbody>
          </table>
            </td>
            </tr>
            <tr>
                <td colspan="2" class="asem">
                    <h3>Keterangan :</h3>
                    <p>
                        heheheheh
                    </p>
                </td>
            </tr>
            </table>
 	      </div>
   	  </div>
    </div>
