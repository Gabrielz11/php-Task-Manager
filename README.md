# Task Manager

Um gerenciador de tarefas simples, desenvolvido em PHP seguindo as boas práticas de PSR-4 e PSR-12. O projeto utiliza **Laminas Diactoros** para lidar com requisições HTTP e um sistema básico de CRUD para gerenciamento de tarefas.

## Funcionalidades

✅ Criar novas tarefas </br>
✅ Listar todas as tarefas </br>
✅ Atualizar tarefas existentes </br>
✅ Marcar tarefas como concluídas </br>
✅ Deletar tarefas

## Tecnologias Utilizadas
* PHP 8.4.3 - Linguagem principal do projeto </br>
* Laminas Diactoros - Para manipulação de requisições e respostas HTTP </br>
* PSR-4 e PSR-12 - Seguindo padrões recomendados pelo PHP-FIG </br>
* Postman - Para testar as requisições da API

## Como Exectuar o Projeto
1️⃣ Clone o repositório:
```bash
 git clone https://github.com/seuusuario/task-manager.git
```

2️⃣ Acesse a pasta do projeto:
```bash
 cd task-manager
```

3️⃣ Inicie o servidor embutido do PHP:
```bash
 php -S localhost:8000 -t public/
```

4️⃣ Teste a API utilizando **Postman** ou **cURL**.

## 📡 Rotas da API

### Criar uma nova tarefa
```http
POST /tasks
```
**Body JSON:**
```json
{
  "title": "Estudar PHP",
  "description": "Aprimorar conhecimentos em PSR-4 e PSR-12"
}
```

### Listar todas as tarefas
```http
GET /tasks
```

### Atualizar uma tarefa
```http
PUT /tasks/{id}
```

### Marcar uma tarefa como concluída
```http
PATCH /tasks/{id}/complete
```

### Deletar uma tarefa
```http
DELETE /tasks/{id}
```

## 📌 Estrutura do Projeto
```
📂 task-manager
 ┣ 📂 src
 ┃ ┣ 📂 Controllers  # Lógica dos controladores
 ┃ ┣ 📂 Models       # Modelagem das entidades
 ┃ ┣ 📂 Services     # Regras de negócio
 ┃ ┗ 📂 Routes       # Definição das rotas
 ┣ 📂 public         # Ponto de entrada do sistema
 ┗ 📜 index.php      # Arquivo principal
```

## 📌 Melhorias Futuras
* Autenticação e Autorização: Implementar autenticação JWT com roles (admin, usuário), adicionar autenticação com OAuth2 para maior segurança e integração com outras plataformas.</br>
* Sistema de Notificações: Implementar notificações por email ou SMS, utilizar websockets para notificações em tempo real. </br>
* Suporte a Tarefas Recorrentes: Permitir que o usuário crie tarefas recorrentes (diárias, semanais, mensais). </br>
* Filtros e Ordenação Avançada: Adicionar filtros para status, prioridade e data de vencimento. Implementar ordenação das tarefas.

## ⭐ Curiosidade
* Esse README foi feito no readme.so

## 📌 Autor
👨‍💻 **Gabriel Vaz Aires**  
💼 [LinkedIn](https://linkedin.com/in/gabrielvazaires)  
📂 [GitHub](https://github.com/gabrielz11)  

---
📢 **Gostou do projeto? Deixe uma ⭐ no repositório!**

