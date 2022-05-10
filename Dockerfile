FROM composer:2

EXPOSE 8000

RUN apk update && apk add \
		freetype-dev \
		jpeg-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd

WORKDIR /app

COPY . .

RUN composer update

CMD composer start
