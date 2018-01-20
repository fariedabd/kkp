<!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 &copy; PT INTEGRASI MEDIA KREASI
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/respond.min.js" ></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/data-tables/DT_bootstrap.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>js/common-scripts.js"></script>

    <script type="text/javascript"></script>
    <!-- script dynamic table -->
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
    </script>
  </body>
</html>
