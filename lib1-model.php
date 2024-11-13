<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library 1</title>
  <!-- Include List.js library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
</head>
<body>

<div id="users">
  <input class="search" placeholder="Search" />
  <button class="sort" data-sort="name">Sort</button>
  <ul class="list"></ul>
</div>

<script>
  var options = {
    valueNames: ['name', 'born'],
    item: '<li><h3 class="name"></h3><p class="born"></p></li>'
  };

  var values = [
    { name: 'Jonny Strömberg', born: 1986 },
    { name: 'Jonas Arnklint', born: 1985 },
    { name: 'Martina Elm', born: 1986 }
  ];

  var userList = new List('users', options, values);

  userList.add({
    name: "Gustaf Lindqvist",
    born: 1983
  });
</script>

</body>
</html>
