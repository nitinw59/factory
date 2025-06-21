<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>3 Panel Calculator</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <div class="container">
    <div class="panel" id="panel1">
      <h2>BACK</h2>
      <input type="number" placeholder="No. of Operator" class="x" />
      <input type="number" placeholder="Extra Hour" class="y" />
      <input type="number" placeholder="Double Operations" class="z" />
      <button onclick="calculateBack(this)">Calculate</button>
      <p class="result">Result: </p>
    </div>

    <div class="panel" id="panel2">
      <h2>FRONT</h2>
      <input type="number" placeholder="No. of Operator" class="x" />
      <input type="number" placeholder="Extra Hour" class="y" />
      <input type="number" placeholder="Double Operations" class="z" />
      <button onclick="calculateFront(this)">Calculate</button>
      <p class="result">Result: </p>
    </div>

    <div class="panel" id="panel3">
      <h2>ASSEMBLY</h2>
      <input type="number" placeholder="No. of Operator" class="x" />
      <input type="number" placeholder="Extra Hour" class="y" />
      <input type="number" placeholder="Double Operations" class="z" />
      <button onclick="calculateAssembly(this)">Calculate</button>
      <p class="result">Result: </p>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
