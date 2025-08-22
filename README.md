
# Comics Store (WordPress + WooCommerce) 🦸‍♀️

A local WooCommerce demo for comic collectibles. It runs in Docker, uses a **child theme** for styling, a **custom landing page template**, and a tiny **shortcode plugin** to filter by Publisher/Grade. Products are managed via CSV (plus a second CSV to update images **by SKU**). VS Code + **Xdebug** is set up for step-through PHP debugging.

## ✨ Highlights
- **Stack:** WordPress 6 · PHP 8.2 · MariaDB 11 · WooCommerce
- **Infra:** Docker Compose (reproducible dev)
- **Theme:** `comics-child` (child of Twenty Twenty-Four)
- **Plugin:** `comics-filters` → `[comic_filters]` shortcode
- **Data:** CSV product import + image updates by SKU
- **DX:** VS Code + Xdebug (port 9003) with path mapping

---

## 🚀 Quick Start

### 1) Requirements
- Docker Desktop
- VS Code + **PHP Debug** extension (xdebug)

### 2) Boot the stack
```bash
docker compose up -d
# WP at http://localhost:8080

📁 Project Structure
comics-store/
├─ docker-compose.yml
├─ imports/
│  ├─ comics.csv               # sample products
│  └─ update-images.csv        # image URLs keyed by SKU
├─ wp-content/
│  ├─ themes/
│  │  └─ comics-child/
│  │     ├─ style.css
│  │     ├─ page-comics-landing.php
│  │     └─ index.php          # minimal theme file (keeps WP happy)
│  └─ plugins/
│     └─ comics-filters/
│        └─ comics-filters.php # [comic_filters] shortcode
└─ .vscode/
   └─ launch.json              # Xdebug listener (port 9003)


📜 License
MIT © 2025

👤 Author
Adriana Bazan
GitHub: @bazanadriana