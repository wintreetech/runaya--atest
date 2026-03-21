# Runaya Website

Laravel 12 brochure site prepared for Docker-based deployment on Railway.

## Railway Deploy

1. Push this repository to GitHub.
2. In Railway, create a new project and choose `Deploy from GitHub repo`.
3. Select this repository. Railway will detect the `Dockerfile` and build from it.
4. In the Railway service variables, set:

```env
APP_NAME=Runaya
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:GENERATE_A_REAL_KEY
APP_URL=https://your-railway-domain.up.railway.app
LOG_CHANNEL=stderr
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

5. Generate `APP_KEY` locally with:

```bash
php artisan key:generate --show
```

6. Redeploy after saving the variables.
7. When Railway gives you the public domain, update `APP_URL` to that exact HTTPS URL.

## Notes

- This app is configured to run without MySQL on Railway.
- HTTPS is forced only in production.
- Frontend assets are built during the Docker build.
