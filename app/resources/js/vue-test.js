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
