<?php
$this->load->view('admin/vwHeader');
?>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Zarządzanie <small> bazą danych</small></h1>
            <ol class="breadcrumb">
              <li><a href="database"><i class="icon-dashboard"></i> Zarządzanie bazą danych</a></li>
            </ol>
            <div id="success" class="row" style="display: none">
        <div class="span4">
        <div id="successMessage" class="alert alert-success"></div>
        </div>
  </div>
  <div id="error" class="row" style="display: none">
    <div class="span4">
      <div id="errorMessage" class="alert alert-error"></div>
    </div>
  </div>

        <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th><i class="icon-tags"></i> Nazwa</th>
            <th><i class="icon-user"></i> Akcja</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($tables as $tab): ?>
          <tr>
            <td><?=$tab?></td>
            <td>
            <a href="<?php echo base_url(); ?>admin/database/dbbackup_table/<?php echo $tab; ?>" class="btn btn-primary btn-xs">Kopia tabeli</a>
            <a href="#"  onClick="optimize_table('<?=$tab; ?>')" class="btn btn-danger btn-xs"><i class="icon-white icon-minus"></i> Optymalizacja tabeli</a>   
            <a href="#" onClick="repair_table('<?=$tab; ?>')" class="btn btn-warning btn-xs">Naprawa tebeli</a>
       
            </td>
        </tr>
          <?php endforeach; ?>
        </tbody>
        </table>
              <td>
              <a href="<?php echo base_url(); ?>admin/database/backupdb" class="btn btn-success btn-xs">Kopia całej bazy</a>
              <a href="#" onClick="optimize_all()" class="btn btn-primary btn-xs">Optymalizacja całej bazy</a>
              </td>
      
              
              
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->
       
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>

<script>
     function optimize_table(name){
         var checkstr =  confirm('Na pewno optymalizowac ?');
            if(checkstr == true){
            var faction = "<?=site_url('admin/database/optimize_table')?>";
            $.ajax({
                url: faction,
                type: "POST",
                dataType: "text",
                data: {name: name},
                success: function(name){
                    $('#successMessage').html("<b> Optymalizacjas przebiegła poprawnie</b>");
                    $('#success').show();
                },      
                cache: false
                });
            }else{
                $('#errorMessage').html("<b> Optymalizacja nie przebiegła poprawnie</b>");
                $('#error').show();
                return false;
            }
        }

   function repair_table(name){
         var checkstr =  confirm('Na pewno optymalizowac ?');
            if(checkstr == true){
            var faction = "<?=site_url('admin/database/repair_table')?>";
            $.ajax({
                url: faction,
                type: "POST",
                dataType: "text",
                data: {name: name},
                success: function(name){
                    $('#successMessage').html("<b> Naprawa przebiegła poprawnie</b>");
                    $('#success').show();

                },      
                cache: false
                });
            }else{
                $('#errorMessage').html("<b> Naprawa nie przebiegła poprawnie</b>");
                $('#error').show();
                return false;
            }
        }


   function optimize_all(){
         var checkstr =  confirm('Na pewno optymalizowac całą bazę?');
            if(checkstr == true){
            var faction = "<?=site_url('admin/database/optimize_all')?>";
            $.ajax({
                url: faction,
                type: "POST",
                dataType: "text",
                data: {name: name},
                success: function(name){
                    $('#successMessage').html("<b> Optymalizacja całej bazy przebiegła poprawnie</b>");
                    $('#success').show();

                },      
                cache: false
                });
            }else{
                $('#errorMessage').html("<b> Optymalizacja  nie przebiegła poprawnie</b>");
                $('#error').show();
                return false;
            }
        }

   function repair_all(){
         var checkstr =  confirm('Na pewno naprawić całą bazę?');
            if(checkstr == true){
            var faction = "<?=site_url('admin/database/repair_all')?>";
            $.ajax({
                url: faction,
                type: "POST",
                dataType: "text",
                data: {name: name},
                success: function(name){
                    $('#successMessage').html("<b> Naprawa całej bazy przebiegła poprawnie</b>");
                    $('#success').show();

                },      
                cache: false
                });
            }else{
                $('#errorMessage').html("<b> Naprawa nie przebiegła poprawnie</b>");
                $('#error').show();
                return false;
            }
        }




</script>
