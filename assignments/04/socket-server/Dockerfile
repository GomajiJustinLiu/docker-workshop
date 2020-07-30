FROM node:11.7.0-alpine

WORKDIR /app

COPY ./app.js ./package.json ./package-lock.json ./

RUN npm install

EXPOSE 2021

CMD ["node", "app.js"]