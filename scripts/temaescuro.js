const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
    document.body.classList.toggle('escuro');
    const cards = document.querySelectorAll('.card');
    const temaEscuroAtivado = document.body.classList.contains('escuro');
    cards.forEach(card => {
        if (temaEscuroAtivado) {
            card.style.backgroundColor = '#111';
            box.s
        } else {
            card.style.backgroundColor = 'lightgrey';
        }
    });
    // const boxc = document.querySelectorAll('.box-content');
    // boxc.forEach(boxc => {
    //     if (temaEscuroAtivado) {
    //         boxc.style.backgroundColor = '#333';
    //         box.s
    //     } else {
    //         boxc.style.backgroundColor = '#ffff'; 
    //     }
    // });
    const elementosParaTemaEscuro = document.querySelectorAll('.mainCategoryCardTitle, .mainCategoryCardDescription, .sectionDescription, .body-bg, .container-body, .container, .contacts, .box-content, .categoryCarde');
    elementosParaTemaEscuro.forEach(elemento => {
        elemento.classList.toggle('escuro');
    });
});
