@echo off
echo ==========================================
echo Laravel Setup Script
echo ==========================================

IF NOT EXIST .env (
    echo Kopiranje .env.example u .env...
    copy .env.example .env
) ELSE (
    echo .env fajl već postoji.
)

echo Instalacija composer paketa...
composer install

echo Instalacija npm paketa...
npm install

echo Generisanje app key...
php artisan key:generate

echo Pokretanje migracija baze...
php artisan migrate

echo Pokretanje db:seed...
php artisan db:seed

echo Povezivanje storage foldera...
php artisan storage:link

echo Keširanje konfiguracije...
php artisan config:cache

echo Pokretanje Laravel servera, queue i vite frontend servera...
composer run dev

echo ==========================================
echo Laravel aplikacija je spremna!
echo ==========================================

pause
