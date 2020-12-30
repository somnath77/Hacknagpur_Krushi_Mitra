import os
from flask import Flask, request,render_template
from modules.inference import predict_class
from flask_cors import CORS
import json
app = Flask(__name__,static_url_path='/static')
CORS(app)
pred = predict_class(home_path="./modules")

@app.route('/', methods=['GET', 'POST'])
def postHandler():
    imagefile = request.files['image']
    filename = imagefile.filename
    print("\nReceived image File name : " + imagefile.filename)
    f = open("static/causesremedies.json",encoding="utf8")
    data = json.load(f) 
   # print(data)
    for key in data:
        value = data[key]
        if(str(key)==pred.predict(filename)):
         causes = str(value[0])
         rm = str(value[1])
         causes = causes.replace('{',"")
         rm = rm.replace('{',"")
         causes = causes.replace('}',"")
         rm = rm.replace('}',"")
         causes = causes.replace('\'Causes\':',"")
         rm = rm.replace('\'Remedies\':',"")
         rm = rm.replace('\'',"")
         causes = causes.replace('\'',"")
         print("The key and value are ({}) = ({})".format(key, value))

    imagefile.save(filename)
    return render_template("result.html",name=pred.predict(filename),causes=causes,remedies=rm)

app.run(host='127.0.0.1', port=8001, debug=True)