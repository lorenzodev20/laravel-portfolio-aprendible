#!/bin/bash

echo "📄 Copiando archivo .env.example a .env..."
cp .env.example .env

echo "🐳 Levantando servicios con Docker Compose..."
docker-compose up -d --build
echo "🔄 Esperando a que los servicios estén listos..."

echo "🛠 Ejecutando composer install en el contenedor del backend..."
docker-compose exec portfolio_app composer install --no-dev --optimize-autoloader
docker-compose exec portfolio_app php artisan key:generate
docker-compose exec portfolio_app php artisan migrate
docker-compose exec portfolio_app php artisan db:seed

echo "✅ Entorno listo. Puedes hacer login al api con:"
echo "   📧 Usuario: admin@panel.com"
echo "   🔑 Contraseña: password"
