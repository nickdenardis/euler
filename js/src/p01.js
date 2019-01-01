const totalSum = x => {
  let total = 0;

  for (let i = 1; i < x; i++) {
    if (i % 3 === 0 || i % 5 === 0) {
      total += i;
    }
  }

  return total;
};

module.exports = { totalSum };
