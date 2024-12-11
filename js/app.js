const addIngredientButton = document.querySelector("#add-ingredient");
const ingredientContainer = document.querySelector("#ingredients-container");
const recipeName = document.querySelector("#recipe-name");
let ingredientIndex = 0;
addIngredientButton.addEventListener("click", (_) => {
  const ingredientRow = document.createElement("div");
  ingredientRow.className = "ingredients-row";
  ingredientIndex++;

  const ingredientName = document.createElement("input");
  ingredientName.type = "text";
  ingredientName.name = `ingredient${ingredientIndex}`;
  ingredientName.placeholder = `Ingredient name`;
  ingredientName.required = true;

  const ingredientQty = document.createElement("input");
  ingredientQty.type = "number";
  ingredientQty.name = `ingredient${ingredientIndex}_quantity`;
  ingredientQty.placeholder = `Ingredient Quantity`;
  ingredientQty.required = true;

  ingredientRow.appendChild(ingredientName);
  ingredientRow.appendChild(ingredientQty);

  ingredientContainer.appendChild(ingredientRow);
});
// Initialize an empty array to store form data
const formDataArray = [];

// Add an event listener to the form
document
  .getElementById("recipe-form")
  .addEventListener("submit", function (event) {
    // Prevent the form from refreshing the page
    event.preventDefault();

    // Get the form element
    const form = event.target;
    console.log(form);
    // Extract form data using FormData
    const formData = new FormData(form);
    console.log(formData);
    // Create an object to store current submission data
    const formDataObject = {};
    formData.forEach((value, key) => {
      formDataObject[key] = value; // Assign each field name and value to the object
    });

    // Store the object in the array
    formDataArray.push(formDataObject);

    // Log the updated array
    console.log("Form Data Array:", formDataArray);

    // Optionally clear the form fields
    form.reset();
  });
