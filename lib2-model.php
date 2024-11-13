<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library 1</title>
  <script>
    function addFavoriteAnimalList() {
      // Create the list as an HTML string
      const items = ['lions', 'tigers', 'bears'];
      const ul = document.createElement('ul');

      // Generate <li> elements and append them to the <ul> using innerHTML
      ul.innerHTML = items.map(item => `<li>${item}</li>`).join('');
      
      // Find the container and append the <ul>
      const animalContainer = document.getElementById('animal-container');
      animalContainer.appendChild(ul);
    }
  </script>
</head>
<body onload="addFavoriteAnimalList();">
  <p>These are my favorite animals:</p>
  <div id="animal-container"></div>
</body>
</html>
