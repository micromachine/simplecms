<?php
$this->load->view('admin/vwHeader');
?>
<div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Słownik <small> miast polskich</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>admin/town"><i class="icon-dashboard"></i> Słownik miast polskich</a></li>

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
      <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->
       
        <form class="form-horizontal" id="zapisz">
<fieldset>
<!-- Form Name -->
<?php

//echo '<pre>' . var_export($voivodeship, true) . '</pre>';

?>

<legend>Edycja miasta : <?php  $array =  explode(':',$this->uri->segment(4)); echo $array[1];?></legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nazwa miasta</label>  
  <div class="col-md-4">
  <input id="textinput" name="miasto" type="text" placeholder="<?php  $array =  explode(':',$this->uri->segment(4)); echo $array[1];?>" class="form-control input-md" required="">
  <input type="hidden" name="id_town" value="<?php  $array =  explode(':',$this->uri->segment(4)); echo $array[0];?>">
  
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Województwo : </label>
  <div class="col-md-4">
    <select id="wojewodztwo" name="wojewodztwo" class="form-control">
    <?php foreach($voivodeship as $tab => $value): ?>
        <?php foreach($value as $taba => $x): ?>
        <option value="<?=$x['id']?>"><?php echo $x['wojewodztwo'];?></option>
        <?php endforeach; ?>

    <?php endforeach; ?>

    </select>
      
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="submit" value="Zapisz">
  </div>
</div>

</fieldset>
</form>
        
      </div><!-- /#page-wrapper -->


<?php
$this->load->view('admin/vwFooter');
?>
      <script>
          
     $("#zapisz").submit(function() {

    var url = "<?php echo base_url(); ?>admin/town/update_town"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#zapisz").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    return false; // avoid to execute the actual submit of the form.
});

    </script>
    
    
    