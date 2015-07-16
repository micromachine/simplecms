<?php
$this->load->view('admin/vwHeader');
?>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Strony <small> statyczne</small></h1>
            <ol class="breadcrumb">
		<a href="<?php echo base_url(); ?>admin/cms/show_cms/" class="btn btn-success btn-xs"  type="button" style="float:right;">Nowa</a>
                <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">Tytuł <i class="fa fa-sort"></i></th>
                    <th class="header">Akcja <i class=""></i></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($cms as $key => $val){
                    ?>
                  <tr>
                    <td><?php echo $val['label']; ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>admin/cms/edit_cms/<?php echo $val['id']; ?>" class="btn btn-primary btn-xs">Edycja</a>
                        <a href="<?php echo base_url(); ?>admin/cms/delete_cms/<?php echo $val['id']; ?>" class="btn btn-danger btn-xs">Usuń</a>
                     </td>
                  </tr>
           <?php
                    }
           ?>
                </tbody>
              </table>
            </div>
       
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>
