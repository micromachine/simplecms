<?php
$this->load->view('admin/vwHeader');
?>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Zarządzanie <small> województwami</small></h1>
            <ol class="breadcrumb">
              <li><a href="voivodeship"><i class="icon-dashboard"></i> Słownik województw</a></li>
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
          <?php foreach($voivodeship as $voivodeships): ?>
          <tr>
            <td><?=$voivodeships['wojewodztwo']?></td>
            <td>
            
            <a href="#"  onClick="delete_province('<?=$voivodeships['id']; ?>')" class="btn btn-danger btn-xs"><i class="icon-white icon-minus"></i> Usuń</a>   
            <a href="<?php echo base_url(); ?>admin/voivodeship/edit_province/<?php echo $voivodeships['id']; ?>" class="btn btn-primary btn-xs">Edycja</a>
       
            </td>
        </tr>
          <?php endforeach; ?>
        </tbody>
        </table>
              <td>
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
     function delete_province(id){
         var checkstr =  confirm('Na pewno usunąć województwo ?');
            if(checkstr == true){
            var faction = "<?=site_url('admin/voivodeship/delete_province')?>";
            $.ajax({
                url: faction,
                type: "POST",
                dataType: "text",
                data: {id: id},
                success: function(id){
                    $('#successMessage').html("<b> Usunięto województwo</b>");
                    $('#success').show();
                },      
                cache: false
                });
            }else{
                $('#errorMessage').html("<b> BŁĄD - nie usunięto województwa</b>");
                $('#error').show();
                return false;
            }
        }

   function edit_province(id){
         var checkstr =  confirm('Na pewno edytować ?');
            if(checkstr == true){
            var faction = "<?=site_url('admin/voivodeship/edit_province')?>";
            $.ajax({
                url: faction,
                type: "POST",
                dataType: "text",
                data: {id: id},
                success: function(id){
                 
                },      
                cache: false
                });
            }else{
                return false;
            }
        }


</script>
