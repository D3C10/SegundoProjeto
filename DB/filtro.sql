-- Correção da Tarefa --

select * from tb_movimento where tipo_movimento = 1;

select * from tb_movimento where tipo_movimento = 2;

select nome_usuario, data_cadastro
	from tb_usuario
where nome_usuario like '%a%';

select nome_usuario, data_cadastro
	from tb_usuario
where nome_usuario like 'b%';

select nome_usuario, data_cadastro
	from tb_usuario
where nome_usuario like '%d%';

select * from tb_usuario where data_cadastro between '2022-01-01' and '2023-02-08';

select nome_usuario, nome_categoria
	from tb_usuario as US
inner join tb_categoria as CT 
	on CT.id_usuario = US.id_usuario;
    
select nome_categoria, nome_usuario
	from tb_usuario as US
inner join tb_categoria as CT
	on CT.id_usuario = US.id_usuario;
    
select nome_usuario,email_usuario,banco_conta, numero_conta,saldo_conta
	from tb_usuario as US
inner join tb_conta as TC
	on tc.id_usuario = US.id_usuario;
    
select nome_usuario,nome_categoria,nome_empresa,tipo_movimento,data_movimento,valor_movimento
	from tb_usuario
inner join tb_categoria
	on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_empresa
	on tb_empresa.id_usuario = tb_usuario.id_usuario;

select nome_usuario, nome_categoria, nome_empresa, saldo_conta,tipo_movimento, data_movimento,valor_movimento
	from tb_usuario
inner join tb_categoria
	on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_empresa
	on tb_empresa.id_usuario = tb_usuario.id_usuario
inner join tb_conta
	on tb_conta.id_usuario = tb_usuario.id_usuario
inner join tb_movimento
	on tb_movimento.id_usuario = tb_usuario.id_usuario;
    
select 	nome_usuario,
		email_usuario,
        senha_usuario,
        data_cadastro,
        nome_categoria,
        nome_empresa,
        telefone_empresa,
        endereco_empresa,
        banco_conta,
        agencia_conta,
        numero_conta,
        saldo_conta,
        tipo_movimento,
        data_movimento,
        valor_movimento,
        obs_movimento
        
		from tb_usuario
inner join tb_categoria
		on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_empresa
		on tb_empresa.id_usuario = tb_usuario.id_usuario
inner join tb_conta
	on tb_conta.id_usuario = tb_usuario.id_usuario
inner join tb_movimento 
	on tb_movimento.id_usuario = tb_usuario. id_usuario;
    
select * from tb_usuario, tb_categoria, tb_empresa, tb_conta, tb_movimento



--FILTRO no SQL--

--FILTRO  com todos os usuarios que tiverem a letra o --

select nome_usuario, data_cadastro
	from tb_usuario
where nome_usuario like '%o%';

--FILTRO com todos os usuarios que tiverem a letra c --

select nome_usuario, data_cadastro
	from tb_usuario
where nome_usuario like '%c%';

--FILTRO com todos os usuarios que tiverem a letra r--

select nome_usuario, data_cadastro
	from tb_usuario
where nome_usuario like '%r%';


--Filtro de DATAS--

select nome_usuario, data_cadastro
	from tb_usuario
where data_cadastro between  '2021-04-08' and '2021-04-16';

--Filtro de Dados de Usuario--

select banco_conta, agencia_conta, saldo_conta
	from tb_conta
    where id_usuario = 1;
    
select banco_conta, agencia_conta,saldo_conta
	from tb_conta
    where id_usuario = 2;

--Filtro do Tipo de Movimento Realizado--

select tipo_movimento,
		data_movimento,
        valor_movimento,
        nome_categoria,
        nome_empresa,
        nome_usuario,
        banco_conta
        
	from tb_movimento
inner join tb_categoria
	on tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_empresa
		on tb_empresa.id_empresa = tb_movimento.id_empresa
inner join tb_usuario
	on tb_usuario.id_usuario = tb_movimento. id_usuario
inner join tb_conta
	on tb_conta.id_conta = tb_movimento.id_conta
	where tb_movimento.tipo_movimento = 1;
	
select tipo_movimento,
		data_movimento,
        valor_movimento,
        nome_categoria,
        nome_empresa,
        nome_usuario,
        banco_conta
		from tb_movimento
inner join tb_categoria
	on tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_empresa
	on tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_usuario
	on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
		on tb_conta.id_conta = tb_movimento.id_conta
where tb_movimento.tipo_movimento = 2;

--Y maiusculo, retorna os 4 digitos do ano 
-- y minusculo , retorna apenas 2 digitos do ano 
-- Comando SQL AS significa dar um apelido para algum item do codigos

select tipo_movimento
	date_format(data_movimento, "%d/%m/%Y") as data_movimento,
    
    valor_movimento,
    nome_categoria,
    nome_empresa,
    nome_usuario,
    banco_conta,
    obs_movimento,
	from tb_movimento
inner join tb_categoria
	on tb_categoria.id_categoria = tb_movimento.id_categoria
inner join tb_empresa
	on tb_empresa.id_empresa = tb_movimento.id_empresa
inner join tb_usuario
	on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
	on tb_conta.id_conta = tb_movimento.id_conta
    where tb_movimento.obs_movimento is not null
    
    
select tipo_movimento,
		data_movimento,
        valor_movimento,
        nome_categoria,
        nome_empresa,
        nome_usuario,
        banco_conta
	from tb_movimento
    
inner join tb_categoria
	on tb_categoria.id_categoria = tb_movimento. id_categoria
inner join tb_empresa
	on tb_empresa.id_empresa = tb_movimento.id_usuario
inner join tb_conta
	on tb_conta.id_conta = tb_movimento.id_conta
where tb_movimento.tipo_movimento = 2 
and tb_movimento.valor_movimento > 50;

select tipo_movimento,
		data_movimento,
        valor_movimento, 
        nome_categoria,
        nome_empresa, 
        nome_usuario,
        banco_conta
from tb_movimento

inner join tb_categoria
		on tb_categoria.id_categoria = tb_movimento.id_categoria 
inner join tb_empresa
	on tb_empresa.id_empresa = tb_movimento.id_empresa
inner join tb_usuario 
	on tb_usuario.id_usuario = tb_movimento.id_usuario
inner join tb_conta
	on tb_conta.id_conta = tb_movimento.id_conta
    where tb_movimento.id_usuario = 1;
    
--Comando SQL SUM soma os dados de tabelas 
-- Comando SQL  AS  da um apelido para algum item 

select sum(valor_movimento) as Total
from tb_movimento
where tipo_movimento = 2;

select sum(valor_movimento) as Total
	from tb_movimento
where tipo_movimento = 2 
and id_usuario = 2;


-- Utilizando o comando SQL INNER JOIN
--Exer 1 
select nome_usuario, nome_categoria
	from tb_usuario
inner join tb_categoria
	on tb_usuario.id_usuario = tb_categoria. id_categoria;
    
--Exer 2 
select nome_usuario, nome_empresa, telefone_empresa,endereco_empresa
	from tb_usuario
inner join tb_empresa
	on tb_usuario.id_usuario = tb_empresa.id_empresa;
    
--Exer 3 
	select nome_usuario, email_usuario, banco_conta, saldo_conta,numero_conta
    from tb_usuario
inner join tb_conta
	on tb_usuario.id_usuario = tb_conta.id_conta;
    
--Exer 4 
	select data_movimento, tipo_movimento,valor_movimento,nome_usuario
		from tb_movimento
	inner join tb_usuario
		on tb_movimento.id_movimento = tb_usuario.id_usuario;
        
--Exer 5 
	select data_movimento, tipo_movimento,valor_movimento, nome_usuario, nome_categoria
		from tb_movimento
inner join tb_usuario
	on tb_movimento.id_movimento = tb_usuario.id_usuario
    inner join tb_categoria
		on tb_categoria.id_categoria = tb_movimento.id_movimento;
        
--Exer 6 
	select nome_categoria, nome_empresa, nome_usuario, email_usuario, data_movimento, valor_movimento,
		from tb_categoria
inner join tb_usuario
	on tb_categoria.id categoria = tb_usuario.id_usuario
inner join tb_empresa
	on tb_empresa.id_empresa = tb_usuario.id_usuario
inner join tb_movimento
	on tb_movimento.id_movimento = tb_usuario. id_usuario;
    
--Exer 7 

select banco_conta, numero_conta,nome_categoria, nome_empresa, nome_usuario,data_movimento,valor_movimento
from tb_conta
inner join tb_usuario
	on tb_conta.id_conta = tb_usuario.id_usuario
inner join tb_empresa
	on tb_empresa.id_empresa = tb_usuario.id_usuario
inner join tb_movimento
on tb_movimento.id_movimento = tb_usuario.id_usuario;

--Utilizando o comando SQL WHERE (filtro)

--Exer 1
select nome_usuario, nome_categoria
from tb_usuario
inner join tb_categoria
on tb_usuario.id_usuario = tb_categoria.id_categoria
where nome_usuario like '%a%';

--Exer 2 
select nome_usuario, nome_categoria
	from tb_categoria
inner join tb_usuario
	on tb_categoria.id_usuario = tb_usuario.id_usuario
where tb_categoria.id_usuario = 1 ;

--Exer 3 

select nome_categoria, nome_empresa,nome_usuario, data_movimento,valor_movimento,tipo_movimento
	from tb_movimento
inner join tb_usuario
	on tb_movimento.id_usuario = tb_usuario.id_usuario
inner join tb_categoria
	on tb_movimento. id_categoria = tb_categoria.id_categoria
inner join tb_empresa
	on tb_movimento.id_empresa = tb_empresa.id_empresa
    --where tb_movimento.tipo_movimento in (1,2);
    where tb_movimento.tipo_movimento = 1;





        
        



























        
        