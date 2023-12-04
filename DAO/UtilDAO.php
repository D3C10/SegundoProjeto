<?php

    // Futuramente , aqui nesta Classe sera desenvolvido todo o processo de validação de sessoes , log do usuario e deslog !
    class UtilDAO{
        //public static function CodigoLogado()
        //{
        //  return 1; //Valor fixo por enquanto, simulando o usuario cod. logado 1 

        //1°: Inicializa a construção da Sessão de Usuario Logado!
        private static function IniciarSessao(){
            if (!isset($_SESSION)) {
                session_start();
            }
        }

        //2°: Esta Function vai chamar a function IniciarSessao para construir o log. 
        public static function CriarSessao($cod, $nome){
            //Comando self chama uma Funçao Estatica 
            self::IniciarSessao();

            //Comando que identifica o numero e o nome do usuario que esta realizando o acesso ao sistema 
            $_SESSION['cod'] = $cod;
            $_SESSION['nome'] = $nome;
        }

        //3°: Este processo chama a function anterior e identifica o NOME DO USUÁRIO que vai ser logado.
        public static function NomeLogado(){
            self::IniciarSessao();
            return $_SESSION['nome'];
        }

        //4°: Este processo chama a function anterior e identifica o ID que vai ser logado.
        public static function UsuarioLogado(){
            self::IniciarSessao();
            return $_SESSION['cod'];
        }

        //5°: Este processo destroi toda a permissao construida atraves das sessoes, removendo o Usuario da aplicação.
        public static function Deslogar(){
            self::IniciarSessao();

            unset($_SESSION['cod']);
            unset($_SESSION['nome']);

            header('location: login.php');
            exit;
        }

        //6°: Esta function realiza uma verificação se , existe dados do usuario na sessao, caso nao , retorna para a tela de login(index.php).
        public static function VerificarLogado(){
            self::IniciarSessao();

            if (!isset($_SESSION['cod']) || $_SESSION['cod'] == '') {
                header('location: index.php');
                exit;
            }
        }
    }
?>