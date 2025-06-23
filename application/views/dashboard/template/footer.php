<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                2025 &copy; SISTEM INFORMASI PERPUSTAKAAN UIN SUNAN KALIJAGA</a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->


<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h4 class="font-16 m-0 text-white">Ganti tema</h4>
    </div>
    <div class="slimscroll-menu">
        <div class="p-4">
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                    data-bsStyle="<?php echo base_url() ?>assets/css/bootstrap-dark.min.css"
                    data-appStyle="<?php echo base_url() ?>assets/css/app-dark.min.css" />
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>

<script src="<?php echo base_url() ?>assets/libs/morris-js/morris.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/raphael/raphael.min.js"></script>





<!-- App js -->
<script src="<?php echo base_url() ?>assets/js/app.min.js"></script>

<!-- sweetalert2 -->
<script src="<?php echo base_url() ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/pages/sweetalerts.init.js"></script>


<!-- picker -->
<script src="<?php echo base_url() ?>assets/libs/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- select2 -->
<script src="<?php echo base_url() ?>assets/plugin_lain/select2/select2.min.js"></script>


<!-- Datatable plugin js -->
<script src="<?php echo base_url() ?>assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url() ?>assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/datatables/responsive.bootstrap4.min.js"></script>

<script src="<?php echo base_url() ?>assets/libs/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/datatables/buttons.bootstrap4.min.js"></script>

<script src="<?php echo base_url() ?>assets/libs/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/datatables/buttons.print.min.js"></script>

<script src="<?php echo base_url() ?>assets/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/datatables/dataTables.fixedColumns.min.js"></script>

<script src="<?php echo base_url() ?>assets/libs/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/pdfmake/vfs_fonts.js"></script>


<script>
    $(document).ready(function() {
        $(".btn-logout").click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Apakah Anda Ingin Logout?",
                text: "",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                confirmButtonClass: "btn btn-success mt-2",
                cancelButtonClass: "btn btn-danger ml-2 mt-2",
                buttonsStyling: !1,
            }).then(function(ok) {
                if (ok['value'] == true) {
                    Swal.fire({
                        title: "Success",
                        text: "Anda Berhasil Logout",
                        type: "success",
                    });
                    window.location.href = "<?php echo base_url() . INDEX_URL ?>login/logout";
                }

            });


        });

    });
</script>
</body>

</html>