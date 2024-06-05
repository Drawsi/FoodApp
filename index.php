<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food App Whatever Eyyyy</title>
    <link rel="stylesheet" href="style.css">
    <script src="think.js"></script> 
</head>
<body>
    <header>
        <h1>Top 200 Food Ingredients</h1>
    </header>
    <main>
        <?php include 'ingredients.php'; ?>
    </main>
    <main>
        <button onclick="searchRecipes()">Recipe me</button>
        <button class="uncheck-button" onclick="uncheckAll()">Uncheck All</button>
        <div id="recipe-container"></div>
    </main>
</body>
</html>
