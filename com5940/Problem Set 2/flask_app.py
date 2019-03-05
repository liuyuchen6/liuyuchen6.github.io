
# A very simple Flask Hello World app for you to get started with...

from flask import Flask, render_template, json, request
from flask import Markup

import requests

app = Flask(__name__)
app.config["DEBUG"] = True


@app.route('/')
def index():
    return render_template('index.html')

@app.route("/")
def table():
    r = requests.get('https://api.airtable.com/v0/appP08QzNYKhEisKm/movieranking?api_key=key612jRf7pmMj1ce')
    dict = r.json()
    dataset = []
    for i in dict['records']:
         dict = i['fields']
         dataset.append(dict)
    return render_template('index.html', entries=dataset)


