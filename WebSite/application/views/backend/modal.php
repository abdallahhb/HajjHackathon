<style>
.popover {
  z-index: 999999;
}
</style>
<script type="text/javascript">
function showAjaxModal(url)
{
  // SHOWING AJAX PRELOADER IMAGE
  jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><h3><?php echo get_phrase('please_wait_alert') ;?><br><br><img src="assets/images/loader.gif" /></h3></div>');

  // LOADING THE AJAX MODAL
  jQuery('#modal_ajax').modal('show', {backdrop: 'true'});

  // SHOW AJAX RESPONSE ON REQUEST SUCCESS
  $.ajax({
    url: url,
    success: function(response)
    {
      // scroll(0, 0);
      jQuery('#modal_ajax .modal-body').html(response);
      $( ".datepicker" ).datepicker( "option", "dateFormat", "mm/dd/yy");
      $(".datepicker").datepicker({
        dateFormat: "mm/dd/yy",
        yearRange: '1950:2050',
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
        selectOtherMonths: true
      });
      $('.colorpicker').colorpicker();
      $('.clockpicker').clockpicker({
        // autoclose: true ,
        placement: 'top',
        align: 'top',
        donetext: 'Done',
        'default': 'now'
      });
      $('.datepicker').attr('readonly', 'readonly');
      $('.clockpicker').attr('readonly', 'readonly');
      $('.colorpicker').attr('readonly', 'readonly');
      $(".full_textarea").wysihtml5();
      // _____________________________________________________________________
      // Disactivate file inputs :
      <?php  if ($this->session->userdata('demo_version') == 1){ ?>
        $("input").prop('disabled', true);
        $(':input[type="submit"]').prop('disabled', true);
        $("textarea").prop('disabled', true);
        <?php } ?>
        // _____________________________________________________________________
      }
    });
  }
</script>
<!--_____________________________________________________________________________________________________-->
<div class="modal fade" id="signup_doctor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title"><?php echo get_phrase('Vous_Etre ?');?></h2>
      </div>
      <div class="modal-body">
        <div class="row text-center">
          <div class="col-md-6">
            <a href="<?php echo base_url() . 'index.php?registration/signup_doctor_installed'; ?>" class="btn btn-success" name="button">Medcin Installé ?</a>
          </div>
          <div class="col-md-6">
            <a href="<?php echo base_url() . 'index.php?registration/signup_doctor_replaced'; ?>"class="btn btn-success" name="button">Medcin Remplaçant ?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--_____________________________________________________________________________________________________-->
<div class="modal fade" id="signup_type_choose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close text-" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title"><?php echo get_phrase('Are you ?');?></h2>
      </div>
      <div class="modal-body">
        <div class="row text-center">
          <div class="col-md-6">
            <a href="<?php echo base_url() . 'index.php?registration/signup_hajjaj'; ?>" class="btn btn-default" name="button">
              <img class="syspics" src="uploads/images/hajjaj.jpg" alt="" style="height:50px;vertical-align:middle;"/>&nbsp
              Rahman Guest
            </a>
          </div>
          <div class="col-md-6">
            <a href="<?php echo base_url() . 'index.php?registration/signup'; ?>"class="btn btn-default" name="button">
              <img class="syspics" src="uploads/images/agency.png" alt="" style="height:50px;vertical-align:middle;"/>&nbsp
              Sectors
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
