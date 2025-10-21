# Pendaftaran Fisioterapi RSUBL

[![Laravel](https://img.shields.io/badge/Laravel-Framework-red?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP->=7.4-blue?style=flat-square&logo=php)](https://php.net)
[![MySQL](https://img.shields.io/badge/Database-MySQL-orange?style=flat-square&logo=mysql)](https://mysql.com)
[![License](https://img.shields.io/badge/License-Internal-lightgrey?style=flat-square)]

---

## Overview  
**Pendaftaran Fisioterapi RSUBL** is a web-based registration system built for the physiotherapy unit at **RSUBL (Rumah Sakit Umum Bethesda Lempuyangwangi)**.  
The application was developed during an internship project to streamline the patient registration workflow and manage patient data more efficiently.

---

## Purpose  
- Simplify and digitize the patient registration process for physiotherapy services.  
- Manage both new and returning patient information in a centralized database.  
- Support clinic administrative operations through a structured Laravel-based system.  

---

## Key Features  
- 🧾 Online patient registration (new and returning patients)  
- 📋 Manage patient records and history  
- 🕐 Appointment queue management  
- 👩‍⚕️ Role-based access (admin & physiotherapist users)  
- 📊 Dashboard for registration statistics  

---

## Tech Stack  
- **Backend Framework:** Laravel (PHP 7.4)  
- **Frontend:** Blade Template Engine  
- **Database:** MySQL  
- **Web Server:** Apache  
- **Environment:** Local development using XAMPP  

---

## Getting Started  

1️⃣ Clone the Repository  
```bash
git clone https://github.com/YuliusElfrisaD/PendaftaranFisioterapiRSUBL.git
cd PendaftaranFisioterapiRSUBL
```

2️⃣ Environment Setup

Copy .env.example and rename it to .env, then configure your database settings:
```bash
APP_NAME="Pendaftaran Fisioterapi RSUBL"
APP_ENV=local
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=physiotherapy_registration
DB_USERNAME=root
DB_PASSWORD=
```

3️⃣ Install Dependencies
```bash
composer install
```

4️⃣ Generate Application Key
```bash
php artisan key:generate
```

5️⃣ Run Database Migrations
```bash
php artisan migrate
```

6️⃣ Run the Application
```bash
php artisan serve
```


Then open your browser and go to:
```bash
http://localhost:8000
```

## Project Structure
PendaftaranFisioterapiRSUBL/
├── app/                # Laravel app code
├── database/           # Migrations & seeders
├── resources/          # Blade templates & assets
├── routes/             # Web routes
├── public/             # Public assets (CSS, JS, images)
├── .env.example
└── README.md

## Notes

The project was developed as part of an internship program at RSUBL.

The system runs in a local Apache + MySQL environment (via XAMPP).

All patient data used during development were dummy/testing data only.

© 2025 · Yulius Elfrisa Desancoko & Osmond Giovanni Indyaputra Internship Project at RSUBL · All Rights Reserved.
