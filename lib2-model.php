<!DOCTYPE html>
<html lang="en">
<head>
  <title>Favorite Animals</title>
  <script src="dom-tools.js"></script>
  <style>
    ul {
      list-style-type: none;  
      padding: 0; 
    }
    li {
      font-size: 20px;  
    }

    .title-style {
      font-size: 24px;  
      font-weight: bold;  
      text-align: center; 
    }
  </style>
  <script>
    function addFavoriteAnimalList() {
      const ulElement = createUlElement(['lions', 'tigers', 'bears']);
      const animalContainer = document.getElementById('animal-container');
      animalContainer.appendChild(ulElement);
    }
  </script>
</head>
<body class="title-style" onload="addFavoriteAnimalList();">
  <p>These are my favorite animals:</p>
  <div id="animal-container"></div>
</body>
</html>
