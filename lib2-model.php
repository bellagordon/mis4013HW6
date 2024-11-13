<!DOCTYPE html>
<html lang="en">
<head>
  <title>Using a 3rd-Party JavaScript Library from CDN</title>
  <!-- Reference the dom-tools.js library from a CDN -->
  <script src="https://cdn.example.com/dom-tools.js"></script>
  <script>
    // Your custom JavaScript code that uses functions from dom-tools.js
    function addFavoriteAnimalList() {
      const ulElement = createUlElement(['lions', 'tigers', 'bears']);
      const animalContainer = document.getElementById('animal-container');
      animalContainer.appendChild(ulElement);
    }
  </script>
</head>
<body onload="addFavoriteAnimalList();">
  <p>These are my favorite animals:</p>
  <div id="animal-container"></div>
</body>
</html>
