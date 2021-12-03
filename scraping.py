# -*- coding: utf-8 -*-
"""
Created on Fri Dec  3 01:21:44 2021

@author: cambo
"""

import requests
from bs4 import BeautifulSoup
import os
from lxml import html
import requests





import os
import sys

if len(sys.argv) > 1:
  output = sys.argv[1]
else:
  output = "no argument found"





def scrap(url):
    url=("https://www.websitecarbon.com/"+url)
    page = requests.get(url)
    tree = html.fromstring(page.content)
    elem = tree.xpath('//html/body/div[1]/main/article/div[2]/div[2]/p/span/span/span/text()')
    print('elem: ', elem)

    soup = BeautifulSoup(page.content, 'html.parser')
    #selection des informations entre balises
    rows = soup.select('body div main article div div p span span')

    tableau = []
    
    for i in rows:
        tableau.append(str(i))

    return(tableau[2][37:41])
    
    
    
    
    
    
