## Requirements

- Docker
- Docker compose

## Commands

```bash
cd app
docker-compose up --build -d
docker-compose exec webserver chmod -R 755 /var/www
```
