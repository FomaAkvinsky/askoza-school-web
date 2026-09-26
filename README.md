# АСКОЗА — Школа корпоративного заемщика

Сайт «Школа корпоративного заемщика Сергея Акинина».

Production: https://school.askoza.ru/

## Структура

- `public/` — файлы, публикуемые в DocumentRoot.
- `public/includes/` — общие PHP-фрагменты.
- `public/assets/` — CSS, JS, изображения и иконки.
- `deploy/` — скрипты развертывания.

## Git workflow

Рабочие изменения делаются в feature-ветках и после проверки попадают в `main` через Pull Request.

## Production deploy

Проверка без изменений:

```bash
cd ~/git/askoza-school-web
git pull
bash deploy/deploy-production.sh --dry-run
```

Развертывание:

```bash
bash deploy/deploy-production.sh
```

По умолчанию содержимое `public/` синхронизируется в:

```text
~/www/school.askoza.ru/
```

Deploy key production-сервера должен оставаться read-only.
