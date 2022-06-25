
<?php
    
 $captcha = $_POST['g-recaptcha-response'];
    
 if($captcha != ''){
    
    $secreto = '6LeCJLsdAAAAAPUfcEVmQZY8grA_kwe40QzZ2JhS';
    
    $ip      = $_SERVER['REMOTE_ADDR'];
    
    $var     = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secreto&response=$captcha&remoteip=$ip");
    
    $resposta = json_decode($var, true);
    
    if($resposta['success']){
    
   
    
    $destino = 'isaacuchoa@gmail.com';
    $nome = $_POST["nome"];
    $email = $_POST["email"];   
    $assunto = $_POST["assunto"];
    $mensagem= $_POST["mensagem"];

    $resposta = mail("$destino", "$assunto - $nome", "Nome: $nome
    Assunto: $assunto  
    Email: $email
    Mensagem: $mensagem");
    if ($resposta == 1){
    echo "<script>

    alert('Mensagem enviada com sucesso! Em breve estaremos respondendo.');
    window.location.href = 'http://www.datai.com.br';

    </script>";
    }else{
    echo "<script>alert('Não foi possível enviar o contato, gentileza tentar novamente.');history.go(-1) </script>";
    }
    
    }else{
    
     echo  "<script> 
        alert('A verificação não foi autenticada, gentileza tentar novamente');
        window.location.href = 'http://www.datai.com.br'; 
       </script>";
    }
    
 }else{
    
    echo  "<script> 
        alert('Você não selecionou o Recaptcha, gentileza tentar novamente'); 
        window.location.href = 'http://www.datai.com.br'; 
       </script>";
    
 }
    
 ?>