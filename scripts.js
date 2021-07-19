function abrirMenu(){
	document.getElementById("menuOculto").style.width="250px";
	document.getElementById("menuOculto").style.marginLeft="0px";
}

function fecharMenu(){
	document.getElementById("menuOculto").style.width="0px";
	document.getElementById("menuOculto").style.marginLeft="0px";
}

	var values = new Array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
	var chave = +document.getElementById("chave").innerHTML;

	function subtrairChave() {
		if(chave > 1) {
			chave--;
			document.getElementById("chave").innerHTML = chave;
		}
	}

	function somarChave() {
		if(chave < 25) {
			chave++;
			document.getElementById("chave").innerHTML = chave;
		}
	}

	function cifrar() {
		var input = document.getElementById("input").value.toUpperCase();
		var result = "";
		for(var i = 0; i < input.length; i++) { //laço para percorrer todos os caracteres da palavra de entrada
			var posicaoLetra = input.charCodeAt(i) - 64; //Identifica a posição da letra no alfabeto através do ASCII e subtrai 64, ficando A = 1...
			var letraDeslocada = (posicaoLetra + chave) % 26; //Faz o deslocamento de César e mantém dentro do alfabeto (26 letras) , Z = 26
			letraDeslocada = letraDeslocada == 0 ? 26 : letraDeslocada; //Utiliza Módulo para retornar a 0 caso o resultado seja 26. Correção do giro
			result += values[letraDeslocada - 1]; //Como A está no índice 0 do array, subtrai 1.
		}
		document.getElementById("input").value = result;
	}
	
	function validacao() {
		var input = document.getElementById("input").value;
		if(input == "") {
			alert("O campo input não pode estar vazio. Coloque um input!");
			formuser.input.focus();
			return false;
		} else {
			cifrar();
		}
	}