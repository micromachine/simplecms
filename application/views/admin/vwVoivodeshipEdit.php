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
<form class="form-horizontal">
<fieldset>
    <legend>Województwo : <?php echo $voivodeship[0]['wojewodztwo']; ?></legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nazwa : </label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="np. <?php echo $voivodeship[0]['wojewodztwo']; ?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-success">Zapisz </button>
  </div>
</div>

</fieldset>
</form>

<?php
$this->load->view('admin/vwFooter');
?>
