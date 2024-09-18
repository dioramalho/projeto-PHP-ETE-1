// const btnCalcular = document.querySelector('.btnCalcular');
// const resultado = document.createElement('p');

// btnCalcular.addEventListener('click', () => {
//   const sidebarContent = document.querySelector('.sidebarContent');
//   let altura = parseFloat(document.querySelector('#altura').value.replace(',', '.'));
//   let peso = parseFloat(document.querySelector('#peso').value.replace(',', '.'));

//   if (isNaN(altura) || isNaN(peso)) {
//     alert("Preencha os inputs");
//     try {
//       if (isNaN(peso)) {
//         throw new Error("Peso inválido");
//       }
//       if (isNaN(altura)) {
//         throw new Error("Altura inválida");
//       }
//     } catch (error) {
//       console.error(error);
//     }
//     return;
//   }

//   const imc = peso / (altura * altura);
//   resultado.innerText = `Resultado IMC: ${imc.toFixed(2)}`;

//   if (imc < 18.5) {
//     resultado.innerText += ' (Magro)';
//   } else if (imc >= 18.5 && imc < 24.9) {
//     resultado.innerText += ' (Normal)';
//   } else if (imc >= 24.9 && imc < 29.9) {
//     resultado.innerText += ' (Sobrepeso)';
//   } else {
//     resultado.innerText += ' (Obesidade)';
//   }

//   sidebarContent.appendChild(resultado);
// });