<div class="breadcome-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcome-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcome-heading">

							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="breadcome-menu">
								<li><a href="?module=dashboard">Home</a> <span class="bread-slash">/</span>
								</li>
								<li><span class="bread-blod">Dashboard</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="analytics-sparkle-area">
	<div class="container-fluid">
		<br>
            <center><h2>Admin Info Obat<h2></center>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <button type="button" class="btn btn-custon-four btn-default"> <a href = ?module=input-obat><i class ="fa fa-plus"></i> Input Obat Baru</a></button> <button type="button" class="btn btn-custon-four btn-default"> <a href =info-obat.php><i class ="fa fa-home"></i> Pratinjau</a> </button>
                                        <br>
                                        <br>
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
    <div id=tabel-obat>
    <center>
    <table border="1" bordercolor="#d9d9d9">
    <tr>
        <td width ="40px" align = "center">No</td>
        <td width ="150px" align = "center">Nama</td>
        <td width ="300px" align = "center">Gambar</td>
        <td width ="300px" align = "center">Aksi</td>
    </tr>
    <tr>
        <td width ="40px" align = "center">1</td>
        <td width ="150px" align = "center">Sanmol Tablet</td>
         <td width ="200px" height ="150px" align = "center"><img src="components/images/sanmol.jpg" width = "180px"></td>
         <td width ="200px" align = "center"><button type="button" class="btn btn-custon-four btn-default"><a href =?module=edit-obat>Edit</a></button> <button type="button" class="btn btn-custon-four btn-default" data-toggle="modal" data-target=".bs-modal-DeleteArticle">Delete</button>

         	<div class="modal fade bs-modal-DeleteArticle" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">

			<div class="modal-content">

			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
			</button>
			<h4 class="modal-title" id="myModalLabel" align="center">Konfirmasi Hapus</h4>
			</div>
			<div class="modal-body" align="center">
			<div align="center">
			<form>
			<h3>Anda yakin ingin menghapus obat ini ?<h3><br>
			<input class="btn btn-primary btn-lg" align="center" name="DelEvent" type="submit" value="Ya">
			<input class="btn btn-danger btn-lg" align="center" name="DelEvent" type="submit" value="Tidak">
			</form>
			</div>
			</div>
			</div>
			</div>
			</div></td>
    </tr>
</table>
<br>
<a href="#" class="previous">&laquo; Previous </a>
<a href="#" class="next">Next &raquo;</a>

</center>
</div>
			
		</div>

		<br><br>

