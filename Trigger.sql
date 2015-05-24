-- TRIGGER PARA CALCULAR HORAS DE SERVICIO
CREATE TRIGGER `calcularHrsServicio` BEFORE INSERT ON `usos`
 FOR EACH ROW SET new.horas_servicio = new.cantidad_horas * new.cantidad_usuarios