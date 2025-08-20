# Batanghari Indah Negeri

Website perusahaan dengan tema merah-putih yang mencerminkan bendera Indonesia.

## Fitur

- Beranda dengan visi dan misi
- Halaman Perusahaan
- Produk & Layanan
- Informasi
- Berita
- Karir
- Pegawai (Struktur Organisasi)
- Kontak Kami

## Teknologi

- Laravel 12
- PHP 8.2
- Tailwind CSS 4
- Vite
- Docker

## Instalasi Lokal

### Prasyarat
- PHP 8.2+
- Composer
- Node.js 18+
- Docker (opsional)

### Cara 1: Instalasi Manual
```bash
# Clone repository
git clone <repository-url>
cd batanghari-indah-negeri

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database (SQLite)
touch database/database.sqlite
php artisan migrate

# Build assets
npm run build

# Jalankan server
php artisan serve
npm run dev
```

### Cara 2: Menggunakan Docker
```bash
# Build dan jalankan dengan docker-compose
docker-compose up -d

# Setup database
docker-compose exec app php artisan migrate

# Build assets
docker-compose exec app npm run build
```

Akses aplikasi di: http://localhost:8000

## Deployment

### Koyeb (Gratis)

1. **Setup Koyeb Account**
   - Daftar di [koyeb.com](https://koyeb.com)
   - Connect GitHub repository

2. **Deploy**
   ```bash
   # Install Koyeb CLI
   curl -fsSL https://cli.koyeb.com/install.sh | bash

   # Login
   koyeb login

   # Deploy
   koyeb app init batanghari-indah-negeri --dockerfile Dockerfile.prod
   ```

3. **Atau deploy via Dashboard**
   - Buat app baru di Koyeb
   - Pilih "Dockerfile"
   - Connect repository
   - Set environment variables
   - Deploy

### Fly.io (Gratis)

1. **Setup Fly.io**
   ```bash
   # Install Fly CLI
   curl -L https://fly.io/install.sh | sh

   # Login
   fly auth login

   # Setup app
   fly launch
   ```

2. **Deploy**
   ```bash
   # Deploy dengan konfigurasi yang sudah ada
   fly deploy

   # Atau deploy manual
   fly deploy --dockerfile Dockerfile.prod
   ```

3. **Setup Database (Opsional)**
   ```bash
   # Buat Postgres database
   fly postgres create

   # Attach ke app
   fly postgres attach <database-name>
   ```

### Environment Variables

Untuk production, set environment variables berikut:

```bash
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
APP_KEY=base64:your-key-here

# Database
DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_PORT=3306
DB_DATABASE=your-database
DB_USERNAME=your-username
DB_PASSWORD=your-password

# Cache & Session
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

## Struktur Organisasi

Website menampilkan struktur organisasi dengan:
- 1 Pimpinan
- 1 Wakil Pimpinan  
- 3 Sub Divisi:
  - Sub Divisi Operasional (14 anggota)
  - Sub Divisi Teknologi (13 anggota)
  - Sub Divisi Layanan (13 anggota)
- Total: 45 pegawai

## Kontribusi

1. Fork repository
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.
