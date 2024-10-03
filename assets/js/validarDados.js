// Adiciona o evento submit ao formulário
const form = document.getElementById('form');
const inputs = document.querySelectorAll('.input');


form.addEventListener('submit', (event) => {
        event.preventDefault(); // Previne o envio padrão do formulário
        validarDados(); // Chama a função de validação
});


// Função de validação
function validarDados() {
        let hasError = false;

        inputs.forEach((input) => {
                if (input.value.trim() === '') {
                        input.classList.add('is-invalid'); // Adiciona a classe de erro
                        hasError = true; // Define hasError como true
                } else {
                        input.classList.remove('is-invalid'); // Remove a classe de erro
                }
        });

        // Se não houver erro, submeta o formulário
        if (!hasError) {
                form.submit();
        } else {
                alert('Por favor, preencha todos os campos obrigatórios.');
        }
}
