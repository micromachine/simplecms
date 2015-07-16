<?php
$this->load->view('admin/vwHeader');
?>
<script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>tinymce/tinymce.min.js"></script>
<script>

    tinymce.init({selector: 'textarea',
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste jbimages"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        relative_urls: false,
         

    height: "500",
    width:900
    });
</script>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>CMS <small>Nowa strona</small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>admin/cms/"><i class="icon-dashboard"></i> CMS</a></li>
                <li class="active"><i class="icon-file-alt"></i> Nowa strona</li>        
            </ol>
        </div>
    </div><!-- /.row -->

    <div class="fld">
        <form method="post" action="<?php echo base_url(); ?>admin/cms/insert_cms">
        <table>
            <tr><td>Nazwa strony</td><td>&nbsp;</td><td><input type="text" name="lname"><br></td></tr>
              <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
              <tr><td>Zawartość</td><td>&nbsp;</td><td>  <input type="hidden" value="<?php echo isset($cms[0]['id']) && !empty($cms[0]['id']) ? $cms[0]['id'] : '';?>" name="pst_id"> 
                      <textarea name="tst_content">
		      </textarea>

                </td></tr>
              <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
              <tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="btn_submit" class="btn btn-primary" value="Submit"></td></tr>
        </table>        
        </form>
    </div>      

</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>
