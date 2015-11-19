<?php
$this->load->view('admin/vwHeader');
?>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Zarządzanie <small> województwami</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>admin/voivodeship"><i class="icon-dashboard"></i> Słownik województw</a></li>
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
            
<form class="form-horizontal" id="voivodeship">
<fieldset>
    <legend>Województwo : <?php echo $voivodeship[0]['wojewodztwo']; ?></legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nazwa : </label>  
  <div class="col-md-5">
  <input id="vname" name="vname" type="text" placeholder="np. <?php echo $voivodeship[0]['wojewodztwo']; ?>" class="form-control input-md" required="yes">
  <input type="hidden" name="id" value="<?php echo $voivodeship[0]['id']; ?>">
  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <a href="#" onClick="update_voivodeship('<?=$voivodeship[0]['id'],$voivodeship[0]['wojewodztwo']; ?>')"" class="btn btn-primary btn-xs">Zapisz</a>

  </div>
</div>

</fieldset>
</form>

<?php
$this->load->view('admin/vwFooter');
?>
   
    <script>
/*
    function update_voivodeship(name){
            checkstr = true;
            if(checkstr == true){
            var faction = "<?=site_url('admin/voivodeship/update')?>";
            var fdata = $(this).serialize()

            $.ajax({
                url: faction,
                type: "POST",
                dataType: "text",
                data: fdata,
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
  */
     
     function update_voivodeship(){
     var faction = "<?=site_url('admin/voivodeship/update')?>";
     var fdata = $('#voivodeship').serialize()
     $.ajax({ 
        url: faction,
        type: "POST",
        dataType: "text",
        data: fdata,
        
        complete: function() {
                $("#loading").hide();
        },
        success: function(msg) {
                 $('#successMessage').html("<b> Edycja przebiegła poprawnie </b>");
                 $('#success').show();
                 //setTimeout(function() {
                 location.href = "<?=site_url('admin/voivodeship')?>";
                 //}, 800);
               
        },
        error: function() {
                $('#errorMessage').html("<b> Edycja nie przebiegła poprawnie</b>");
                $('#error').show();

        }
    });
         
     }
     
    </script>