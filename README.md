# Instalación Proeyecto Prueba Técnica

* Pasos Montar el Proyecto:
    * Ejecutar comando composer install (en caso de descargar los vendor ejecutar composer update).
    * Intalar módulo (Calculadora)
    * configurar el bloque (Calculadora) admin/structure/block
        *Región: Content
* Pasos para ejecutar Pruebas Unitarias
    * Ubicados en le directorio raíz del proyecto, correr el siguiente comando: vendor/bin/phpunit -c web/core/phpunit.xml.dist web/modules/calculadora
