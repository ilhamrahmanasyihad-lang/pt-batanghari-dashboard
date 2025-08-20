# 🚀 Panduan Deployment Website Batanghari Indah Negeri

## 📋 Status Saat Ini
- ✅ **Lokal**: Website berjalan di `http://127.0.0.1:8000`
- ✅ **Docker**: Image sudah siap untuk deployment
- ✅ **Assets**: CSS dan JS sudah di-build

## 🌐 Opsi Deployment Gratis

### 1. **Koyeb (Rekomendasi)**
**Keuntungan:**
- Gratis selamanya
- 2 aplikasi gratis
- Deploy langsung dari GitHub
- SSL otomatis
- Custom domain

**Langkah Deployment:**
1. Push code ke GitHub
2. Daftar di [koyeb.com](https://koyeb.com)
3. Klik "Create App"
4. Pilih "GitHub" sebagai source
5. Pilih repository
6. Klik "Deploy"

### 2. **Fly.io**
**Keuntungan:**
- 3 VM gratis
- Global CDN
- Docker support penuh

**Langkah Deployment:**
```bash
# Install Fly CLI
curl -L https://fly.io/install.sh | sh

# Login ke Fly
fly auth login

# Deploy aplikasi
fly launch
fly deploy
```

### 3. **Railway**
**Keuntungan:**
- $5 kredit gratis/bulan
- Deploy otomatis dari GitHub
- Database included

**Langkah Deployment:**
1. Daftar di [railway.app](https://railway.app)
2. Connect GitHub repository
3. Klik "Deploy Now"

## 🔧 Konfigurasi Environment Variables

Set environment variables berikut di platform hosting:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
LOG_CHANNEL=stderr
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

## 📁 File yang Sudah Disiapkan

- `Dockerfile` - Untuk containerization
- `koyeb.yaml` - Konfigurasi Koyeb
- `fly.toml` - Konfigurasi Fly.io
- `docker-compose.yml` - Untuk development lokal

## 🎯 Rekomendasi

**Untuk website perusahaan sederhana:**
1. **Koyeb** - Paling mudah dan gratis
2. **Fly.io** - Jika ingin performa lebih baik
3. **Railway** - Jika butuh database

## 🔗 Setelah Deployment

1. **Domain**: Dapatkan URL dari platform
2. **SSL**: Biasanya otomatis
3. **Custom Domain**: Tambahkan domain sendiri
4. **Monitoring**: Pantau performa website

## 📞 Support

Jika ada masalah deployment, cek:
- Log aplikasi di platform hosting
- Environment variables
- Database connection (jika ada)
- File permissions
