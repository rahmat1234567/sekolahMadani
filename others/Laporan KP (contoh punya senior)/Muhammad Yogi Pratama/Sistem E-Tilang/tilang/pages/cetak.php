<?php
require_once("../assets/lib/fpdf/fpdf.php");
require_once("../config/koneksicoba.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
      // Logo
      $this->Image('../img/PNJB versi 2.png',17,7);

    	// Arial bold 15
    	$this->SetFont('Times','B',15);
    	// Move to the right
    	// $this->Cell(60);
    	// Title
        $this->Cell(200,8,'PENGADILAN NEGERI JAKARTA BARAT',0,1,'C');
        $this->Cell(200,8,'PERKARA LALU LINTAS',0,1,'C');
		
		$this->SetFont('Times','B',12);
    	$this->Cell(200,8,'Jl. Let.Jen. S. Parman No. 71 - Jakarta Barat, Kode Pos 11410',0,1,'C');
    	$this->Cell(200,2,'Telpon : 021-5366-1110 Fax : 021-5322-312',0,1,'C');

		// Line break
    	$this->Ln(10);

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(190,0,'',1,1,'C');
        }

        $this->Ln(5);

        $this->Cell(200,8,'Bukti Putusan Perkara Lalu Lintas',0,1,'C');
        $this->Ln(10);

        $this->SetFont('Times','B',9.5);
    }

    // Page footer
    function Footer()
    {
    	// Position at 1.5 cm from bottom
    	$this->SetY(-15);
    	// Arial italic 8
    	$this->SetFont('Arial','I',8);
    	// Page number
    	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// ambil dari url
$get_id_warga = $_GET['notilang'];
// ambil dari database
$query = ("SELECT * FROM daftarnama a, putusan b WHERE a.notilang=b.notilang and
	a.notilang = $get_id_warga");
$hasil = mysql_query($query);
$data_warga = array();
while ($row = mysql_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}


$pdf = new PDF('P', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',12);

// set penomoran
$nomor = 1;
	$pdf->cell(45,7,'Tanggal Sidang',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
    $pdf->cell(80, 7, ($data_warga[0]['tanggal'] != '0000-00-00') ? date('d-m-Y', strtotime($data_warga[0]['tanggal'])) : '', 0, 1, 'L');
	
    $pdf->cell(45,7,'No. Tilang',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['notilang']),0 , 17), 0, 1, 'L');

    $pdf->cell(45,7,'Nama Pelanggar',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['namapelanggar']), 0, 1, 'L');

    $pdf->cell(45,7,'Pasal',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['pasal']), 0, 1, 'L');

    $pdf->cell(45,7,'No. BA',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['noba']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'No. Reg',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['noreg']), 0, 20), 0, 1, 'L');
	
	$pdf->cell(45,7,'',0,20,'L');
    $pdf->cell(45,7,'PUTUSAN',0,20,'L');
    
    $pdf->cell(45,7,'Denda',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
	$pdf->cell(7,7,'Rp.',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['denda']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Subsider',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['subsider']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Biaya Perkara',0,0,'L');
    $pdf->cell(15,7,':',0,0,'L');
	$pdf->cell(7,7,'Rp.',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['biayaperkara']), 0, 20), 0, 1, 'L');

	$pdf->Ln(10);

$pdf->Output();
?>
