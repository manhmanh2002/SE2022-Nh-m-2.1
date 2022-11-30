<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script> 
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.min.js"></script>      
    </head>
    <style>
        model-viewer{
            width: 1101px;
            height: 992px;
            margin: 100%;
        }
    </style>
    <body>
        <div class="box">
            <model-viewer src="assets/login/lost_robot.glb" 
            animation-name = "Death"
            ar ar-modes="webxr scene-viewer quick-look" camera-controls shadow-intensity="1" 
            fullscreen
            autoplay>

            </model-viewer>
            

        </div>
    <body>
</html>