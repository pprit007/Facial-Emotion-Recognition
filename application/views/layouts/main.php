<?php
$chheckcred = $this->db->get('logins',array('idlogins'=>$this->session->userdata('uid')));
if($this->session->userdata('uid')!="" && !empty($chheckcred)){
    $theme = $this->db->get_where('theme',array('idtheme'=>1))->row_array();
    ?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CGS</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta http-equiv="Cache-control" content="no-cache">
        <meta name="theme-color" content="#424242" />
       <link href="" rel="shortcut icon" type="image/x-icon">
        
        <link rel="stylesheet" href="<?php echo site_url();?>interface/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/dist/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/dist/css/style-main.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/dist/themes/blue/skins/skin-darkblue.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/dist/themes/blue/ss-main-darkblue.css">
           
        <link rel="stylesheet" href="<?php echo site_url();?>interface/dist/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/plugins/iCheck/flat/blue.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/plugins/morris/morris.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/plugins/colorpicker/bootstrap-colorpicker.css">

        <link rel="stylesheet" href="<?php echo site_url();?>interface/plugins/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <link rel="stylesheet" href="<?php echo site_url();?>interface/dist/css/custom_style.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/datepicker/css/bootstrap-datetimepicker.css">
        <!--file dropify-->
        <link rel="stylesheet" href="<?php echo site_url();?>interface/dist/css/dropify.min.css">
        <!--file nprogress-->
        <link href="<?php echo site_url();?>interface/dist/css/nprogress.css" rel="stylesheet">

        <!--print table-->
        <link href="<?php echo site_url();?>interface/dist/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="<?php echo site_url();?>interface/dist/datatables/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="<?php echo site_url();?>interface/dist/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <!--print table mobile support-->
        <link href="<?php echo site_url();?>interface/dist/datatables/css/responsive.dataTables.min.css" rel="stylesheet">
        <link href="<?php echo site_url();?>interface/dist/datatables/css/rowReorder.dataTables.min.css" rel="stylesheet">

        <!--language css-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>interface/dist/css/bootstrap-select.min.css">


        <script src="<?php echo site_url();?>interface/custom/jquery.min.js"></script>
        <script src="<?php echo site_url();?>interface/dist/js/moment.min.js"></script>
        <script src="<?php echo site_url();?>interface/datepicker/js/bootstrap-datetimepicker.js"></script>
        <script src="<?php echo site_url();?>interface/plugins/colorpicker/bootstrap-colorpicker.js"></script>
        <script src="<?php echo site_url();?>interface/datepicker/date.js"></script>
        <script src="<?php echo site_url();?>interface/dist/js/jquery-ui.min.js"></script>
        <script src="<?php echo site_url();?>interface/js/school-custom.js"></script>
        <script src="<?php echo site_url();?>interface/js/school-admin-custom.js"></script>
        <script src="<?php echo site_url();?>interface/js/sstoast.js"></script>
         
        <!-- fullCalendar -->
        <link rel="stylesheet" href="<?php echo site_url();?>interface/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="<?php echo site_url();?>interface/fullcalendar/dist/fullcalendar.print.min.css" media="print">
       

  <style type="text/css">
        span.flag-icon.flag-icon-us{text-orientation: mixed;}
  </style>
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">


  
<script>

    function collapseSidebar() {

        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
        sessionStorage.setItem('sidebar-toggle-collapsed', '');
        } else {
        sessionStorage.setItem('sidebar-toggle-collapsed', '1');
        }

        }

    function checksidebar() {
        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
        var body = document.getElementsByTagName('body')[0];
        body.className = body.className + ' sidebar-collapse';
        }
    }

    checksidebar();

</script> 
       <div class="wrapper">

           <header class="main-header" id="alert">
                <a href="<?php echo site_url('dashboard'); ?>" class="logo" style="background:<?php echo $theme['left_nav']; ?>">
                    <span class="logo-mini"><img src="<?php echo site_url('interface/'.$theme['icon']); ?>" alt="<?php echo $theme['project']; ?>" /></span>
                    <span class="logo-lg"><img src="<?php echo site_url('interface/'.$theme['icon']); ?>" alt="<?php echo $theme['project']; ?>" /></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation" style="background:<?php echo $theme['main_nav']; ?>">
                    <a onclick="collapseSidebar()"  class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="col-lg-5 col-md-3 col-sm-2 col-xs-5">
                        <span href="#"  class="sidebar-session" style="color:white">
                           <?php echo $theme['project']; ?>                                            
                        </span>
                    </div>
                    <div class="col-lg-7 col-md-9 col-sm-10 col-xs-7">
                        <div class="pull-right">
<!--                                 <div class="navbar-form navbar-left search-form">
                                    <div class="input-group">
                                        <input type="text" name="mobile" id="autouser3" class="form-control search-form search-form3" placeholder="Search Lead" >
                                        <span class="input-group-btn">
                                            <button type="submit" name="search" id="search-btn" style="" class="btn btn-flat topsidesearchbtn"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                 </div>-->
                            
                                <div class="navbar-custom-menu">
                                        
                                <ul class="nav navbar-nav headertopmenu">
                                             
                                                          
                                        <li class="dropdown user-menu">
                                        <a class="dropdown-toggle" style="padding: 15px 13px;" data-toggle="dropdown" href="#" aria-expanded="false">
                                            <img src="<?php echo site_url(); ?>interface/user.png" class="topuser-image" alt="User Image">
                                        </a>
                                        <ul class="dropdown-menu dropdown-user menuboxshadow">
                                            <li>
                                                <div class="sstopuser">
                                                    <div class="sstopuser-test">
                                                        <center><h5 style="text-transform: capitalize;"><?php echo $this->session->userdata('uname'); ?></h5></center>
                                                     
                                                    </div>

                                                    <div class="divider"></div>
                                                    <div class="sspass">
                                                        <a href="<?php echo site_url('change-password'); ?>" data-toggle="tooltip" title="" data-original-title="My Profile"><i class="fa fa-user"></i>Profile</a>
                                                        <a class="pl25" href="<?php echo site_url('change-password'); ?>" data-toggle="tooltip" title="" data-original-title="Change Password"><i class="fa fa-key"></i>Password</a> <a class="pull-right" href="<?php echo site_url('sign-out'); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                                                    </div>
                                                </div><!--./sstopuser-->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
           <style>
               .treeview:hover{
                   color: orange;
               }
           </style>
            <aside class="main-sidebar" id="alert2">
                <section class="sidebar" id="sibe-box" style="background-color:<?php echo $theme['submenu'] ?>">
        <ul class="sessionul fixedmenu">
      <script type="text/javascript">
            var baseurl = "<?php echo site_url(); ?>";
            var chk_validate="29RU9D-RKW698-EQJMJ7-dHVybmIrbldVN0hLdlJiQ010WEYzczdmTjQrRmFFT1dCNmJzYjNDNzlhOD0=";

        </script>
    <li class="dropdown">
        <a class="dropdown-toggle drop5" data-toggle="dropdown" href="#" aria-expanded="false">
            <span>Quick Links</span> <i class="fa fa-th pull-right ftlayer"></i>
        </a>
           
        <ul class="dropdown-menu verticalmenu" style="min-width:194px;font-size:10pt;left:3px;">
            <?php 
                    foreach($this->session->userdata('uroles') as $roles)
                    { ?>
                        <li role="presentation">
                        <a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;text-decoration:<?php echo ($roles['LHRs_IdRole'] == $this->session->userdata('urole'))?'underline':''; ?>" role="menuitem" tabindex="-1"  href="<?php echo site_url('change-role/'.$this->uricryption->encode($roles['LHRs_IdRole'])); ?>">
                            <i class="fa fa-user-plus"></i> <?php echo $roles['RoleName']; ?>
                          </a>
                        </li>                      
                  <?php } ?>
        </ul>
    </li>
</ul>  
        <ul class="sidebar-menu verttop">
          <?php $this->menulib->get_menu(); ?>  
        </ul>
    </section>
</aside>         
<style type="text/css">
  .wrapper {overflow: visible;}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php                    
                if(isset($_view) && $_view)
                $this->load->view($_view);
            ?>  
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php $this->load->view('theme/toast_alert'); ?>
<footer class="main-footer">
    &copy;  <?php echo date("Y"); ?> 
    <?php echo $theme['developer']; ?>
</footer>
<div class="control-sidebar-bg"></div>
</div>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<link href="<?php echo site_url();?>interface/toast-alert/toastr.css" rel="stylesheet"/>
<script src="<?php echo site_url();?>interface/toast-alert/toastr.js"></script>
<script src="<?php echo site_url();?>interface/bootstrap/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="<?php echo site_url();?>interface/plugins/select2/select2.min.css">
<script src="<?php echo site_url();?>interface/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo site_url();?>interface/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo site_url();?>interface/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo site_url();?>interface/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?php echo site_url();?>interface/dist/js/moment.min.js"></script>
<script src="<?php echo site_url();?>interface/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo site_url();?>interface/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo site_url();?>interface/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo site_url();?>interface/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo site_url();?>interface/dist/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!--language js-->
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/js/bootstrap-select.min.js"></script>

 <script type="text/javascript">
    $(function(){
      $('.languageselectpicker').selectpicker();
   });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".studentsidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('.studentsideclose, .overlay').on('click', function () {
            $('.studentsidebar').removeClass('active');
            $('.overlay').fadeOut();
        });

        $('#sidebarCollapse').on('click', function () {
            $('.studentsidebar').addClass('active');
            $('.overlay').fadeIn();
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>


<script src="<?php echo site_url();?>interface/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo site_url();?>interface/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo site_url();?>interface/datepicker/js/bootstrap-datetimepicker.js"></script>

<script src="<?php echo site_url();?>interface/plugins/chartjs/Chart.min.js"></script>
<script src="<?php echo site_url();?>interface/plugins/fastclick/fastclick.min.js"></script>
<!-- <script type="text/javascript" src="backend/dist/js/bootstrap-filestyle.min.js"></script> -->
<script src="<?php echo site_url();?>interface/dist/js/app.min.js"></script>

<!--nprogress-->
<script src="<?php echo site_url();?>interface/dist/js/nprogress.js"></script>
<!--file dropify-->
<script src="<?php echo site_url();?>interface/dist/js/dropify.min.js"></script>
<!-- <script src="<?php echo site_url();?>interface/dist/datatables/js/moment.min.js"></script> -->
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/buttons.colVis.min.js" ></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/dataTables.responsive.min.js" ></script>
<script type="text/javascript" src="<?php echo site_url();?>interface/dist/datatables/js/ss.custom.js" ></script>
<!-- <script src="<?php echo site_url();?>interface/dist/datatables/js/datetime-moment.js"></script>
 -->
</body>
</html>
<!-- jQuery 3 -->
<!--script src="<?php echo site_url();?>interface/dist/js/pages/dashboard2.js"></script-->
<script src="<?php echo site_url();?>interface/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?php echo site_url();?>interface/fullcalendar/dist/locale-all.js"></script>
<script src="<?php echo site_url();?>interface/plugins/ckeditor/ckeditor.js"></script>

<!--Duplicate Leads and Leads Finder-->
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 
  <?php // $this->load->view('theme/development'); ?>
<script type='text/javascript'>
    $(document).ready(function(){
     $("#autouser").autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?php echo site_url('Ajax/duplicate_lead'); ?>",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#autouser').val(ui.item.label); // display the selected text
          //$('#userid').val(ui.item.value); // save selected id to input
          return false;
        }
      });

    });
    </script>
<script type='text/javascript'>
    $(document).ready(function(){
     $("#autouser1").autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?php echo site_url('Ajax/duplicate_lead'); ?>",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#autouser1').val(ui.item.label); // display the selected text
          //$('#userid').val(ui.item.value); // save selected id to input
          return false;
        }
      });

    });
    </script>
<script type='text/javascript'>
    $(document).ready(function(){
     $("#autouser3").autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?php echo site_url('Ajax/duplicate_lead'); ?>",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#autouser3').val(ui.item.label); // display the selected text
          //$('#userid').val(ui.item.value); // save selected id to input
          return false;
        }
      });

    });
    </script>
    
    
    <script type='text/javascript'>
    $(document).ready(function(){
     $( "#Comp_Name" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?php echo site_url('Ajax/companies'); ?>",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#Comp_Name').val(ui.item.label); // display the selected text
//          $('#userid').val(ui.item.value); // save selected id to input
          return false;
        }
      });

    });
    </script>
    <script>

    $(document).ready(function () {
        var popup_target = 'media_images';
        

        CKEDITOR.replace('editor1',
                {
                    allowedContent: true
                });
        CKEDITOR.replace('editor2',
                {
                    allowedContent: true
                });
        CKEDITOR.replace('editor3',
                {
                    allowedContent: true
                });
        $('#mediaModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: false
        });
        $(document).on('click', '.feture_image_btn', function (event) {

            $("#mediaModal").modal('toggle', $(this));
        });
        $('#mediaModal').on('show.bs.modal', function (event) {
            var a = $(event.relatedTarget) // Button that triggered the modal
            popup_target = a[0].id;
            var button = $(event.relatedTarget) // Button that triggered the modal
            console.log(button);
            var $modalDiv = $(event.delegateTarget);
            $('.modal-media-body').html("");
            $.ajax({
                type: "POST",
                url: baseurl + "admin/front/media/getMedia",
                dataType: 'text',
                data: {},
                beforeSend: function () {

                    $modalDiv.addClass('modal_loading');
                },
                success: function (data) {
                    $('.modal-media-body').html(data);
                },
                error: function (xhr) { // if error occured
                    $modalDiv.removeClass('modal_loading');
                },
                complete: function () {
                    $modalDiv.removeClass('modal_loading');
                },
            });
        });

        $('.detail_popover').popover({
            placement: 'right',
            trigger: 'hover',
            container: 'body',
            html: true,
            content: function () {
                return $(this).closest('td').find('.fee_detail_popover').html();
            }
        });





        $(document).on('click', '.img_div_modal', function (event) {
            $('.img_div_modal div.fadeoverlay').removeClass('active');
            $(this).closest('.img_div_modal').find('.fadeoverlay').addClass('active');

        });

        $(document).on('click', '.add_media', function (event) {
            var content_html = $('div#media_div').find('.fadeoverlay.active').find('img').data('img');
            var is_image = $('div#media_div').find('.fadeoverlay.active').find('img').data('is_image');
            var content_name = $('div#media_div').find('.fadeoverlay.active').find('img').data('content_name');
            var content_type = $('div#media_div').find('.fadeoverlay.active').find('img').data('content_type');
            var vid_url = $('div#media_div').find('.fadeoverlay.active').find('img').data('vid_url');
            var content = "";

            if (popup_target === "media_images") {
                if (typeof content_html !== "undefined") {
                    if (is_image === 1) {
                        content = '<img src="' + content_html + '">';
                    } else if (content_type == "video") {

                        var youtubeID = YouTubeGetID(vid_url);


                        content = '<iframe id="video" width="420" height="315" src="//www.youtube.com/embed/' + youtubeID + '?rel=0" frameborder="0" allowfullscreen></iframe>';

                    } else {
                        content = '<a href="' + content_html + '">' + content_name + '</a>';

                    }
                    InsertHTML(content);
                    $('#mediaModal').modal('hide');
                }
            } else {
                if (is_image === 1) {


                    addImage(content_html);
                } else {
                    //error show  
                }
                $('#mediaModal').modal('hide');
            }

        });

        $(document).on("click", ".pagination li a", function (event) {
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_country_data(page);
        });
    });

    function YouTubeGetID(url) {
        var ID = '';
        url = url.replace(/(>|<)/gi, '').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
        if (url[2] !== undefined) {
            ID = url[2].split(/[^0-9a-z_\-]/i);
            ID = ID[0];
        } else {
            ID = url;
        }
        return ID;
    }
    function addImage(content_html) {
        $('.feature_image_url').attr('src', content_html);
        $('#image').val(content_html);
        $('#image_preview').css("display", "block");
    }

    $(document).on('click', '.delete_media', function () {
        $('.feature_image_url').attr('src', '');
        $('#image').val('');
        $('#image_preview').css("display", "none");
    });

    function InsertHTML(content_html) {
        // Get the editor instance that we want to interact with.
        var editor = CKEDITOR.instances.editor1;


        // Check the active editing mode.
        if (editor.mode == 'wysiwyg')
        {
            editor.insertHtml(content_html);
        } else
            alert('You must be in WYSIWYG mode!');
    }


    $(document).on('keyup change', '#title', function () {
        var str = $(this).val();

        var url = string_to_slug(str);
        $('#url').val(url);
    });

    function string_to_slug(str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to = "aaaaeeeeiiiioooouuuunc------";
        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

        return str;
    }
</script>
<?php }else{
     redirect('sign-in');
} ?>