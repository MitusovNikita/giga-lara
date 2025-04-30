<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Простое меню на Vue 3</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <style>
        body {
            font-family: sans-serif;
        }
        .menu {
            display: flex;
            gap: 1rem;
        }
        .menu-item {
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 4px;
        }
        .active {
            background-color: #42b983;
            color: white;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="menu">
        <div
            v-for="item in menuItems"
            :key="item"
            @click="selectItem(item)"
            :class="['menu-item', { active: item === selected }]">
            {{ item }}
        </div>
    </div>
    <p>Вы выбрали: <strong>{{ selected }}</strong></p>
</div>

<script>
    const { createApp } = Vue;

    createApp({
        data() {
            return {
                menuItems: ['Главная', 'О нас', 'Контакты'],
                selected: 'Главная'
            };
        },
        methods: {
            selectItem(item) {
                this.selected = item;
            }
        }
    }).mount('#app');
</script>
</body>
</html>
