<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleadd.css">
    <title>Upload File</title>
</head>
<body>
    <div class="container">
        <input type="file" class="upload_hide" id="upload_costum" multiple>
        <label for="upload_costum"  class="upload_label">
            <i class="fas fa-cloud-upload-alt"></i>
            <p class="drag_text">Drag & Drop to Upload File</p>
            <button class="choose_file">Choose a File</button>
        </label>
        <input type="text" name="text" placeholder="Enter name file" required>
        <input type="submit" name="Upload" value="Sumbit">
    </div>



</body>
</html>