---
title: PayUs-as-a-Service
excerpt: an API that returns randomized messages for past-due invoices
date: 2026-06-25
slug: payus-as-a-service
featured: true
link: https://github.com/sticknologic/payus-as-a-service
demo: https://puaas.sticknologic.is-a.dev
cover: https://cdn.sticknologic.is-a.dev/payus-aas/banner.png
technologies:
  - Nodejs
  - Expressjs
  - Html
  - CSS
  - Javascript
---

## Overview
PayUs-as-a-Service (PUaaS) is an API that returns randomized messages for past-due invoices — perfectly suited for any scenario: personal, professional, dev life, or just your everyday life.

Built for thick-faced, ghost, and shameless clients.


## Where to Start?
You can start by reading our [Documentation](https://first-accord.js.org/docs) and our [Getting Started](https://first-accord.js.org/docs/#/getting-started)

## API Usage

**Live API:** https://puaas.sticknologic.is-a.dev

**Interactive Documentation:** https://puaas.sticknologic.is-a.dev/docs

**Method:** `GET`

**Rate Limit:** `60 requests per minute per IP`

### API Endpoints
| Method | Endpoint            | Auth | Description                             | Rate Limit |
|--------|---------------------|------|-----------------------------------------|------------|
| GET    | /payus              | No   | Get a randomized message in random tone | 60/min     |
| GET    | /payus/professional | No   | Get random professional message         | 60/min     |
| GET    | /payus/frank        | No   | Get random frank message                | 60/min     |
| GET    | /payus/friendly     | No   | Get random friendly message             | 60/min     |
| GET    | /payus/playful      | No   | Get random playful message              | 60/min     |
| GET    | /payus/funny        | No   | Get random funny message                | 60/min     |
| GET    | /payus/tones        | No   | Get available tones                     | 60/min     |

## Contributing

We welcome contributions! Here's how you can help:

**Step 1:** Fork the repository

**Step 2:** Create your feature branch
```bash
git checkout -b feature/amazing-feature
```

**Step 3:** Make your changes and test them
```bash
npm test
```

**Step 4:** Commit your changes
```bash
git commit -m 'Add amazing feature'
```

**Step 5:** Push to the branch
```bash
git push origin feature/amazing-feature
```

**Step 6:** Open a Pull Request

### Ideas for Contributions
- Add more message variations to `messages.json`
- Improve documentation
- Add new language translations
- Fix bugs or improve performance
- Add new API features or tone categories

## Author

Created with a broken heart and torn wallet by [STICKnoLOGIC](https://sticknologic.is-a.dev)

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).