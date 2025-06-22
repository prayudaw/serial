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
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() . INDEX_URL ?>dashboard/jurnal">List Jurnal</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">List Artikel <?php echo $nama_jurnal ?></a></li>

                                </ol>
                            </div>
                            <h4 class="page-title">LIST ARTIKEL <?php echo strtoupper($nama_jurnal) ?></h4>
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
                                        <th>Volume</th>
                                        <th>Nomor</th>
                                        <th>penulis</th>
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
                                    <label for="field-3" class="control-label">Nama Koleksi Serial</label>
                                    <select class="form-control select2" id="id_jurnal_nam">
                                        <option value="" selected="">--Silahkan Pilih--</option>
                                        <?php foreach ($get_jurnal as $value) { ?>
                                            <option value="<?php echo $value['id'] ?>" <?php if ($id_jurnal == $value['id']) {

                                                                                            echo "selected";
                                                                                        } ?>> <?php echo $value['judul'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Volume</label>
                                    <input type="text" class="form-control" id="volume" placeholder="volume">
                                    <input type="hidden" id="id_artikel">
                                </div>

                                <div class="form-group">
                                    <label for="field-3" class="control-label">No Jurnal</label>
                                    <input type="text" class="form-control" id="nomor" placeholder="volume">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Periode</label>
                                    <select class="form-control" id="periode">
                                        <option value="">--Silahkan Pilih--</option>
                                        <option value="">--Bulan--</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Tahun</label>
                                    <select class="form-control" id="tahun">
                                        <option value="">--Tahun--</option>
                                        <?php $year = date('Y');
                                        for ($i = $year; $i > 1981; $i--) { ?>
                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Jumlah Eksemplar</label>
                                    <input type="text" class="form-control" id="eksemplar" placeholder="eksemplar">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Link</label>
                                    <input type="text" class="form-control" id="link" placeholder="Link">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Judul Artikel</label>
                                    <textarea class="form-control" rows="5" id="judul"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Penulis Artikel</label>
                                    <input type="text" class="form-control" id="penulis" placeholder="eksemplar">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Halaman Artikel</label>
                                    <input type="text" class="form-control" id="halaman" placeholder="eksemplar">
                                </div>
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Abstrak Artikel</label>
                                    <textarea class="form-control" rows="5" id="artikel"></textarea>
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
        </div>
        <!-- /.modal -->

        <?php $this->load->view('dashboard/template/footer') ?>
        <script>
            $(document).ready(function() {
                $(".select2").select2({
                    theme: 'bootstrap4',
                });

                var id_jurnal = <?php echo $id_jurnal ?>;
                var table;
                table = $("#table").DataTable({
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    "ajax": {
                        "url": "<?php echo base_url() . INDEX_URL ?>/dashboard/list_artikel/ajax_list/" + id_jurnal,
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
                        url: "<?php echo base_url() . INDEX_URL ?>/dashboard/list_artikel/artikel_detail",
                        dataType: "JSON",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            console.log(data);
                            $('#ModalaEdit').modal('show');
                            $('#id_judul_nama').val(data.id_judul_nama);
                            $('#volume').val(data.volume);
                            $('#nomor').val(data.nomor);
                            $('#periode').val(data.bulan_only);
                            $('#tahun').val(data.tahun_only);
                            $('#eksemplar').val(data.eksemplar);
                            $('#judul').val(data.judul);
                            $('#penulis').val(data.penulis);
                            $('#halaman').val(data.halaman);
                            $('#artikel').val(data.artikel);
                            $('#link').val(data.link);
                            $('#id_artikel').val(data.id);
                        }
                    });
                    return false;

                });

                $('#btn-update').click(function(e) {
                    e.preventDefault();
                    var id_jurnal_nama = $('#id_jurnal_nam').val();
                    // alert(id_jurnal_nama);
                    // return false;
                    var volume = $('#volume').val();
                    var nomor = $('#nomor').val();
                    var periode = $('#periode').val();
                    var tahun = $('#tahun').val();
                    var eksemplar = $('#eksemplar').val();
                    var judul = $('#judul').val();
                    var penulis = $('#penulis').val();
                    var halaman = $('#halaman').val();
                    var artikel = $('#artikel').val();
                    var link = $('#link').val();
                    var id_artikel = $('#id_artikel').val();


                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() . INDEX_URL ?>dashboard/list_artikel/update_artikel",
                        dataType: "JSON",
                        data: {

                            id_judul_nama: id_jurnal_nama,
                            volume: volume,
                            nomor: nomor,
                            periode: periode,
                            tahun: tahun,
                            eksemplar: eksemplar,
                            judul: judul,
                            penulis: penulis,
                            halaman: halaman,
                            artikel: artikel,
                            link: link,
                            id_artikel: id_artikel
                        },
                        success: function(data) {
                            if (data.status == 1) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Update Berhasil",
                                    type: "success",
                                });
                                $('#ModalaEdit').modal('hide');
                                $('#id_artikell').val('');
                                table.ajax.reload(); //just reload table
                            }
                        }
                    });

                });
                // end show edit modal
            });
        </script>