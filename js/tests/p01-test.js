const assert = require("assert");
const addition = require("../src/p01");

it("less than three is zero", () => {
  assert.equal(addition.totalSum(2), 0);
});

it("less than five is three", () => {
  assert.equal(addition.totalSum(5), 3);
});

it("ten as part of problem definition", () => {
  assert.equal(addition.totalSum(10), 23);
});

it("total for double digit", () => {
  assert.equal(addition.totalSum(16), 60);
});

it("total for triple digit", () => {
  assert.equal(addition.totalSum(160), 5948);
});

it("final one thousand", () => {
  assert.equal(addition.totalSum(1000), 233168);
});
