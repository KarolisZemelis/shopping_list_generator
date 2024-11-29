const addIngredientButton = document.querySelector("#add-ingredient");
const ingredientContainer = document.querySelector("#ingredients-container");
let ingredientIndex = 0;
addIngredientButton.addEventListener("click", (_) => {
  const ingredientRow = document.createElement("div");
  ingredientRow.className = "ingredients-row";

  const ingredientName = document.createElement("input");
  ingredientName.type = "text";
});
