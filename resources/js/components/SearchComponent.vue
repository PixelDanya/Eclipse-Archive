<template>
  <div class="search-component">
    <input 
      class="search-input"
      type="text"
      value=""
      v-model="query" 
      @input="search" 
      placeholder="Поиск по фактам о космосе"
    >

    <!-- Результаты -->
    <div v-if="results.length" class="search-results">
      <div v-for="card in results" :key="card.title" class="search-card">
        <h5 class="search-card-title"><a href="#" class="card-link">{{ card.title }}</a></h5>
        <p class="search-card-text">{{ card.text }}</p>
      </div>
    </div>

    <!-- Сообщение если ничего не найдено -->
    <div v-else-if="query.length > 0" class="no-results">
      Ничего не найдено
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Search',
  data() {
    return {
      query: '',
      results: []
    }
  },
  methods: {
    async search() {
      if (this.query.length < 1) {
        this.results = []
        return
      }

      try {
        const response = await axios.get('/api/search', {
          params: { q: this.query }
        })
        this.results = response.data
      } catch (e) {
        console.error(e)
      }
    }
  }
}
</script>

<style>
.search-component {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.search-input {
    display: block;
    width: 100%;
    min-width: 600px;
    max-width: 600px;
    padding: 12px 18px;
    border-radius: 50px;
    border: 1px solid rgba(241,196,15,0.3);
    background: rgba(18, 20, 23, 0.85);
    color: #fff;
    font-size: 1rem;
    margin-bottom: 20px;
    outline: none;
}

.search-input::placeholder {
  color: rgba(255,255,255,0.5);
  text-align: center;
}

.search-results {
  width: 100%;
  max-width: 650px;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.search-card {
  background: linear-gradient(135deg, #0b0f1a, #0f172a, #020617);
  border-radius: 12px;
  padding: 20px;
  color: white;
  box-shadow: 0 6px 15px rgba(0,0,0,0.08);
}

.card-link {
  color: #6c92b7;
  text-shadow: 0 0 20px rgb(11, 120, 230);
  font-weight: 600;
  margin-bottom: 8px;
  text-decoration: none;
}

.card-link:hover {
  color: #1743bc;
  text-shadow: 0 0 10px rgba(52,152,219,0.3);
  transition: ease 1s;
}

.search-card-text {
  color: #fff;
  font-size: 1rem;
}

.no-results {
  color: #f1c40f;
  font-weight: 500;
  text-shadow: 0 0 8px rgba(241,196,15,0.5);
}


/* Планшеты */
@media (max-width: 992px) {

  .search-input {
    font-size: 0.95rem;
    padding: 11px 16px;
  }

  .search-results {
    max-width: 100%;
  }

  .search-card {
    padding: 18px;
  }

}

/* Телефоны */
@media (max-width: 576px) {

  .search-component {
    padding: 0 10px;
  }

  .search-input {
    min-width: 400px;
    max-width: 400px;
    font-size: 0.9rem;
    padding: 10px 14px;
    border-radius: 30px;
  }

  .search-results {
    gap: 12px;
  }

  .search-card {
    padding: 15px;
    border-radius: 10px;
  }

  .search-card-title {
    font-size: 1rem;
  }

  .search-card-text {
    font-size: 0.9rem;
    line-height: 1.4;
  }

  .no-results {
    font-size: 0.9rem;
    text-align: center;
  }

}

/* Маленкие экраны */
@media (max-width: 400px) {

  .search-input {
    min-width: 300px;
    max-width: 300px;
    font-size: 0.85rem;
    padding: 9px 12px;
  }

  .search-card {
    padding: 12px;
  }

  .search-card-title {
    font-size: 0.95rem;
  }

  .search-card-text {
    font-size: 0.85rem;
  }

}
</style>
