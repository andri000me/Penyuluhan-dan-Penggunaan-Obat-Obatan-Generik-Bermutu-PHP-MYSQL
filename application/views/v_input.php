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
                                <form method="post" action="<?php echo base_url()."index.php/tampilan/tambah"; ?>">
		                            <table style="margin:20px auto;">
                                    <tr>
                                        <td>ID PRODUK</td>
                                        <td><input type="text" name="produk_id"></td>
                                    </tr>
                                    <tr>
                                        <td>Gambar</td>
                                        <td><input type="text" name="gambar"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><input type="text" name="nama"></td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td><input type="text" name="deskripsi"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type="submit" value="Tambah"></td>
                                    </tr>
                                </table>
                            </form>	

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
