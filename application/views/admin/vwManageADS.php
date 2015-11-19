<?php
$this->load->view('admin/vwHeader');
?>
    
    <link rel="stylesheet" href="<?php echo HTTP_CSS_PATH; ?>listswap.css">
    <script src="<?php echo HTTP_JS_PATH; ?>jquery.listswap.js"></script>
    

      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Reklama  <small> bannery</small></h1>
            <ol class="breadcrumb">
		<a href="<?php echo base_url(); ?>admin/cms/show_cms/" class="btn btn-success btn-xs"  type="button" style="float:right;">Nowy banner</a>
                <div style="clear: both;"></div>
            </ol>
          </div>

        </div><!-- /.row -->
         <?php //echo "asddddddddddddddddddddddddddddd";?>
            <?php //var_dump($miasta)?>
        <?php //echo "asddddddddddddddddddddddddddddd";?>
        <select id="source" 
        data-text="Wszystkie miasta" 
        data-search="Wyszukaj">
    
      <?php foreach($miasta as $tab => $value): ?>

              <option value="<?=$value->id.":".$value->miasto?>"><?php echo $value->miasto." woj. ".$value->wojewodztwo;?></option>
              
       <?php endforeach; ?>
        
        
        
        </select>

<select id="destination" 
        data-text="Lista docelowa"  
        data-search="Wyszukaj">
</select>

        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>

      <script>
$('#source, #destination').listswap({
	truncate:true, 
	height:450, 
	is_scroll:true, 
        label_add:'Dodaj', 
	label_remove:'Usuń', 

});

$('#source_2, #destination_2').listswap({
	truncate:true, 
	height:162,
	label_add:'', 
	label_remove:'', 
});

$('#source_3, #destination_3').listswap({
	truncate:true, 
	height:162,
});

$('#source_4, #destination_4').listswap({
	truncate:true, 
	height:162,
});

$('#source_ar, #destination_ar').listswap({
	truncate:true, 
	height:162, 
	label_add:'زيادة', 
	label_remove:'تنقيص', 
	add_class:'list_ar', 
	rtl:true,
});
</script>