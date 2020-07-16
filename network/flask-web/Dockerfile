FROM python:3.7-slim-stretch

COPY ./requirements.txt ./run.py /app/
WORKDIR /app/

RUN pip install -r requirements.txt

CMD ["python", "run.py"]
