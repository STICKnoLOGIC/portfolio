# STICKnoLOGIC's Portfolio

A modern, content-driven portfolio website built with Laravel 13, Tailwind CSS, and Vite. Designed to showcase artworks, blog posts, case studies, and professional projects.

## Features

- **Dynamic Content Management** - Markdown-based content with YAML front matter
- **Multiple Content Types** - Artworks, blog posts, case studies, projects, and thoughts
- **SEO Optimized** - Automatic sitemap generation and optimized metadata
- **Modern Stack** - Laravel 13, Tailwind CSS, PHP 8.4
- **Docker Ready** - Includes Dockerfile and Nixpacks configuration for easy deployment
- **Responsive Design** - Mobile-first approach with Tailwind CSS
- **Fast Performance** - Optimized assets with Vite bundler

## Project Structure

```
portfolio/
├── content/             # Markdown content files
│   ├── artworks/        # Artwork showcase
│   ├── as-human/        # Thoughts and perspectives
│   ├── blog/            # Blog posts
│   ├── case-study/      # Case studies
│   ├── projects/        # Project portfolio
│   └── author/          # Authors information
└── portfolio/           # Laravel application source
    ├── app/             # Application logic
    ├── resources/       # Views and assets
    ├── routes/          # Web routes
    ├── database/        # Migrations and seeds
    └── config/          # Configuration files
```

## Getting Started

### Requirements

- PHP 8.4 or higher
- Node.js 18+
- Composer
- npm or yarn

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/STICKnoLOGIC/portfolio.git
   cd portfolio
   ```

2. **Install PHP dependencies**
   ```bash
   cd portfolio
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Copy environment file**
   ```bash
   cp .env.example .env
   ```

5. **Configure environment variables**
   
   ⚠️ **Important:** This project requires custom environment variables beyond the standard Laravel setup. 
   
   Open `.env` and configure the following custom variables needed for the portfolio:
   - Check `.env.example` for all available options
   - Ensure all required variables are set according to your deployment environment
   - Some variables may be specific to content serving or API integrations

6. **Generate application key**
   ```bash
   php artisan key:generate
   ```

7. **Run database migrations**
   ```bash
   php artisan migrate
   ```

### Development

Start the development server:

```bash
# Terminal 1 - Start Laravel dev server
php artisan serve

# Terminal 2 - Start Vite dev server
npm run dev
```

Your portfolio will be available at `http://localhost:8000`

### Building for Production

```bash
npm run build
```

This creates optimized assets in `public/build/`

## Content Management

### Adding Content

Create new markdown files in the appropriate `content/` subdirectory. Each file should include YAML front matter:

```yaml
---
title: "Your Title"
slug: "your-slug"
date: "2024-01-15"
description: "Brief description"
---

# Your Content

Markdown content goes here...
```

### Content Types

- **Artworks** - Visual art piece, check the [Artwork TEMPLATE](https://github.com/sticknologic/portfolio/blob/main/content/_TEMPLATE_ARTWORK_.md)
- **Blog** - Articles and posts,check the [Blog TEMPLATE](https://github.com/sticknologic/portfolio/blob/main/content/_TEMPLATE_BLOG_.md)
- **Case Studies** - Project case studies, check the [Case Study TEMPLATE](https://github.com/sticknologic/portfolio/blob/main/content/_TEMPLATE_CASE_STUDY_.md)
- **Projects** - Portfolio projects, check the [Project TEMPLATE](https://github.com/sticknologic/portfolio/blob/main/content/_TEMPLATE_PROJECT_.md)
- **As Human** - Personal thoughts and perspectives, check the [As Human TEMPLATE](https://github.com/sticknologic/portfolio/blob/main/content/_TEMPLATE_ASHUMAN_.md)

## Deployment

### Using Docker

```bash
docker build -t portfolio .
docker run -p 8000:8080 portfolio
```

### Using Nixpacks

```bash
nixpacks build .
```

### Using Coolify

Configure through Coolify dashboard with Docker or Nixpacks as build engine.

## Tech Stack

- **Backend** - Laravel 13, PHP 8.4
- **Frontend** - Tailwind CSS
- **Content** - Markdown with YAML front matter (Spatie)
- **Database** - Configurable (default: SQLite)
- **Cache** - Redis compatible
- **Testing** - Pest PHP
- **Formatting** - Laravel Pint

## Available Commands

### Laravel Artisan

```bash
php artisan serve              # Start development server
php artisan migrate            # Run database migrations
php artisan tinker             # Interactive shell
php artisan pest               # Run tests
```

### npm Scripts

```bash
npm run dev                    # Start Vite dev server
npm run build                  # Build assets for production
```

## Testing

Run the test suite with:

```bash
composer test
# or
php artisan pest
```

## Code Style

Code formatting is handled by Laravel Pint:

```bash
./vendor/bin/pint
```

## License

This project is open source and available under the MIT license.

## Author

**STICKnoLOGIC** - Full-stack developer and creative technologist

For more information, visit the [portfolio site](https://sticknologic.is-a.dev) or check the author bio in `/content/author/sticknologic.md`

## Support

For issues, questions, or contributions, please refer to the [CONTRIBUTING.md](https://github.com/sticknologic/portfolio/blob/main/CONTRIBUTING.md) guide.