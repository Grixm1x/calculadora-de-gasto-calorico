window.addEventListener("DOMContentLoaded", function () {
    emailjs.init("-Tm67zutm7Lr_fz4s");

    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault();

        const serviceID = 'service_drurwbc';
        const templateID = 'template_cht42tw';

        const form = this;
        const templateParams = {
            Nome: form.elements['Nome'].value,
            Email: form.elements['Email'].value,
            Telefone: form.elements['Telefone'].value,
            Idade: form.elements['Idade'].value,
            Comentarios: form.elements['Comentarios'].value
        };

        const tiposContatoSelecionados = [];
        document.querySelectorAll('#contact-form input[type="checkbox"]:checked').forEach(checkbox => {
            tiposContatoSelecionados.push(checkbox.value);
        });
        templateParams['TipoContato'] = tiposContatoSelecionados.length > 0 ? tiposContatoSelecionados.join(', ') : 'Nenhum selecionado';

        emailjs.send(serviceID, templateID, templateParams)
            .then(() => {
                alert('Sua mensagem foi enviada com sucesso!');
                form.reset();
            }, (error) => {
                console.error('Falha ao enviar a mensagem:', error);
                alert('Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.');
                
            });
    });
});
