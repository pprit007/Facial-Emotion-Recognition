<section class="row"  hidden>
    <div class="well row">
        <div class="row">
          
            <div class="span2">
                <div class="control-group">
                    <div class="controls">
                        <label class="control-label" for="showEasing">Show Easing</label>
                        <input id="showEasing" type="text" placeholder="swing, linear" class="input-mini" value="swing" />

                        <label class="control-label" for="hideEasing">Hide Easing</label>
                        <input id="hideEasing" type="text" placeholder="swing, linear" class="input-mini" value="linear" />

                        <label class="control-label" for="showMethod">Show Method</label>
                        <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="input-mini" value="fadeIn" />

                        <label class="control-label" for="hideMethod">Hide Method</label>
                        <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="input-mini" value="fadeOut" />
                    </div>
                </div>
            </div>

            <div class="span3">
                <div class="control-group">
                    <div class="controls">
                        <label class="control-label" for="showDuration">Show Duration</label>
                        <input id="showDuration" type="number" placeholder="ms" class="input-mini" value="300"     />

                        <label class="control-label" for="hideDuration">Hide Duration</label>
                        <input id="hideDuration" type="number" placeholder="ms" class="input-mini" value="1000" />

                        <label class="control-label" for="timeOut">Time out</label>
                        <input id="timeOut" type="number" placeholder="ms" class="input-mini" value="5000" />

                        <label class="control-label" for="extendedTimeOut">Extended time out</label>
                        <input id="extendedTimeOut" type="number" placeholder="ms" class="input-mini" value="1000" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    $(function () {
        var i = -1;
        var toastCount = 0;
        var $toastlast;
        
        var getMessage = function () {
            var msgs = ['<?php echo $this->session->flashdata('msg'); ?>'];
            i++;
            if (i === msgs.length) {
                i = 0;
            }

            return msgs[i];
        };

        var getMessageWithClearButton = function (msg) {
            msg = msg ? msg : 'Clear itself?';
            msg += '<br /><br /><button type="button" class="btn clear">Yes</button>';
            return msg;
        };

        $('#closeButton').click(function() {
            if($(this).is(':checked')) {
                $('#addBehaviorOnToastCloseClick').prop('disabled', false);
            } else {
                $('#addBehaviorOnToastCloseClick').prop('disabled', true);
                $('#addBehaviorOnToastCloseClick').prop('checked', false);
            }
        });

        function abc(co) {
            var shortCutFunction = co;
            var msg = $('#message').val();
            var title = $('#title').val() || '';
            var $showDuration = $('#showDuration');
            var $hideDuration = $('#hideDuration');
            var $timeOut = $('#timeOut');
            var $extendedTimeOut = $('#extendedTimeOut');
            var $showEasing = $('#showEasing');
            var $hideEasing = $('#hideEasing');
            var $showMethod = $('#showMethod');
            var $hideMethod = $('#hideMethod');
            var toastIndex = toastCount++;
            var addClear = $('#addClear').prop('checked');
            toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "rtl": false,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": 300,
              "hideDuration": 1000,
              "timeOut": 5000,
              "extendedTimeOut": 1000,
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
            if ($('#addBehaviorOnToastClick').prop('checked')) {
                toastr.options.onclick = function () {
                    alert('You can perform some custom action after a toast goes away');
                };
            }

            if ($('#addBehaviorOnToastCloseClick').prop('checked')) {
                toastr.options.onCloseClick = function () {
                    alert('You can perform some custom action when the close button is clicked');
                };
            }

            if ($showDuration.val().length) {
                toastr.options.showDuration = parseInt($showDuration.val());
            }

            if ($hideDuration.val().length) {
                toastr.options.hideDuration = parseInt($hideDuration.val());
            }

            if ($timeOut.val().length) {
                toastr.options.timeOut = addClear ? 0 : parseInt($timeOut.val());
            }

            if ($extendedTimeOut.val().length) {
                toastr.options.extendedTimeOut = addClear ? 0 : parseInt($extendedTimeOut.val());
            }

            if ($showEasing.val().length) {
                toastr.options.showEasing = $showEasing.val();
            }

            if ($hideEasing.val().length) {
                toastr.options.hideEasing = $hideEasing.val();
            }

            if ($showMethod.val().length) {
                toastr.options.showMethod = $showMethod.val();
            }

            if ($hideMethod.val().length) {
                toastr.options.hideMethod = $hideMethod.val();
            }

            if (addClear) {
                msg = getMessageWithClearButton(msg);
                toastr.options.tapToDismiss = false;
            }
            if (!msg) {
                msg = getMessage();
            }

            $('#toastrOptions').text('Command: toastr["'
                    + shortCutFunction
                    + '"]("'
                    + msg
                    + (title ? '", "' + title : '')
                    + '")\n\ntoastr.options = '
                    + JSON.stringify(toastr.options, null, 2)
            );

            var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
            $toastlast = $toast;

            if(typeof $toast === 'undefined'){
                return;
            }

            if ($toast.find('#okBtn').length) {
                $toast.delegate('#okBtn', 'click', function () {
                    alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                    $toast.remove();
                });
            }
            if ($toast.find('#surpriseBtn').length) {
                $toast.delegate('#surpriseBtn', 'click', function () {
                    alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                });
            }
            if ($toast.find('.clear').length) {
                $toast.delegate('.clear', 'click', function () {
                    toastr.clear($toast, { force: true });
                });
            }
        }
        
        <?php echo $this->session->flashdata('color'); ?>

        function getLastToast(){
            return $toastlast;
        }
        $('#clearlasttoast').click(function () {
            toastr.clear(getLastToast());
        });
        $('#cleartoasts').click(function () {
            toastr.clear();
        });
    })
    
    
</script>


