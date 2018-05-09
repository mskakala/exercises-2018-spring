function onload() {
  // Events to react on clicking the buttons
  document.getElementById('add-button')
    .addEventListener('click', store);
  document.getElementById('equals-button')
    .addEventListener('click', add);

  // Make the text inside the input field selected
  // on page load
  document.getElementById('input').select();
  
  // React on key presses on the input field
  document.getElementById('input')
    .addEventListener('keypress', function(e) {
      if(e.key === '+') {
        store();
        e.preventDefault();
      } else if(e.key === 'Enter') {
        add();
        e.preventDefault();
      }
    });
}

let num1 = 0;

function store() {
  let input_elem = document.getElementById('input');
  num1 = parseInt(input_elem.value);
  input_elem.value = '0';
  document.getElementById('input').select();
}

function add() {
  let input_elem = document.getElementById('input');
  let num2 = parseInt(input_elem.value);
  input_elem.value = num1 + num2;
}