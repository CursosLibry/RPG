$( document ).ready(function(){
	$('#secaoMestre').hide();
	$('#secaoJogador').hide();
		$('#mostraMenuParaMestre').click(function(){
			$('#secaoFooter').hide();
			$('#secaoMestreJogadorEscolha').fadeOut("slow", function(){
				$('#secaoMestreJogadorEscolha').hide();
				$('#secaoMestre').fadeIn('slow', function(){
					$('#secaoFooter').show();
				});
				$('#secaoMestre').show();
				$('#secaoJogador').hide();
				;
			});
		});

		$('#mostraMenuParaJogador').click(function(){
			$('#secaoFooter').hide()
			$('#secaoMestreJogadorEscolha').fadeOut('slow', function(){
				$('#secaoMestreJogadorEscolha').hide();
				$('#secaoJogador').fadeIn('slow', function(){
					$('#secaoFooter').show();
				});
				$('#secaoJogador').show();
			});
			$('#secaoMestre').hide();
		});

		$('#mostraSessãoInicialMestre').click(function(){
			$('#secaoFooter').hide();
			$('#secaoJogador').fadeOut('slow', function(){
				$('#secaoJogador').hide();
				$('#secaoMestreJogadorEscolha').fadeIn('slow', function(){
					$('#secaoFooter').show();
				});
				$('#secaoMestreJogadorEscolha').show();
			});
			$('#secaoMestre').hide();
		});

		$('#mostraSessãoInicialJogador').click(function(){
			$('#secaoFooter').hide();
			$('#secaoMestre').fadeOut('slow', function(){
				$('#secaoMestre').hide();
				$('#secaoMestreJogadorEscolha').fadeIn('slow', function(){
					$('#secaoFooter').show();
				});
				$('#secaoMestreJogadorEscolha').show();
			});
			$('#secaoJogador').hide();
		});
});
