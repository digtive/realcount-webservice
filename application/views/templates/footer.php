

                    </div> <!-- container -->


                    <div class="footer">
                       
                        <div>
                            <strong><a href="http://digtive.id/">Digtive</a></strong> - Copyright © 2019
                        </div>
                    </div>

                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>


        <!--Morris Chart-->
        <script src="<?php echo base_url() ?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url() ?>assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script>
        <script src="<?php echo base_url() ?>assets/js/canvasjs.min.js"></script>
        

        <!-- Required datatable js -->
        <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

            });
        </script>


    </body>

</html>