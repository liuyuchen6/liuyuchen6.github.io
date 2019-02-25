#!/usr/bin/env python
# coding: utf-8

# <h1 style = "text-align: center">movie ranking scraping</h>

# In[2]:


import requests
import csv
from bs4 import BeautifulSoup
quote_page = requests.get('https://www.imdb.com/chart/moviemeter?ref_=nv_mv_mpm')
soup = BeautifulSoup(quote_page.content,'html.parser')


# In[3]:


soup


# In[5]:


import requests
import csv
from bs4 import BeautifulSoup

quote_page = requests.get('https://www.imdb.com/chart/moviemeter?ref_=nv_mv_mpm')
soup = BeautifulSoup(quote_page.content,'html.parser')

movie = soup.find('div', class_="lister")
for each_movie in movie.find_all('td', class_="titleColumn"):
    print(each_movie)
#test movie info

# In[22]:


import requests
import csv
from bs4 import BeautifulSoup


quote_page = requests.get('https://www.imdb.com/chart/moviemeter?ref_=nv_mv_mpm')
soup = BeautifulSoup(quote_page.content,'html.parser')
data= []

movie = soup.find('div', class_="lister")
for each_movie in movie.find_all('td', class_="titleColumn"):
    #print(each_movie)
    all_a = each_movie.find_all('a')
    all_span = each_movie.find_all('span')
    all_info = each_movie.find_all('div',class_="velocity")
    title = all_a[0].text
    year = all_span[0].text
    velocity = all_info[0].text
    print ('Title:{}, year:{}, velocity:{}'.format(title,year,velocity))
    data.append((title, year, velocity))

with open('movie_ranking.csv', 'w') as csv_file:
    writer = csv.writer(csv_file)
    header = ['Title','Year','Velocity']
    writer.writerow(header)
    for title, year, velocity in data:
        writer.writerow([title,year,velocity])
#write the CSV file
