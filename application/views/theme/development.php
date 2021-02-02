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


<div class="modal fade" id="modal-upload_admin_logo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Admin Logo</h4>
            </div>
            <div class="modal-body upload_logo_body">
                <!-- ==== -->
                <form class="box_upload boxupload has-advanced-upload" method="post" action="<?php echo site_url(); ?>schsettings/ajax_editlogo" enctype="multipart/form-data">
                    <input value="1" type="hidden" name="id" id="id_logo_admin"/>
                    <input type="file" name="file" id="file_admin">
                    <!-- Drag and Drop container-->
                    <div class="box__input upload-admin_area"  id="uploadfile_admin">
                        <i class="fa fa-download box__icon"></i>
                        <label><strong>Choose a file</strong><span class="box__dragndrop"> or <span></span>it here</span>.</label>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal-upload_app_logo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit App Logo</h4>
            </div>
            <div class="modal-body upload_logo_body">
                <!-- ==== -->
                <form class="box_upload boxupload has-advanced-upload" method="post" action="<?php echo site_url(); ?>schsettings/ajax_editlogo" enctype="multipart/form-data">
                    <input value="1" type="hidden" name="id" id="id_app_logo"/>
                    <input type="file" name="file" id="file_applogo">
                    <!-- Drag and Drop container-->
                    <div class="box__input upload-app_logo_area"  id="uploadapp_logo">
                        <i class="fa fa-download box__icon"></i>
                        <label><strong>Choose a file</strong><span class="box__dragndrop"> or <span></span>it here</span>.</label>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-upload_admin_small_logo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Admin Small Logo</h4>
            </div>
            <div class="modal-body upload_logo_body">
                <!-- ==== -->
                <form class="box_upload boxupload has-advanced-upload" method="post" action="<?php echo site_url(); ?>schsettings/ajax_editlogo" enctype="multipart/form-data">
                    <input value="1" type="hidden" name="id" id="id_logo_small"/>
                    <input type="file" name="file" id="file_small">
                    <!-- Drag and Drop container-->
                    <div class="box__input upload-small_area"  id="uploadfile_small">
                        <i class="fa fa-download box__icon"></i>
                        <label><strong>Choose a file</strong><span class="box__dragndrop"> or <span></span>it here</span>.</label>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="modal-uploadfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Logo</h4>
            </div>
            <div class="modal-body upload_logo_body">
                <!-- ==== -->
                <form class="box_upload boxupload has-advanced-upload" method="post" action="<?php echo site_url(); ?>schsettings/ajax_editlogo" enctype="multipart/form-data">
                    <input value="1" type="hidden" name="id" id="id_logo"/>
                    <input type="file" name="file" id="file">
                    <!-- Drag and Drop container-->
                    <div class="box__input upload-area"  id="uploadfile">
                        <i class="fa fa-download box__icon"></i>
                        <label><strong>Choose a file</strong><span class="box__dragndrop"> or <span></span>it here</span>.</label>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


<script type="text/javascript">
    var base_url = '<?php echo site_url(); ?>';
    var logo_type = "logo";
    $('.upload_logo').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        logo_type = $this.data('logo_type');

        $this.button('loading');
        $('#modal-uploadfile').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
    });
// set focus when modal is opened
    $('#modal-uploadfile').on('shown.bs.modal', function () {
        $('.upload_logo').button('reset');
    });

    $('.upload_admin_logo').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        logo_type = $this.data('logo_type');
        $this.button('loading');
        $('#modal-upload_admin_logo').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
    });
// set focus when modal is opened
    $('#modal-uploadadmin_logo').on('shown.bs.modal', function () {
        $('.upload_admin_logo').button('reset');
    });

 $('.upload_admin_small_logo').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        logo_type = $this.data('logo_type');

        $this.button('loading');
        $('#modal-upload_admin_small_logo').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
    }); 
// set focus when modal is opened
    $('#modal-upload_admin_small_logo').on('shown.bs.modal', function () {
        $('.upload_admin_small_logo').button('reset');
    });



    $(".edit_setting").on('click', function (e) {
        var $this = $(this);
        $this.button('loading');
        $.ajax({
            url: '<?php echo site_url(); ?>schsettings/ajax_schedit',
            type: 'POST',
            data: $('#schsetting_form').serialize(),
            dataType: 'json',

            success: function (data) {

                if (data.status == "fail") {
                    var message = "";
                    $.each(data.error, function (index, value) {

                        message += value;
                    });
                    errorMsg(message);
                } else {
                    successMsg(data.message);
                    window.location.reload(true);
                }

                $this.button('reset');
            }
        });
    });


</script>


<script type="text/javascript">
    $(function () {



        // Drag enter
        $('.upload-area').on('dragenter', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drag over
        $('.upload-area').on('dragover', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drop
        $('.upload-area').on('drop', function (e) {
            e.stopPropagation();
            e.preventDefault();

            $("h1").text("Upload");

            var file = e.originalEvent.dataTransfer.files;
            var fd = new FormData();

            fd.append('file', file[0]);
            fd.append("id", $('#id_logo').val());
            fd.append("logo_type", logo_type);

            uploadData(fd);
        });

        // Open file selector on div click
        $("#uploadfile").click(function () {
            $("#file").click();
        });

        // file selected
        $("#file").change(function () {
            var fd = new FormData();

            var files = $('#file')[0].files[0];

            fd.append('file', files);
            fd.append("id", $('#id_logo').val());
            fd.append("logo_type", logo_type);
            uploadData(fd);
        });
    });

// Sending AJAX request and upload file
    function uploadData(formdata) {

        $.ajax({
            url: '<?php echo site_url(); ?>schsettings/ajax_editlogo',
            type: 'post',
            data: formdata,
            contentType: false,
            processData: false,
            dataType: 'json',
            cache: false,

            beforeSend: function () {
                $('#modal-uploadfile').addClass('modal_loading');
            },
            success: function (response) {
                if (response.success) {
                    successMsg(response.message);
                    window.location.reload(true);
                } else {

                    errorMsg(response.error.file);
                }

            },
            error: function (xhr) { // if error occured

            },
            complete: function () {
                $('#modal-uploadfile').removeClass('modal_loading');

            }


        });
    }

     $(function () {



        // Drag enter
        $('.upload-small_area').on('dragenter', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drag over
        $('.upload-small_area').on('dragover', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drop
        $('.upload-small_area').on('drop', function (e) {
            e.stopPropagation();
            e.preventDefault();

            $("h1").text("Upload");

            var file = e.originalEvent.dataTransfer.files;
            var fd = new FormData();

            fd.append('file', file[0]);
            fd.append("id", $('#id_logo_small').val());
            fd.append("logo_type", logo_type);

            uploadSmallData(fd);
        });

        // Open file selector on div click
        $("#uploadfile_small").click(function () {
            $("#file_small").click();
        });

        // file selected
        $("#file_small").change(function () {
            var fd = new FormData();

            var files = $('#file_small')[0].files[0];

            fd.append('file', files);
            fd.append("id", $('#id_logo_small').val());
            fd.append("logo_type", logo_type);
            uploadSmallData(fd);
        });
    });

// Sending AJAX request and upload file
    function uploadSmallData(formdata) {

        $.ajax({
            url: '<?php echo site_url(); ?>schsettings/ajax_editadmin_smalllogo',
            type: 'post',
            data: formdata,
            contentType: false,
            processData: false,
            dataType: 'json',
            cache: false,

            beforeSend: function () {
                $('#modal-upload_admin_small_logo').addClass('modal_loading');
            },
            success: function (response) {
                
                if (response.success) {
                    successMsg(response.message);
                    window.location.reload(true);
                } else {

                    errorMsg(response.error.file);
                }

            },
            error: function (xhr) { // if error occured

            },
            complete: function () {
                $('#modal-upload_admin_small_logo').removeClass('modal_loading');

            }


        });
    }

    $(function () {



        // Drag enter
        $('.upload-admin_area').on('dragenter', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drag over
        $('.upload-admin_area').on('dragover', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drop
        $('.upload-admin_area').on('drop', function (e) {
            e.stopPropagation();
            e.preventDefault();

            $("h1").text("Upload");

            var file = e.originalEvent.dataTransfer.files;
            var fd = new FormData();

            fd.append('file', file[0]);
            fd.append("id", $('#id_logo_small').val());
            fd.append("logo_type", logo_type);

            uploadadminlData(fd);
        });

        // Open file selector on div click
        $("#uploadfile_admin").click(function () {
            $("#file_admin").click();
        });

        // file selected
        $("#file_admin").change(function () {
            var fd = new FormData();

            var files = $('#file_admin')[0].files[0];

            fd.append('file', files);
            fd.append("id", $('#id_logo_small').val());
            fd.append("logo_type", logo_type);
            uploadadminData(fd);
        });
    });

// Sending AJAX request and upload file
    function uploadadminData(formdata) {

        $.ajax({
            url: '<?php echo site_url(); ?>schsettings/ajax_editadmin_adminlogo',
            type: 'post',
            data: formdata,
            contentType: false,
            processData: false,
            dataType: 'json',
            cache: false,

            beforeSend: function () {
                $('#modal-upload_admin_logo').addClass('modal_loading');
            },
            success: function (response) {
                
                if (response.success) {
                    successMsg(response.message);
                    window.location.reload(true);
                } else {

                    errorMsg(response.error.file);
                }

            },
            error: function (xhr) { // if error occured

            },
            complete: function () {
                $('#modal-upload_admin_logo').removeClass('modal_loading');

            }


        });
    }

</script>


<script type="text/javascript">
     $('.upload_app_logo').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        logo_type = $this.data('logo_type');

        $this.button('loading');
        $('#modal-upload_app_logo').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
    });
// set focus when modal is opened
    $('#modal-upload_app_logo').on('shown.bs.modal', function () {
        $('.upload_app_logo').button('reset');
    });



 $(function () {



        // Drag enter
        $('.upload-app_logo_area').on('dragenter', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drag over
        $('.upload-app_logo_area').on('dragover', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drop
        $('.upload-app_logo_area').on('drop', function (e) {
            e.stopPropagation();
            e.preventDefault();

            $("h1").text("Upload");

            var file = e.originalEvent.dataTransfer.files;
            var fd = new FormData();

            fd.append('file', file[0]);
            fd.append("id", $('#id_app_logo').val());
            // fd.append("logo_type", logo_type);

            uploadSmallData(fd);
        });

        // Open file selector on div click
        $("#uploadapp_logo").click(function () {
            $("#file_applogo").click();
        });

        // file selected
        $("#file_applogo").change(function () {
            var fd = new FormData();

            var files = $('#file_applogo')[0].files[0];


            fd.append('file', files);
            fd.append("id", $('#id_app_logo').val());
            // fd.append("logo_type", logo_type);
            uploadAppData(fd);
        });
    });

// Sending AJAX request and upload file
    function uploadAppData(formdata) {

        $.ajax({
            url: 'ur;   /schsettings/ajax_applogo',
            type: 'post',
            data: formdata,
            contentType: false,
            processData: false,
            dataType: 'json',
            cache: false,

            beforeSend: function () {
                $('#modal-upload_app_logo').addClass('modal_loading');
            },
            success: function (response) {
                
                if (response.success) {
                    successMsg(response.message);
                    window.location.reload(true);
                } else {

                    errorMsg(response.error.file);
                }

            },
            error: function (xhr) { // if error occured

            },
            complete: function () {
                $('#modal-upload_app_logo').removeClass('modal_loading');

            }


        });
    }


</script>


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

<script type="text/javascript">

    $(document).ready(function () {

    });


    function complete_event(id, status) {

        $.ajax({
            url: "<?php echo site_url(); ?>admin/calendar/markcomplete/" + id,
            type: "POST",
            data: {id: id, active: status},
            dataType: 'json',

            success: function (res)
            {

                if (res.status == "fail") {

                    var message = "";
                    $.each(res.error, function (index, value) {

                        message += value;
                    });
                    errorMsg(message);

                } else {

                    successMsg(res.message);

                    window.location.reload(true);
                }

            }

        });
    }

    function markc(id) {

        $('#newcheck' + id).change(function () {

            if (this.checked) {

                complete_event(id, 'yes');
            } else {

                complete_event(id, 'no');
            }

        });
    }

</script>


<script type="text/javascript">

    function savedata(eventData) {
        var base_url = 'url';
        $.ajax({
            url: base_url + 'admin/calendar/saveevent',
            type: 'POST',
            data: eventData,
            dataType: "json",
            success: function (msg) {
                alert(msg);

            }
        });
    }

    $calendar = $('#calendar');
    var base_url = 'url';
    today = new Date();
    y = today.getFullYear();
    m = today.getMonth();
    d = today.getDate();
    var viewtitle = 'month';
    var pagetitle = "School Setting";

    if (pagetitle == "Dashboard") {

        viewtitle = 'agendaWeek';
    }

    $calendar.fullCalendar({
        viewRender: function (view, element) {
            // We make sure that we activate the perfect scrollbar when the view isn't on Month
            //if (view.name != 'month'){
            //  $(element).find('.fc-scroller').perfectScrollbar();
            //}
        },

        header: {
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
            left: 'prev,next,today'
        },
        defaultDate: today,
        defaultView: viewtitle,
        selectable: true,
        selectHelper: true,
        views: {
            month: {// name of view
                titleFormat: 'MMMM YYYY'
                        // other view-specific options here
            },
            week: {
                titleFormat: " MMMM D YYYY"
            },
            day: {
                titleFormat: 'D MMM, YYYY'
            }
        },
        timezone: "Asia/Kolkata",
        draggable: false,
         lang: 'en',
        editable: false,
        eventLimit: false, // allow "more" link when too many events


        // color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
        events: {
            url: base_url + 'admin/calendar/getevents'

        },

        eventRender: function (event, element) {
            element.attr('title', event.title);
            element.attr('onclick', event.onclick);
            element.attr('data-toggle', 'tooltip');
            if ((!event.url) && (event.event_type != 'task')) {
                element.attr('title', event.title + '-' + event.description);
                element.click(function () {
                    view_event(event.id);
                });
            }
        },
        dayClick: function (date, jsEvent, view) {
            var d = date.format();
            if (!$.fullCalendar.moment(d).hasTime()) {
                d += ' 05:30';
            }
            //var vformat = (app_time_format == 24 ? app_date_format + ' H:i' : app_date_format + ' g:i A');


                $("#input-field").val('');
                $("#desc-field").text('');
                $("#date-field").daterangepicker({
                    startDate: date,
                    endDate: date,
                    timePicker: true, timePickerIncrement: 5, locale: {
                        format: 'MM/DD/YYYY hh:mm a'
                    }
                });
                $('#newEventModal').modal('show');

            return false;
        }

    });

    $(document).ready(function () {
        $("#date-field").daterangepicker({timePicker: true, timePickerIncrement: 5, locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }});


    });

    function datepic() {
        $("#date-field").daterangepicker();
    }
    function view_event(id) {
        
        $('.selectevent').find('.cpicker-big').removeClass('cpicker-big').addClass('cpicker-small');
        var base_url = 'url';
        if (typeof (id) == 'undefined') {
            return;
        }
        $.ajax({
            url: base_url + 'admin/calendar/view_event/' + id,
            type: 'POST',
            //data: '',
            dataType: "json",
            success: function (msg) {


                $("#event_title").val(msg.event_title);
                $("#event_desc").text(msg.event_description);
                $('#eventdates').val(msg.start_date + '-' + msg.end_date);
                $('#eventid').val(id);
                if (msg.event_type == 'public') {

                    $('input:radio[name=eventtype]')[0].checked = true;

                } else if (msg.event_type == 'private') {
                    $('input:radio[name=eventtype]')[1].checked = true;

                } else if (msg.event_type == 'sameforall') {
                    $('input:radio[name=eventtype]')[2].checked = true;

                } else if (msg.event_type == 'protected') {
                    $('input:radio[name=eventtype]')[3].checked = true;

                }
                // $("#red#28B8DA").removeClass('cpicker-big').addClass('cpicker-small');

                //$(this).removeClass('cpicker-small', 'fast').addClass('cpicker-big', 'fast');
                $("#eventdates").daterangepicker({
                    startDate: msg.startdate,
                    endDate: msg.enddate,
                    timePicker: true, timePickerIncrement: 5, locale: {
                        format: 'MM/DD/YYYY hh:mm A'
                    }
                });
                $("#event_color").val(msg.event_color);
                $("#delete_event").attr("onclick", "deleteevent(" + id + ",'Event')")

                // $("#28B8DA").removeClass('cpicker-big').addClass('cpicker-small');
                $("#" + msg.colorid).removeClass('cpicker-small').addClass('cpicker-big');
                $('#viewEventModal').modal('show');
            }
        });


    }

    $(document).ready(function (e) {
        $("#addevent_form").on('submit', (function (e) {

            e.preventDefault();
            $.ajax({
                url: "url/admin/calendar/saveevent",
                type: "POST",
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res)
                {

                    if (res.status == "fail") {

                        var message = "";
                        $.each(res.error, function (index, value) {

                            message += value;
                        });
                        errorMsg(message);

                    } else {

                        successMsg(res.message);

                        window.location.reload(true);
                    }
                }
            });
        }));


    });


    $(document).ready(function (e) {
        $("#updateevent_form").on('submit', (function (e) {

            e.preventDefault();
            $.ajax({
                url: "url/admin/calendar/updateevent",
                type: "POST",
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res)
                {

                    if (res.status == "fail") {

                        var message = "";
                        $.each(res.error, function (index, value) {

                            message += value;
                        });
                        errorMsg(message);

                    } else {

                        successMsg(res.message);

                        window.location.reload(true);
                    }
                }
            });
        }));


    });

    function deleteevent(id, msg) {
        if (typeof (id) == 'undefined') {
            return;
        }
        if (confirm("Are you sure to delete this " + msg + " !")) {
            $.ajax({
                url: base_url + 'admin/calendar/delete_event/' + id,
                type: 'POST',
                //data: '',
                dataType: "json",
                success: function (res) {
                    if (res.status == "fail") {



                        errorMsg(res.message);

                    } else {

                        successMsg(msg + " Deleted Succssfully.");

                        window.location.reload(true);
                    }
                }

            })
        }

    }


    $("body").on('click', '.cpicker', function () {
        var color = $(this).data('color');
        // Clicked on the same selected color
        if ($(this).hasClass('cpicker-big')) {
            return false;
        }

        $(this).parents('.cpicker-wrapper').find('.cpicker-big').removeClass('cpicker-big').addClass('cpicker-small');
        $(this).removeClass('cpicker-small', 'fast').addClass('cpicker-big', 'fast');
        if ($(this).hasClass('kanban-cpicker')) {
            $(this).parents('.panel-heading-bg').css('background', color);
            $(this).parents('.panel-heading-bg').css('border', '1px solid ' + color);
        } else if ($(this).hasClass('calendar-cpicker')) {
            $("body").find('input[name="eventcolor"]').val(color);
        }
    });



          $(document).ready(function () {
            
        $("body").delegate(".date", "focusin", function () {
        var date_format = 'mm/dd/yyyy';

        $(this).datepicker({
                todayHighlight: false,
                format: date_format,
                autoclose: true,
                language: 'en'
            });
        });

        var datetime_format = 'MM/DD/YYYY h:mm A';
        $("body").delegate(".datetime", "focusin", function () {
            $(this).datetimepicker({
                format: datetime_format,
                locale:
                        'en',

            });
        });
           // loadDate();
          });

        function loadDate(){

            var date_format = 'mm/dd/yyyy';

            $('.date').datetimepicker({
                format: datetime_format,
                locale:
                        'en',

            });
        }

        showdate('this_year');

       function showdate(type){
        
                    var date_from='06/27/2020';
             var date_to='06/27/2020';
                   
        if(type=='period'){

               $.ajax({
                url: base_url+'Report/get_betweendate/'+type,
                type: 'POST', 
              data:{date_from:date_from,date_to:date_to},
                success: function (res) {
                     
                  $('#date_result').html(res);

                  loadDate();
                }


            });

        }else{
            $('#date_result').html('');
        }
    

    }
</script>


