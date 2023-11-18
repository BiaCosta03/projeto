document.getElementById('alunoForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const aluno = {
        nome: document.getElementById('nome').value,
        endereco: document.getElementById('endereco').value,
        email: document.getElementById('email').value,
        telefone: document.getElementById('telefone').value
    };

    fetch('add_aluno.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(aluno)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Aluno adicionado com sucesso:', data);
        loadAlunos();
    })
    .catch((error) => {
        console.error('Erro ao adicionar aluno:', error);
    });
});

function loadAlunos() {
    fetch('get_alunos.php')
    .then(response => response.json())
    .then(data => any);
}