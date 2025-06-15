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
                    <div class="col-md-12">
                        <div class="page-title-box">
                            <div class="page-title-right">

                            </div>
                            <h4 class="page-title"></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row" style="margin-top:100px;margin-bottom:50px">
                            <div class="col-md-8 offset-md-2">
                                <form method="POST" action="<?php echo site_url() . INDEX_URL ?>jurnal/cari">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Masukan Kata Kunci Pencarian" name="search">
                                        <span class="input-group-append">
                                            <button type="submit" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search mr-1"></i> Search</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="card">
                                <div class="card-body" style="background-color: #36404E;color:aliceblue;text-align:center;height:150px">
                                    <span style="font-size: 50px;text-align:center"><i class="mdi mdi-card-search"></i> <b>JURNAL</b></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="card">
                                <div class="card-body" style="background-color: #36404E;color:aliceblue;text-align:center;height:150px">
                                    <span style="font-size: 50px;text-align:center"><i class="mdi mdi-card-search"></i> <b>MAJALAH</b></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="card">
                                <div class="card-body" style="background-color: #36404E;color:aliceblue;text-align:center;height:150px">
                                    <span style="font-size: 50px;text-align:center"><i class="mdi mdi-card-search"></i> <b>BULLETIN</b></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="card">
                                <div class="card-body" style="background-color: #36404E;color:aliceblue;text-align:center;height:150px">
                                    <span style="font-size: 50px;text-align:center"><i class="mdi mdi-card-search"></i> <b>NEWS LETTER</b></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="card">
                                <div class="card-body" style="background-color: #36404E;color:aliceblue;text-align:center;height:150px">
                                    <span style="font-size: 50px;text-align:center"><i class="mdi mdi-card-search"></i> <b>SURAT KABAR</b></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="card">
                                <div class="card-body" style="background-color: #36404E;color:aliceblue;text-align:center;height:150px">
                                    <span style="font-size: 50px;text-align:center"><i class="mdi mdi-card-search"></i> <b>TABLOID</b></span>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>


            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->

        <!-- footer -->
        <?php $this->load->view('templete/footer') ?>
        <!-- end footer -->