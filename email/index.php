<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Teste</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
		<script>
        $(document).ready(function(){
            $("#contato").click(function(){
				
                var txt1 = $("#campo1").val();
                var txt2 = $("#campo2").val();
                var txt3 = $("#campo3").val();
                var txt4 = $("#campo4").val();

				//alert(txt1);

                $.post("envia.php", {campo1: txt1,campo2: txt2,campo3: txt3,campo4: txt4}, function(result){
                    $("#sucesso").html(result);
					
					$("#campo1").val("");
					$("#campo2").val("");
					$("#campo3").val("");
					$("#campo4").val("");
					
					
                });
            });
        });
        </script>
        
        
    </head>

    <body>

                                <p id="sucesso" class="content contact-text"></p>
                                    <input name="c0" type="hidden" value="Fale Conosco" />
                                    <input class="form-control" id="campo1" name="c1" placeholder="Seu nome" type="text"><br>
                                    <input class="form-control" id="campo2" name="c2" placeholder="Seu e-mail" type="text"><br>
                                    <input class="form-control" id="campo3" name="c3" placeholder="Seu telefone" type="text"><br>
                                    <textarea class="form-control" id="campo4" placeholder="Sua mensagem" name="c4"></textarea><br>
                                    <input id="contato" name="submit" value="Enviar Mensagem" type="button" class="small-button text-left">

    </body>
</html>