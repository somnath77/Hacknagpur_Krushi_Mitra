# HackNagpur 
## - KRUSHIMITRA

### Developers- 
Harshraj Dhote - dhoteharshraj@gmail.com

Shreya Kulkarni - skulkarni156029@gmail.com

Somnath Surwase - somnathsurwase7@gmail.com

#### Problem Statement - 
        
  Provide multi-purpose application solution to the farmers through which farmers can do shop,buy inventory,fertilizers,grains,crop diease identification with causes and remedies,get recommendations based on soil type,get latest agriculture updates,ferry sharing feature for travel purpose,get nearby markets,get weather updates,get access to kisant seva,connect with nearby NGO's,livestock management with buy,sell and get statistics of livestock,chatbot for serving answers to general queries.

### The problems we solve -

Our app is built to address many farmers questions under one roof.
1) We have a functionality to let other ask a ride for market if we have some space remaining into truck which will help farmer to save some money by sharing space in truck. 
2) Also we have crop doctor which will scan a image of leaf and with the help of deep learning model, it will tell which disease it has got and how to deal with it. 
3) Again we have soil jyotishi which will study soil and tell us what will be most suitable crop a farmer can take and which fertilizer will be effective and healthy. 
4) Our application also have functionality to tell weather updates, 
5) Agriculture News updates
6) nearby markets, 
7) nearby NGOs we can work with, 
8) kisaan Seva and many. 
9) We have a livestock functionality where farmer can register their livestocks and a unique ID will be generated. In this application livestock sell/bye , scan QR to check ownership of livestock.


#### Datasets used - 
Multiple datasets have been used for training and obtaining relevant output purposes. All the datasets used are custom datsets; constructed and structured according to the algorithm requirements and proposed test cases. Following is the list and types of the datasets used-

1) **Soil Image Dataset** (
https://www.kaggle.com/data/188469)- Contains around 600-700 images of different soil types which are used for agriculture and generally found in Indian-Subcontinent.
    
2) **Cat_crop.csv** - The mentioned CSV file contains data related to various parameters which have been taken into account while training the Crop recommendation System Machine Learning Model.
    
3) **Prediction.csv, Prediction.json** - This dataset contains additional information about the crops used in training of the model and are fetched in real time after crop pre

4)**plantVillage dataset** - https://www.kaggle.com/emmarex/plantdisease
Contains images used for plant diseases identification


### Krushi Mitra features and working:-
**1)LOGIN PORTAL** :- User/admin can login with username and password.

**2) MY_SHOP** :- In my shop feature farmer can buy,sell,rent crops,inventory tools and fertilizers.
 
 <img src="https://github.com/Shreya-156029/Hacknagpur_Krushi_Mitra/blob/master/Readme_images/shop.jpeg" alt="AppImg1" width="230" height="auto"> 

**3) AGRI_UPDATES** :- Under agri updates user will be able to access latest news regarding agriculture

**4) CROP_DOCTOR** :- User will upload an image and based on that he/she will get diseases,causes and remedies.For prediction of disease we have used deep learning model using pytorch which will detect image using convolutional neural network and predict disease by using classification algorithm.

**5) SOIL_JYOTISHI** :- After uploading an image of soil user will be able to get Crops,Fertilizers Required,cost of Cultivation,xpected Revenue,quantity of seeds per hectre	duration of cultivation,demand of crop,crops for mixed cropping	and link for more relavent videos based on soil image,temprature,location(latitude longitude) of user's location.

**6) MARKETS_NEAR_ME** :- User will be able to access details about all nearby markets through this feature.

**7) WEATHER UPDATES** :- User will be able to access temprature,humidity,tempareture variation,cloud cover of last 7 days based on current location data.

**8) KISAN_SEVA** :- User can access PM kisan seva and get details about latest and applicable government schemes.

**9) CONNECT WITH NGOS** :- Farmer can connect to the nearby NGO's which are helpful to them for different purposes.

**10) FERRY SHARING** :- Farmer can get to access ferry sharing by truck,tempo for travelling of manufactured crops and agricultural inventory materials.He can also get to know optimised path from current location to destination.

**11) CATTLE MANAGEMENT** :- This feature will provide suitable identification method to the animals based on QR code.User will be able to add/buy/sell or change ownership of animals through this feature.We can get region wise animal statistics based on different parameters which can be further used for analytical purposes.

**12) CHATBOT** :- We have integrated chatbot using dialogflow which can be used by farmers to solve general purpose queries.For chat bot we have provided **multilingual support** 




