FROM php:7.2
WORKDIR /app
COPY index.php /app
EXPOSE 80
ENV WHAT going
CMD ["php", "-S", "0.0.0.0:80", "-t", "/app"]
