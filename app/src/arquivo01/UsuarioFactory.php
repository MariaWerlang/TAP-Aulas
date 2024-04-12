<?php 

    namespace App\src\arquivo01;

    use App\src\arquivo01\UsuarioInterface;
    use App\src\arquivo01\Professor;
    use App\src\arquivo01\Administrador;
    use App\src\arquivo01\AdministradorSupremo;
    use Exception;

    class UsuarioFactory {
        public static function criar(string $perfil): UsuarioInterface {
            switch ($perfil) {
                case 'professor':
                    return new Professor();
                case 'administrador':
                    return new Administrador();
                case 'administrador_supremo':
                    return new AdministradorSupremo();
                default:
                    throw new Exception('Perfil inválido');
            }
        }
    }