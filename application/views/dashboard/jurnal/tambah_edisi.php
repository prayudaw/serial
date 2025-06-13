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
                                    <li class="breadcrumb-item active">Edisi Baru</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Edisi Baru</h4>
                        </div>
                    </div>
                </div>
                <div id="message-info">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Nama Koleksi Serial</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="nama_jurnal">
                                        <option selected="" value="">--Pilih Nama Koleksi Serial--</option>
                                        <?php foreach ($jurnal_nama_list as $value) { ?>
                                        <option value="<?php echo intval($value['id']) ?>"><?php echo $value['judul'] ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Volume</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="volume" placeholder="Volume">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Nomor</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" id="nomor" placeholder="Nomor">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Periode</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="periode">
                                        <option selected="" value="">--Bulan--</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Tahun</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="tahun">
                                        <option selected="" value="">--Tahun--</option>
                                        <?php $year = date('Y');
                                        for ($i = $year; $i > 1981; $i--) { ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Jumlah Eksemplar</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" id="eksemplar"
                                        placeholder="Jumlah Eksemplar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Judul Artikel</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="judul"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Penulis Artikel</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="penulis" placeholder="Penulis Artikel">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Halaman Artikel</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="halaman" placeholder="Halaman Artikel">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Abstrak Artikel</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="artikel"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Tanggal Input</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="tanggal_input">
                                </div>
                                <div class="col-md-5">
                                    <input id="jam" type="text" class="form-control">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-12">
                        <button class="btn btn-purple waves-effect waves-light" id="btn-save-edisi_baru">Submit</button>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
        <?php $this->load->view('dashboard/template/footer') ?>
        <script>
        // function empty_form() {
        //     var judul = $('#judul').val('');
        //     var anak_judul = $('#anak_judul').val('');
        //     var inisial = $('#inisial').val('');
        //     var kategori = $('#kategori').val('');
        //     var klasifikasi = $('#klasifikasi').val('');
        //     var issn = $('#issn').val('');
        //     var bahasa = $('#bahasa').val('');
        //     var frekuensi = $('#frekuensi').val('');
        //     var penerbit = $('#penerbit').val('');
        //     var kota = $('#kota').val('');
        //     var keterangan = $('#keterangan').val('');
        //     var badan = $('#badan').val('');
        //     $("#message-info").html('');

        // }
        $(document).ready(function() {

            $("#jam").timepicker({
                showMeridian: !1,
                icons: {
                    up: "mdi mdi-chevron-up",
                    down: "mdi mdi-chevron-down"
                },
            });

            var lastDate = new Date();
            lastDate.setDate(lastDate.getDate()); //any date you want
            $("#tanggal_input").datepicker('setDate', lastDate);
            $("#btn-save-edisi_baru").click(function(e) {
                e.preventDefault();
                var nama_jurnal = $("#nama_jurnal option:selected").text();
                var id_jurnal_nama = $('#nama_jurnal').val();
                var volume = $('#volume').val();
                var nomor = $('#nomor').val();
                var periode = $('#periode').val();
                var tahun = $('#tahun').val();
                var eksemplar = $('#eksemplar').val();
                var judul = $('#judul').val();
                var penulis = $('#penulis').val();
                var halaman = $('#halaman').val();
                var artikel = $('#artikel').val();
                var tanggal_input = $('#tanggal_input').val();
                var jam = $('#jam').val();



                // validasi
                var html = "";
                if (nama_jurnal.length == 0) {
                    html +=
                        ' <p class = "mb-0" > Nama Koleksi Serial Harus Diisi :(</p>';
                }

                if (volume.length == 0) {
                    html +=
                        ' <p class = "mb-0" >Volume Harus Diisi :(</p>';
                }

                if (nomor.length == 0) {
                    html +=
                        ' <p class = "mb-0" >Nomor Harus Diisi :(</p>';
                }

                if (periode.length == 0) {
                    html +=
                        ' <p class = "mb-0" >Periode Harus Diisi :(</p>';
                }

                if (tahun.length == 0) {
                    html +=
                        ' <p class = "mb-0" >Tahun Harus Diisi :(</p>';
                }

                if (judul.length == 0) {
                    html +=
                        ' <p class = "mb-0" >Judul Artikel Harus Diisi :(</p>';
                }

                if (penulis.length == 0) {
                    html +=
                        ' <p class = "mb-0" >Penulis Artikel Harus Diisi :(</p>';
                }

                if (halaman.length == 0) {
                    html +=
                        ' <p class = "mb-0" >Halaman Artikel Harus Diisi :(</p>';
                }

                if (artikel.length == 0) {
                    html +=
                        ' <p class = "mb-0" >Abstrak Artikel Harus Diisi :(</p>';
                }



                //validasi form
                if (html.length != 0) {
                    var elem = '<div class="alert alert-danger">' + html + '<div>';
                    $("#message-info").html(elem);
                    $([document.documentElement, document.body]).animate({
                            scrollTop: $("body").offset().top,
                        },
                        720
                    );
                    return false;
                    //end validasi
                } else {
                    //ajax
                    $.ajax({
                        url: "<?php echo base_url() . INDEX_URL ?>dashboard/jurnal/add_proccess_2",
                        type: "POST",
                        data: {
                            "nama_jurnal": nama_jurnal,
                            "id_jurnal_nama": id_jurnal_nama,
                            "volume": volume,
                            "nomor": nomor,
                            "periode": periode,
                            "tahun": tahun,
                            "eksemplar": eksemplar,
                            "judul": judul,
                            "penulis": penulis,
                            "halaman": halaman,
                            "artikel": artikel,
                            "tanggal_input": tanggal_input,
                            "jam": jam
                        },
                        success: function(response) {
                            response = JSON.parse(response);
                            // console.log(response);
                            // if (response.status == 1) {
                            //     Swal.fire({
                            //         title: "Success",
                            //         text: response.message,
                            //         type: "success",
                            //     });
                            //     empty_form();

                            // }
                        },
                        error: function(response) {
                            // Swal.fire({
                            //     type: 'error',
                            //     title: 'Opps!',
                            //     text: 'server error!'
                            // });
                        }
                    })

                }

            });



        });
        </script>