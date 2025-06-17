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
                        <div class="page-title-box" style="text-align: center;">
                            <h4 class="page-title"><?php echo $title ?></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <?php foreach ($get_list as $value) { ?>
                                <p class="mb-0">- <?php echo $value['penulis'] ?>.
                                    <a href="<?php echo base_url() . INDEX_URL ?>jurnal/detail/<?php echo $value['id'] ?> "
                                        style="color:#23928E"> <b
                                            style="font-style: italic;"><?php echo $value['judul'] ?></b></a>.
                                </p>
                                <?php } ?>

                            </div>
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

        });
        </script>