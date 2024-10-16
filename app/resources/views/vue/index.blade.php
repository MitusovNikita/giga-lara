<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue.js To-Do List with Dropdown</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>

<div id="app">
    <h1>To-Do List with Categories</h1>

    <!-- Input for adding a new item -->
    <input v-model="newItem" placeholder="Enter a new task" />

    <!-- Dropdown to select the category -->
    <select v-model="selectedCategory">
        <option disabled value="">Select a category</option>
        <option v-for="category in categories" :key="category">[[ category ]]</option>
    </select>

    <!-- Button to add the item to the list -->
    <button @click="addItem">Add Item</button>

    <!-- Display the list of to-do items with their category -->
    <ul>
        <li v-for="(item, index) in items" :key="index">
            [[ item.text ]] - <strong>[[ item.category ]]</strong>
            <!-- Button to remove an item -->
            <button @click="removeItem(index)">Remove</button>
        </li>
    </ul>
</div>

<script>
    // Initialize Vue instance
    new Vue({
        el: '#app',
        config: {
            delimiters: ['[[', ']]']
        },
        data: {
            newItem: '',  // Stores the new item text
            selectedCategory: '',  // Stores the selected category
            categories: ['Work', 'Personal', 'Shopping'],  // List of categories
            items: []     // Stores the list of to-do items
        },
        methods: {
            // Adds a new item to the list
            addItem() {
                if (this.newItem.trim() !== '' && this.selectedCategory !== '') {
                    // Add item with the selected category
                    this.items.push({
                        text: this.newItem.trim(),
                        category: this.selectedCategory
                    });
                    // Clear the input fields
                    this.newItem = '';
                    this.selectedCategory = '';
                }
            },
            // Removes an item from the list by its index
            removeItem(index) {
                this.items.splice(index, 1);
            }
        }
    });
</script>
{{--<script src="js/vue-test.js"></script>--}}

</body>
</html>
