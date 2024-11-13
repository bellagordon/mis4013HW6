<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
    <style>
      /* Center everything on the page */
      body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
      }

      h1 {
        font-size: 2rem;  /* Set title font size */
        margin-bottom: 20px; /* Space between title and canvas */
      }

    </style>
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
