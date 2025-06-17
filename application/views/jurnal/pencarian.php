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
                            <div class="page-title-right">
                            </div>
                            <h4 class="page-title">Hasil Pencarian</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <form method="POST" action="<?php echo site_url() . INDEX_URL ?>jurnal/cari">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                placeholder="Masukan Kata Kunci Pencarian" name="search" id="pencari">
                                            <span class="input-group-append">
                                                <button type="submit"
                                                    class="btn waves-effect waves-light btn-primary"><i
                                                        class="fa fa-search mr-1"></i> Search</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-md-2 text-center mt-4">
                                    <h5>Search Results For "<?php echo $search ?>"</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="search-result-box mt-3">

                                        <ul class="nav nav-tabs tabs-bordered" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="false">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block"><b>All results</b> <span
                                                            class="badge badge-success ml-2"><?php echo $count_result ?></span></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <div class="row">
                                                    <!-- jika data ditemukan -->

                                                    <div class="col-md-12">
                                                        <?php if ($count_result > 0) { ?>
                                                        <?php
                                                            foreach ($list_search as $value) { ?>
                                                        <div class="search-item">
                                                            <h5 class="font-18 mb-1"><a
                                                                    href="<?php echo base_url() . INDEX_URL ?>/jurnal/detail/<?php echo $value['id'] ?>"><?php echo $value['judul'] ?></a>
                                                            </h5>
                                                            <div class="font-13 text-success mb-2">
                                                                Penulis: <?php echo $value['penulis'] ?>,Kategori
                                                                :<?php echo $value['kategori'] ?>
                                                            </div>
                                                            <p class="mb-0">
                                                                <?php echo $value['artikel'] ?>
                                                            </p>
                                                        </div>
                                                        <?php } ?>

                                                        <div class="clearfix"></div>
                                                        <?php   } else { ?>
                                                        <div class="card">
                                                            <div class="card-header bg-danger">
                                                                <h3 class="card-title text-white mb-0"
                                                                    style="text-align: center;"><i
                                                                        class="mdi mdi-information"></i>
                                                                    Mohon Maaf Data Tidak Ditemukan
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>


                                                </div>
                                            </div>

                                            <!-- end All results tab -->


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>

            </div>
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