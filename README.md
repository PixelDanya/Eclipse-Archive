# Eclipse Archive

Веб-приложение для управления архивом данных на базе Laravel, Vue.js и Tailwind CSS.

## Описание

Eclipse Archive — приложение для управления информацией. Включает работу с фактами, обратной связью пользователей и управлением аккаунтами.

## Требования

- **PHP**: 8.3 или выше
- **Composer**: последняя версия
- **Node.js**: 18 или выше
- **npm**: последняя версия
- **MySQL**: 8.0 или выше
- Docker и Docker Compose

## Технологический стек

### Backend
- **Laravel 12** — PHP-фреймворк для построения веб-приложений
- **Laravel Sail** — локальное окружение разработки на Docker
- **PHPUnit** — тестирование
- **Laravel Pail** — просмотр логов в реальном времени

### Frontend
- **Vue.js 3** — JavaScript фреймворк
- **Vite** — быстрый сборщик модулей
- **Tailwind CSS 4** — утилитарный CSS-фреймворк
- **Bootstrap 5** — компоненты интерфейса

### Инфраструктура
- **Docker** — контейнеризация
- **MySQL 8.0** — база данных
- **Nginx Alpine** — веб-сервер
- phpMyAdmin — управление базой данных

## Установка

### Способ 1: С использованием Docker (рекомендуется)

1. **Клонируйте репозиторий:**
   ```bash
   git clone <repository-url>
   cd EclipseArchive
   ```

2. **Создайте файл `.env`:**
   ```bash
   cp .env.example .env
   ```

3. **Запустите контейнеры:**
   ```bash
   docker-compose up -d
   ```
   Все зависимости, миграции и сидеры установятся и запустятся автоматически.

### Способ 2: Локальная установка

1. **Клонируйте репозиторий:**
   ```bash
   git clone <repository-url>
   cd EclipseArchive
   ```

2. **Установите зависимости PHP:**
   ```bash
   composer install
   ```

3. **Установите зависимости Node.js:**
   ```bash
   npm install
   ```

4. **Создайте файл `.env` и сгенерируйте ключ приложения:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Настройте базу данных в `.env`:**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=eclipse_archive
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Запустите миграции:**
   ```bash
   php artisan migrate
   ```

7. **Загрузите тестовые данные:**
   ```bash
   php artisan db:seed
   ```

## Запуск

### С использованием Docker

**Все сервисы сразу:**
```bash
docker-compose up -d
```

Приложение будет доступно по адресу `http://localhost`

**phpMyAdmin:**
```
http://localhost:8080
```

### Локальная разработка

**Запуск всех сервисов (сервер, очередь, логи, Vite):**
```bash
composer run dev
```

Или отдельно:

**Стартуй Laravel сервер:**
```bash
php artisan serve
```

**Запустите Vite для разработки:**
```bash
npm run dev
```

**Запустите очередь обработчик:**
```bash
php artisan queue:listen
```

**Просмотр логов в реальном времени:**
```bash
php artisan pail
```

## Структура проекта

```
├── app/
│   ├── Http/
│   │   ├── Controllers/      # HTTP контроллеры
│   │   └── Requests/         # Form Requests для валидации
│   ├── Models/               # Eloquent модели
│   │   ├── User.php
│   │   ├── Facts.php
│   │   └── Feedbacks.php
│   └── Providers/            # Service Providers
│
├── database/
│   ├── migrations/           # Миграции БД
│   ├── seeders/              # Фиксирование тестовых данных
│   └── factories/            # Model Factories
│
├── resources/
│   ├── js/
│   │   ├── app.js           # Точка входа
│   │   ├── bootstrap.js     # Инициализация
│   │   └── components/      # Vue компоненты
│   ├── css/                 # Стили
│   └── views/               # Blade шаблоны
│
├── routes/
│   ├── web.php              # Веб маршруты
│   └── console.php          # Консольные команды
│
├── tests/
│   ├── Feature/             # Функциональные тесты
│   └── Unit/                # Юнит тесты
│
├── docker/
│   └── nginx/               # Конфигурация Nginx
│
├── storage/                 # Файлы приложения
├── public/                  # Публичные файлы
│
└── config/                  # Конфигурационные файлы
```

## Модели данных

### User
Модель пользователя системы с управлением аккаунтами.

### Facts
Главная модель приложения для хранения фактических данных.

### Feedbacks
Модель для сбора и хранения обратной связи пользователей.

## Тестирование

**Запустить все тесты:**
```bash
composer run test
```

**Запустить тесты в Docker:**
```bash
docker-compose exec app composer run test
```

**Запустить конкретный тест:**
```bash
php artisan test tests/Feature/ExampleTest.php
```

## Разработка

### Запуск автоматического форматирования кода

Проект использует **Laravel Pint** для форматирования кода согласно PSR-12 стандартам:

```bash
./vendor/bin/pint
```

### Работа с миграциями

**Создать новую миграцию:**
```bash
php artisan make:migration create_table_name
```

**Откатить последнюю миграцию:**
```bash
php artisan migrate:rollback
```

**Откатить все миграции:**
```bash
php artisan migrate:reset
```

### Создание моделей и контроллеров

**Создать модель:**
```bash
php artisan make:model ModelName -m
```

**Создать контроллер:**
```bash
php artisan make:controller ControllerName --resource
```

## Конфигурация окружения

Скопируйте `.env.example` в `.env` и настройте следующие переменные:

```env
# Основные
APP_NAME=Eclipse Archive
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

# База данных
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eclipse_archive
DB_USERNAME=root
DB_PASSWORD=

# Mail
MAIL_DRIVER=log

# Кэш
CACHE_DRIVER=database

# Сессия
SESSION_DRIVER=database
```

## Docker команды

**Просмотр логов контейнера приложения:**
```bash
docker-compose logs -f app
```

**Просмотр логов Nginx:**
```bash
docker-compose logs -f nginx
```

**Просмотр логов базы данных:**
```bash
docker-compose logs -f db
```

**Войти в контейнер приложения:**
```bash
docker-compose exec app bash
```

**Перезагрузить контейнеры:**
```bash
docker-compose restart
```

**Остановить контейнеры:**
```bash
docker-compose down
```

**Удалить контейнеры с данными:**
```bash
docker-compose down -v
```

## Статусы сервисов

После запуска `docker-compose up -d` доступны следующие сервисы:

| Сервис | URL | Порт |
|--------|-----|------|
| Приложение | http://localhost | 80 |
| phpMyAdmin | http://localhost:8080 | 8080 |
| MySQL | localhost | 3306 |

## Логирование

Все логи приложения сохраняются в `storage/logs/`.

**Просмотр логов в реальном времени:**
```bash
php artisan pail
```

## Очередь

Приложение использует очередь для асинхронной обработки задач.

**Запустить слушатель очереди:**
```bash
php artisan queue:listen
```

**Обработать одно задание:**
```bash
php artisan queue:work --once
```

## Решение проблем

### Ошибка при подключении к БД
- Убедитесь, что контейнер `db` запущен
- Проверьте переменные окружения в `.env`
- Проверьте логи: `docker-compose logs db`

### Node модули не установлены
```bash
rm -rf node_modules package-lock.json
npm install
```

### Сбой миграций
```bash
php artisan migrate:fresh --seed
```

### Проблемы с правами доступа
```bash
docker-compose exec app chown -R www-data:www-data storage
docker-compose exec app chmod -R 755 storage
```
