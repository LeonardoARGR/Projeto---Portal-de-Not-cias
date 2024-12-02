<?php
    session_start();
    // Verifica se o usuário está logado e se tem permissão para postar
    if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 1 || !isset($_COOKIE['user_tipo']) || $_COOKIE['user_tipo'] != 'autor' && $_COOKIE['user_tipo'] != 'revisor') {
        header('Location: index.php');
        exit();
    }
    //Verifica se os dados do formuário foram enviados
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $host = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $base = 'portal_bd';
        $conexao = mysqli_connect($host, $user, $pass, $base);

        $titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
        $conteudo = mysqli_real_escape_string($conexao, $_POST['conteudo']);
        $id_autor = $_COOKIE['user_id'];
        $imagem_caminho = null;
        $id_imagem = null;

        //Processa o upload da imagem
        if(isset($_FILES['imagem'])) {
            $diretorioDestino = 'src/'; //Pasta onde as imagens serão salvas
            $nomeOriginal = basename($_FILES['imagem']['name']); //Retorna o nome do arquivo
            $extensao = pathinfo($nomeOriginal, PATHINFO_EXTENSION); //Retorna a extensão do caminho
            $nomeUnico = uniqid('img_') . '.' . $extensao; // Gera um nome único para evitar conflitos
            $caminhoCompleto = $diretorioDestino . $nomeUnico;

            if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoCompleto)) {
                //Salvando a imagem e o caminho para ela para enviar ao banco
                $imagem_caminho = $caminhoCompleto;

                //Insere a imagem na tabela
                $sqlImagem = 'INSERT INTO imagem (caminho) VALUES ("'.$imagem_caminho.'")';
                mysqli_query($conexao, $sqlImagem);
                $id_imagem = mysqli_insert_id($conexao); //Recupera o último ID autoincrementado
            } else {
                // Mostra um erro se não foi possível mover o arquivo
                echo "Erro ao mover o arquivo para o diretório de destino.";
            }
        }

        //Insere na tabela de notícias
        $sqlNoticia = 'INSERT INTO noticia (titulo, conteudo, id_imagem, status, id_autor) VALUES ("'.$titulo.'","'.$conteudo.'","'.$id_imagem.'","Em espera","'.$id_autor.'")';
        mysqli_query($conexao, $sqlNoticia);
        
        mysqli_close($conexao);
        header('Location: user_dados.php');

    }else {
        header('Location: index.php');
    }


?>