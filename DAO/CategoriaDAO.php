<?php

    require_once 'Conexao.php';
    require_once 'UtilDAO.php';

    class CategoriaDAO extends Conexao{
        public function  CadastrarCategoria($nome){
            if(trim($nome) == ''){
                return 0;
            }else{
                //1°passo: Cria uma variavel que recebera o obj de conexao.
                $conexao = parent::retornarConexao();
                
                //2°passo: Criar uma variavel que recebera o texto do comando Sql que devera ser executado no BD.
                $comando_sql = 'insert into tb_categoria (nome_categoria, id_usuario) values(?, ?)';
                
                //3°passo: Criar um obj que sera configurado e levado no BD.
                $sql = new PDOStatement();  
                 
                //4°passo: Colocar dentro do obj $sql a conexão preparada para executar o comando_sql. 
                $sql = $conexao->prepare($comando_sql);
                 
                //5°passo: Verificar se  no comando_sql eu tenho o ? para ser configurado. Se tiver configurar os BindValues. 
                $sql->bindValue(1, $nome);
                $sql->bindValue(2, UtilDAO::UsuarioLogado());
         
                try{
                    //6°passo: Executar no banco de Dados. 
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                 }                
            }
        }

        public function ConsultarCategoria(){
            $conexao = parent::retornarConexao();
            
            $comando_sql = 'select id_categoria, nome_categoria from tb_categoria where id_usuario = ? order by nome_categoria ASC';
            
            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1,UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchAll();
        }

        public function DetalharCategoria($idCategoria){
            if($idCategoria ==''){
                return -1;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'select id_categoria,nome_categoria from tb_categoria where id_categoria = ? and id_usuario = ? ;';

                $sql = new PDOStatement();

                $sql = $conexao-> prepare($comando_sql);

                $sql-> bindValue(1, $idCategoria);
                $sql-> bindValue(2, UtilDAO::UsuarioLogado());
                $sql-> setFetchMode(PDO::FETCH_ASSOC);
                $sql->execute();
                return $sql-> fetchAll();

            }
        }

        public function AlterarCategoria($nomeCategoria,$idCategoria){
            if($nomeCategoria =='' || $idCategoria==''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'update tb_categoria set nome_categoria = ? where id_categoria = ? and id_usuario = ?;';

                $sql = new PDOStatement ();

                $sql = $conexao-> prepare($comando_sql);

                $sql-> bindValue(1, $nomeCategoria);
                $sql-> bindValue(2,$idCategoria);
                $sql-> bindValue(3,UtilDAO::UsuarioLogado());

                try{
                    $sql-> execute();
                    return 1;
                
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
           }
        }
   
        public function ExcluirCategoria($idCategoria){
            if($idCategoria==''){
                return -1;
            }else{
                $conexao = parent::retornarConexao();
                $comando_sql ='delete from tb_categoria where id_categoria = ? and id_usuario = ?;';

                $sql = new PDOStatement();

                $sql = $conexao-> prepare($comando_sql);
                $sql-> bindValue(1,$idCategoria);
                $sql-> bindValue(2,UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;

                }catch(Exception $ex){
                    return -4;
                }

            }
        }      
    }
?>