(function(){
    'use strict';
    var regalo = document.getElementById("regalo");
    document.addEventListener('DOMContentLoaded',function () {


//para tener seguimiento activo en la pagina


        //campos datos del usuario
        var nombre = document.getElementById("nombre");
        var apellido = document.getElementById("apellido");
        var email =document.getElementById("email");

        //campos pases

        var pase_dia=document.getElementById("pase_un_dia");
        var pase_dosdias = document.getElementById("pase_dos_dias");
        var pase_completo = document.getElementById("pase_todos_dias");

        //botones y divs

        var calcular = document.getElementById("calcular");
        var errorDiv = document.getElementById("error");
        var botonRegistro = document.getElementById("btnRegistro");

        var lista_productos = document.getElementById("lista-productos");

        var suma_total = document.getElementById("suma-total");

        //extras
        var camisas = document.getElementById("camisa_evento");
        var sticker = document.getElementById("etiquetas");
        //disable
         botonRegistro.disabled=true;

        //aqui programo todo lo que va ser la impresesion de precios y totales
        calcular.addEventListener('click',calcularMontos);
        //para el despliegue
        pase_dia.addEventListener('blur',mostrarDias);
        pase_dosdias.addEventListener('blur',mostrarDias);
        pase_completo.addEventListener('blur',mostrarDias);

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value===''){
                alert("debes elegir un regalo");
                regalo.focus();
            }else{
                var boletosDia=parseInt(pase_dia.value, 10)||0,
                    boletos2Dias=parseInt(pase_dosdias.value,10)||0,
                    boletosCompleto=parseInt(pase_completo.value,10)||0,
                    cantCamisas=parseInt(camisas.value,10)||0,
                    cantStickers=parseInt(sticker.value,10)||0;

                console.log("boletos por un dia: "+boletosDia );
                console.log("boletos por 2 dias: "+boletos2Dias);
                console.log("boletos por todos los dias: "+boletosCompleto);

                var totalPagar = (boletosDia)*30 + (boletos2Dias)*45 + (boletosCompleto)*50 + ((cantCamisas*10)*.93) + (cantStickers*2);
                console.log(totalPagar);

                //creo un arrya para alamacenar los datos generales
                var listadoProductos=[];

                if(boletosDia>=1 ){
                    listadoProductos.push(boletosDia+" Boletos por un dia");
                }
                if(boletos2Dias>=1){
                    listadoProductos.push(boletos2Dias+" Boletos por 2 dias");
                }
                if(boletosCompleto>=1){
                    listadoProductos.push(boletosCompleto+" Boletos para todos los dias");
                }
                if(cantCamisas>=1){
                    listadoProductos.push(cantCamisas+" Camisetas han sido agregadas");
                }
                if(cantStickers>=1){
                    listadoProductos.push(cantStickers+" Stickers han sido agregados");
                }
                console.log(listadoProductos);
                //asigno el espacio en blanco para meter los valores,inner es aderir
                listadoProductos.innerHTML='';
                lista_productos.style.display="block";
                for(var i=0;i<listadoProductos.length;i++){
                    lista_productos.innerHTML +=listadoProductos[i]+ '<br>';
                }
                suma_total.innerHTML="$"+ totalPagar.toFixed(2);

                botonRegistro.disabled=false;
                document.getElementById('total_pedido').value=totalPagar;
            }
        }

        //aqui viene la programacion de ocultar y mostrar
        function mostrarDias() {
            var boletosDia=parseInt(pase_dia.value, 10)||0,
                    boletos2Dias=parseInt(pase_dosdias.value,10)||0,
                    boletosCompleto=parseInt(pase_completo.value,10)||0;
            var diasElegido=[];
            if(boletosDia>0){
                diasElegido.push("viernes");
            }
            if(boletos2Dias>0){
                diasElegido.push("viernes","sabado");
            }
            if(boletosCompleto>0){
                diasElegido.push("viernes","sabado","domingo");
            }
            for(var i=0;i<diasElegido.length;i++){
                document.getElementById(diasElegido[i]).style.display='block';
            }
        }
        //para la validacion de nombres apellidos y email
        nombre.addEventListener('blur',validarCampos);
        apellido.addEventListener("blur",validarCampos);
        email.addEventListener("blur",validarCampos);
        function validarCampos(){
            if(this.value==''){
                errorDiv.style.display='block';
                errorDiv.innerHTML="este campo es oblogatorio";
                this.style.border = "1px solid red";
                errorDiv.style.backgroundColor = "red";
            }else{
                errorDiv.style.display="none";
            }
        }
        //para el email
        email.addEventListener("blur",validacionEmail);
        function validacionEmail() {
            if(this.value.indexOf("@")>-1){
                errorDiv.display="none";
            }else{
            errorDiv.style.display='block';
                errorDiv.innerHTML="este campo es oblogatorio";
                this.style.border = "1px solid red";
                errorDiv.style.backgroundColor = "red";
            }
        }


    });//doom fin//

})();
