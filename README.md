# A basic system for item registration by department

## Laravel + Vue 3 + Vite Project

This project is a web application using **Laravel** for the backend and **Vue 3** with **Vite** for the frontend.  
Communication between the frontend and backend is handled via the **Axios** library.

## Technologies Used

- **Laravel** (Backend)
- **Vue 3** (Frontend)
- **Vite** (Build and Hot Reload)
- **Axios** (HTTP Requests)
- **Node.js** (Frontend environment)
- **Composer** (Laravel dependency manager)

## Project Structure

```
├── backend/               # Código do Laravel
│   ├── app/
│   ├── routes/
│   ├── public/
│   └── ...
│
├── frontend/              # Código do Vue 3 + Vite
└── item-dept-frontend
    ├── src/
    │   ├── main.js
    │   ├── api.js
    │   └── ...
    ├── public/
    └── ...
```


## How to Run the Project

### Backend

- cd backend
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan serve

### Frontend

- cd item-dept-frontend
- npm install
- npm run dev

## Next Steps

- Create UI design
- Complete Frontend implementation

## License

This project was developed by **Beatriz Sobreira** as part of a challenge proposed by **Universidade Patativa**.  

All rights reserved.