<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library 1</title>
   <script src="dom-tools.js"></script>
    <script>
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
