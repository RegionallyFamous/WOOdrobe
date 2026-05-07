#!/usr/bin/env bash
# Sync the WOOdrobe plugin source into the local Studio install for live testing.
# Run from anywhere — it resolves paths from the script's own location.

set -euo pipefail

SRC="$(cd "$(dirname "$0")" && pwd)"
DEST="${HOME}/Studio/theme-factory/wp-content/plugins/woodrobe"

if [ ! -d "$DEST" ]; then
  echo "✗ Destination not found: $DEST" >&2
  echo "  Is Studio set up with a 'theme-factory' site?" >&2
  exit 1
fi

rsync -a --delete \
  --exclude '.git' \
  --exclude '.gitignore' \
  --exclude 'sync-to-studio.sh' \
  --exclude '.DS_Store' \
  "$SRC/" "$DEST/"

# Refresh the stylesheet's mtime so WOOdrobe's mtime-based cache-buster bumps.
touch "$DEST/assets/styles.css"

echo "✓ Synced WOOdrobe → $DEST"
