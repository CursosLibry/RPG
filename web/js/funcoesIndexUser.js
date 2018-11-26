$( document ).ready(function(){
	$('#secaoMestre').hide();
	$('#secaoJogador').hide();
		$('#mostraMenuParaMestre').click(function(){
			$('#secaoMestreJogadorEscolha').fadeOut("medium", function(){
				$('#secaoMestreJogadorEscolha').hide();
				$("#sera").hide();
				$('#secaoMestre').fadeIn('medium');
				$('#secaoMestre').show();
				$('#secaoJogador').hide();
				$("#narrativa").fadeIn('fast');
			});
			// $("#jornada").fadeIn('medium');
		});

		$('#mostraMenuParaJogador').click(function(){
			$('#escolhaMestreJogador').fadeOut("medium", function(){
				$('#escolhaMestreJogador').hide();
				;
			});
			$('#secaoMestreJogadorEscolha').fadeOut('medium', function(){
				$('#secaoMestreJogadorEscolha').hide();
				$("#sera").hide();
				$('#secaoJogador').fadeIn('medium');
				$('#secaoJogador').show();
				$("#jornada").fadeIn('fast');
			});
			$('#secaoMestre').hide();
		});

		$('#mostraSessãoInicialMestre').click(function(){
			$("#narrativa")
			$('#secaoJogador').fadeOut('medium', function(){
				$('#secaoJogador').hide();
				$("#narrativa").hide();
				$('#secaoMestreJogadorEscolha').fadeIn('medium');
				$('#secaoMestreJogadorEscolha').show();
				$("#sera").fadeIn('fast');
			});
			$('#secaoMestre').hide();
		});

		$('#mostraSessãoInicialJogador').click(function(){
			$('#secaoMestre').fadeOut('medium', function(){
				$('#secaoMestre').hide();
				$("#jornada").hide();
				$('#secaoMestreJogadorEscolha').fadeIn('medium');
				$('#secaoMestreJogadorEscolha').show();
				$("#sera").fadeIn('fast');
			});
			$('#secaoJogador').hide();
		});
});
