FROM node

VOLUME /var/www/zonecrew

WORKDIR /var/www/zonecrew

RUN npm install --force --global yarn

CMD ["bash", "-c", "yarn && yarn watch"]
