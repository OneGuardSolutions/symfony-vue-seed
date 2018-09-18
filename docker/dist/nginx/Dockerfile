FROM node:alpine AS assets
COPY ../../../ /root/app
WORKDIR /root/app
RUN yarn install && yarn build

FROM nginx:alpine
COPY --from=assets /root/app/public/build/ /var/www/html/public/build/
COPY default.conf /etc/nginx/conf.d/default.conf
