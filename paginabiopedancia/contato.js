 document.getElementById('sendButton').addEventListener('click', function() {
    
        alert('Enviado');

        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('phone').value = '';
        document.getElementById('age').value = '';

        document.getElementById('Comentarios').value = '';

        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
    });
