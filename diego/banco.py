import sqlite3

# Cria (ou conecta) ao banco SQLite
conn = sqlite3.connect("pessoas.db")
cursor = conn.cursor()

# Cria a tabela com os campos nome, idade e telefone
cursor.execute("""
CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    idade INTEGER NOT NULL,
    telefone INTEGER NOT NULL           
)
""")

# Insere um exemplo de usuário (opcional)
cursor.execute("INSERT INTO usuarios (nome, idade, telefone) VALUES (?, ?, ?)", 
               ("", "", ""))

conn.commit()
conn.close()

print("Banco criado com sucesso.")



print(cursor)