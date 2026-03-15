import './bootstrap';
import 'bootstrap';
import '../css/app.css';

import { createApp } from 'vue'
import SearchComponent from './components/SearchComponent.vue'
import LoaderComponent from './components/LoaderComponent.vue';

// Загрузчик и динамический поиск
createApp(LoaderComponent).mount('#loader')
createApp(SearchComponent).mount('#search')

// Анимация появления карточек при скролле
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    cards.forEach(card => {
        observer.observe(card);
    });
});