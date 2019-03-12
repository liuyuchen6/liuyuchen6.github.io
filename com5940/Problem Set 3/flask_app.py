
# A very simple Flask Hello World app for you to get started with...

from flask import Flask, render_template, request, json, redirect, session
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = True


@app.route('/')
def index():
    return render_template('index.html')

@app.route("/table")
def table():
    r = requests.get('https://api.airtable.com/v0/appP08QzNYKhEisKm/movieranking?api_key=key612jRf7pmMj1ce')
    dict = r.json()
    dataset = []
    for i in dict['records']:
        dict = i['fields']
        dataset.append(dict)
    return render_template('table.html',movieranking=dataset)

@app.route("/chart")
def chart():
    r1 = requests.get('https://api.airtable.com/v0/appWkESORpIhMnqaR/Location?api_key=key612jRf7pmMj1ce')
    dict1 = r1.json()
    dict2 = {}
    dataset1 = []
    loc=[]
    count=[]
    for i in dict1['records']:
        dict2 = i['fields']
        dataset1.append(dict2)
    for item in dataset1:
        loc.append(item.get('Name'))
        count.append(item.get('Count'))

    r2 = requests.get('https://api.airtable.com/v0/appWkESORpIhMnqaR/Members?api_key=key612jRf7pmMj1ce')
    dict = r2.json()
    dataset2 = []
    for i in dict['records']:
        dict = i['fields']
        dataset2.append(dict)
    return render_template('chart.html',location =zip(loc,count), Members= dataset2)

