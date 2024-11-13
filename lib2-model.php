<!DOCTYPE html>
<html>
  <head>
    <title>Referencing HTML Elements</title>
    <script src="dom-tools.js"></script> <!-- Ensure the path is correct -->
    <script>
      function addFavoriteAnimalList() {
        // Create the list using the function from dom-tools.js
        const ulElement = createUlElement(['lions', 'tigers', 'bears']);
        const animalContainer = document.getElementById('animal-container');
        animalContainer.appendChild(ulElement);
      }
    </script>
  </head>
  <body onload="addFavoriteAnimalList();">
    <p>These are my favorite animals:</p>
    <div id="animal-container"></div> <!-- List will be appended here -->
  </body>
</html>
