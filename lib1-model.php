<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library 1</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
  <style>
    .list {
      list-style: none;
      padding: 0;
    }

    .born {
      font-size: 18px;
    }
  </style>
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
    item: '<li><h3 class="name"></h3><p class="born">Born - </p></li>'  
  };

  var values = [
    { name: 'John Doe', born: 1998 },
    { name: 'Jane Doe', born: 1976 },
    { name: 'Danny Smith', born: 2006 }
  ];

  var userList = new List('users', options, values);

  userList.add({
    name: "Sally Brown",
    born: 1985
  });
</script>

</body>
</html>
