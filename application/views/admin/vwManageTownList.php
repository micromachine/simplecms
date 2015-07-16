<?php
$this->load->view('admin/vwHeader');
?>

      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Zarządzanie <small> bazą danych</small></h1>
            <ol class="breadcrumb">
        <form>
            <input type="text" id="country" autocomplete="off" name="country" class="form-control" placeholder="np: Leszno">        
            <a href="#"  onClick="delete_town('')" class="btn btn-danger btn-xs"><i class="icon-white icon-minus"></i> Usuń</a>   
            <ul class="dropdown txtcountry" role="menu" style="right: 0; left: auto;" aria-labelledby="dropdownMenu" id="DropdownCountry"></ul>
        </form>    
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
            <th class="header">Nazwa <i class="fa fa-sort"></i></th>
            <th class="header">Akcja <i class=""></i></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($town as $tab): ?>
          <tr>
            <td><?=$tab['miasto']?></td>
            <td>
            <a href="<?php echo base_url(); ?>admin/database/dbbackup_table/<?php echo $tab['miasto']; ?>" class="btn btn-primary btn-xs"> Edytuj</a>
            <a href="#"  onClick="delete_town('<?=$tab['miasto']; ?>')" class="btn btn-danger btn-xs"><i class="icon-white icon-minus"></i> Usuń</a>   
            </td>
        </tr>
          <?php endforeach; ?>
        </tbody>
        </table>
             
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->
       
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>

      <script>
      $(document).ready(function () {
      $("#country").keyup(function () {
        $.ajax({
            type: "POST",
            url: "town/GetCountryName",
            data: {
                keyword: $("#country").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#country').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#country').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="presentation" ><a role="menuitem">' + value['miasto'] + '</li>');
                });
            }
        });
    });
            $('ul.txtcountry').on('click', 'li a', function () {
            $('#country').val($(this).text());
            
    });
});

      </script>
      

