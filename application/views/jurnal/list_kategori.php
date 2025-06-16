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
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Browse By <?php echo $title ?></li>
                                </ol>
                            </div>
                            <h2 class="page-title"><?php echo $title ?></h2>
                        </div>
                    </div>
                </div>

                <!-- jika data artikel tidak ada -->
                <?php if ($jumlah_artikel > 0) { ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <!-- Nestable Lists -->
                                <div class="col-md-6">
                                    <h4 class="header-title"><b>Please select a value to browse from the list below.</b>
                                    </h4><br />
                                    <div class="custom-dd-empty dd" id="nestable_list_3">
                                        <ol class="dd-list">
                                            <?php foreach ($list_cat as $key => $value) { ?>
                                            <li class="dd-item dd3-item dd-collapsed"><button class="dd-collapse"
                                                    data-action="collapse" type="button">Collapse</button><button
                                                    class="dd-expand" data-action="expand" type="button">Expand</button>
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">
                                                    <?php echo $value['judul_jurnal'] ?>
                                                </div>
                                                <ol class="dd-list">
                                                    <?php foreach ($value['list_volume'] as $k) { ?>
                                                    <li class="dd-item" data-id="5"><button class="dd-collapse"
                                                            data-action="collapse"
                                                            type="button">Collapse</button><button class="dd-expand"
                                                            data-action="expand" type="button">Expand</button>
                                                        <div class="dd-handle">
                                                            Volume <?php echo $k['volume'] ?>
                                                        </div>
                                                        <ol class="dd-list">
                                                            <?php foreach ($k['nomor'] as $j) {  ?>
                                                            <li class="dd-item">
                                                                <a
                                                                    href="<?php echo base_url() . INDEX_URL ?>jurnal/list_artikel/<?php echo $j['id_jurnal_nama'] . '/' . $k['volume'] . '/' . $j['nomor'] ?>">
                                                                    <div class="dd-handle">
                                                                        Nomor <?php echo $j['nomor'] ?>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <?php } ?>
                                                        </ol>
                                                    </li>
                                                    <?php } ?>
                                                </ol>
                                            </li>
                                            <?php } ?>
                                        </ol>
                                    </div>
                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card-box -->
                    </div>
                    <!-- end col -->
                </div>
                <?php } else { ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header bg-danger">
                                <h3 class="card-title text-white mb-0"><i class="mdi mdi-information"></i> Information
                                </h3>
                            </div>
                            <div class="card-body" style="text-align: center;">
                                <p class="mb-0">Data Tidak Ditemukan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>



            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->


        <!-- footer -->
        <?php $this->load->view('templete/footer') ?>
        <!-- end footer -->

        <script>
        $(document).ready(function() {
            $("#nestable_list_3").nestable({
                handleClass: '123'
            });

        });
        </script>