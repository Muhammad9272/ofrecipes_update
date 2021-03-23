<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<script src="assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script type="text/javascript">
			  var mainurl = "{{url('/')}}";
			  var admin_loader = {{ $gs->is_admin_loader }};
         var area2;
</script>



<script src="{{ asset('assets/admin_assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->


<script src="{{asset('assets/admin_assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js')}}" type="text/javascript"></script>

   {{--   CK editor    --}}
       {{--  <script src="{{asset('assets/admin_assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script> --}}

      


<!-- BEGIN PAGE LEVEL PLUGINS -->
      



          <script src="{{ asset('assets/admin_assets/global/plugins/bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>
         <script src="{{ asset('assets/admin_assets/pages/scripts/ui-toastr.min.js')}}" type="text/javascript"></script>

                   <!-- BEGIN THEME GLOBAL SCRIPTS -->
          <script src="{{ asset('assets/admin_assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
          <!-- END THEME GLOBAL SCRIPTS -->

@section('pagelevel_scripts')
@show
<!-- END PAGE LEVEL PLUGINS -->




<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/admin_assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

<script src="{{ asset('assets/admin_assets/pages/scripts/components-editors.min.js')}}" type="text/javascript"></script>

 <script src="{{ asset('assets/admin_assets/pages/scripts/ui-confirmations.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('assets/admin_assets/layouts/layout4/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/layouts/layout4/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<script src="{{ asset("assets/admin_assets/myscript.js") }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>

<script src="{{ asset('assets/admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin_assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>

  <script type="text/javascript" src="{{ asset('assets/admin_assets/nicEdit.js')}}"></script> 
{{--   <script type="text/javascript">
    $('.nic-edit').summernote();
  </script> --}}


<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>





<!--  detail_desc  -->
<script>
$(document).ready(function() {

      $('.detail_desc').summernote({
          height: ($(window).height() - 300),
          focus: true,
          buttons: {
              filemanager: filemanager.btnSummernote
          },
          toolbar: [
              ['style', ['bold', 'italic', 'underline']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['fontsize', ['fontsize']],
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough', 'superscript', 'subscript']],
              ['height', ['height']],            
              ['table', ['table']],
              ['view', ['fullscreen', 'codeview', 'help']],

              ['custom', ['picture', 'filemanager']]
          ],
      });
      
      $('.r-equipment').summernote({
          height: ($(window).height() - 300),
          buttons: {
              filemanager: filemanager.btnSummernote
          },
          toolbar: [
              ['style', ['bold', 'italic', 'underline']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['fontsize', ['fontsize']],
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough', 'superscript', 'subscript']],
              ['height', ['height']],            
              ['table', ['table']],
              ['view', ['fullscreen', 'codeview', 'help']],

              ['custom', ['picture', 'filemanager']]
          ],
      });

      $('.r-instruction').summernote({
          height: ($(window).height() - 300),
          buttons: {
              filemanager: filemanager.btnSummernote
          },
          toolbar: [
              ['style', ['bold', 'italic', 'underline']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['fontsize', ['fontsize']],
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough', 'superscript', 'subscript']],
              ['height', ['height']],            
              ['table', ['table']],
              ['view', ['fullscreen', 'codeview', 'help']],

              ['custom', ['picture', 'filemanager']]
          ],
      });

      $('.r-nutrition').summernote({
          height: ($(window).height() - 300),
          buttons: {
              filemanager: filemanager.btnSummernote
          },
          toolbar: [
              ['style', ['bold', 'italic', 'underline']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['fontsize', ['fontsize']],
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough', 'superscript', 'subscript']],
              ['height', ['height']],            
              ['table', ['table']],
              ['view', ['fullscreen', 'codeview', 'help']],

              ['custom', ['picture', 'filemanager']]
          ],
      });
      $('.r-notes').summernote({
          height: ($(window).height() - 300),
          buttons: {
              filemanager: filemanager.btnSummernote
          },
          toolbar: [
              ['style', ['bold', 'italic', 'underline']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['fontsize', ['fontsize']],
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough', 'superscript', 'subscript']],
              ['height', ['height']],            
              ['table', ['table']],
              ['view', ['fullscreen', 'codeview', 'help']],

              ['custom', ['picture', 'filemanager']]
          ],
      });
      $('.nic-edit').summernote({
          height: ($(window).height() - 300),
          buttons: {
              filemanager: filemanager.btnSummernote
          },
          toolbar: [
              ['style', ['bold', 'italic', 'underline']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['fontsize', ['fontsize']],
              ['style', ['bold', 'italic', 'underline', 'clear']],
              ['font', ['strikethrough', 'superscript', 'subscript']],
              ['height', ['height']],            
              ['table', ['table']],
              ['view', ['fullscreen', 'codeview', 'help']],

              ['custom', ['picture', 'filemanager']]
          ],
      });

      window.addEventListener('filemanager.select', function (e) {
          var data = e.detail.data;
          $(data.note).summernote('editor.insertImage', data.absolute_url)
      })

  })
</script>
<!--  detail_desc  -->




<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {


        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });


        $(".seocheck").on( "change", function() {
            if(this.checked){
             $('#seofield').removeClass('seofields');
             
            }
            else{
              $('#seofield').addClass('seofields');
              
              
            }

          });

        $('.gl_item').find('ng-scope').addClass('j767tyut');
    })
</script>




