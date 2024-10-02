<head>
    <style>
        .txtbox{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            width: 300px;
        }
        .txtbox label{
            display: inline-block;
            width: 150px;
            text-align: left;
        }

        .txtbox input{
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
    </style>




</head>
    <div class="txtbox">
    <form action="faleconosco.php" method="get">
        <label for="nome">Insira o seu nome:</label>
        <input type="text" name="nome"><br>

        <label for="email">Insira seu email:</label>
        <input type="text" name="email"><br>
        
        <label for="msg">Insira sua mensagem:</label>
        <input type="text" name="msg">
        
        <input type="submit">
    </form>
    </div>

<?php
   

    if(isset($_GET['nome']) && isset ($_GET['email']) && isset( $_GET['msg'])){

        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $msg = $_GET['msg'];

        $arquivo = fopen("faleconosco.txt", "w");

        fwrite($arquivo,("Nome: $nome \n Email: $email \n Mensagem: $msg"));
    
        echo "Sua mensagem foi repassada \n <br>";

       
        
    }
    else{

        echo "Escreva sua mensagem!!!";
        

    }


    #Oii, porfessor. Tá aparecendo o Warning como variavéis não definidas, mas eu não soube como resolver
