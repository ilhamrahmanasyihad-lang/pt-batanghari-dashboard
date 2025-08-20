# 🚀 Panduan Deployment Koyeb - Step by Step

## 📋 Langkah 1: Buat Repository GitHub

1. **Buka GitHub.com** dan login
2. **Klik "New repository"**
3. **Isi detail:**
   - Repository name: `batanghari-indah-negeri`
   - Description: `Website perusahaan Batanghari Indah Negeri`
   - Public repository
   - **JANGAN** centang "Add a README file"
4. **Klik "Create repository"**

## 📋 Langkah 2: Push Code ke GitHub

Jalankan perintah berikut di terminal:

```bash
# Tambahkan remote origin
git remote add origin https://github.com/USERNAME/batanghari-indah-negeri.git

# Push ke GitHub
git branch -M main
git push -u origin main
```

**Ganti `USERNAME` dengan username GitHub Anda**

## 📋 Langkah 3: Daftar di Koyeb

1. **Buka [koyeb.com](https://koyeb.com)**
2. **Klik "Get started for free"**
3. **Pilih "Sign up with GitHub"**
4. **Authorize Koyeb** untuk mengakses GitHub

## 📋 Langkah 4: Deploy Aplikasi

1. **Klik "Create App"**
2. **Pilih "GitHub"** sebagai source
3. **Pilih repository** `batanghari-indah-negeri`
4. **Klik "Deploy"**

## 📋 Langkah 5: Konfigurasi Environment Variables

Setelah deploy, tambahkan environment variables:

1. **Klik nama aplikasi** di dashboard
2. **Pilih tab "Environment variables"**
3. **Tambahkan variables:**

```
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.koyeb.app
LOG_CHANNEL=stderr
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

## 📋 Langkah 6: Generate App Key

1. **Klik "Overview"** tab
2. **Klik "Deploy"** untuk redeploy
3. **Klik "Logs"** untuk melihat progress

## 🎯 Hasil Akhir

Website akan tersedia di: `https://your-app-name.koyeb.app`

## 🔧 Troubleshooting

**Jika ada error:**
1. Cek logs di Koyeb dashboard
2. Pastikan semua environment variables sudah diset
3. Pastikan repository sudah di-push ke GitHub

## 📞 Support

Jika ada masalah, cek:
- Log aplikasi di Koyeb dashboard
- Environment variables
- GitHub repository permissions
