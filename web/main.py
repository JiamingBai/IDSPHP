from flask import Flask, render_template, Response, request, redirect, url_for
app = Flask(__name__)

@app.route("/")
def index():
    return render_template('prediction.html')

@app.route("/forward/", methods=['POST'])
def predict():
    #Moving forward code
    forward_message = "Testing..."
    return render_template('prediction.html', message=forward_message);


@app.route('/json')
def json():
    return render_template('prediction.html')


@app.route('/background_process_test')
def background_process_test():
    print "Hello"
    return "nothing"