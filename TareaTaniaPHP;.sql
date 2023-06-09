CREATE DATABASE TareaTaniaPHP;
use TareaTaniaPHP;
CREATE TABLE proyecto (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    NombreProyecto VARCHAR(150) NOT NULL,
    fuenteFondos VARCHAR(150) NOT NULL,
    MontoPlanificado DECIMAL(16, 6) NOT NULL,
    MontoPatrocinado DECIMAL(16, 6) NOT NULL,
    MontoFondosPropios DECIMAL(16, 6) NOT NULL
);
