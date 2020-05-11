FROM bitnami/laravel:6

WORKDIR /app

COPY --chown=bitnami:bitnami . /app