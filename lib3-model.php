<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
    <script>
      function setup() {
        createCanvas(500, 500);
        background(32);
      }

      function draw() {
        fill(random(255), random(255), random(255));
        circle(random(width), random(height), 25);
      }
    </script>
  </head>
  <body>
    <h1>Fun & Random!</h1>
  </body>
</html>
