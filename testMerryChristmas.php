<html>
  <head>
  <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
  <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
  </head>

  <body style='margin : 0px; overflow: hidden;' >
    
  <a-scene embedded arjs>
 
    <!-- 
    <a-entity 
      position="0 0 -50" 
      scale="0.1 0.1 0.1"
      gltf-model="https://raw.githubusercontent.com/AgnieszkaGlisz/Ar.js/main/model/iPod.gltf">
    </a-entity>
    -->

    <a-marker type='pattern' url='https://raw.githubusercontent.com/AgnieszkaGlisz/Ar.js/main/example.patt'>
      <a-entity 
        position="0 0 0" 
        scale="1 1 1"
        gltf-model="https://raw.githubusercontent.com/AgnieszkaGlisz/Ar.js/main/tree/XMas_Flint_01.glb"
      </a-entity>
    </a-marker>

    <a-marker type='pattern' url='https://raw.githubusercontent.com/AgnieszkaGlisz/Ar.js/main/link.patt'>
      <a-entity 
        position="0 0 0" 
        scale="1 1 1"
        gltf-model="https://raw.githubusercontent.com/AgnieszkaGlisz/Ar.js/main/tree/XMas_Flint_01.glb"
      </a-entity>
    </a-marker>

    <a-marker type='pattern' url='https://raw.githubusercontent.com/AgnieszkaGlisz/Ar.js/main/hiro.patt'>
      <a-entity 
        position="0 0 0" 
        scale="1 1 1"
        gltf-model="https://raw.githubusercontent.com/AgnieszkaGlisz/Ar.js/main/tree/XMas_Flint_01.glb"
      </a-entity>
    </a-marker>

      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>

<!--
  background-color: #92a8d1;
embedded arjs='sourceType: webcam;'
 <a-marker type='pattern' patternUrl='./tree.patt'>

      <a-entity
          gltf-model="./scene.gltf"
        ></a-entity>
      
    </a-marker>

    <a-entity camera></a-entity>

 <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>



  -->