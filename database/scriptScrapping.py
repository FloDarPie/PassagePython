#pip3 install lxml
from lxml import html
import requests

page = requests.get('https://sauveteurdudunkerquois.fr')
tree = html.fromstring(page.content)

#This will create a list of buyers:
buyers = tree.xpath('//div[@title="entry clr"]/text()')
#This will create a list of prices
prices = tree.xpath('//span[@class="entry clr"]/text()')

print ('Buyers: ', buyers)
print ('Prices: ', prices)
