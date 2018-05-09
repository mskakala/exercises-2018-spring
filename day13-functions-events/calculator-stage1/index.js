let num1 = 0;

function store() {
  let input_elem = document.getElementById('input');
  num1 = parseInt(input_elem.value);
  input_elem.value = '0';
}

function add() {
  let input_elem = document.getElementById('input');
  let num2 = parseInt(input_elem.value);
  input_elem.value = num1 + num2;
}