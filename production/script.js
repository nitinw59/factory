function calculateBack(button) {
  const panel = button.parentElement;
  const x = parseFloat(panel.querySelector('.x').value);
  const y = parseFloat(panel.querySelector('.y').value);
  const z = parseFloat(panel.querySelector('.z').value);
  const resultElement = panel.querySelector('.result');

  if (isNaN(x) || isNaN(y) || isNaN(z)) {
    resultElement.textContent = "Result: Please enter all values";
    return;
  }

  // You can change the formula below
  const result = ((x*70) + (y * 35)) - (z * 70);

  resultElement.textContent = "Result: " + result;
}



function calculateFront(button) {
  const panel = button.parentElement;
  const x = parseFloat(panel.querySelector('.x').value);
  const y = parseFloat(panel.querySelector('.y').value);
  const z = parseFloat(panel.querySelector('.z').value);
  const resultElement = panel.querySelector('.result');

  if (isNaN(x) || isNaN(y) || isNaN(z)) {
    resultElement.textContent = "Result: Please enter all values";
    return;
  }

  // You can change the formula below
  const result = ((x*55) + (y * 28)) - (z * 55);

  resultElement.textContent = "Result: " + result;
}



function calculateAssembly(button) {
  const panel = button.parentElement;
  const x = parseFloat(panel.querySelector('.x').value);
  const y = parseFloat(panel.querySelector('.y').value);
  const z = parseFloat(panel.querySelector('.z').value);
  const resultElement = panel.querySelector('.result');

  if (isNaN(x) || isNaN(y) || isNaN(z)) {
    resultElement.textContent = "Result: Please enter all values";
    return;
  }

  // You can change the formula below
  const result = ((x*55) + (y * 28)) - (z * 55);

  resultElement.textContent = "Result: " + result;
}
