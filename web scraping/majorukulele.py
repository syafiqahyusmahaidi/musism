import requests
import json
import pandas as pd

url = 'https://majormusic.com.my/collections/ukuleles/products.json?limit=250&page=1'

r = requests.get(url)

data = r.json()

product_list = []

for item in data['products']:
   title = item['title']
   type = item['product_type']
   vendor = item['vendor']
   product_url = 'https://majormusic.com.my/collections/ukuleles/products/' + item['handle']

   for image in item['images']:
       try:
           imagesrc = image['src']
       except:
            imagesrc = 'None'
   for variant in item['variants']:
       price = variant['price']

       product = {
        'title' : title,
        'price' : price,
        'image' : imagesrc,
        'product_url': product_url,
        'product_type' : type,
        'vendor' : vendor
        }
       product_list.append(product)

df = pd.DataFrame(product_list)

df.to_csv('majorukuleleqq.csv', index=False)
print('saved to file')
