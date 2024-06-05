// JavaScript Functions
function uncheckAll() {
    const checkboxes = document.querySelectorAll('.ingredient-checkbox');
    checkboxes.forEach(checkbox => checkbox.checked = false);
}

function searchRecipes() {
    const checkboxes = document.querySelectorAll('.ingredient-checkbox:checked');
    const ingredients = Array.from(checkboxes).map(checkbox => checkbox.nextElementSibling.textContent).join(',+');
    
    const apiKey = 'f74159c6f5ac4144b4d31527a71e6c5e'; // Replace with your Spoonacular API key
    const apiUrl = `https://api.spoonacular.com/recipes/findByIngredients?ingredients=${encodeURIComponent(ingredients)}&number=5&apiKey=${apiKey}`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => displayRecipes(data))
        .catch(error => console.error('Error fetching recipes:', error));
}

function displayRecipes(recipes) {
    const recipeContainer = document.getElementById('recipe-container');
    recipeContainer.innerHTML = ''; // Clear previous results

    recipes.forEach(recipe => {
        const recipeElement = document.createElement('div');
        recipeElement.classList.add('recipe');

        const title = document.createElement('h3');
        title.textContent = recipe.title;
        recipeElement.appendChild(title);

        const imageLink = document.createElement('a');
        imageLink.href = `https://spoonacular.com/recipes/${recipe.title.replace(/\s+/g, '-')}-${recipe.id}`;
        imageLink.target = '_blank';

        const image = document.createElement('img');
        image.src = recipe.image;
        image.alt = recipe.title;
        imageLink.appendChild(image);

        recipeElement.appendChild(imageLink);

        const link = document.createElement('a');
        link.href = `https://spoonacular.com/recipes/${recipe.title.replace(/\s+/g, '-')}-${recipe.id}`;
        link.textContent = 'View Recipe';
        link.target = '_blank';
        recipeElement.appendChild(link);

        recipeContainer.appendChild(recipeElement);
    });
}
