from flask import Flask, request, jsonify, render_template
import tensorflow as tf
import numpy as np
from PIL import Image

# Load pre-trained model
model = tf.keras.models.load_model("models/disease_model.h5")

app = Flask(_name_)

@app.route("/")
def home():
    return render_template("index.html")

@app.route("/predict", methods=["POST"])
def predict():
    if "file" not in request.files:
        return jsonify({"error": "No file uploaded"}), 400

    file = request.files["file"]
    img = Image.open(file).resize((224, 224))  # Resize to match model input
    img_array = np.array(img) / 255.0  # Normalize
    img_array = np.expand_dims(img_array, axis=0)

    predictions = model.predict(img_array)
    disease_class = np.argmax(predictions)  # Get predicted class index

    # Map index to disease names
    diseases = ["Skin Cancer", "Eczema", "Psoriasis", "Healthy"]
    result = diseases[disease_class]

    return jsonify({"prediction": result})

if _name_ == "_main_":
    app.run(debug=True)