<template>
  <transition name="fade">
    <div v-if="visible" class="loader-wrapper">
      <div class="loader-box">
        <div class="loader-bar">
          <div class="loader-progress"></div>
        </div>
        <p class="loader-text">Загрузка...</p>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: "Loader",
  data() {
    return {
      visible: true
    }
  },
  mounted() {
    window.addEventListener("load", () => {
      setTimeout(() => {
        this.visible = false
      }, 1000)
    })
  }
}
</script>

<style>
.loader-wrapper {
  position: fixed;
  inset: 0;
  background: radial-gradient(circle at center, #0f172a, #020617);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

.loader-box {
  width: 300px;
  text-align: center;
}

.loader-bar {
  width: 100%;
  height: 6px;
  background: rgba(241,196,15,0.15);
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 15px;
}

.loader-progress {
  height: 100%;
  width: 0%;
  background: linear-gradient(90deg, #f1c40f, #ffd700);
  animation: loading 1.8s ease-in-out forwards;
  box-shadow: 0 0 12px rgba(241,196,15,0.8);
}

.loader-text {
  color: #f1c40f;
  font-weight: 500;
  letter-spacing: 1px;
}

/* Анимация заполнения */
@keyframes loading {
  0% { width: 0%; }
  70% { width: 85%; }
  100% { width: 100%; }
}

/* Плавное исчезновение */
.fade-enter-active,
.fade-leave-active {
  transition: opacity .4s;
}

.fade-leave-to {
  opacity: 0;
}
</style>
