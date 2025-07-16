import requests
from flask import Flask, request, jsonify

app = Flask(__name__)

def search_web(query):
    
    url = "https://api.duckduckgo.com/"
    params = {
        "q": query,
        "format": "json",
        "no_redirect": 1,
        "no_html": 1
    }
    response = requests.get(url, params=params)
    data = response.json()
    answer = data.get("AbstractText") or data.get("Answer") or "Desculpe, não encontrei uma resposta."
    return answer

@app.route('/ask', methods=['POST'])
def ask():
    user_input = request.json.get('question')
    if not user_input:
        return jsonify({"error": "Pergunta não fornecida."}), 400
    answer = search_web(user_input)
    return jsonify({"answer": answer})

if __name__ == '__main__':
    app.run(debug=True)