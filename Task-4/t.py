import urllib.request,json
rover=input("rover name ")
date=input("Enter date YYYY-M-DD: ")
Id=int(input("Enter Unique id of Image"))
url='https://api.nasa.gov/mars-photos/api/v1/rovers/{}/photos?earth_date={}&api_key=cXP9FdhGRCj4v7QKFheBPv3rpMi8r0G2qVgKJ5dV'.format(rover,date)
filename="{}{}.json".format(rover,date)
imagename="{}{}.jpg".format(date,Id)
#fullpath='{}{}'.format(filepath,filename)
urllib.request.urlretrieve(url,filename)
f=open('{}'.format(filename))
data=json.load(f)
#print(data)
length_dict = {photos: len(value) for photos, value in data.items()}
i = length_dict['photos']
z=0
while z<i:
    if Id==data["photos"][z]['id']:
        url=data["photos"][z]['img_src']
        urllib.request.urlretrieve('{}'.format(url),imagename)
    z=z+1    
f.close()