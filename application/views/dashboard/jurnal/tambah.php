<?php $this->load->view('dashboard/template/header') ?>
<!-- Begin page -->
<div id="wrapper">
    <!-- Navigation Bar-->
    <?php $this->load->view('dashboard/template/navbar') ?>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jurnal</a></li>
                                    <li class="breadcrumb-item active">Serial Baru</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Serial Baru</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Nama Koleksi Serial</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="judul" placeholder="Nama Koleksi Serial">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Anak Judul</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="anak_judul" placeholder="Anak Judul">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Inisial Koleksi</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="inisial" placeholder="Inisial Koleksi">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="kategori">
                                        <option selected="" value="">--Silahkan Pilih--</option>
                                        <option value="Jurnal">Jurnal</option>
                                        <option value="Majalah">Majalah</option>
                                        <option value="Bulletin">Bulletin</option>
                                        <option value="News Letter">News Letter</option>
                                        <option value="Surat Kabar">Surat Kabar</option>
                                        <option value="Tabloid">Tabloid</option>
                                        <option value="Kliping">Kliping</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Nomor Klasifikasi</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="klasifikasi" placeholder="Nomor Klasifikasi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">ISSN</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="issn" placeholder="ISSN">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Bahasa</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="bahasa">
                                        <option selected="" value="">--Silahkan Pilih--</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Inggris">Inggris</option>
                                        <option value="Arab">Arab</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Frekuensi</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="frekuensi">
                                        <option selected="" value="">--Silahkan Pilih--</option>
                                        <option value="Tiap hari">Tiap hari</option>
                                        <option value="1 Minggu Sekali">1 Minggu Sekali</option>
                                        <option value="2 Minggu Sekali">2 Minggu Sekali</option>
                                        <option value="1 Bulan Sekali">1 Bulan Sekali</option>
                                        <option value="2 Bulan Sekali">2 Bulan Sekali</option>
                                        <option value="3 Bulan Sekali">3 Bulan Sekali</option>
                                        <option value="4 Bulan Sekali">4 Bulan Sekali</option>
                                        <option value="6 Bulan Sekali">6 Bulan Sekali</option>
                                        <option value="1 Tahun Sekali">1 Tahun Sekali</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Nama Penerbit</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="penerbit" placeholder="Nama Penerbit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Kota Penerbit</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="kota" placeholder="Nama Penerbit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Keterangan Penerbit</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="keterangan" placeholder="Keterangan Penerbit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Badan Korporasi</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="badan" placeholder="Badan Korporasi">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-purple waves-effect waves-light" id="btn-save">Submit</button>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
        <?php $this->load->view('dashboard/template/footer') ?>
        <script>
            $(document).ready(function() {
                $("#btn-save").submit(function(e) {
                    alert('tesss');
                    e.preventDefault();
                    var judul = $("#nama").val();


                });



            });
        </script>