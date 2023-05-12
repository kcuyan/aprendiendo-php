CREATE TABLE usuarios (
    idusr                           INTEGER(15)         NOT NULL
  , Usuario                         VARCHAR(20)         DEFAULT 'NULL'         NOT NULL
  , Nombres                         VARCHAR(20)         DEFAULT 'NULL'         NOT NULL
  , Apellidos                       VARCHAR(20)         DEFAULT 'NULL'         NOT NULL
  , Empresa                        VARCHAR(20)         DEFAULT 'NULL'         NOT NULL
  , Sucursal                        VARCHAR(20)         DEFAULT 'NULL'         NOT NULL
  , Departamento                    VARCHAR(20)         DEFAULT 'NULL'         NOT NULL
  , Puesto                         VARCHAR(20)         DEFAULT 'NULL'         NOT NULL
  , CodEmpleado                     INTEGER(10)         NOT NULL
  , Correo                          VARCHAR(20)         DEFAULT 'NULL'         NOT NULL
  , CONSTRAINT PK_usuarios PRIMARY KEY ( idusr )
)ENGINE=InnoDb;
