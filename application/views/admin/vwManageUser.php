<?php
$this->load->view('admin/vwHeader');
?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Użytkownicy <small> zarządzanie</small></h1>
            <ol class="breadcrumb">
          
             <a href="<?php echo base_url(); ?>admin/cms/show_cms/" class="btn btn-success btn-xs"  type="button" style="float:right;">Nowy użytkownik</a>
                <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->
  
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">Nazwa użytkownika <i class="fa fa-sort"></i></th>
                    <th class="header">Adres email <i class="fa fa-sort"></i></th>
                    <th class="header">Ostatnio aktywny <i class="fa fa-sort"></i></th>
                    <th class="header">Data utworzenia<i class="fa fa-sort"></i></th>
                    <th class="header">Aktywny<i class="fa fa-sort"></i></th>
                    <th class="header">Usuń<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
     
                    <tr>
                    <td>Sumit</td>
                    <td>sumit@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
					<td>Ravi</td>
                    <td>Ravi@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
                    <td>Tom</td>
                    <td>Tom@example.com</td>
                    <td>Jan 3,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
                   <td>Tina</td>
                    <td>Tina@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
                    <td>Sam</td>
                    <td>Sam@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                  <tr>
                    <td>John</td>
                    <td>John@example.com</td>
                    <td>Oct 23,2013</td>
                    <td>June 5,2014</td>
                  </tr>
                  <tr>
                    <td>Joseph</td>
                    <td>Joseph@example.com</td>
                    <td>Jan 1,2014</td>
                    <td>Jan 1,2014</td>
                  </tr>
                </tbody>
              </table>
            </div>
        
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
