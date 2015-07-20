<?php
$this->load->view('admin/vwHeader');
?>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Artykuły <small> - kategorie szarządzanie</small></h1>
            <ol class="breadcrumb">
              
              
              <button class="btn btn-success btn-xs" type="button" style="float:right;">Nowa kategoria</button>
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->
       
        <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#"><<</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">>></a></li>
              </ul>
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>
