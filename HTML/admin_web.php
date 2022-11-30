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
            width: 100%;
            height: 720px; 
            margin: auto;
        }
    </style>
    <body>
        <div class="box">
            <model-viewer src="assets/login/Drossel.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="assets/Drossel.gltf"></model-viewer>
        </div>
    <body>
</html>