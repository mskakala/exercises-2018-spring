/* Generate a roll of a six-sided dice. */
function diceroll() {
  return randint(1, 6);
}

/* Generate a random integer between min and max. */
function randint(min, max) {
  let range = max - min;
  let rand = min + Math.random() * range;
  return Math.round(rand);
}
