const form = document.getElementById("form-inscricao");
const mensagem = document.getElementById("mensagem-sucesso");

form.addEventListener("submit", function(event) {
    event.preventDefault();

    const nome = document.getElementById("nome").value.trim();
    const email = document.getElementById("email").value.trim();
    const whatsapp = document.getElementById("whatsapp").value.trim();
    const experiencia = document.getElementById("experiencia").value;

    // Validação simples
    if (!nome || !email || !whatsapp || !experiencia) {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    // Simulação de envio
    mensagem.style.display = "block";

    // Limpa formulário
    form.reset();

    // Oculta mensagem depois de 5 segundos
    setTimeout(() => {
        mensagem.style.display = "none";
    }, 5000);
});