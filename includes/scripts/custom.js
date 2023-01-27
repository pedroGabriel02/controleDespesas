/*
function toFinalNumberFormat(controlToCheck) {
    var enteredNumber = '' + controlToCheck.value;
    enteredNumber = enteredNumber.replace(/[^0-9\.]+/g, ''); // remove any non-numeric, non-period character
    controlToCheck.value = Number(enteredNumber).toLocaleString('brl', { style: 'currency', currency: 'brl'});
};
*/

/*
despForm.addEventListener("submit", async (e) => {
    e.preventDefault(); //Impede que a página recarregue
    
    const dadosForm = new FormData(despForm);
    dadosForm.append("add", 1);

    const dados = await fetch("./php/save.php", {
        method:"POST",
        body: dadosForm,
    });

    const resposta = await dados.json();

    if(resposta['erro']){
        msgAlerta.innerHTML = resposta['msg'];
    } else {
        msgAlerta.innerHTML = resposta['msg'];
        despForm.reset();
        despModal.hide();
        listarDespesas();
    }
});
*/