#!/bin/bash

echo "🔍 Checking PHP version..."
php -v

echo "📦 Installing SQLite support and Doctrine DBAL..."
composer require doctrine/dbal

echo "📝 Updating .env to use SQLite..."
sed -i 's|^DATABASE_URL=.*|DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"|' .env

echo "🗃️ Creating SQLite database..."
php bin/console doctrine:database:create

echo "🧱 Running migrations..."
php bin/console make:migration
php bin/console doctrine:migrations:migrate

echo "✅ Phase 0 complete — SQLite is now your active DB."
echo "You can now build login, registration, and dashboard features without DB driver issues."
