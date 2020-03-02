<!DOCTYPE html>
<html>
<head>
	<title>SEHAT</title>
</head>
<body background="img/bg1.jpg">
	<font face="Roboto" color='black'>
		
	

	<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" height="100%" background="">
		<tboody>
			<tr>
				<td>
					<table width="1140px" border="0"  align="center">
						<tbody>
							<!-- Header -->
							<tr>
								<td width="570px">
									<a href="">
										<img src="<?php echo base_url(); ?>img/logo-2001.png" alt=logo-2001 height="100px">
									</a>
								</td>
								<td align="right">
									<a href="<?php echo base_url(); ?>index.php/tampilan/home"><font face="Roboto" color="#5FD1B8"><B> HOME </B></font></a> &nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url(); ?>index.php/tampilan/us"><font face="Roboto" color="#5FD1B8"><B> Tentang Kami </B></font></a> &nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url(); ?>index.php/tampilan/layanan"><font face="Roboto" color="#5FD1B8"><B> Layanan </B></font></a> &nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url(); ?>index.php/tampilan/produk"><font face="Roboto" color="#5FD1B8"><B> Produk </B></font></a> &nbsp;&nbsp;&nbsp;
									<a href="<?php echo base_url(); ?>index.php/tampilan/galeri"><font face="Roboto" color="#5FD1B8"><B> Galeri </B></font></a> &nbsp;&nbsp;&nbsp;
								</td>

							</tr>
							<tr>
								<td height="30px"  colspan="2"></td>
							</tr>
							<!-- Content -->
							<tr>
								<td colspan="2">
								<font size="30" color="#65a478"><b>Penyuluhan dan Penggunaan</b></font>
                                </br>
                                <font size="30" color="#C1DD8E"><b>Obat-Obatan Generik Bermutu</b></font>
								<br>
								<br>
								<p>
								<b>========</b>
								<br>
								<br>
								</td>
                                <table border="1" style="border-collapse: collapse;">
                                <tr style="background: grey;">
                                <td>ID Produk</td>
                                 <td>Gambar</td>
                                 <td>Nama</td>
                                 <td>Deskripsi</td>
                                <td colspan="3"></td>
                                 </tr>
                                 <?php foreach ($data as $tampil) { ?>
                                    <tr>
                                <td><?php echo $tampil['produk_id']; ?></td>
                                <td><?php echo $tampil['gambar']; ?></td>
                                <td><?php echo $tampil['nama']; ?></td>
                                <td><?php echo $tampil['deskripsi']; ?></td>
                                <td><a href="<?php echo base_url()."index.php/tampilan/masukkan"; ?>"><b>Insert</b></a></td>
                                <td><a href="<?php echo base_url()."index.php/tampilan/ubah/".$tampil['produk_id'];?>">Edit</a></td>
                                <td><a href="<?php echo base_url()."index.php/tampilan/hapus/".$tampil['produk_id'];?>">Delete</a></td>
                                </tr>

                                <?php } ?>
                                </table>
                                               

							</tr>
							

                            
							<tr>
								<td height="30px"  colspan="2"></td>
							</tr>
							

							<tr>
								<td height="30px"  colspan="2"></td>
							</tr>
							<!-- Footer -->
							<tr>
								<td>
                                    <img src="<?php echo base_url(); ?>img/logo-200-black1.png" alt=logo-200-black1.png height="35px">
									Copyright &copy; 2019 TUGAS UAS PEMROGRAMAN WEB LANJUT</td>
								</td>
								<td>
									
								</td>
							</tr>


						</tbody>
					</table>
				</td>
			</tr>
		</tboody>
	</table>





	</font>
</body>
</html>
