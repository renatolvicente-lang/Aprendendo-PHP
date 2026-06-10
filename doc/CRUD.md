<h1>Aprendendo CRUD com PHP</h1>

<p>Nestá aplicação o professor teve o objetivo de nos ensinar a fazer um CRUD com php de primeira ele apenas fez o C(Create) e o R(Read) do CRUD com o intuito que nos fazendo o </p>

<h3>Tecnologias ultilizadas</h3>

<ul>
<li><b>Hospedagem Local:</b> Xampp</li>
<li><b>Linguagem de programação:</b> PHP</li>
<li><b>IDEs: </b>VScode (Visual Studio Code)</li>
</ul>

<h3>Estruturas de arquivos</h3>

```
📂 APRENDENDO PHP
├── 📂 doc/                  # Documentação e anotações do sistema
├── 📂 infra/                # Configurações da aplicação
│   └── 📂 db/               # Recursos do banco de dados
│       ├── connect.php      # Responsável pela conexão com o banco
│       └── script.sql       # Estrutura e dados iniciais do banco
├── 📂 redes/               
├── 📂 public/               # Arquivos públicos da aplicação
│   ├── 📂 components/       # Componentes reutilizáveis da interface
│   │   └── table.php        # Tabela para exibição de dados
│   ├── excluir.php          # Remove registros do sistema
│   ├── home.php             # Tela inicial
│   ├── logout.php           # Realiza o logout do usuário
│   └── index.php            # Página inicial acessada pelo navegador
└── README.md                # Documentação geral do projeto

```