<script src="assets/js/jQuery.print.js"></script>
<script src='assets/js/bootstrap3-wysihtml5.all.min.js'></script>
<!-- Bottom Scripts -->
<script src="assets/js/gsap/main-gsap.js"></script>
<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<!-- -datepicker -->
<script type="text/javascript" src="assets/js/bootstrap-datepicker.min.js" charset="UTF-8"></script>
<!-- _____________________________________________________________________ -->
<!-- -dataTables -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.js"></script>
<!-- _____________________________________________________________________ -->
<!-- select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<!-- _____________________________________________________________________ -->
<!-- -calendar -->
<script src='assets/js/calendar/fullcalendar.min.js'></script>
<!-- arabic  -->
<?php if($this->session->userdata('language') == 'arabic'){ ?>
	<script src='assets/js/calendar/locale/ar.js?rand=<?php echo rand(); ?>'></script>
	<?php } else { ?>
		<!-- frensh -->
		<script src='assets/js/calendar/locale/fr.js'></script>
		<?php } ?>
		<!-- _____________________________________________________________________ -->
		<!-- highcharts -->
		<script src="assets/libs/highcharts/code/highcharts.js"></script>
		<script src="assets/libs/highcharts/code/highcharts-3d.js"></script>
		<!-- <script src="assets/libs/highcharts/code/exporting.js"></script> -->
		<!-- _____________________________________________________________________ -->
		<!-- SHOW TOASTR NOTIFIVATION -->
		<?php
		if ($this->session->flashdata('flash_message') != "") {
			$flash_message = $this->session->flashdata('flash_message') ;
			if (is_array($flash_message)){
				$message       = $flash_message['message'];
				if ($flash_message['type'] != '') { $type = $flash_message['type'] ; } else { $type = get_phrase('note') ;}
				?>
				<script type="text/javascript">
				ssi_modal.notify('<?php echo $type ;?>', {
					position: 'left top',
					// backdrop:'shared',outSideClose:true,
					okBtn:{className:'btn btn-primary'},
					content: '<?php echo $message ;?>'
				})
				</script>
				<?php }else{  ?>
					<script type="text/javascript">
					ssi_modal.notify('info', {
						position: 'left top',
						// backdrop:'shared',outSideClose:true,
						okBtn:{className:'btn btn-primary'},
						content: '<?php echo $flash_message ;?>'
					})
					</script>
					<?php  }
				}  ?>
				<script>
				// _____________________________________________________________________
				// datepicker
				$( function() {
					// $( ".datepicker" ).datepicker( $.datepicker.regional[ "arabi" ] );
					$( ".datepicker" ).datepicker( "option", "dateFormat", "mm/dd/yy");
					$(".datepicker").datepicker({
						dateFormat: "mm/dd/yy",
						yearRange: '1950:2050',
						changeMonth: true,
						changeYear: true,
						showOtherMonths: true,
						selectOtherMonths: true
					});
					// _____________________________________________________________________
					// clockpicker
					$('.clockpicker').clockpicker({
						// autoclose: true ,
						placement: 'top',
						align: 'top',
						donetext: 'Done',
						'default': 'now'
					});
					// _____________________________________________________________________
					// colorpicker
					$(function() {
						$('.colorpicker').colorpicker();
					});
				});
				// _____________________________________________________________________
				// select2
				// $("select").select2({
				// 	theme: "classic",
				// 	dir: "<?php echo $direction ;?>",
				// });
				// _____________________________________________________________________
				// Disactivate file inputs :
				<?php  if ($this->session->userdata('demo_version') == 1){ ?>
					$("input").prop('disabled', true);
					$(':input[type="submit"]').prop('disabled', true);
					$("textarea").prop('disabled', true);
					<?php } ?>
					// _____________________________________________________________________
					// ul.dropdown-menu
					$("ul.dropdown-menu").not(".header_bar ul.dropdown-menu").addClass("<?php echo $pull_dir ;?>");
					$("table").addClass("table-bordered");
					// _____________________________________________________________________
					// dataTable
					var datatable = $("#table_export").dataTable({
						"sPaginationType": "bootstrap",
						"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
					});
					$(".dataTables_wrapper select").select2({
						minimumResultsForSearch: -1
					});
					// _____________________________________________________________________
					// Set Input Direction by Language
					$('input, textarea').keyup(function(){
						$this = $(this);
						var x =  new RegExp("[\x00-\x80]+"); // is ascii
						var string = $this.val().charAt(0) ;
						var isAscii = x.test(string);
						if(isAscii) { $this.css("direction", "ltr"); }
						else { $this.css("direction", "rtl"); }
					});
					// _____________________________________________________________________
					</script>
					<!-- <script type="text/javascript" src="assets/js/lazyload.js"></script> -->
					<script type="text/javascript">
					// $('img').each(function(){
					// 	$(this).attr("data-src", $(this).attr('src'));
					// 	$(this).attr('src','assets/images/ellipsis.gif');
					// 	$(this).addClass("lazyload");
					// 	var src = $(this).attr("src");
					// });
					// $('.lazyload').lazy();
					$('.datepicker').attr('readonly', 'readonly');
					$('.clockpicker').attr('readonly', 'readonly');
					$('.colorpicker').attr('readonly', 'readonly');
					$(".full_textarea").wysihtml5();

					$("#print_btn").on('click', function() {
						$.print("#table_export");
					});

					$(".GoAppStore").click(function() {
					  AndroidFunction.GoAppStore();
					});
					</script>
					<!-- _____________________________________________________________________ -->
				<script src='assets/js/jquery.fancybox.min.js'></script>
				<script src="assets/js/multiple-select.js"></script>
				<script>
				$(function() {
				  $('.mselect').change(function() {}).multipleSelect({
				    width: '100%'
				  });
				});
				</script>
