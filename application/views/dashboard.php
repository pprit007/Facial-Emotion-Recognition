    <script src="interface/face-api.js"></script>
    <script src="interface/commons.js"></script>
    <link rel="stylesheet" href="interface/styles.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.0/dist/tf.min.js"></script>

<!-- general form elements -->
<div class="box box-warning">
    <div class="box-header ptbnull">
        <h3 class="box-title titlefix"><i class="fa fa-gear"></i>Face Emotions</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-success" id="senddt">Send Data</button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
<div class="box-body">
                        
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script>
$(document).ready(function(){
  $("#senddt").click(function(){
      var lbl = document.getElementById('lbl').value;
    $.post("<?php echo site_url('Ajax/send_data'); ?>",
    {
      lbl: lbl,
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
   
    <div id="navbar"></div>
    <div class="center-content page-container">
        <div class="progress" id="loader">
            <div class="indeterminate"></div>
        </div>
        <h5 >
            <span id="status">Model Loading ...</span>
        </h5>
        <div style="position: relative" class="margin">
            <video onplay="onPlay(this)" id="inputVideo" autoplay muted></video>
            <canvas id="overlay" />
            <canvas id='canvas' />
        </div>
        <h5>Increase Input Size to get higher accuracy</h5>
        <input type="hidden" id="lbl"/> 
        <input type="hidden" id="clr"/> 
        <center style="padding:10px">
            <div class="row input-field" style="margin-right: 20px;display: none">
                
                <select id="sizeType">
                    <option value="" disabled selected>Input Size:</option>
                    <option value="160">160 x 160</option>
                    <option value="224">224 x 224</option>
                    <option value="320">320 x 320</option>
                    <option value="416">416 x 416</option>
                    <option value="608">608 x 608</option>
                </select>
                <label>Input Size </label>
            </div>

        </center>

        <div class="row side-by-side" style="display:none">
            <div class="row">
                <label for="time">Time:</label>
                <input disabled value="-" id="time" type="text" class="bold">
            </div>
            <div class="row">
                <label for="fps">Estimated Fps:</label>
                <input disabled value="-" id="fps" type="text" class="bold">
            </div>
        </div>
        

    </div>
</div>
</div>

<style>
    #status {
        font-family: Geneva, Tahoma, Verdana, sans-serif;
    }

    .inline {
        display: inline-block;
    }
</style>
 
<script>
    let scoreThreshold = 0.5
    let sizeType = '160'
    let modelLoaded = false
    var cImg;
    var constraints = {
        audio: false,
        video: {
            width: 640,
            height: 480
        }
    };
    var EmotionModel;
    var offset_x = 27;
    var offset_y = 20;
    var emotion_labels = ["Angry", "Disgust", "Fear", "Happy", "Sad", "Surprise", "Neutral"];
    var emotion_colors = ["#ff0000", "#00a800", "#ff4fc1", "#ffe100", "#306eff", "#ff9d00", "green"];

    let forwardTimes = []

    function updateTimeStats(timeInMs) {
        forwardTimes = [timeInMs].concat(forwardTimes).slice(0, 30)
        const avgTimeInMs = forwardTimes.reduce((total, t) => total + t) / forwardTimes.length
        $('#time').val(`${Math.round(avgTimeInMs)} ms`)
        $('#fps').val(`${faceapi.round(1000 / avgTimeInMs)}`)
    }

    function onIncreaseThreshold() {
        scoreThreshold = Math.min(faceapi.round(scoreThreshold + 0.1), 1.0)
        $('#scoreThreshold').val(scoreThreshold)
    }

    function onDecreaseThreshold() {
        scoreThreshold = Math.max(faceapi.round(scoreThreshold - 0.1), 0.1)
        $('#scoreThreshold').val(scoreThreshold)
    }

    function onSizeTypeChanged(e, c) {
        sizeType = e.target.value
        $('#sizeType').val(sizeType)
    }

    async function onPlay(videoEl) {
        if (videoEl.paused || videoEl.ended || !modelLoaded)
            return false

        const {
            width,
            height
        } = faceapi.getMediaDimensions(videoEl)
        const canvas = $('#overlay').get(0)
        canvas.width = width
        canvas.height = height

        const forwardParams = {
            inputSize: parseInt(sizeType),
            scoreThreshold
        }

        const ts = Date.now()
        const result = await faceapi.detectAllFaces(videoEl, new faceapi.TinyFaceDetectorOptions(forwardParams))
        console.result
//            const result = await faceapi.tinyYolov2(videoEl, forwardParams)
        if (result.length != 0) {


            const context = canvas.getContext('2d')
            context.drawImage(videoEl, 0, 0, width, height)

            let ctx = context;
            ctx.lineWidth = 4;
            ctx.font = "25px Arial"
            ctx.fillText('Result', 0, 0);

            for (var i = 0; i < result.length; i++) {
                ctx.beginPath();
                var item = result[i].box;
                let s_x = Math.floor(item._x+offset_x);
                if (item.y<offset_y){
                    var s_y = Math.floor(item._y);
                }
                else{
                    var s_y = Math.floor(item._y-offset_y);
                }
                let s_w = Math.floor(item._width-offset_x);
                let s_h = Math.floor(item._height);
                let cT = ctx.getImageData(s_x, s_y, s_w, s_h);
                cT = preprocess(cT);

                z = EmotionModel.predict(cT)
                let index = z.argMax(1).dataSync()[0]
                let label = emotion_labels[index];
                ctx.strokeStyle = emotion_colors[index];

                ctx.rect(s_x, s_y, s_w, s_h);
                ctx.stroke();
                ctx.fillStyle = emotion_colors[index];
                ctx.fillText(label, s_x, s_y);
                ctx.closePath();

                lablefun(label,ctx.strokeStyle);
            }

        }


        updateTimeStats(Date.now() - ts)

                    faceapi.drawDetection('overlay', result.map(det => det.forSize(width, height)), {
                        withScore: true
                    })
        setTimeout(() => onPlay(videoEl))
        var status = document.getElementById('status');
        status.innerHTML = "Camera Started.. ";
    }
    async function loadNetWeights(uri) {
        return new Float32Array(await (await fetch(uri)).arrayBuffer())
    }
    // create model
    async function createModel(path) {
        console.log("path-----------------------------------")
        
        console.log(path)
        let model = await tf.loadLayersModel(path)
        
        console.log("model.summary()-----------------------------------")
        console.log(model.summary())
        return model
    }
    // load emotion model
    async function loadModel(path) {
        //            var lbl = document.getElementById("status");
        //            lbl.innerText = "Model Loading ..."
        //            let canvas = document.getElementById("combined");
        //            let cT = preprocess(cImg)
        EmotionModel = await createModel(path)
        //            z = model.predict(cT)
        //            toPixels(deprocess(z), canvas)
        //            lbl.innerText = "Model Loaded !"
    }

    function preprocess(imgData) {
        return tf.tidy(() => {
            let tensor = tf.browser.fromPixels(imgData).toFloat();

            tensor = tensor.resizeBilinear([100, 100])

            tensor = tf.cast(tensor, 'float32')
            const offset = tf.scalar(255.0);
            // Normalize the image 
            const normalized = tensor.div(offset);
            //We add a dimension to get a batch shape 
            const batched = normalized.expandDims(0)
            return batched
        })
    }

    function successCallback(stream) {
        var videoEl = $('#inputVideo').get(0)
        videoEl.srcObject = stream;
    }

    function errorCallback(error) {
        alert(error)
        console.log("navigator.getUserMedia error: ", error);
        //            alert("navigator.getUserMedia error: ", error)
    }

    async function run() {
        const Model_url = 'models/tiny_face_detector/tiny_face_detector_model-weights_manifest.json'
        await faceapi.loadTinyFaceDetectorModel(Model_url)
        modelLoaded = true

        var status = document.getElementById('status');
        status.innerHTML = "Initializing the camera ... ";

        navigator.mediaDevices.getUserMedia(constraints)
            .then(successCallback)
            .catch(errorCallback);

        onPlay($('#inputVideo').get(0))
        $('#loader').hide()
    }

    $(document).ready(function() {
        loadModel('models/mobilenetv1_models/model.json')

        const sizeTypeSelect = $('#sizeType')
        sizeTypeSelect.val(sizeType)
        sizeTypeSelect.on('change', onSizeTypeChanged)
        sizeTypeSelect.material_select()
        run()
    })

    function lablefun(labl,color)
    {
        document.getElementById('lbl').value=labl;
        document.getElementById('clr').value=color;
    }
</script>