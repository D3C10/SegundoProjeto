-- Script SQL de Cadastro (Create).
insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Ana Maria', 'ana.maria@gmail.com', 'ana321', '2023-09-11');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Carlos André', 'carlinhos@gmail.com','carlo3', '2023-09-11');

insert into tb_usuario
(nome_usuario,email_usuario, senha_usuario, data_cadastro)
values
('Gabriela Almeida', 'gabi@gmail.com', 'gabi', '2023-09-12');

insert into tb_usuario
(nome_usuario, email_usuario,senha_usuario, data_cadastro)
values
('Junior Falcao', 'junin@gmail.com', 'juni', '2023-09-13');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Decio Ferreira','decio@gmail.com', 'decio012', '2023-09-14');

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 1);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Faculdade',1);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Casa dos Prazeres', 1);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Energia',1);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Viagem', 2);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Remedios', 2);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Farmacia',2);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Escola',2);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('luz',6);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Água',6);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Internet',6);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Reforma',6);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Mercado',7);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Bebidas',7);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Festa',7);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Cartao Credito',7);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Farinha',8);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Ovos',8);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Sorvete',8);

insert into tb_categoria
(nome_categoria,id_usuario)
values
('Padaria',8);


insert into tb_conta
(banco_conta,agencia_conta,numero_conta,saldo_conta,id_usuario)
values
('Banco do Brasil','2245','22344',450.00,1);

insert into tb_conta
(banco_conta,agencia_conta,numero_conta,saldo_conta,id_usuario)
values
('Caixa Economica Federal','3341','22431',350.00,2);

insert into tb_conta
(banco_conta,agencia_conta,numero_conta,saldo_conta,id_usuario)
values
('Banco Mercantil do Brasil','5522','4426',960.58,6);

insert into tb_conta
(banco_conta,agencia_conta,numero_conta,saldo_conta,id_usuario)
values
('Banco Itau do Brasil','7756','64467',630.00,6);

insert into tb_conta
(banco_conta,agencia_conta,numero_conta,saldo_conta,id_usuario)
values
('Banco HSBC','2255','123654',600.00,7);

insert into tb_conta
(banco_conta,agencia_conta,numero_conta,saldo_conta,id_usuario)
values
('Banco Citibank', '3344','116246',230.48,7);

insert into tb_conta
(banco_conta,agencia_conta,numero_conta,saldo_conta,id_usuario)
values
('Banco Rural S.A','9933','232556',6.000,8);

insert into tb_conta
(banco_conta,agencia_conta,numero_conta,saldo_conta,id_usuario)
values
('Banco Real','8854','66452','77896',7.0,8);


insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Aninha auto elétrica','43334452','Rua das Goiabas',1);

insert into tb_empresa 
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Padaria da Ana','439985324','Rua das Macas',1);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Mercadinho da Ana','43325555','Rua dos Mamao',1);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Lojas da Ana','43965643','Rua das Velas',1);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Cantinho Gourmet','433164244','Rua dos Violentos', 2);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Restaurante Mineiro','439972345','Avenida Tamoios',2);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Casa do Ferreiro','43372892','Avenida Soho Soiti',2);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Supermercado','43365894','Rua Jandira',2);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Portao do Gas','43978564','Rua Cisne',6);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Mercadinho da gabi','43921789','Rua Pitomba',6);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Gabi das Chaves','439946264','Rua Dos Alambrados',6);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Gabi Entretenimento','4398734','Rua Evangelista',6);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Posto de Combustivel','4332465','Avenida Trancoso',7);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Casa de Carnes','43361578','Avenida Tupinamba',7);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Açougue do Gordo','43333','Avenida Calango',7);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Casa do Ferreiro','4322325','Rua Celibato',7);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Eletrica Gonçalo','43322546','Rua Catequese',8);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Dixie Toga','4332567','Avenida Central',8);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Astutilog','43994321','Rua Cantao',8);

insert into tb_empresa
(nome_empresa,telefone_empresa,endereco_empresa,id_usuario)
values
('Atos','43997851','Shopping Boulevard',8);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-09-19',45, null, 1,1,2,1);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-10-05',34.12,'Pagamento atrasado',2,2,3,2);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-11-29',600.48,'Pagamento em haver',3,3,5,1);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-12-25',300.00,'Pagamento efetuado',3,3,5,1);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-05-15',690.00,'Pagamento em haver',4,1,6,1);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-06-19',200.00,'Pagamento atrasado',7,4,8,2);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-02-06-',390.58,'Pagamento Efetuado',8,4,9,2);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-03-23',200.00,'Pagamento em Haver',9,2,10,2);

insert into tb_movimento 
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-01-12',600.00,'Pagamento em Haver',14,9,46,6);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-12-14',300.00,'Pagamento efetuado',15,10,47,6);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-04-15',250.00,'Pagamento atrasado',16,10,48,6);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-08-03',150.00,'Pagamento Efetuado',17,9,49,6);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-09-18',650.00,'Pagamento Atrasado',18,11,50,7);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-12-23',830.00,'Pagamento Atrasado',19,12,51,7);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-09-03',330.00,'Pagamento Efetuado',20,11,52,7);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-05-19',200.00,'Pagamento Atrasado',21,12,53,7);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-04-13',23.00,'Pagamento Efetuado',22,13,54,8);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(1,'2023-10-16',160.00,'Pagamento Efetuado',23,13,55,8);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-03-19',690.00,'Pagamento Atrasado',24,13,56,8);

insert into tb_movimento
(tipo_movimento,data_movimento,valor_movimento,obs_movimento,id_empresa,id_conta,id_categoria,id_usuario)
values
(2,'2023-11-14',350.00,'Pagamento Efetuado',25,13,57,8);

