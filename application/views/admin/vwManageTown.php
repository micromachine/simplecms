<?php
$this->load->view('admin/vwHeader');
?>

      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Słownik <small> miast polskich</small></h1>
            <ol class="breadcrumb">
        <form>
            <input type="text" id="country" autocomplete="off" name="country" class="form-control" placeholder="np: Leszno"> 
            <input type="text" id="id_town" autocomplete="off" name="id_town" class="form-control" > 
            
            <a href="#"  onClick="edit_town()" class="btn btn-primary btn-xs"><i class="icon-white icon-minus"></i> Edytuj</a>   
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
                    $('#DropdownCountry').append('<li role="presentation"><a role="menuitem">' + value['miasto'],value['wojewodztwo'] +'</li>');
                       
                });
            }
        });
    });
            $('ul.txtcountry').on('click', 'li a', function () {
            $('#country').val($(this).text());
            


    });
});
    /*
    function edit_town(){
            var name = $("input").val();
            var checkstr =  confirm('Na pewno edytować  miasto : '+ name);
            if(checkstr == true){
            var faction = "<?=site_url('admin/town/edit')?>";
            $.ajax({
                url: faction,
                type: "POST",
                dataType: "text",
                data: {name: name},
                success: function(name){
                    $('#successMessage').html("<b> Edycja zakończona pomyślenie?</b> ");
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
       
     function edit_town(){
     var faction = "<?=site_url('admin/town/edit')?>";
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
                 //location.href = "<?=site_url('admin/voivodeship')?>";
                 //}, 800);
               
        },
        error: function() {
                $('#errorMessage').html("<b> Edycja nie przebiegła poprawnie</b>");
                $('#error').show();

        }
    });
         
     }
     
    
    
    
      </script>
      

