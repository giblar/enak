<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="style.css">
  <title>tugas tugas tugas</title>
 </head>

 <body>
 <?php
  $nis=$_POST['NIS'];
  $Nama=$_POST['Nama'];
  $JK=$_POST['JK'];
  $umur=$_POST['umur'];
  $sekolah=$_POST['sekolah'];
  $alamat=$_POST['alamat'];
  $rombel=$_POST['rombel'];
  $tanggal=$_POST['tanggal'];
  $matematika=$_POST['matematika'];
  $ipa=$_POST['ipa'];
  $ips=$_POST['ips'];
  $bsunda=$_POST['bsunda'];
  $pabp=$_POST['pabp'];
  $pjok=$_POST['pjok'];
  $ing=$_POST['ing'];

  


 
 ?>

 
 <table border="3" cellpadding="5" cellspacing="0">
  
  <tr>
     <td>Nama Lengkap</td>
     <td> <?php echo $Nama ?> </td>
  </tr>
 
 
 
  <tr>
     <td>Jenis Kelamin</td>
     <td> <?php echo $JK ?> </td>
  </tr>

  <tr>
    <td>NIS</td>
    <td> <?php echo $nis ?> </td>
  </tr>
  
  <tr>
    <td>umur</td>
    <td> <?php echo $umur?> </td>
  </tr>
  
  <tr>
    <td>sekolah</td>
    <td> <?php echo $sekolah?> </td>
  </tr>

  <tr>
    <td>rombel</td>
    <td> <?php echo $rombel?> </td>
  </tr>

  <tr>
    <td>alamat</td>
    <td> <?php echo $alamat?> </td>
  </tr>

  <tr>
    <td>tanggal lahir</td>
    <td> <?php echo $tanggal?> </td>
  </tr>

  <tr>
    <td>nilai rata rata</td>
    <td> <?php $rata = $matematika+$ips+$ipa+$bsunda+$pabp+$ing+$pjok;
    echo  $rata/7;
    ?> </td>
  </tr>

  <tr>
    <td>nilai terendah</td>
    <td> <?php 
    echo min($matematika, $ips, $ipa, $bsunda, $pabp, $ing, $pjok);
    
    ?> </td>
  </tr>
  

  <tr>
    <td>nilai tertinggi</td>
    <td> <?php echo max($matematika, $ips, $ipa, $bsunda, $pabp, $ing, $pjok)?> </td>
  </tr>

<h1>anggota</h1>
<h3>syahrul, rizky, giblar, dava, firdaus </h3>





 
 </table>
 </body>
</html>