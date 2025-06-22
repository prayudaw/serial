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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">List Jurnal</a></li>

                                </ol>
                            </div>
                            <h4 class="page-title">LIST JURNAL</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="header-title"><b></b></h4>
                            <p class="sub-header">
                            </p>

                            <table id="table" class="table table-striped table-bordered dt-responsive nowrap"
                                style=" border-collapse: collapse;border-spacing: 0;width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>No Panggil</th>
                                        <th>Kategori</th>
                                        <th>Penerbit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
        <div id="ModalaEdit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-full">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title mt-0"><i class="fa fa-edit"></i> EDIT</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Judul</label>
                                    <input type="text" class="form-control" id="judul" placeholder="Judul">
                                    <input type="hidden" id="id_jurnal">
                                </div>
                                <div class="form-group no-margin">
                                    <label for="field-7" class="control-label">Anak Judul</label>
                                    <textarea class="form-control autogrow" id="anak_judul" placeholder="Anak Judul"
                                        style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Inisial Koleksi</label>
                                    <input type="text" class="form-control" id="inisial" placeholder="Inisial">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Kategori</label>
                                    <select class="form-control" id="kategori">
                                        <option value="">--Silahkan Pilih--</option>
                                        <option value="Jurnal">Jurnal</option>
                                        <option value="Majalah">Majalah</option>
                                        <option value="Bulletin">Bulletin</option>
                                        <option value="News Letter">News Letter</option>
                                        <option value="Surat Kabar">Surat Kabar</option>
                                        <option value="Tabloid">Tabloid</option>
                                        <option value="Kliping">Kliping</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">ISSN</label>
                                    <input type="text" class="form-control" id="issn" placeholder="Klasifikasi">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Nomor Klasifikasi</label>
                                    <input type="text" class="form-control" id="klasifikasi" placeholder="Klasifikasi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Bahasa</label>
                                    <select class="form-control" id="bahasa">
                                        <option selected="" value="">--Silahkan Pilih--</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Inggris">Inggris</option>
                                        <option value="Arab">Arab</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Frekuensi</label>
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
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Nama Penerbit</label>
                                    <input type="text" class="form-control" id="penerbit" placeholder="Nama Penerbit">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Kota Penerbit</label>
                                    <input type="text" class="form-control" id="kota" placeholder="Kota Penerbit">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Keterangan Penerbit</label>
                                    <input type="text" class="form-control" id="keterangan"
                                        placeholder="Keterangan Penerbit">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Badan</label>
                                    <input type="text" class="form-control" id="badan" placeholder="Badan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button class="btn btn-info waves-effect waves-light" id="btn-update">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->
        <?php $this->load->view('dashboard/template/footer') ?>
        <script>
            $(document).ready(function() {
                var table;
                table = $("#table").DataTable({
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    "ajax": {
                        "url": "<?php echo base_url() . INDEX_URL ?>/dashboard/jurnal/ajax_list_jurnal",
                        'data': function(data) {
                            // data.searchNim = $('#nim').val();
                            // data.searchTanggal = $('#tanggal').val();
                        },
                        "type": "POST"
                    },
                    "createdRow": function(row, data, dataIndex) {
                        if (data[3] == 'Belum Dikembalikan') {
                            $(row).addClass('redClass');
                        }
                    }
                });

                // show edit modal
                $('body').on('click', '#btn-edit-post', function() {
                    var id = $(this).data('id');
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() . INDEX_URL ?>/dashboard/jurnal/detail_edit",
                        dataType: "JSON",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            $('#ModalaEdit').modal('show');
                            $('#judul').val(data.judul);
                            $('#anak_judul').val(data.anak_judul);
                            $('#inisial').val(data.inisial);
                            $('#kategori').val(data.kategori);
                            $('#issn').val(data.issn);
                            $('#klasifikasi').val(data.klasifikasi);
                            $('#bahasa').val(data.bahasa);
                            $('#frekuensi').val(data.frekuensi);
                            $('#penerbit').val(data.penerbit);
                            $('#kota').val(data.kota);
                            $('#keterangan').val(data.keterangan);
                            $('#badan').val(data.badan);
                            $('#id_jurnal').val(data.id);
                        }
                    });
                    return false;
                });
                // end show edit modal

                $('#btn-update').click(function(e) {
                    e.preventDefault();
                    var judul = $('#judul').val();
                    var anak_judul = $('#anak_judul').val();
                    var inisial = $('#inisial').val();
                    var kategori = $('#kategori').val();
                    var issn = $('#issn').val();
                    var klasifikasi = $('#klasifikasi').val();
                    var bahasa = $('#bahasa').val();
                    var frekuensi = $('#frekuensi').val();
                    var penerbit = $('#penerbit').val();
                    var kota = $('#kota').val();
                    var keterangan = $('#keterangan').val();
                    var badan = $('#badan').val();
                    var id_jurnal = $('#id_jurnal').val();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() . INDEX_URL ?>/dashboard/jurnal/update_jurnal",
                        dataType: "JSON",
                        data: {
                            judul: judul,
                            anak_judul: anak_judul,
                            inisial: inisial,
                            kategori: kategori,
                            klasifikasi: klasifikasi,
                            issn: issn,
                            bahasa: bahasa,
                            frekuensi: frekuensi,
                            penerbit: penerbit,
                            kota: kota,
                            keterangan: keterangan,
                            badan: badan,
                            id_jurnal: id_jurnal,

                        },
                        success: function(data) {
                            console.log(data);
                            if (data.status == 1) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Update Berhasil",
                                    type: "success",
                                });
                                $('#ModalaEdit').modal('hide');
                                $('#id_jurnal').val('');
                                table.ajax.reload(); //just reload table
                            }



                        }
                    });


                });








            });
        </script>