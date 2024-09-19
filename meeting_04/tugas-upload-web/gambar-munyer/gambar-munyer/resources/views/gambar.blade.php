<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>munyer munyer</title>
  <style>
    #image-container {
      width: 1400px;
      height: 600px;
      position: relative;
      overflow: hidden;
    }

    img {
      max-width: 100%;
      max-height: 100%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    #control {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 20px;
    }

    .control-group {
      margin: 10px 0;
    }

  </style>
</head>
<body>
  <h1>Munyer munyer</h1>
  
  <input type="file" id="upload" accept="image/*" />
  <div id="image-container">
    <img id="image" src="" alt="Uploaded Image" />
  </div>

  <div id="control">
    <div class="control-group">
      <label for="rotate">Rotate:</label>
      <input type="range" id="rotate" min="0" max="3600000000" />
    </div>
    <div class="control-group">
      <label for="translateX">Move Left-Right:</label>
      <input type="range" id="translateX" min="-800" max="500" value="-200" />
    </div>
    <div class="control-group">
      <label for="scale">Zoom:</label>
      <input type="range" id="scale" min="0.5" max="3" step="0.1" value="1" />
    </div>
  </div>

  <script>
    const upload = document.getElementById('upload');
    const image = document.getElementById('image');
    const rotateInput = document.getElementById('rotate');
    const translateXInput = document.getElementById('translateX');
    const scaleInput = document.getElementById('scale');

    let currentTranslateX = 0;
    let currentScale = 1;
    let currentRotate = 0;

    upload.addEventListener('change', (e) => {
      const file = e.target.files[0];
      const reader = new FileReader();
      
      reader.onload = (event) => {
        image.src = event.target.result;
      };
      reader.readAsDataURL(file);
    });

    rotateInput.addEventListener('input', (e) => {
      currentRotate = e.target.value;
      updateTransform();
    });

    translateXInput.addEventListener('input', (e) => {
      currentTranslateX = e.target.value;
      updateTransform();
    });

    scaleInput.addEventListener('input', (e) => {
      currentScale = e.target.value;
      updateTransform();
    });

    function updateTransform() {
      image.style.transform = `translate(${currentTranslateX}px, -50%) rotate(${currentRotate}deg) scale(${currentScale})`;
    }
  </script>
</body>
</html>
