<div class="button-container">
            <?php
                $ingredients = [
                    "Salt", "Sugar", "Flour", "Butter", "Eggs", "Milk", "Olive Oil", "Garlic", "Onion", "Tomato", 
                    "Pepper", "Chicken", "Beef", "Pork", "Fish", "Rice", "Pasta", "Potato", "Cheese", "Lemon",
                    // (add more ingredients here to reach 200)
                    "Vanilla", "Cinnamon", "Basil", "Parsley", "Rosemary", "Thyme", "Oregano", "Paprika", "Chili Powder", "Cumin",
                    "Honey", "Vinegar", "Soy Sauce", "Mustard", "Ketchup", "Mayonnaise", "Yogurt", "Cream", "Baking Powder", "Baking Soda",
                    "Cornstarch", "Breadcrumbs", "Chocolate", "Cocoa Powder", "Almonds", "Walnuts", "Peanuts", "Coconut", "Raisins", "Oats",
                    "Spinach", "Carrot", "Broccoli", "Cauliflower", "Zucchini", "Mushrooms", "Peas", "Corn", "Bell Pepper", "Lettuce",
                    "Cucumber", "Celery", "Avocado", "Mango", "Pineapple", "Apple", "Banana", "Orange", "Grapes", "Strawberries",
                    "Blueberries", "Raspberries", "Blackberries", "Watermelon", "Peach", "Pear", "Plum", "Apricot", "Kiwi", "Ginger",
                    "Garbanzo Beans", "Black Beans", "Kidney Beans", "Lentils", "Quinoa", "Barley", "Couscous", "Farro", "Brown Rice", "White Rice",
                    "Red Onion", "Green Onion", "Shallots", "Chives", "Leeks", "Radish", "Beetroot", "Turnip", "Sweet Potato", "Pumpkin",
                    "Butternut Squash", "Eggplant", "Chili Peppers", "Serrano Peppers", "Jalapeno Peppers", "Habanero Peppers", "Bell Peppers", "Green Beans", "Sugar Snap Peas", "Edamame",
                    "Artichoke", "Asparagus", "Brussels Sprouts", "Bok Choy", "Kale", "Swiss Chard", "Collard Greens", "Mustard Greens", "Arugula", "Romaine Lettuce",
                    "Butter Lettuce", "Iceberg Lettuce", "Radicchio", "Endive", "Fennel", "Okra", "Parsnip", "Rutabaga", "Yam", "Cassava",
                    "Taro", "Jicama", "Kohlrabi", "Plantain", "Pomegranate", "Figs", "Dates", "Persimmon", "Guava", "Lychee",
                    "Papaya", "Passion Fruit", "Dragon Fruit", "Star Fruit", "Jackfruit", "Durian", "Cherimoya", "Soursop", "Tamarind", "Cranberries",
                    "Goji Berries", "Mulberries", "Prunes", "Currants", "Blood Orange", "Tangerine", "Clementine", "Mandarin Orange", "Lime", "Grapefruit",
                    "Pomelo", "Cantaloupe", "Honeydew", "Crab", "Lobster", "Shrimp", "Scallops", "Mussels", "Clams", "Oysters",
                    "Octopus", "Squid", "Anchovies", "Sardines", "Salmon", "Tuna", "Mackerel", "Herring", "Trout", "Tilapia",
                    "Cod", "Haddock", "Halibut", "Swordfish", "Snapper", "Bass", "Grouper", "Mahi Mahi", "Barramundi", "Catfish"
                ];

                foreach ($ingredients as $index => $ingredient) {
                    $id = 'ingredient-' . $index;
                    echo "
                        <input type='checkbox' id='$id' class='ingredient-checkbox'>
                        <label for='$id' class='ingredient-label'>$ingredient</label>
                    ";
                }
            ?>
</div>