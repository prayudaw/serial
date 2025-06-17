<?php $this->load->view('templete/header') ?>
<!-- Begin page -->
<div id="wrapper">
    <!-- Navigation Bar-->
    <?php $this->load->view('templete/navbar') ?>
    <!-- End Navigation Bar-->


    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h3 class="page-title"
                                style="text-align: center; line-height: 34px;margin-top:40px;margin-bottom:40px;color:#000">
                                <?php echo strtoupper($detail['judul']) ?></h3>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="mt-4">
                            <h4>Abstrak</h4>

                        </div>
                        <p class="mt-3">
                            <?php echo $detail['artikel'] ?>
                        </p> -->

                        <div class="mt-4">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th style="width: 300px;"><b style="color:#000">Nama Koleksi Serial:</b>
                                                </th>
                                                <td><?php echo $detail['nama_jurnal'] ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 300px;"><b style="color:#000">Kategori:</b></th>
                                                <td><?php echo $detail['kategori'] ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 300px;"><b style="color:#000">Volume:</b></th>
                                                <td><?php echo $detail['volume'] ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 300px;"><b style="color:#000">Nomor Jurnal:</b></th>
                                                <td><?php echo $detail['nomor'] ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 300px;"><b style="color:#000">Penulis Artikel:</b>
                                                </th>
                                                <td><?php echo $detail['penulis'] ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 300px;"><b style="color:#000">Halaman Artikel:</b>
                                                </th>
                                                <td><?php echo $detail['halaman'] ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 300px;"><b style="color:#000">Jumlah Eksemplar:</b>
                                                </th>
                                                <td><?php echo $detail['eksemplar'] ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 300px;"><b style="color:#000">Abstrak:</b>
                                                </th>
                                                <td><?php echo $detail['artikel'] ?></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card-box -->

                        </div>


                    </div>
                    <!-- end row -->
                </div>
                <!-- end property-detail-wrapper -->


                <!-- end container-fluid -->
            </div>
            <!-- end content -->


            <!-- footer -->
            <?php $this->load->view('templete/footer') ?>
            <!-- end footer -->

            <script>
                $(document).ready(function() {

                    $("#pencari").val('<?php echo $search ?>');
                });
            </script>