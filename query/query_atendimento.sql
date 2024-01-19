CREATE DATABASE atendimento;

CREATE TABLE tb_tipos_atendimento (
  ta_id           VARCHAR(4)   NOT NULL,
  cv_id           INTEGER      NOT NULL,
  ta_descricao    VARCHAR(40)  NOT NULL,
  ta_ativo        VARCHAR(1)   DEFAULT 'S',
  CONSTRAINT tb_tipos_atendimento_pk PRIMARY KEY(ta_id, cv_id)
);

INSERT INTO tb_tipos_atendimento (ta_id, cv_id, ta_descricao, ta_ativo) VALUES ('ME', 100, 'Atendimento médico', 'S');
INSERT INTO tb_tipos_atendimento (ta_id, cv_id, ta_descricao, ta_ativo) VALUES ('CX', 100, 'Atendimento Caixa', 'S');
INSERT INTO tb_tipos_atendimento (ta_id, cv_id, ta_descricao, ta_ativo) VALUES ('AT', 100, 'Atendimento/Administrativo', 'S');
INSERT INTO tb_tipos_atendimento (ta_id, cv_id, ta_descricao, ta_ativo) VALUES ('LB', 100, 'Laboratório', 'S');