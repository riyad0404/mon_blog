#!/bin/sh
# wait-for-mysql.sh
set -e

host="$1"
shift
echo "[DEBUG] DB_USER: $DB_USER"
echo "[DEBUG] DB_PASSWORD: $DB_PASSWORD"
echo "[DEBUG] DB_NAME: $DB_NAME"
echo "[DEBUG] host: $host"

if [ -z "$DB_PASSWORD" ]; then
  PASS_ARG=""
else
  PASS_ARG="--password=$DB_PASSWORD"
fi

until mysql --ssl=0 -h "$host" -u "$DB_USER" $PASS_ARG -e 'select 1' "$DB_NAME"; do
  >&2 echo "MySQL is unavailable - sleeping"
  sleep 2
 done


>&2 echo "MySQL is up - executing command"
exec "$@"
