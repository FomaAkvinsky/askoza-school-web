#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
SOURCE_DIR="$ROOT_DIR/public/"
TARGET_DIR="${ASKOZA_SCHOOL_PUBLIC:-$HOME/www/school.askoza.ru/}"

DRY_RUN=""
if [[ "${1:-}" == "--dry-run" ]]; then
  DRY_RUN="--dry-run"
fi

if [[ ! -d "$SOURCE_DIR" ]]; then
  echo "Source directory not found: $SOURCE_DIR" >&2
  exit 1
fi

mkdir -p "$TARGET_DIR"

rsync -av --delete $DRY_RUN \
  --exclude=".user.ini" \
  --exclude=".htaccess.local" \
  "$SOURCE_DIR" "$TARGET_DIR"

echo
if [[ -n "$DRY_RUN" ]]; then
  echo "Dry run complete. No files were changed."
else
  echo "Deployment complete: $TARGET_DIR"
fi
