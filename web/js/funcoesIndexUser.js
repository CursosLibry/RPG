$( document ).ready(function(){
	$('#secaoMestre').hide();
	$('#secaoJogador').hide();
		$('#mostraMenuParaMestre').click(function(){
			$('#secaoFooter').hide();
			$('#secaoMestreJogadorEscolha').slideUp("slow", function(){
				$('#secaoMestreJogadorEscolha').hide();
				$('#secaoMestre').slideDown('slow', function(){
					$('#secaoFooter').show();
				});
				$('#secaoMestre').show();
				$('#secaoJogador').hide();
				;
			});
		});

		$('#mostraMenuParaJogador').click(function(){
			$('#secaoFooter').hide()
			$('#secaoMestreJogadorEscolha').slideUp('slow', function(){
				$('#secaoMestreJogadorEscolha').hide();
				$('#secaoJogador').slideDown('slow', function(){
					$('#secaoFooter').show();
				});
				$('#secaoJogador').show();
			});
			$('#secaoMestre').hide();
		});

		$('#mostraSessãoInicialMestre').click(function(){
			$('#secaoFooter').hide();
			$('#secaoJogador').slideUp('slow', function(){
				$('#secaoJogador').hide();
				$('#secaoMestreJogadorEscolha').slideDown('slow', function(){
					$('#secaoFooter').show();
				});
				$('#secaoMestreJogadorEscolha').show();
			});
			$('#secaoMestre').hide();
		});

		$('#mostraSessãoInicialJogador').click(function(){
			$('#secaoFooter').hide();
			$('#secaoMestre').slideUp('slow', function(){
				$('#secaoMestre').hide();
				$('#secaoMestreJogadorEscolha').slideDown('slow', function(){
					$('#secaoFooter').show();
				});
				$('#secaoMestreJogadorEscolha').show();
			});
			$('#secaoJogador').hide();
		});
});
