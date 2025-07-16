from flask import Flask, request, jsonify
from sklearn.neighbors import KNeighborsClassifier      

app = Flask(__name__)

# Modelo de classificação KNN
modelo = KNeighborsClassifier(n_neighbors=3)
x = [[150, 7], [170, 8], [120, 5], [130, 6]]
y = ['maça', 'maça', 'laranja', 'laranja']

modelo.fit(x, y)

# Corrigindo o nome do decorator para @app.route
@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    amostra = data['amostra']
    previsao = modelo.predict([amostra])
    return jsonify({'resultado': previsao[0]})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)




