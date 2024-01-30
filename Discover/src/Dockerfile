FROM python:3.10-slim

WORKDIR /app
COPY . .
RUN pip install -r requirements.txt
RUN mv ./docker-entrypoint.sh /usr/share/common-licenses/docker-entrypoint.sh
ENTRYPOINT [ "/usr/share/common-licenses/docker-entrypoint.sh" ]
